<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// reseption des etudiants
Route::get('/students', function () {

    $students=session('students',[]);

    return view('students.index',compact('students'));
});

//ajouter avoir le formulaire

Route::get('students/add',function(){
    
    return view("students.add");
});

//l'ajouts
Route::post('students/add', function(Request $request){

    $request->validate([
        'nom' => 'required|min:3'
    ]);

    $students = session('students', []);

    $students[] = $request->nom;

    session(['students' => $students]);

    return back()->with('success', 'Étudiant ajouté');
});

Route::get('/students/delete/{index}', function ($index) {

    $students = session('students', []);

    unset($students[$index]); // supprimer

    // réorganiser les index (important)
    $students = array_values($students);

    session(['students' => $students]);

    return back()->with('success', 'Étudiant supprimé');
});

