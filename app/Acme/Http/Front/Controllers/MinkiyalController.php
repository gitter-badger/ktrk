<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
class MinkiyalController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('minkiyal')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.minkiyal.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('minkiyal')->first();

        return view('Front::channel.minkiyal.posts', ['channel' => $channel]);
    }


}
