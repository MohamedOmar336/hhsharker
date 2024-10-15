<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Gmail;


class GmailController extends Controller
{
//     public function getEmails()
//     {
//         $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
//         $username = env('IMAP_EMAIL');
//         $password = env('IMAP_PASSWORD');

//         $inbox = @imap_open($hostname, $username, $password);
//         if (!$inbox) {
//             return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
//         }

//         $limit = 25; // Number of emails to fetch per request
//         $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
//         if (!$emails) {
//             imap_close($inbox);
//             return view('admin.gmail.index', ['messages' => []]);
//         }

//         rsort($emails);
//         $emails = array_slice($emails, 0, $limit);

//         $messages = [];
//         foreach ($emails as $email_number) {
//             $overview = imap_fetch_overview($inbox, $email_number, 0);
//             if (!$overview) continue;

//             $subject = imap_utf8($overview[0]->subject);
//             $from = $overview[0]->from;
//             $date = $overview[0]->date;

//             // Fetch the email structure
//             $structure = imap_fetchstructure($inbox, $email_number);
//             $partNumber = 1; // Default to part 1 (usually plain text)
//             $hasHtml = false; // Flag to check if HTML part is available

//             // If the email has multiple parts, find the plain text or HTML part
//             if (isset($structure->parts) && count($structure->parts)) {
//                 foreach ($structure->parts as $index => $part) {
//                     if ($part->subtype == 'HTML') {
//                         $partNumber = $index + 1; // HTML part
//                         $hasHtml = true;
//                         break;
//                     } elseif ($part->subtype == 'PLAIN') {
//                         $partNumber = $index + 1; // Plain text part
//                     }
//                 }
//             }

//             // Fetch and decode the message body
//             $message = imap_fetchbody($inbox, $email_number, $partNumber);

//             // Handle different encoding types
//             if ($structure->encoding == 3) { // Base64
//                 $message = base64_decode($message);
//             } elseif ($structure->encoding == 4) { // Quoted-Printable
//                 $message = quoted_printable_decode($message);
//             } elseif ($structure->encoding == 1) { // 8bit
//                 $message = imap_utf8($message);
//             } elseif ($structure->encoding == 0) { // 7bit
//                 $message = imap_qprint($message); // Optionally handle 7bit encoding
//             }

//             // Convert message to UTF-8 if necessary
//             $message = mb_convert_encoding($message, 'UTF-8', 'auto');

//             // Add the message to the messages array
//             $messages[] = [
//                 'subject' => $subject,
//                 'from' => $from,
//                 'date' => $date,
//                 'message' => $message,
//             ];
//         }

//         imap_close($inbox);

//         return view('admin.gmail.index', ['messages' => $messages]);
//     }

//     public function getMoreEmails(Request $request)
//     {
//         $limit = 25; // Number of emails to fetch per request
//         $offset = $request->input('offset', 0);

//         $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
//         $username = env('IMAP_EMAIL');
//         $password = env('IMAP_PASSWORD');
//         $inbox = @imap_open($hostname, $username, $password);

//         if (!$inbox) {
//             return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
//         }

//         $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
//         if (!$emails) {
//             imap_close($inbox);
//             return response()->json(['emails' => [], 'nextOffset' => $offset]);
//         }

//         rsort($emails);
//         $emails = array_slice($emails, $offset, $limit);

//         $messages = [];
//         foreach ($emails as $email_number) {
//             $overview = imap_fetch_overview($inbox, $email_number, 0);
//             if (!$overview) continue;

//             $subject = imap_utf8($overview[0]->subject);
//             $from = $overview[0]->from;
//             $date = $overview[0]->date;

//             // Fetch the email structure
//             $structure = imap_fetchstructure($inbox, $email_number);
//             $partNumber = 1; // Default to part 1 (usually plain text)
//             $hasHtml = false; // Flag to check if HTML part is available

//             // If the email has multiple parts, find the plain text or HTML part
//             if (isset($structure->parts) && count($structure->parts)) {
//                 foreach ($structure->parts as $index => $part) {
//                     if ($part->subtype == 'HTML') {
//                         $partNumber = $index + 1; // HTML part
//                         $hasHtml = true;
//                         break;
//                     } elseif ($part->subtype == 'PLAIN') {
//                         $partNumber = $index + 1; // Plain text part
//                     }
//                 }
//             }

//             // Fetch and decode the message body
//             $message = imap_fetchbody($inbox, $email_number, $partNumber);

//             // Handle different encoding types
//             if ($structure->encoding == 3) { // Base64
//                 $message = base64_decode($message);
//             } elseif ($structure->encoding == 4) { // Quoted-Printable
//                 $message = quoted_printable_decode($message);
//             } elseif ($structure->encoding == 1) { // 8bit
//                 $message = imap_utf8($message);
//             } elseif ($structure->encoding == 0) { // 7bit
//                 $message = imap_qprint($message); // Optionally handle 7bit encoding
//             }

//             // Convert message to UTF-8 if necessary
//             $message = mb_convert_encoding($message, 'UTF-8', 'auto');

//             // Add the message to the messages array
//             $messages[] = [
//                 'subject' => $subject,
//                 'from' => $from,
//                 'date' => $date,
//                 'message' => $message,
//             ];
//         }

//         imap_close($inbox);

//         return response()->json(['emails' => $messages, 'nextOffset' => $offset + $limit]);
//     }

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

