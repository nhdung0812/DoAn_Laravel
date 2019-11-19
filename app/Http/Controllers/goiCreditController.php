<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;
class goiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $goicredit = GoiCredit::all();
        return view('Goi-Credit.Ds_goi_credit',compact('goicredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Thêm Gói Credit
        return view('Goi-Credit.form-goi');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Thêm Gói Credit
        $goicredit = new GoiCredit;
        $goicredit->ten_goi = $request->ten_goi_credit;
        $goicredit->credit = $request->credit;
        $goicredit->so_tien = $request->so_tien;
        $goicredit->save();
        
        return redirect()->route('goi-credit.danh-sach');
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
        //Cập Nhật Gói Credit
        $goicredit = GoiCredit::find($id);
        return view('Goi-Credit.form-goi', compact('goicredit'));
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
        $goicredit = GoiCredit::find($id);
        $goicredit->ten_goi = $request->ten_goi_credit;
        $goicredit->credit = $request->credit;
        $goicredit->so_tien = $request->so_tien;
        $goicredit->save();

        return redirect()->route('goi-credit.danh-sach');
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
        $cauhoi = GoiCredit::find($id);
        $cauhoi->forceDelete();
        return redirect()->route('goi-credit.danh-sach');
    }
}
