<?php

namespace App\Http\Controllers;


use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function kriteria(){
        $data = Kriteria::all();
        return view ('kriteria', compact('data'));
    }

    public function tambahkriteria(){
        return view('tambahkriteria');
    }

    public function insertkriteria(Request $request){
        //dd($request->all());
        Kriteria::create($request->all());
        return redirect()->route('kriteria');
  }

    public function tampilkankriteria($id){
        $data = Kriteria::find($id);
        //dd($data);

        return view('tampilkankriteria', compact('data'));
        

    }

    public function updatekriteria(Request $request, $id){
        $data = Kriteria::find($id);
        $data->update($request->all());
        return redirect()->route('kriteria');
    }

    public function delete($id){
        $data = Kriteria::find($id);
        $data->delete();
        return redirect()->route('kriteria');
    }


}
