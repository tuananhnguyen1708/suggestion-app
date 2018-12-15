<?php
use App\User;
/**
 * Created by PhpStorm.
 * User: hungnm
 * Date: 12/13/2018
 * Time: 4:17 PM
 */

/**
 * @param $result
 * @param null $data
 * @return \Illuminate\Http\JsonResponse
 */
function processCommonResponse($result, $data = null)
{
    return response()->json(array(
        'code' => $result ? CODE_SUCCESS : CODE_ERROR,
        'message' => $result ? MESSAGE_SUCCESS : MESSAGE_ERROR,
        'data' => $data
    ));
}