<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cauhoi = CauHoi::all();
        return view('Cau-Hoi.Ds_Cau_Hoi',compact('cauhoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $linhvuc = LinhVuc::all();
        return view('Cau-Hoi.form-them',compact('linhvuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Xử lý Thêm Câu Hỏi
        $cauhoi = new CauHoi;
        $cauhoi->noi_dung = $request->noi_dung_cau_hoi;
        $cauhoi->linh_vuc_id = $request->linh_vuc;
        $cauhoi->phuong_an_a = $request->phuong_an_a;
        $cauhoi->phuong_an_b = $request->phuong_an_b;
        $cauhoi->phuong_an_c = $request->phuong_an_c;
        $cauhoi->phuong_an_d = $request->phuong_an_d;
        $cauhoi->dap_an = $request->dap_an;
        $cauhoi->save();
        return redirect()->route('cau-hoi.danh-sach');
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
        //cập nhật câu hỏi 
        $cauhoi = CauHoi::find($id);
        $linhvuc = LinhVuc::all();
        return view('Cau-Hoi.form-them', compact('cauhoi','linhvuc'));
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
        //Xử lý cập nhật 
        $cauhoi = CauHoi::find($id);
        $cauhoi->noi_dung = $request->noi_dung_cau_hoi;
        $cauhoi->linh_vuc_id = $request->linh_vuc;
        $cauhoi->phuong_an_a = $request->phuong_an_a;
        $cauhoi->phuong_an_b = $request->phuong_an_b;
        $cauhoi->phuong_an_c = $request->phuong_an_c;
        $cauhoi->phuong_an_d = $request->phuong_an_d;
        $cauhoi->dap_an = $request->dap_an;
        $cauhoi->save();
        return redirect()->route('cau-hoi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Xóa dữ liệu khỏi Database
        $cauhoi = CauHoi::find($id);
        $cauhoi->forceDelete();
        return redirect()->route('cau-hoi.danh-sach');
    }
}