        return redirect()->route('support.gmail')->with('success', 'Mail sent successfully!');
    }
    public function reply(Request $request)
{
   // dd($request->all()); 
    $to = $request->input('to');
    $subject = $request->input('subject');
    
    return view('admin.mails.reply', compact('to', 'subject'));
}

public function sendReply(Request $request)
{
    $validated = $request->validate([
        'to' => 'required|string', // Allow the format 'Name <email>'
        'subject' => 'required|string|max:255',
        'body' => 'required|string', // You can keep this as 'string' to allow HTML
    ]);
   // dd($request->all());
    // If validation passes, send the email
    try {
        // You can extract the email address from the formatted string if needed
        $email = filter_var(trim(explode('<', $validated['to'])[1], '>'), FILTER_SANITIZE_EMAIL);
      
        Mail::to($email)->send(new Gmail($validated['subject'], $validated['body']));

        return redirect()->route('support.gmail')->with('success', __('general.reply_sent'));
    } catch (\Exception $e) {
        return back()->withErrors(['send' => __('general.error.sending_failed')])->withInput();
    }
}
// public function show(Request $request)
// {
//    // dd($request->all()); 
//     $to = $request->input('to');
//     $subject = $request->input('subject');
//     $date = $request->input('date');
//     $body = $request->input('body');
    
//     return view('admin.gmail.email-details', compact('to', 'subject','body','date'));
// }
//  /**
//      * Fetch and display sales emails.
//      */
//     public function getSalesEmails()
//     {
//         $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
//         $username = env('SALES_IMAP_EMAIL');
//         $password = env('SALES_IMAP_PASSWORD');

//         // Open IMAP connection
//         $inbox = @imap_open($hostname, $username, $password);

//         if (!$inbox) {
//             return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
//         }

//         // Limit to 25 emails per request
//         $limit = 25;
//         $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');

//         if (!$emails) {
//             imap_close($inbox);
//             return view('admin.gmail.sales-emails', ['messages' => []]);
//         }

//         // Sort emails in reverse order and limit the result
//         rsort($emails);
//         $emails = array_slice($emails, 0, $limit);

//         $messages = $this->processEmails($emails, $inbox);

//         imap_close($inbox);

//         return view('admin.gmail.sales-emails', ['messages' => $messages]);
//     }

//     /**
//      * Fetch emails by specific category (Inbox, Starred, Important, Draft, Sent, Trash).
//      */
//     public function getEmailsByCategory($category)
//     {
//         $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
//         $username = env('SUPPORT_IMAP_EMAIL');
//         $password = env('SUPPORT_IMAP_PASSWORD');

//         // Open IMAP connection
//         $inbox = @imap_open($hostname, $username, $password);

//         if (!$inbox) {
//             return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
//         }

//         // Search criteria based on the category
//         $criteria = $this->getCategorySearchCriteria($category);
//         $emails = imap_search($inbox, $criteria);

//         if (!$emails) {
//             imap_close($inbox);
//             return view('admin.gmail.support-emails', ['messages' => []]);
//         }

