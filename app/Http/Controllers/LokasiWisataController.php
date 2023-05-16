<?php

namespace App\Http\Controllers;


use App\Models\LokasiWisata;
use Illuminate\Http\Request;
use App\Http\Requests\LokasiWisataRequest;

class LokasiWisataController extends Controller
{
    public function index(){
        $LokasiWisata = LokasiWisata::get();
        return view ('index', compact('LokasiWisata') );
        }

        public function tambah(){
        return view ('tambah');
      }

      public function edit($id){
        $LokasiWisata = LokasiWisata::where('id', $id)->first();
        return view ('edit',compact('LokasiWisata'));
      }

      public function lihat($id){
        $LokasiWisata = LokasiWisata::where('id', $id)->first();
        return view ('lihat',compact('LokasiWisata'));
      }


    public function store(LokasiWisataRequest $request)
    {
        $LokasiWisata = new LokasiWisata ();

        $LokasiWisata->nama_tempat_wisata     = $request->nama_tempat_wisata;
        $LokasiWisata->sejarah_singkat    =  $request->sejarah_singkat;

        $LokasiWisata->save();

        return redirect('/');
    } 
    
    public function update(LokasiWisataRequest $request,$id)
    {
        $LokasiWisata = LokasiWisata::where('id', $id)->first();
        $LokasiWisata->nama_tempat_wisata    = $request->nama_tempat_wisata;
        $LokasiWisata->sejarah_singkat    =  $request->sejarah_singkat;
    
        $LokasiWisata->update();

        return redirect('/');
    }   

    public function hapus($id)
    {
        $LokasiWisata = LokasiWisata::where('id', $id)->first();

        $LokasiWisata->delete();

        return redirect('/');
    }  

}