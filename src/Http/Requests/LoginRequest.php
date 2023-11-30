<?php

namespace HuberwayCMS\Api\Http\Requests;

use HuberwayCMS\Support\Http\Requests\Request;

class LoginRequest extends Request
{
    public function rules(): array
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }
}
