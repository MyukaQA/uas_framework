<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewslatterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('role', 'user')->get();
        return view('newslatter.index', compact('user'));
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allUser(Request $request)
    {
        $subject = $request->subject;
        $isi = $request->deskripsi;
        $email = DB::table('users')->where('role','user')->pluck('email');
        // dd($email);
        dispatch(new SendEmailJob($subject,$isi,$email));
        
        toast('Email berhasil dikirim', 'success')->autoClose(3000);
        return redirect()->back();
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function oneUser(Request $request)
    {
        $subject = $request->subject;
        $isi = $request->deskripsi;
        $email = $request->email;
        // dd($email);
        
        if($email == "null"){
            toast('gagal', 'error')->autoClose(3000);
            return redirect()->back();
        }else{
            dispatch(new SendEmailJob($subject,$isi,$email));
        }
        
        toast('berhasil', 'success')->autoClose(3000);
        return redirect()->back();
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
