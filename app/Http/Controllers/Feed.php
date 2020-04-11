<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class Feed
 * @package App\Http\Controllers
 */
class Feed extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * Лента.
     *
     * @param string $sSection
     * @return Renderable
     */
    public function show(string $sSection = '') : Renderable
    {
        $isEditable = false;
        $sModelsNameSpace = "App\\Models\\";

        if ($sSection) {
            $modelName = $sModelsNameSpace . ucfirst($sSection);

            $arData = (new $modelName)->open();

            return view(
                'pages.feed',
                [
                    'data' => $arData,
                    'section' => lcfirst($sSection),
                    'isEditable' => $isEditable,
                ]
            );
        }

        return view(
            'pages.feed',
            [
                'section' => $sSection,
                'isEditable' => $isEditable,
            ]
        );
    }
}