//         $messages = $this->processEmails($emails, $inbox);

//         imap_close($inbox);

//         return view('admin.gmail.support-emails', compact('messages'));
//     }

//     /**
//      * Get IMAP search criteria based on the selected category.
//      */
//     private function getCategorySearchCriteria($category)
//     {
//         switch ($category) {
//             case 'inbox':
//                 return 'ALL';
//             case 'starred':
//                 return 'FLAGGED';
//             case 'important':
//                 return 'KEYWORD "important"';
//             case 'draft':
//                 return 'DRAFT';
//             case 'sent':
//                 return 'SENT';
//             case 'trash':
//                 return 'DELETED';
//             default:
//                 return 'ALL';
//         }
//     }

//     /**
//      * Process and decode fetched emails.
//      */
//     private function processEmails($emails, $inbox)
//     {
//         $messages = [];
    
//         if ($emails) {
//             // Sort in reverse order
//             rsort($emails); 
    
//             foreach ($emails as $email_number) {
//                 // Check if the email number is valid
//                 if (!is_int($email_number) || $email_number <= 0) {
//                     continue; // Skip invalid email numbers
//                 }
    
//                 // Fetch overview and check if it's valid
//                 $overview = imap_fetch_overview($inbox, $email_number, 0);
//                 if (empty($overview)) {
//                     continue; // Skip if no overview found
//                 }
    
//                 $structure = imap_fetchstructure($inbox, $email_number);
//                 if (!$structure) {
//                     continue; // Skip if no structure found
//                 }
    
//                 $partNumber = $this->getMessagePart($structure);
    
//                 // Fetch and decode the message body
//                 $message = imap_fetchbody($inbox, $email_number, $partNumber);
//                 $message = $this->decodeMessage($message, $structure->encoding);
    
//                 // Convert to UTF-8
//                 $message = mb_convert_encoding($message, 'UTF-8', 'auto');
    
//                 // Add to messages array
//                 $messages[] = [
//                     'subject' => imap_utf8($overview[0]->subject),
//                     'from'    => $overview[0]->from,
//                     'date'    => $overview[0]->date,
//                     'message' => $message,
//                 ];
//             }
//         }
    
//         return $messages;
//     }
    

//     /**
//      * Get the correct message part (plain text or HTML).
//      */
//     private function getMessagePart($structure)
//     {
//         $partNumber = 1; // Default part
//         if (isset($structure->parts) && count($structure->parts)) {
//             foreach ($structure->parts as $index => $part) {
//                 if ($part->subtype == 'HTML') {
//                     return $index + 1; // HTML part
//                 } elseif ($part->subtype == 'PLAIN') {
//                     $partNumber = $index + 1; // Plain text part
//                 }
//             }
//         }
//         return $partNumber;
//     }

//     /**
//      * Decode the email message based on encoding type.
//      */
//     private function decodeMessage($message, $encoding)
//     {
//         switch ($encoding) {
//             case 3: // Base64
//                 return base64_decode($message);
//             case 4: // Quoted-Printable
//                 return quoted_printable_decode($message);
//             case 1: // 8bit
//                 return imap_utf8($message);
//             case 0: // 7bit
//                 return imap_qprint($message);
//             default:
//                 return $message;
//         }
//     }
    
//     public function getMoreSalesEmails(Request $request)
//     {
//             $limit = 25; // Number of emails to fetch per request
//             $offset = $request->input('offset', 0);
    
//             $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
//             $username = env('SALES_IMAP_EMAIL');
//             $password = env('SALES_IMAP_PASSWORD');
    
//             $inbox = @imap_open($hostname, $username, $password);
    
//             if (!$inbox) {
//                 return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
//             }
    
//             $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
//             if (!$emails) {
//                 imap_close($inbox);
//                 return response()->json(['emails' => [], 'nextOffset' => $offset]);
//             }
    
//             rsort($emails);
//             $emails = array_slice($emails, $offset, $limit);
    
//             $messages = [];
//             foreach ($emails as $email_number) {
//                 $overview = imap_fetch_overview($inbox, $email_number, 0);
//                 if (!$overview) continue;
    
