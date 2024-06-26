<?php

namespace App\Http\Controllers\CP;

use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    //
    public function swap($locale){
        $availLocale=['en'=>'en','ar'=>'ar'];
        if(array_key_exists($locale,$availLocale)){
            session()->put('locale',$locale);
        }
        return redirect()->back();
    }
}
