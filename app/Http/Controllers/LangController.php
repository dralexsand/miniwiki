<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function switchlng(Request $request)
    {
        $lng = $request->lng;
        \Illuminate\Support\Facades\Session::put('lng', $lng);

        $msg = "switchlng callback";

        $lang = new Language();

        return response()->json(
            [
                'list' => $lang->getLanguagesList(),
                'msg' => $msg,
                'lng' => $lng,
            ]
            , 200);
    }

}
