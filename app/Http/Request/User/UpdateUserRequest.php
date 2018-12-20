<?php
/**
 * Created by PhpStorm.
 * User: hungnm
 * Date: 12/20/2018
 * Time: 9:37 AM
 */
namespace App\Http\Request\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateUserRequest extends FormRequest{
    public function authorize()
    {
        return true;
    }

    public function rules(){
        return [
            'id'=>'required',
            'name' => [
                'required',
                'max:255',
                Rule::unique('users','name')->ignore($this->input('id'))
            ],
            'username' => [
                'required',
                'max:255',
            ],
            'email' => [
                'required',
                'max:255',
                'email'
             ]
        ];
    }
}