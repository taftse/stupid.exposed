<?php


namespace SKE\Language\Http\Controllers;


use App\Http\Controllers\Controller;

class LanguageController extends Controller
{

    public function handle($lang)
    {
        return response("window.config = {};window.config.translations = {'test':'test'};")->header('Content-Type', 'text/javascript');
    }
}
