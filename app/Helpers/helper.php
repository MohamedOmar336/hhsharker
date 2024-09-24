<?php

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

function changeLanguage(){
    
    $currentRouteName = Route::currentRouteName();
    if($currentRouteName == 'frontend.home'){
        return str_replace('/' . app()->getLocale(), '/'.(app()->getLocale() == 'en' ? 'ar' : 'en'), url()->current());
    }
    return str_replace('/' . app()->getLocale() . '/', '/'.(app()->getLocale() == 'en' ? 'ar' : 'en').'/', url()->current());
}