//                 $subject = imap_utf8($overview[0]->subject);
//                 $from = $overview[0]->from;
//                 $date = $overview[0]->date;
    
//                 // Fetch the email structure
//                 $structure = imap_fetchstructure($inbox, $email_number);
//                 $partNumber = 1; // Default to part 1 (usually plain text)
//                 $hasHtml = false; // Flag to check if HTML part is available
    
//                 // If the email has multiple parts, find the plain text or HTML part
//                 if (isset($structure->parts) && count($structure->parts)) {
//                     foreach ($structure->parts as $index => $part) {
//                         if ($part->subtype == 'HTML') {
//                             $partNumber = $index + 1; // HTML part
//                             $hasHtml = true;
//                             break;
//                         } elseif ($part->subtype == 'PLAIN') {
//                             $partNumber = $index + 1; // Plain text part
//                         }
//                     }
//                 }
    
//                 // Fetch and decode the message body
//                 $message = imap_fetchbody($inbox, $email_number, $partNumber);
    
//                 // Handle different encoding types
//                 if ($structure->encoding == 3) { // Base64
//                     $message = base64_decode($message);
//                 } elseif ($structure->encoding == 4) { // Quoted-Printable
//                     $message = quoted_printable_decode($message);
//                 } elseif ($structure->encoding == 1) { // 8bit
//                     $message = imap_utf8($message);
//                 } elseif ($structure->encoding == 0) { // 7bit
//                     $message = imap_qprint($message); // Optionally handle 7bit encoding
//                 }
    
//                 // Convert message to UTF-8 if necessary
//                 $message = mb_convert_encoding($message, 'UTF-8', 'auto');
    
//                 // Add the message to the messages array
//                 $messages[] = [
//                     'subject' => $subject,
//                     'from' => $from,
//                     'date' => $date,
//                     'message' => $message,
//                 ];
//             }
    
//             imap_close($inbox);
    
//             return response()->json(['emails' => $messages, 'nextOffset' => $offset + $limit]);
//     }

//     public function showEmail($subject)
//     {
//         // IMAP settings
//         $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
//         $username = env('SALES_IMAP_EMAIL');
//         $password = env('SALES_IMAP_PASSWORD');
    
//         // Open the inbox connection
//         $inbox = @imap_open($hostname, $username, $password);
//         if (!$inbox) {
//             return redirect()->route('gmail')->with('error', 'Cannot connect to Gmail: ' . imap_last_error());
//         }
    
//         // Search for emails by subject
//         $emails = imap_search($inbox, 'SUBJECT "' . addslashes($subject) . '"', SE_UID, 'UTF-8');
    
//         // Check if any emails were found
//         if (!$emails || empty($emails)) {
//             imap_close($inbox);
//             return redirect()->route('gmail')->with('error', 'Email not found.');
//         }
    
//         // You might want to limit to the first email found, or handle multiple
//         $processedEmails = $this->processEmails([$emails[0]], $inbox); // Get the first email with the matching subject
    
//         // Close the inbox connection
//         imap_close($inbox);
    
//         // Ensure there is at least one processed email
//         if (empty($processedEmails)) {
//             return redirect()->route('gmail')->with('error', 'Email processing failed.');
//         }



    
//         // Get the first (and only) processed email
//         $email = $processedEmails[0];
    
//         // Return the view with the email data
//         return view('admin.gmail.email-details', compact('email'));
//     }
    
    
    
//     public function getSupportEmails(Request $request)
//     {
//         // Fetch filter from request or default to inbox
//      //   $filter = $request->input('filter', 'inbox'); 
        
//         $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
//         $username = env('SUPPORT_IMAP_EMAIL');
//         $password = env('SUPPORT_IMAP_PASSWORD');
//                // Get the current route name
//     $routeName = $request->route()->getName();

//     // Determine filter based on the route name
//     switch ($routeName) {
//         case 'emails.starred':
//             $filter = 'starred';
//             break;
//         case 'emails.important':
//             $filter = 'important';
//             break;
//         case 'emails.unread':
//             $filter = 'unread';
//             break;
//         default:
//             $filter = 'inbox'; // Default filter
//             break;
//     }
 
    
//         // Open the IMAP connection
//         $inbox = @imap_open($hostname, $username, $password);
//         if (!$inbox) {
//             return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
//         }
    
