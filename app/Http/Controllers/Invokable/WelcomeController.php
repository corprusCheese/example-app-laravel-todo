<?php

namespace App\Http\Controllers\Invokable;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View|Response
     */
    public function __invoke(Request $request)
    {
        /*dd(Config::get("mail"));*/
        /*Mail::send('welcome', [], function ($message) {
            $message->to('example@gmail.com', 'example_name')->subject('Welcome!');
        });*/
        return view('welcome');
    }
}
