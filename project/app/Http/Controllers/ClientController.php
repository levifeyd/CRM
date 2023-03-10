<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function sendRequest(Request $request) {
        $request->validate([
            "name"=>"required",
            "lastName"=>"required",
            "phone"=>"required",
            "email"=>"required",
        ]);
        $input = $request->all();
        Client::query()->create($input);
        return redirect()->back()->with('status','Заявка принята!');
    }
}
