<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cemental;
use App\Conejo;

class CementalController extends Controller
{
     public function create()
     {
        $conejos = Conejo::all();
    	return view('ConejoCemental/create',['conejos' => $conejos]);
    }

    public function edit($id_cemental)
    {
        $cemental = Cemental::all();
        $cemental = Cemental::where('Id_Cemental', $id_cemental)->first();

    	return view('/ConejoCemental/edit',['cemental' => $cemental]);
    }

    public function update(Request $request, $id_cemental)
    {
        $cemental = Cemental::where('Id_Cemental', $id_cemental)->first();
        $cemental->save();
        return redirect('/cemental');
    }


    public function delete($id_cemental)
    {   
        $cemental = Cemental::where('Id_Cemental', $id_cemental)->first();
        $cemental->delete();

    	return redirect()->back();
    }

    public function store(Request $request)
    {
    	$cemental = new Cemental;
        $cemental->Id_Raza = $request->input('Id_Conejo_Macho')[0];
        $cemental->Id_Conejo_Macho = $request->input('Id_Conejo_Macho');
    	$cemental->save();
        return redirect('/cemental');
    }

    public function index(Request $request)
    {
        if($request->Id_Conejo_Macho)
        {   
            $cementales = Cemental::where('Id_Conejo_Macho', $request->Id_Conejo_Macho)->get();
        } else {
            $cementales = Cemental::all();
        }
        return view ('ConejoCemental.index',['cementales'=> $cementales]);
    }
}
