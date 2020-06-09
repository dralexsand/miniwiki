<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Language extends Model
{
    protected $table = 'languages';

    public function getLanguagesList()
    {
        $sql = "SELECT lng, fullname_en FROM " . $this->table." WHERE active IN (1)";
        $obj = DB::select($sql);
        $map = [];
        foreach ($obj as $item) {
            $map[$item->lng] = $item->fullname_en;
        }
        return $map;
    }

    public function getLanguagesList0()
    {
        return [
            'ru'=>'Ru',
            'en'=>'En',
            'es'=>'Es',
            'fr'=>'Fr',
            'de'=>'De',
        ];
    }
}
