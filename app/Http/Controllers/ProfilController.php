<?php

namespace App\Http\Controllers;
use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profile = Profil::all();
        return view('profil.index',compact('profile'));
    }
    public function create()
    {
        return view('profil.create');
    }
    public function edit($id)
    {
        $profile = Profil::findOrFail($id);
        return view('profil.edit',compact('profile'));
    }
    public function store(Request $request)
    {
        $profile = Profil::create([
            'nama'=>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'usia'=>$request->usia,
            'hobi'=>$request->hobi,
        ]);

        flash()->success('Data berhasil di buat');

        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $profil = Profil::where('id', $id)->first();

        $profil->nama = $request->input('nama');
        $profil->usia = $request->input('usia');
        $profil->tempat_lahir = $request->input('tempat_lahir');
        $profil->tanggal_lahir = $request->input('tanggal_lahir');
        $profil->jenis_kelamin = $request->input('jenis_kelamin');
        $profil->hobi = $request->input('hobi');

        $profil->save();

        flash()->success('Profil berhasil di ubah');

        return redirect()->back();
    }
    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);
        $profil->delete();

        flash()->success('profil berhasil di hapus');

        return redirect()->back();
    }
}
