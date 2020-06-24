<?php

namespace App\Http\Controllers;

use App\Demande;
use Illuminate\Http\Request;
use Auth;
class UserDemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $demandes =$user->demandes;
        
        return view('user.demandes.index',compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.demandes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        $demande = new Demande([
            'somme'=>$request->get('somme'),
            'nom'=>$request->get('nom'),
            'prenom'=>$request->get('prenom'),
            'pays'=>$request->get('pays'),
            'telephone'=>$request->get('telephone'),
        ]);
        $demande->user()->associate($user);
        $demande->save();
        return redirect()->route('user.demande.index')->with('success', 'demande inserted successfuly ');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show($id_demande)
    {
        $demande = Demande::findOrFail($id_demande);

        return view('user.demandes.view',compact('demande'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit($id_demande)
    {
        $demande = Demande::findOrFail($id_demande);

        return view('user.demandes.edit',compact('demande'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_demande)
    {
        Demande::find($id_demande)->update($request->all());
        return redirect()->route('user.demande.index')->with('success', 'updated succfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_demande)
    {
        Demande::findOrFail($id_demande)->delete();
        return redirect()->route('user.demande.index')->with('success', 'deleted  succfuly');

    }
}
