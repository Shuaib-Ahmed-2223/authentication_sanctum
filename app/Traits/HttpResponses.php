<?php
namespace App\Traits;

trait HttpResponses {
    protected function success($data, $message = null, $code = 200)
{
    return response()->json([
        'status' =>'Request was Successful',
        'message' => $message,
        'data' => $data
    ], $code);
    }
    protected function error($data, $message = null, $code= 300)
    {
        return response()->json([
            'status' =>'Error has occured',
            'message' => $message,
            'data' => $data
        ], $code);
        }
}