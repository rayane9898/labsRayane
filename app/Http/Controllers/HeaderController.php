<?php

namespace App\Http\Controllers;

use App\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header=Header::all();
        //
        return view("admin.header.index", compact("header"));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img = Storage::disk("public")->put("", $request->file('img'));
        $logo = Storage::disk("public")->put("", $request->file('logo'));
        $img2 = Storage::disk("public")->put("", $request->file('img2'));


        //
        $header = Header::find($id);
        $header->logo=$logo;
        $header->img=$img;
        $header->img2=$img2;
        $header->paragraphe=$request->input("paragraphe");
        $header->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        //
    }
}
