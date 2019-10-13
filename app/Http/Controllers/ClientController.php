<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(15);

        return view('backend.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->fullname = $request->fullname;
        $client->telephone = $request->telephone;
        $client->mobile = $request->mobile;
        $client->email = $request->email;
        $client->street = $request->street;
        $client->brgy = $request->brgy;
        $client->city = $request->city;
        $client->zipcode = $request->zipcode;
        $client->region = $request->region;
        $client->position = $request->position;
        $client->company = $request->company;
        $client->save();

        return redirect()->back()->with('success', 'Client Save Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $Client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $Client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $Client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client = Client::find($client->id);
        $client->fullname = $request->fullname;
        $client->telephone = $request->telephone;
        $client->mobile = $request->mobile;
        $client->email = $request->email;
        $client->street = $request->street;
        $client->brgy = $request->brgy;
        $client->city = $request->city;
        $client->zipcode = $request->zipcode;
        $client->region = $request->region;
        $client->position = $request->position;
        $client->company = $request->company;
        $client->save();

        return redirect()->back()->with('success', 'Client Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $Client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->back()->with('info', 'Client has been Deleted!');
    }
}
