<?php

namespace App\Http\Controllers\aos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh;
use App\Models\Departement;
use App\Models\Busunit;
use App\Models\Aos;


class Gestion extends Controller
{
  public function index()
  {
    return view('content.aos.gestion');
  }

  public function archived()
  {
    return view('content.aos.archived');
  }

  public function create()
  {
    $rhs = Rh::all();
    $departements = Departement::all();
    $bus = Busunit::all();
    return view('content.aos.create', compact('rhs', 'departements', 'bus'));
  }

  public function edit($id)
  {
    $ao = Aos::find($id);
    $rhs = Rh::all();
    $departements = Departement::all();
    $bus = Busunit::all();
    return view('content.aos.edit', compact('rhs', 'departements', 'bus', 'ao'));
  }

  public function update(Request $request, $id)
  {
    $ao = Aos::find($id);
    $ao->update($request->all());
    return redirect()->route('appel-offre-gestion');
  }

  public function store(Request $request)
  {
    $ao = Aos::create($request->all());
    return redirect()->route('appel-offre-gestion');
  }

  public function aos()
  {
    $aos = Aos::where('archived', 0)->get();
    return response()->json(['data' => $aos]);
  }

  public function aosArchived()
  {
    $aos = Aos::where('archived', 1)->get();
    return response()->json(['data' => $aos]);
  }

  public function archive($id)
  {
    $ao = Aos::find($id);
    $ao->archived = 1;
    $ao->save();
    return response()->json(['success' => 'AO archivé avec succès']);
  }

  public function unarchive($id)
  {
    $ao = Aos::find($id);
    $ao->archived = 0;
    $ao->save();
    return response()->json(['success' => 'AO désarchivé avec succès']);
  }
}
