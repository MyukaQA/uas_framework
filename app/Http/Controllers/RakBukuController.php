<?php

namespace App\Http\Controllers;

use App\Buku;
use App\RakBuku;
use Illuminate\Http\Request;
use Validator;

class RakBukuController extends Controller
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
            'rak_buku' => 'required|min:3'
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        RakBuku::create($request->all());

        toast('Kode rak buku berhasil di buat', 'success')->autoClose(3000);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rak = RakBuku::find($id);

        return view('crudedit.rakedit', compact('rak'));
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
            'rak_buku' => 'required|min:3'
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $rak = RakBuku::find($id);
        $rak->update($request->all());

        toast('Kode rak buku berhasil di update', 'success')->autoClose(3000);
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
        $rak = RakBuku::find($id);
        $buku = Buku::where('rak_buku_id', $rak->id)->first();

        if(is_null($buku)){
            $rak->delete($rak);
        }else{
            toast('Rak Buku ini dipakai di salah satu buku', 'error')->autoClose(3000);
            return back();
        }

        toast('Kode rak berhasil di hapus', 'success')->autoClose(3000);
        return redirect('dashboard');
    }
}
