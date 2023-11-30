<?php

namespace HuberwayCMS\Api\Http\Requests;

use HuberwayCMS\Support\Http\Requests\Request;

class ResendEmailVerificationRequest extends Request
{
    public function rules(): array
    {
        return [
            'email' => 'required|email|string',
        ];
    }
}
