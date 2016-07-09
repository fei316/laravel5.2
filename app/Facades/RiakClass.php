<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class RiakClass extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App\Contracts\LanguageContract';
    }
}
