<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        $client = new Client();
        return view('clients.create', compact('client'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move("uploads", $image->getClientOriginalName());
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'image' => 'required'
        ]);

        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $request->image = $request->image->getClientOriginalName()
        ]);

        $request->session()->flash('msg', 'Client has been added');

        return redirect('/clients');

    }

    public function show($id)
    {
        $client = Client::find($id);
        $bookings = Booking::where('client_id', $id)->get()->all();

        return view('clients.detail', compact('client', 'bookings'));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move("uploads", $image->getClientOriginalName());
        }

        $client->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $request->image = $request->image->getClientOriginalName()
        ]);

        request()->session()->flash('msg','Client has been updated');

        return redirect('clients');

    }

    public function destroy($id)
    {
        Client::destroy($id);
        request()->session()->flash('msg','Client has been deleted');
        return redirect('clients');
    }
}