//         // Apply different email filters
//         switch ($filter) {
//             case 'starred':
//                 $emails = imap_search($inbox, 'FLAGGED', SE_UID, 'UTF-8');
//                 break;
//             case 'unread':
//                 $emails = imap_search($inbox, 'UNSEEN', SE_UID, 'UTF-8'); // 'UNSEEN' fetches unread emails
//                 break;
//             case 'important':
//                 // Gmail "Important" emails use a specific label
//                 $emails = imap_search($inbox, 'KEYWORD "Important"', SE_UID, 'UTF-8');
//                 break;
//             case 'sent':
//                 imap_reopen($inbox, $hostname . '[Gmail]/Sent Mail'); // Reopen connection to "Sent" folder
//                 $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
//                 break;
//             case 'draft':
//                 imap_reopen($inbox, $hostname . '[Gmail]/Drafts'); // Reopen connection to "Drafts" folder
//                 $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
//                 break;
//             case 'trash':
//                 imap_reopen($inbox, $hostname . '[Gmail]/Trash'); // Reopen connection to "Trash" folder
//                 $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
//                 break;
//             default:
//                 $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
//                 break;
//         }
    
//         if (!$emails) {
//             imap_close($inbox);
//             return view('admin.gmail.support-emails', ['messages' => []]);
//         }
    
//         // Sort emails in reverse order (most recent first)
//         rsort($emails);
//         $limit = 25;
//         $emails = array_slice($emails, 0, $limit);
    
//         $messages = [];
//         foreach ($emails as $email_number) {
//             $overview = imap_fetch_overview($inbox, $email_number, 0);
//             if (!$overview) continue;
    
//             $subject = imap_utf8($overview[0]->subject);
//             $from = $overview[0]->from;
//             $date = $overview[0]->date;
    
//             // Fetch the email structure
//             $structure = imap_fetchstructure($inbox, $email_number);
//             $partNumber = 1; // Default part (usually plain text)
//             $hasHtml = false;
    
//             // If email has multiple parts, find the plain text or HTML part
//             if (isset($structure->parts) && count($structure->parts)) {
//                 foreach ($structure->parts as $index => $part) {
//                     if ($part->subtype == 'HTML') {
//                         $partNumber = $index + 1;
//                         $hasHtml = true;
//                         break;
//                     } elseif ($part->subtype == 'PLAIN') {
//                         $partNumber = $index + 1;
//                     }
//                 }
//             }
    
//             // Fetch and decode the message body
//             $message = imap_fetchbody($inbox, $email_number, $partNumber);
    
//             // Handle encoding types
//             switch ($structure->encoding) {
//                 case 3: // Base64
//                     $message = base64_decode($message);
//                     break;
//                 case 4: // Quoted-Printable
//                     $message = quoted_printable_decode($message);
//                     break;
//                 case 1: // 8bit
//                     $message = imap_utf8($message);
//                     break;
//                 case 0: // 7bit
//                     $message = imap_qprint($message);
//                     break;
//             }
    
//             // Store each email with relevant details
//             $messages[] = [
//                 'id' => $email_number,
//                 'subject' => $subject,
//                 'from' => $from,
//                 'date' => $date,
//                 'message' => $message,
//             ];
//         }
    
//         imap_close($inbox);
    
//         return view('admin.gmail.support-emails', [
//             'messages' => $messages,
//         ]);
//     }
    
//     public function getMoreSupportEmails(Request $request)
//     {
//         // Determine filter based on the route name
//         $routeName = $request->route()->getName();
//         $filter = match ($routeName) {
//             'emails.starred' => 'starred',
//             'emails.important' => 'important',
//             'emails.unread' => 'unread',
//             default => 'inbox',
//         };
    
//         $limit = 25; // Number of emails to fetch per request
//         $offset = $request->input('offset', 0);
    
//         $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX'; 
//         $username = env('SUPPORT_IMAP_EMAIL');
//         $password = env('SUPPORT_IMAP_PASSWORD');
    
//         // Open the IMAP connection
//         $inbox = @imap_open($hostname, $username, $password);
        
