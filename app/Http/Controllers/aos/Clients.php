<?php

namespace App\Http\Controllers\aos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;


class Clients extends Controller
{
    public function index()
    {
        return view('content.client.gestion');
    }

    public function create()
    {
        return view('content.client.create');
    }

    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return view('content.client.gestion');
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('content.client.show', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('content.client.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->update($request->all());
        return view('content.client.gestion');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return view('content.client.gestion');
    }

}