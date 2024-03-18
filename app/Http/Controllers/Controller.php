<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $isLocaleKm;
    public $isLocaleEn;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->isLocaleKm = app()->getLocale() == config('dummy.locale.km');
            $this->isLocaleEn = app()->getLocale() == config('dummy.locale.en');
            view()->share([
                'isLocaleKm'       => $this->isLocaleKm,
                'isLocaleEn'       => $this->isLocaleEn,
            ]);

            return $next($request);
        });
    }

    public function notFound(){
        return view('not-founds.404');
    }
}
