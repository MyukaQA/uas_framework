<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Helpers\DataHelpers;
use App\Kategori;
use App\RakBuku;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public static $helper = DataHelpers::getInstance();    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $helper = DataHelpers::getInstance();

        if ($request->has('cari')){
            $bukus = Buku::where('judul', 'LIKE', '%'.$request->cari.'%')->orderBy('id', 'DESC')->paginate(10);
            $rakBukus = $helper->rakBukuObject();            
            $kategoris = $helper->kategoriObject();
        }else{
            $bukus = Buku::orderBy('id', 'DESC')->paginate(10);
            $kategoris = $helper->kategoriObject();
            $rakBukus = $helper->rakBukuObject();            
            
        }
        return view('dashboard.index', compact('bukus', 'kategoris', 'rakBukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
