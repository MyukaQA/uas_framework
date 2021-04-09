<?php

namespace App\Http\Controllers;

use App\Buku;
use App\FavoritBuku;
use App\Ulasan;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use Validator;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|min:3',
            'penulis' => 'required|min:3',
            'penerbit' => 'required|min:3',
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
        
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->kategori_id = $request->kategori;
        $buku->rak_buku_id = $request->rak_buku;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->detail = $request->detail;

        if($request->hasFile('cover_buku')){
            $request->file('cover_buku')->move('img/cover/', $request->file('cover_buku')->getClientOriginalName());
            $buku->cover_buku = $request->file('cover_buku')->getClientOriginalName();
        }

        $buku->save();

        toast('Buku berhasil dibuat', 'success')->autoClose(3000);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::find($id);
        $ulasan = Ulasan::all();
        $favorit = FavoritBuku::where([
            ['user_id',Auth::user()->id],
            ['buku_id',$buku->id]
        ])->first();

        // dd($favorit);

        return view('dashboard.detail', compact('buku', 'ulasan', 'favorit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bukuone = Buku::find($id);
        return view('crudedit.bukuedit', compact('bukuone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|min:3',
            'penulis' => 'required|min:3',
            'penerbit' => 'required|min:3',
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->kategori_id = $request->kategori;
        $buku->rak_buku_id = $request->rak_buku;
        $buku->detail = $request->detail;

        if($request->hasFile('cover_buku')){
            $request->file('cover_buku')->move('img/cover/', $request->file('cover_buku')->getClientOriginalName());
            $buku->cover_buku = $request->file('cover_buku')->getClientOriginalName();
            if($request->oldimg != 'default.png'){
                File::delete('img/cover/'.$request->oldimg);
            }
        }

        $buku->save();

        toast('Buku berhasil di update', 'success')->autoClose(3000);
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete($buku);
        if($buku->cover_buku != 'default.png'){
            File::delete('img/cover/'.$buku->cover_buku);
        }

        toast('Buku berhasil di hapus', 'success')->autoClose(3000);
        return redirect('dashboard');
    }
}
