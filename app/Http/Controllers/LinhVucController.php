<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
use Illuminate\Support\Facades\DB;
class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linhvuc = DB::table('linhvuc')->get();
        return view('linh-vuc.Ds_linh_vuc',compact('linhvuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Form thêm mới
        return view('linh-vuc.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Xử lý thêm mới    
        $linhvuc = new LinhVuc;
        $linhvuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhvuc->save();

        return redirect()->route('linh-vuc.danh-sach');
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
        $linhvuc = LinhVuc::find($id);
        return view('linh-vuc.form',compact('linhvuc'));

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
        $linhvuc = LinhVuc::find($id);
        $linhvuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhvuc->save();

        return redirect()->route('linh-vuc.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linhvuc = LinhVuc::find($id);
        $linhvuc->forceDelete();
        return redirect()->route('linh-vuc.danh-sach');
    }
}
