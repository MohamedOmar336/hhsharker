<?php
use Illuminate\Support\Str;

if (!function_exists('slugable')) {
    function slugable($string, $id = null)
    {
        $slug = str_replace(' ', '-', strtolower(trim($string)));
        $slug = str_replace('%', '', strtolower(trim($slug)));
        $slug = str_replace('\\', '', strtolower(trim($slug)));
        $slug = str_replace('?', '', strtolower(trim($slug)));
        $slug = str_replace('&', '', strtolower(trim($slug)));
        $slug = str_replace(')', '', strtolower(trim($slug)));
        $slug = str_replace('(', '', strtolower(trim($slug)));
        $slug = str_replace("'", '', strtolower(trim($slug)));
        $slug = str_replace("’", '', strtolower(trim($slug)));
        $slug = str_replace("é", '-', strtolower(trim($slug)));

        return $id ? $slug . '-' . $id : $slug;
    }
}


if (!function_exists('ResponseJson')) {
    function ResponseJson($status, $message = "", $data = [], $error = [])
    {
        $response = [
            'code' => $status,
            'msg' => $message,
            'data' => (object)$data,
            'error' => (object)$error,
        ];
        if ($error) {
            $response['error'] = (object)$error;
        }
        return response()->json($response, $status);
    }
}

if (!function_exists('uploadImage')) {
    /**
     * Uploads the image and returns the image name.
     *
     * @param  \Illuminate\Http\UploadedFile  $image
     * @return string
     */
    function uploadImage($image)
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        return $imageName;
    }

}
function numberToWord($number) {
    $words = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        // Add more numbers if needed
    ];
    return $words[$number] ?? $number; // Return number as string if not found
}

if (!function_exists('uploadWhatsappDoc')) {
    /**
     * Uploads the document to the storage with a unique name and returns the file path.
     *
     * @param  \Illuminate\Http\UploadedFile  $file
     * @return string The path to the uploaded file
     */
    function uploadWhatsappDoc($file)
    {
        // Create a unique file name using a UUID and the file's original extension
        $uniqueName = Str::uuid() . '.' . $file->getClientOriginalExtension();

        // Define the storage path where the file will be saved
        $path = 'whatsapp_docs';

        // Move the file to the specified storage path
        $file->storeAs($path, $uniqueName, 'public'); // Ensure 'public' disk is configured in config/filesystems.php

        // Return the storage path with the unique file name
        return $path . '/' . $uniqueName;
    }
}