//         if (!$inbox) {
//             // \Log::error('IMAP connection failed: ' . imap_last_error());
//             // return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
//         }
    
//         // Apply different email filters
//         switch ($filter) {
//             case 'starred':
//                 $emails = imap_search($inbox, 'FLAGGED', SE_UID, 'UTF-8');
//                 break;
//             case 'unread':
//                 $emails = imap_search($inbox, 'UNSEEN', SE_UID, 'UTF-8');
//                 break;
           
//             default:
//                 $emails = imap_search($inbox, 'ALL', SE_UID, 'UTF-8');
//                 break;
//         }
    
//         // Log a warning if no emails are found
//         if (!$emails) {
//             // \Log::warning('No emails found with filter ' . $filter);
//             imap_close($inbox);
//             return response()->json(['emails' => [], 'nextOffset' => $offset]);
//         }
    
//         // Sort emails in reverse order and paginate
//         rsort($emails);
//         $emails = array_slice($emails, $offset, $limit);
    
//         // Process each email
//         $messages = [];
//         foreach ($emails as $email_number) {
//             $overview = imap_fetch_overview($inbox, $email_number, 0);
//             if (!$overview) continue;
    
//             $subject = isset($overview[0]->subject) ? imap_utf8($overview[0]->subject) : '(No Subject)';
//             $from = isset($overview[0]->from) ? $overview[0]->from : '(Unknown Sender)';
//             $date = isset($overview[0]->date) ? $overview[0]->date : '(Unknown Date)';
    
//             // Fetch the email structure
//             $structure = imap_fetchstructure($inbox, $email_number);
//             $partNumber = 1;
    
//             // Handle multipart emails (HTML, plain text)
//             if (isset($structure->parts) && count($structure->parts)) {
//                 foreach ($structure->parts as $index => $part) {
//                     if ($part->subtype === 'HTML') {
//                         $partNumber = $index + 1;
//                         break;
//                     } elseif ($part->subtype === 'PLAIN') {
//                         $partNumber = $index + 1;
//                     }
//                 }
//             }
    
//             // Decode the message body based on encoding
//             $message = imap_fetchbody($inbox, $email_number, $partNumber);
//             switch ($structure->encoding) {
//                 case 3: // BASE64
//                     $message = base64_decode($message);
//                     break;
//                 case 4: // QUOTED-PRINTABLE
//                     $message = quoted_printable_decode($message);
//                     break;
//                 case 1: // UTF-8
//                     $message = imap_utf8($message);
//                     break;
//                 case 0: // 7BIT
//                     $message = imap_qprint($message);
//                     break;
//             }
    
//             // Append message data to the response
//             $messages[] = [
//                 'subject' => $subject,
//                 'from' => $from,
//                 'date' => $date,
//                 'message' => $message,
//             ];
//         }
    
//         // Close the IMAP connection
//         imap_close($inbox);
    
//         // Return the emails and next offset for pagination
//         return response()->json(['emails' => $messages, 'nextOffset' => $offset + $limit]);
//     }
    
public function getSupportEmails(Request $request)
{
    $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
    $username = env('SUPPORT_IMAP_EMAIL');
    $password = env('SUPPORT_IMAP_PASSWORD');
    
    $filter = $this->determineFilter($request->route()->getName());

    // Open the IMAP connection
    $inbox = @imap_open($hostname, $username, $password);
    if (!$inbox) {
        $errorMessage = imap_last_error();
    //    \Log::error('IMAP connection failed: ' . $errorMessage);
        return response()->json(['error' => 'Cannot connect to Gmail: ' . $errorMessage], 500);
        }

    // Fetch emails based on the filter
    $emails = $this->fetchEmails($inbox, $filter);

    if (!$emails) {
        imap_close($inbox);
        return view('admin.gmail.support-emails', ['messages' => []]);
    }

    // Sort and limit emails
    $emails = $this->paginateEmails($emails, 0, 25);

    // Process each email and prepare data
    $messages = $this->processEmails($inbox, $emails);

    imap_close($inbox);

    return view('admin.gmail.support-emails', [
        'messages' => $messages,
    ]);
}

