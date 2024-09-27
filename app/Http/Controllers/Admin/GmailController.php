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
 /**
     * Fetch and display sales emails.
     */
    public function getSalesEmails()
    {
        $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
        $username = env('SALES_IMAP_EMAIL');
        $password = env('SALES_IMAP_PASSWORD');

        // Open IMAP connection
        $inbox = @imap_open($hostname, $username, $password);

        if (!$inbox) {
            return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
        }

        // Limit to 25 emails per request
        $limit = 25;
        $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');

        if (!$emails) {
            imap_close($inbox);
            return view('admin.gmail.sales-emails', ['messages' => []]);
        }

        // Sort emails in reverse order and limit the result
        rsort($emails);
        $emails = array_slice($emails, 0, $limit);

        $messages = $this->processEmails($emails, $inbox);

        imap_close($inbox);

        return view('admin.gmail.sales-emails', ['messages' => $messages]);
    }

    /**
     * Fetch emails by specific category (Inbox, Starred, Important, Draft, Sent, Trash).
     */
    public function getEmailsByCategory($category)
    {
        $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
        $username = env('SUPPORT_IMAP_EMAIL');
        $password = env('SUPPORT_IMAP_PASSWORD');

        // Open IMAP connection
        $inbox = @imap_open($hostname, $username, $password);

        if (!$inbox) {
            return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
        }

        // Search criteria based on the category
        $criteria = $this->getCategorySearchCriteria($category);
        $emails = imap_search($inbox, $criteria);

        if (!$emails) {
            imap_close($inbox);
            return view('admin.gmail.support-emails', ['messages' => []]);
        }

        $messages = $this->processEmails($emails, $inbox);

        imap_close($inbox);

        return view('admin.gmail.support-emails', compact('messages'));
    }

    /**
     * Get IMAP search criteria based on the selected category.
     */
    private function getCategorySearchCriteria($category)
    {
        switch ($category) {
            case 'inbox':
                return 'ALL';
            case 'starred':
                return 'FLAGGED';
            case 'important':
                return 'KEYWORD "important"';
            case 'draft':
                return 'DRAFT';
            case 'sent':
                return 'SENT';
            case 'trash':
                return 'DELETED';
            default:
                return 'ALL';
        }
    }

    /**
     * Process and decode fetched emails.
     */
    private function processEmails($emails, $inbox)
    {
        $messages = [];
    
        if ($emails) {
            // Sort in reverse order
            rsort($emails); 
    
            foreach ($emails as $email_number) {
                // Check if the email number is valid
                if (!is_int($email_number) || $email_number <= 0) {
                    continue; // Skip invalid email numbers
                }
    
                // Fetch overview and check if it's valid
                $overview = imap_fetch_overview($inbox, $email_number, 0);
                if (empty($overview)) {
                    continue; // Skip if no overview found
                }
    
                $structure = imap_fetchstructure($inbox, $email_number);
                if (!$structure) {
                    continue; // Skip if no structure found
                }
    
                $partNumber = $this->getMessagePart($structure);
    
                // Fetch and decode the message body
                $message = imap_fetchbody($inbox, $email_number, $partNumber);
                $message = $this->decodeMessage($message, $structure->encoding);
    
                // Convert to UTF-8
                $message = mb_convert_encoding($message, 'UTF-8', 'auto');
    
                // Add to messages array
                $messages[] = [
                    'subject' => imap_utf8($overview[0]->subject),
                    'from'    => $overview[0]->from,
                    'date'    => $overview[0]->date,
                    'message' => $message,
                ];
            }
        }
    
        return $messages;
    }
    

    /**
     * Get the correct message part (plain text or HTML).
     */
    private function getMessagePart($structure)
    {
        $partNumber = 1; // Default part
        if (isset($structure->parts) && count($structure->parts)) {
            foreach ($structure->parts as $index => $part) {
                if ($part->subtype == 'HTML') {
                    return $index + 1; // HTML part
                } elseif ($part->subtype == 'PLAIN') {
                    $partNumber = $index + 1; // Plain text part
                }
            }
        }
        return $partNumber;
    }

    /**
     * Decode the email message based on encoding type.
     */
    private function decodeMessage($message, $encoding)
    {
        switch ($encoding) {
            case 3: // Base64
                return base64_decode($message);
            case 4: // Quoted-Printable
                return quoted_printable_decode($message);
            case 1: // 8bit
                return imap_utf8($message);
            case 0: // 7bit
                return imap_qprint($message);
            default:
                return $message;
        }
    }
    
    public function getMoreSalesEmails(Request $request)
    {
            $limit = 25; // Number of emails to fetch per request
            $offset = $request->input('offset', 0);
    
            $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
            $username = env('SALES_IMAP_EMAIL');
            $password = env('SALES_IMAP_PASSWORD');
    
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

    public function showEmail($subject)
    {
        // IMAP settings
        $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
        $username = env('SALES_IMAP_EMAIL');
        $password = env('SALES_IMAP_PASSWORD');
    
        // Open the inbox connection
        $inbox = @imap_open($hostname, $username, $password);
        if (!$inbox) {
            return redirect()->route('gmail')->with('error', 'Cannot connect to Gmail: ' . imap_last_error());
        }
    
        // Search for emails by subject
        $emails = imap_search($inbox, 'SUBJECT "' . addslashes($subject) . '"', SE_UID, 'UTF-8');
    
        // Check if any emails were found
        if (!$emails || empty($emails)) {
            imap_close($inbox);
            return redirect()->route('gmail')->with('error', 'Email not found.');
        }
    
        // You might want to limit to the first email found, or handle multiple
        $processedEmails = $this->processEmails([$emails[0]], $inbox); // Get the first email with the matching subject
    
        // Close the inbox connection
        imap_close($inbox);
    
        // Ensure there is at least one processed email
        if (empty($processedEmails)) {
            return redirect()->route('gmail')->with('error', 'Email processing failed.');
        }
    
        // Get the first (and only) processed email
        $email = $processedEmails[0];
    
        // Return the view with the email data
        return view('admin.gmail.email-details', compact('email'));
    }
    
    
    
    
    public function getSupportEmails(Request $request)
    {
        $filter = $request->input('filter', 'inbox'); // Default to inbox if no filter is provided
        $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
        $username = env('SUPPORT_IMAP_EMAIL');
        $password = env('SUPPORT_IMAP_PASSWORD');
    
        $inbox = @imap_open($hostname, $username, $password);
        if (!$inbox) {
            return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
        }
    
    // Apply filter for different email categories
    switch ($filter) {
        case 'starred':
            $emails = imap_search($inbox, 'FLAGGED', SE_UID, 'UTF-8');
            break;
        // case 'unread':
        //     // Fetch only unread emails
        //     $emails = imap_search($inbox, 'UNSEEN', SE_UID, 'UTF-8');
        //     break;
        // case 'important':
        //     $emails = imap_search($inbox, 'important', SE_UID, 'UTF-8');
        //     break;
        // case 'draft':
        //     $emails = imap_search($inbox, 'DRAFT', SE_UID, 'UTF-8');
        //     break;
        // case 'sent':
        //     imap_reopen($inbox, $hostname . 'Sent', CL_EXPUNGE);
        //     $emails = imap_search($inbox, 'SENT', SE_UID, 'UTF-8');
        //     break;
        // case 'trash':
        //     $emails = imap_search($inbox, 'DELETED', SE_UID, 'UTF-8');
        //     break;
        default:
            $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
            break;
    }

        $limit = 25; // Number of emails to fetch per request
     //   $emails = imap_search($inbox, $searchCriteria, SE_UID, 'UTF-8');
        if (!$emails) {
            imap_close($inbox);
            return view('admin.gmail.support-emails', ['messages' => []]);
        }
    
        
       // dd($emails);
       
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
        
            // Add the message to the messages array with the email ID
            $messages[] = [
                'id' => $email_number, // Use $email_number as the unique ID
               // 'uid' => $emails[$index],
               // 'difference' => $email_number - $emails[$email_number]+$index, // Calculate the difference
               'subject' => $subject,
               'from' => $from,
               'date' => $date,
               'message' => $message,
            ];
        }
  //  dd($messages,$emails);
        imap_close($inbox);
    
        return view('admin.gmail.support-emails', [
            'messages' => $messages,
        ]);
    }
    

    public function getMoreSupportEmails(Request $request)
    {
        $limit = 25; // Number of emails to fetch per request
        $offset = $request->input('offset', 0);
        
        // Fetch filter parameters from the request
        $filter = $request->input('filter', 'all'); // Default to 'all' if not specified
    
        $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
        $username = env('SUPPORT_IMAP_EMAIL');
        $password = env('SUPPORT_IMAP_PASSWORD');
    
        $inbox = @imap_open($hostname, $username, $password);
    
        if (!$inbox) {
            return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
        }
    
        // Apply filter for different email categories
        switch ($filter) {
            case 'starred':
                $emails = imap_search($inbox, 'FLAGGED', SE_UID, 'UTF-8');
                break;
            case 'important':
                $emails = imap_search($inbox, 'KEYWORD "Important"', SE_UID, 'UTF-8');
                break;
            case 'draft':
                $emails = imap_search($inbox, 'DRAFT', SE_UID, 'UTF-8');
                break;
            case 'sent':
                $emails = imap_search($inbox, 'SENT', SE_UID, 'UTF-8');
                break;
            case 'trash':
                $emails = imap_search($inbox, 'DELETED', SE_UID, 'UTF-8');
                break;
            default:
                $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
                break;
        }
    
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
    
}
