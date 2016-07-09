<?php
namespace App\Services;

use App\Contracts\LanguageContract;

class ChineseService implements LanguageContract
{
    public function speaking()
    {
        return "你说的是中文哦";
    }
}
