<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function Index($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