public function getMoreSupportEmails(Request $request)
{
    $limit = 25; // Number of emails to fetch per request
    $offset = $request->input('offset', 0);

    $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
    $username = env('SUPPORT_IMAP_EMAIL');
    $password = env('SUPPORT_IMAP_PASSWORD');

    // Open the IMAP connection
    $inbox = @imap_open($hostname, $username, $password);
    if (!$inbox) {
        return response()->json(['error' => 'Cannot connect to Gmail: ' . imap_last_error()], 500);
    }

    // Determine the filter based on the route name
    $filter = $this->determineFilter($request->route()->getName());

    // Fetch emails based on the filter
    $emails = imap_search($inbox, $filter, SE_UID, 'UTF-8');
    if (!$emails) {
        imap_close($inbox);
        return response()->json(['emails' => [], 'nextOffset' => $offset]);
    }

    // Sort and limit emails
    rsort($emails); // Sort emails by most recent
    $emails = array_slice($emails, $offset, $limit);

    // Process each email and prepare data
    $messages = [];
    foreach ($emails as $email_number) {
        $overview = imap_fetch_overview($inbox, $email_number, 0);
        if (!$overview) continue;

        $subject = isset($overview[0]->subject) ? imap_utf8($overview[0]->subject) : '(No Subject)';
        $from = isset($overview[0]->from) ? $overview[0]->from : '(Unknown Sender)';
        $date = isset($overview[0]->date) ? $overview[0]->date : '(Unknown Date)';

        // Fetch the email structure
        $structure = imap_fetchstructure($inbox, $email_number);
        $message = $this->fetchMessageBody($inbox, $email_number, $structure);

        // Add the message to the messages array
        $messages[] = [
            'subject' => $subject,
            'from' => $from,
            'date' => $date,
            'message' => $message,
        ];
    }

    imap_close($inbox);

    // Return the emails and the new offset
    return response()->json([
        'emails' => $messages,
        'nextOffset' => $offset + $limit,
    ]);
}

// Helper method to determine email filter based on route name
private function determineFilter($routeName)
{
    return match ($routeName) {
        'emails.starred' => 'FLAGGED',
        'emails.important' => 'KEYWORD "Important"',
        'emails.unread' => 'UNSEEN',
        default => 'ALL',
    };
}

// Helper method to fetch emails based on filter
private function fetchEmails($inbox, $filter)
{
    // Apply the filter to search emails
    return imap_search($inbox, $filter, SE_UID, 'UTF-8') ?: [];
}

// Helper method to paginate emails
private function paginateEmails($emails, $offset, $limit)
{
    rsort($emails); // Sort emails in reverse order (newest first)
    return array_slice($emails, $offset, $limit);
}

// Helper method to process emails and extract relevant information
private function processEmails($inbox, $emails)
{
    $messages = [];

    foreach ($emails as $email_number) {
        $overview = imap_fetch_overview($inbox, $email_number, 0);

        if (!$overview) continue;

        $subject = isset($overview[0]->subject) ? imap_utf8($overview[0]->subject) : '(No Subject)';
        $from = isset($overview[0]->from) ? $overview[0]->from : '(Unknown Sender)';
        $date = isset($overview[0]->date) ? $overview[0]->date : '(Unknown Date)';

        // Fetch the email structure
        $structure = imap_fetchstructure($inbox, $email_number);
        $message = $this->fetchMessageBody($inbox, $email_number, $structure);

        // Store each email with relevant details
        $messages[] = [
            'id' => $email_number,
            'subject' => $subject,
            'from' => $from,
            'date' => $date,
            'message' => $message,
        ];
    }

    return $messages;
}

// Helper method to fetch message body and handle encoding
private function fetchMessageBody($inbox, $email_number, $structure)
{
    $partNumber = 1; // Default part is usually plain text

    // Handle multipart emails (HTML, plain text)
    if (isset($structure->parts) && count($structure->parts)) {
        foreach ($structure->parts as $index => $part) {
            if ($part->subtype === 'HTML') {
                $partNumber = $index + 1;
                break;
            } elseif ($part->subtype === 'PLAIN') {
                $partNumber = $index + 1;
            }
        }
    }

    // Fetch and decode the message body
    $message = imap_fetchbody($inbox, $email_number, $partNumber);

    // Handle encoding types
    switch ($structure->encoding) {
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
    
}
