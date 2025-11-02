<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Http\Requests\StoreutilisateurRequest;
use App\Http\Requests\UpdateutilisateurRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Utilisateur::all();
        return response()->json($user);
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
    public function register(StoreutilisateurRequest $request)
    {
       $user=Utilisateur::create($request->validated());
        return response()->json($user);
    }
    public function login(StoreutilisateurRequest $request)
    {
       $request->validated();
       if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json(['message' => 'Invalid email or password'], 401);
    }
    $user=Utilisateur::where('email', $request->email)->first();
    $token=$user->createToken('auth_token')->plainTextToken;
     return response()->json(['message'=>'login is valide',
                               'User'=>$user,
                               'token'=>$token], 201);
    }
    // public function logout(Request $request){
    //    $request->user()->currentAccessToken()->delete();
    //     return response()->json(['messege'=>'logout is valide']);

    // }

    /**
     * Display the specified resource.
     */
    public function show(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateutilisateurRequest $request, utilisateur $utilisateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utilisateur $utilisateur)
    {
        //
    }
}
