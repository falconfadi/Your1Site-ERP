<?php

namespace App\Http\Validator;

class ClientValidator
{
    public static function validate($request)
    {
        return $request->validate([
            'clients' => ['required', 'array', 'min:1'],
            'clients.*.first_name' => ['required', 'string', 'max:20'],
            'clients.*.last_name' => ['required', 'string', 'max:20'],
            'clients.*.phone' => ['required', 'numeric'],
            'clients.*.email' => ['required', 'email'],
        ]);
    }
}
