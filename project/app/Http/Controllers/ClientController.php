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
    public function addComment($id) {
        $client = Client::query()->findOrFail($id);
        return view('comment.add_comment')->with([
            'client'=>$client
        ]);
    }
    public function updateComment($id, Request $request) {
        $request->validate([
            'comment'=>'required'
        ]);
        $comment = Client::query()->where('id', $id)->pluck('comment')->toArray();
        if ($comment[0] == null) {
            Client::query()->where('id', $id)->update(['comment'=>$request->get('comment')]);
        } else {
            Client::query()->where('id', $id)->update(['comment'=>$comment[0].' '.$request->get('comment')]);
        }
        return redirect()->back()->with('status','Комментарий добавлен!');
    }
}
