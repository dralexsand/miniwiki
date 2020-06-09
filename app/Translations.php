<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Translations //extends Model
{
    private $lng;
    private $table_translate_ui = 'translate_ui';

    public function __construct($lng = null)
    {
        $this->setLng($lng);
    }

    private function setLng($lng = null)
    {
        if (empty($lng)) {
            $lng = Session::get('lng');
        }

        if (empty($lng)) {
            $lng = 'ru'; // Language default
        }

        $this->lng = $lng;
    }

    public function translateSingleTermUi($term)
    {
        $sql = "SELECT " . $this->lng . " FROM " . $this->table_translate_ui . " WHERE term IN(?) LIMIT 1";
        return DB::select($sql, $term)[0]->$this->lng;
    }

    public function getTranslatedArrayUi()
    {
        $lng = $this->lng;
        $sql = "SELECT term, " . $this->lng . " FROM " . $this->table_translate_ui;
        $obj = DB::select($sql);
        $map = [];
        foreach ($obj as $item) {
            $translate = empty($item->$lng) ? $item->term : $item->$lng;
            $map[$item->term] = $translate;
        }
        return $map;
    }

    /*public function convertObjectToArray($obj){

    }*/


}
