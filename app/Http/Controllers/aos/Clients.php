<?php

namespace App\Http\Controllers\aos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Contact;


class Clients extends Controller
{
    public function index()
    {
        return view('content.client.gestion');
    }

    public function list()
    {
        $clients = Client::all();
        return response()->json(["data" => $clients]);
    }

    public function create()
    {
        return view('content.client.create');
    }

    public function store(Request $request)
    {
        $client = Client::create($request->all());
        $contacts = json_decode($request->contacts);
        foreach ($contacts as $contact) {
            $newcontact = new Contact();
            $newcontact->nom = $contact->nom;
            $newcontact->prenom = $contact->prenom;
            $newcontact->email = $contact->email;
            $newcontact->tel = $contact->gsm;
            $newcontact->fonction = $contact->poste;
            $newcontact->client_id = $client->id;
            $newcontact->save();
        }
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
        $contacts = Contact::where('client_id', $id)->get();
        return view('content.client.edit', compact('client'), compact('contacts'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->update($request->all());
        $contacts = json_decode($request->contacts);
        $contactsInDB = Contact::where('client_id', $id)->get();
        foreach ($contacts as $contact) {
            if($contact->id_contact != null){
                $newcontact = Contact::find($contact->id_contact);
                $newcontact->nom = $contact->nom;
                $newcontact->prenom = $contact->prenom;
                $newcontact->email = $contact->email;
                $newcontact->tel = $contact->gsm;
                $newcontact->fonction = $contact->poste;
                $newcontact->client_id = $client->id;
                $newcontact->save();
            }else{
                $newcontact = new Contact();
                $newcontact->nom = $contact->nom;
                $newcontact->prenom = $contact->prenom;
                $newcontact->email = $contact->email;
                $newcontact->tel = $contact->gsm;
                $newcontact->fonction = $contact->poste;
                $newcontact->client_id = $client->id;
                $newcontact->save();
            }
        }
        foreach ($contactsInDB as $contactInDB) {
            $found = false;
            foreach ($contacts as $contact) {
                if($contact->id_contact == $contactInDB->id){
                    $found = true;
                }
            }
            if(!$found){
                $contactInDB->delete();
            }
        }
        return view('content.client.gestion');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return view('content.client.gestion');
    }

}