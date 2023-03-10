<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Manager;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }
    public function login(Request $request) {
        $request->validate([
            "username"=>["required","string"],
            "password"=>["required"],
        ]);

        $name = $request->all()['username'];
        $password = $request->all()['password'];

        $managers = Manager::query()->select('username', 'password')->get();
        foreach ($managers as $manager) {
            if (strcmp($manager->username, $name) == 0 && strcmp($manager->password, $password) == 0) {
                $clients = Client::query()->orderBy("created_at", "desc")->get();
                return view('crm')->with([
                    'clients'=>$clients
                ]);
            }
        }

        return redirect(route('login'))->withErrors(["username"=> "Пользотваель не найден,
                     либо данные введены не правильно"]);
    }
    public function logout() {
        auth("web")->logout();
        return redirect(route("login"));
    }
}
