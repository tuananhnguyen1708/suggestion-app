<?php
/**
 * Created by PhpStorm.
 * User: hungnm
 * Date: 12/21/2018
 * Time: 8:10 AM
 */
namespace App\Http\Request\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name' => 'required',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên đăng nhập',
            'password.required' => 'Vui lòng nhâp mật khẩu',
        ];
    }
}