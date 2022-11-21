<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\Progesses;
use Illuminate\Http\Request;

class projet extends Controller
{
    public function home(){
        $edit = Abouts::all();
        $skills = Progesses::all();
        $array = ["Designer" , "Developer" , " Freelancer" , "Photographer"];
        return view('portfolio', compact('array', 'edit', 'skills'));
    }
    public function about(){
        $edit = Abouts::all();
        return view('pages.aboutModif', compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $update = Abouts::find($id);
        $update->text1 = $request->text1;
        $update->text2 = $request->text2;
        $update->birthday = $request->birthday;
        $update->website = $request->website;
        $update->Phone_number = $request->Phone_number;
        $update->contries = $request->contries;
        $update->age = $request->age;
        $update->Degree = $request->Degree;
        $update->Email = $request->Email;
        $update->freelance = $request->freelance;

        $update->save();
        return redirect('/');
    }

    public function skill(){
        $skills = Progesses::all();
        return view('pages.skiilModification', compact('skills'));
    }
    public function destroy($id){
        $delete = Progesses::find($id);
        $delete->delete();
        return redirect()->route('skill');
    }
    public function edit($id){
        $edit = Progesses::find($id);
        return view('pages.skill2Modif', compact('edit'));
    }
    public function update2(Request $request, $id)
    {
        $update = Progesses::find($id);
        $update->name = $request->name;
        $update->pourcent = $request->pourcent;

        $update->save();
        return redirect()->route('skill');
    }
}
