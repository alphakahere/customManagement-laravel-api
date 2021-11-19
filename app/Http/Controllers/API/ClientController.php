<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index() {
        $clients = Client::all();

        return response()->json([
            'status' => 200,
            'clients' => $clients
        ]);
    }

    public function store(Request $request) {
        $client = new Client;

        $client->name = $request->input('name');
        $client->pseudo = $request->input('pseudo');
        $client->phone = $request->input('phone');
        $client->location = $request->input('location');
        $client->save();

        return response()->json([
            'status' => 200,
            'message' => 'client ajouté avec success'
        ]);
    }

    public function edit($id) {
        $client = Client::find($id);

        return response()->json([
            'status' =>200,
            'client' => $client
        ]);
    }

    public function update(Request $request, $id) {
        $client =  Client::find($id);

        $client->name = $request->input('name');
        $client->pseudo = $request->input('pseudo');
        $client->phone = $request->input('phone');
        $client->location = $request->input('location');
        $client->status = $request->input('status');
        $client->save();

        return response()->json([
            'status' => 200,
            'message' => 'client modifié avec success'
        ]);
    }

    public function destroy($id){
        $client = Client::find($id);

        $client->delete();

        return response()->json([
            'message'=>'client supprime avec success'
        ]);
    }
}
