<?php
namespace App\Service;

use App\Contracts\LanguageContract;

class EnglishService implements LanguageContract
{
    public function speaking()
    {
        return "You are speaking English";
    }
}
