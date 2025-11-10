<?php

namespace App\Http\Controllers;

use App\Models\inscription;
use App\Http\Requests\StoreinscriptionRequest;
use App\Http\Requests\UpdateinscriptionRequest;
use App\Models\Inscription as ModelsInscription;
use Illuminate\Support\Facades\Auth;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $myCourse=Auth::user()->courseStudent;
        return response()->json($myCourse);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinscriptionRequest $request)
    {
        $user=Auth::user()->id;
        $validteCourse=$request->validated();
        $validteCourse['utilisateur_id']=$user;
        $course=inscription::create($validteCourse);
        return response()->json($course);

    }

    /**
     * Display the specified resource.
     */
    public function show(inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinscriptionRequest $request, inscription $inscription)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inscription $inscription)
    {
        //
    }
}
