<?php
/**
 * Created by PhpStorm.
 * User: hungnm
 * Date: 12/20/2018
 * Time: 9:37 AM
 */
namespace App\Http\Request\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest{
    public function authorize()
    {
        return true;
    }

    public function rules(){
        return [
            'name' => 'required|max:255|unique:users,name',
            'username' => 'required|max:255',
            'email' => 'required|max:255|email'
        ];
    }
}