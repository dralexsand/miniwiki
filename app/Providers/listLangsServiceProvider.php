<?php

namespace App\Providers;

use App\Http\Controllers\LangController;
use App\Language;
use App\Translations;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class listLangsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function (View $view) {

            if (!Session::has('lng')) {
                $selected_lng = 'ru';
            } else {
                $selected_lng = Session::get('lng');
            }

            $lang = new Language();
            $list_langs = $lang->getLanguagesList();

            $translationsInstance = new Translations();
            $translationsUi = $translationsInstance->getTranslatedArrayUi();

            $result = [
                'selected_lng' => $selected_lng,
                'list_langs' => $list_langs,
                'translationsUi' => $translationsUi,
            ];

            $view->with('langs_info', $result);
        });
    }
}
