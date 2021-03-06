<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
class MadaniyatController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('madaniyat')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.madaniyat.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('madaniyat')->first();

        return view('Front::channel.madaniyat.posts', ['channel' => $channel]);
    }

    public function about()
    {
        return view('Front::channel.madaniyat.about');
    }
    public function contacts()
    {
        return view('Front::channel.madaniyat.contacts');
    }
    public function photos()
    {
        return view('Front::channel.madaniyat.photos');
    }
    public function broadcasts()
    {
        return view('Front::channel.madaniyat.broadcasts');
    }

}
