<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::select()->paginate(4);
        return view('etudiant.index',['etudiants'=>$etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ville = new Ville;
        $villes = $ville->selectVille();
        return view('etudiant.create', ['villes' => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEtudiant = Etudiant::create([

            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->telephone,
            'email' => $request->email,
            'date_de_naissance' => $request->date_naissance,
            'villeId' => $request->ville_id

        ]);

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)

    {
        $ville = Ville::select('nom')->where('id', $etudiant['villeId'])->get();
        return view('etudiant.show', ['etudiant' => $etudiant, 'ville' => $ville[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $villes = new Ville;
        $villeCollection = $villes->selectVille();
        $ville = Ville::select('nom')->where('id', $etudiant['villeId'])->get();
        return view('etudiant.edit', ['etudiant' => $etudiant,'villes' =>$villeCollection, 'ville' => $ville[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'nom' => $request->from_name,
            'adresse' => $request->from_adresse,
            'phone' => $request->from_phone,
            'email' => $request->from_email,
            'date_de_naissance' => $request->from_birthday,
            'villeId' => $request->from_ville
        ]);
        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect(route('index'));

    }
}
