<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Аутентификация успешна...
            return redirect()->intended('dashboard');
        }
    }

    /**
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function show()
    {
        return view('login');
    }
}
