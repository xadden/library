<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('loggedin')->except('logout');
    }

    public function index() {
        $clients = Client::all();

        return view('clients.index')->with('clients', $clients);
    }

    public function view(int $id) {
        $client = Client::find($id);

        if(!$client) {
            return Redirect::to('clients');
        }

        return view('clients.view')->with('client', $client);
    }

    public function create(Request $request) {
        if($request->method() == 'GET') {
            return view('clients.create');
        }

        $client = new Client();

        $client->name = $request->name;
        $client->telefone = $request->telefone;
        $client->telemovel = $request->telemovel;
        $client->saldo = $request->saldo;

        $client->save();

        return Redirect::to('client/' . $client->id);
    }

    public function update(int $id, Request $request) {
        $client = Client::find($id);

        if(!$client) {
            return Redirect::to('clients');
        }

        if($request->method() == 'GET') {
            return view('clients.update')->with('client', $client);
        }

        $client->name = $request->name;
        $client->telefone = $request->telefone;
        $client->telemovel = $request->telemovel;
        $client->saldo = $request->saldo;

        $client->save();

        return Redirect::to('client/' . $client->id);
    }

    public function remove(int $id) {
        //TODO
    }
}