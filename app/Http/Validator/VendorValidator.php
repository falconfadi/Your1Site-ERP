<?php

namespace App\Http\Validator;

class VendorValidator
{
    public static function validate($request)
    {
        return $request->validate([
            'vendors' => ['required', 'array', 'min:1'],
            'vendors.*.first_name' => ['required', 'string', 'max:20'],
            'vendors.*.last_name' => ['required', 'string', 'max:20'],
            'vendors.*.phone' => ['required', 'numeric'],
            'vendors.*.email' => ['required', 'email'],
        ]);
    }
}
