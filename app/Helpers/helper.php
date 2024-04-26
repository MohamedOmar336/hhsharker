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

