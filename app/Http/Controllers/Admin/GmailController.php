<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Gmail;

class GmailController extends Controller
{
    public function getEmails()
    {
        $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
        $username = env('IMAP_EMAIL');
        $password = env('IMAP_PASSWORD');

        $inbox = @imap_open($hostname, $username, $password);
        if (!$inbox) {
            return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
        }

        $limit = 25; // Number of emails to fetch per request
        $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
        if (!$emails) {
            imap_close($inbox);
            return view('admin.gmail.index', ['messages' => []]);
        }

        rsort($emails);
        $emails = array_slice($emails, 0, $limit);

        $messages = [];
        foreach ($emails as $email_number) {
            $overview = imap_fetch_overview($inbox, $email_number, 0);
            if (!$overview) continue;

            $subject = imap_utf8($overview[0]->subject);
            $from = $overview[0]->from;
            $date = $overview[0]->date;

            // Fetch the email structure
            $structure = imap_fetchstructure($inbox, $email_number);
            $partNumber = 1; // Default to part 1 (usually plain text)
            $hasHtml = false; // Flag to check if HTML part is available

            // If the email has multiple parts, find the plain text or HTML part
            if (isset($structure->parts) && count($structure->parts)) {
                foreach ($structure->parts as $index => $part) {
                    if ($part->subtype == 'HTML') {
                        $partNumber = $index + 1; // HTML part
                        $hasHtml = true;
                        break;
                    } elseif ($part->subtype == 'PLAIN') {
                        $partNumber = $index + 1; // Plain text part
                    }
                }
            }

            // Fetch and decode the message body
            $message = imap_fetchbody($inbox, $email_number, $partNumber);

            // Handle different encoding types
            if ($structure->encoding == 3) { // Base64
                $message = base64_decode($message);
            } elseif ($structure->encoding == 4) { // Quoted-Printable
                $message = quoted_printable_decode($message);
            } elseif ($structure->encoding == 1) { // 8bit
                $message = imap_utf8($message);
            } elseif ($structure->encoding == 0) { // 7bit
                $message = imap_qprint($message); // Optionally handle 7bit encoding
            }

            // Convert message to UTF-8 if necessary
            $message = mb_convert_encoding($message, 'UTF-8', 'auto');

            // Add the message to the messages array
            $messages[] = [
                'subject' => $subject,
                'from' => $from,
                'date' => $date,
                'message' => $message,
            ];
        }

        imap_close($inbox);

        return view('admin.gmail.index', ['messages' => $messages]);
    }

    public function getMoreEmails(Request $request)
    {
        $limit = 25; // Number of emails to fetch per request
        $offset = $request->input('offset', 0);

        $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
        $username = env('IMAP_EMAIL');
        $password = env('IMAP_PASSWORD');
        $inbox = @imap_open($hostname, $username, $password);

        if (!$inbox) {
            return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
        }

        $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
        if (!$emails) {
            imap_close($inbox);
            return response()->json(['emails' => [], 'nextOffset' => $offset]);
        }

        rsort($emails);
        $emails = array_slice($emails, $offset, $limit);

        $messages = [];
        foreach ($emails as $email_number) {
            $overview = imap_fetch_overview($inbox, $email_number, 0);
            if (!$overview) continue;

            $subject = imap_utf8($overview[0]->subject);
            $from = $overview[0]->from;
            $date = $overview[0]->date;

            // Fetch the email structure
            $structure = imap_fetchstructure($inbox, $email_number);
            $partNumber = 1; // Default to part 1 (usually plain text)
            $hasHtml = false; // Flag to check if HTML part is available

            // If the email has multiple parts, find the plain text or HTML part
            if (isset($structure->parts) && count($structure->parts)) {
                foreach ($structure->parts as $index => $part) {
                    if ($part->subtype == 'HTML') {
                        $partNumber = $index + 1; // HTML part
                        $hasHtml = true;
                        break;
                    } elseif ($part->subtype == 'PLAIN') {
                        $partNumber = $index + 1; // Plain text part
                    }
                }
            }

            // Fetch and decode the message body
            $message = imap_fetchbody($inbox, $email_number, $partNumber);

            // Handle different encoding types
            if ($structure->encoding == 3) { // Base64
                $message = base64_decode($message);
            } elseif ($structure->encoding == 4) { // Quoted-Printable
                $message = quoted_printable_decode($message);
            } elseif ($structure->encoding == 1) { // 8bit
                $message = imap_utf8($message);
            } elseif ($structure->encoding == 0) { // 7bit
                $message = imap_qprint($message); // Optionally handle 7bit encoding
            }

            // Convert message to UTF-8 if necessary
            $message = mb_convert_encoding($message, 'UTF-8', 'auto');

            // Add the message to the messages array
            $messages[] = [
                'subject' => $subject,
                'from' => $from,
                'date' => $date,
                'message' => $message,
            ];
        }

        imap_close($inbox);

        return response()->json(['emails' => $messages, 'nextOffset' => $offset + $limit]);
    }

    public function compose()
    {
        return view('admin.gmail.compose');
    }

    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'recipient_email' => 'required|string|email',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Mail::to($request->recipient_email)->send(new Gmail($request->subject, $request->body));

        return redirect()->route('gmail')->with('success', 'Mail sent successfully!');
    }


}
