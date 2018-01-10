<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{

    public function index()
    {
        $client = Client::paginate(10);
        return view('clients.index', ['clients' => $client]);
    }

    public function create()
    {
        $client = new Client();
        return view('clients.create', compact('client'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $client = Client::create($request->all());

        $request->session()->flash('msg','Client has been added');

        return redirect('/clients');

    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.detail', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->update($request->all());
        return redirect('clients');

    }

    public function destroy($id)
    {
        Client::destroy($id);
        return redirect('clients');
    }
}
