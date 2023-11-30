<?php

namespace HuberwayCMS\Api\Http\Requests;

use HuberwayCMS\Api\Facades\ApiHelper;
use HuberwayCMS\Support\Http\Requests\Request;

class RegisterRequest extends Request
{
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:120|min:2',
            'last_name' => 'required|string|max:120|min:2',
            'email' => 'required|max:60|min:6|email|unique:' . ApiHelper::getTable(),
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
