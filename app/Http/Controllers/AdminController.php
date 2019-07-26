<?php

namespace App\Http\Controllers;

use App\LichMo;
use DB;
use Illuminate\Http\Request;
use Excel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lich= LichMo::all();
        return view('admin')->with('lich', $lich);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return LichMo::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Log::info($request);
         LichMo::insert($request->all());
         return "ok";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data=$request->id;
        $lich=LichMo::where(['ID'=>$data])->get();
        return $lich;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        $this->validate($request,[
            'selectFile'=>'required|mimes:xls,xlsx'
        ]);
        $path=$request->file('selectFile')->getRealPath();
        $data =\Excel::load($path)->get();
        if($data->count()>0){

            foreach($data->toArray() as $key =>$value){
                $insert_data[]=array(

                    'stt'=>$value['stt'],
                    'tenbenhnhan'=>$value['hoten'],
                    'tuoi'=>$value['tuoi'],
                    'khoa'=>$value['khoa'],
                    'chandoan'=>$value['chandoan'],
                    'ppphauthuat'=>$value['ppphauthuat'],
                    'bsphauthuat'=>$value['bsphauthuat'],
                    'ppvocamvagiamdau'=>$value['ppvocam'],
                    'bsgayme'=>$value['bsgayme'],
                    'giomodukien'=>$value['giomo'],
                    'trangthaicuabenhnhan'=>$value['trangthai'],
                    'ngay'=>$value['ngay']
                );
            }
            if(!empty($insert_data)){
                DB::table('lich_mos')->insert($insert_data);
            }
        }
        return back()->with('success','import thành công');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        unset($request->id);
        LichMo::where(['ID'=>$id])->update(['stt'=>$request->stt,'ngay'=>$request->ngay,'tenbenhnhan'=>$request->tenbenhnhan,'khoa'=>$request->khoa,'chandoan'=>$request->chandoan
        ,'ppphauthuat'=>$request->ppphauthuat,'bsphauthuat'=>$request->bsphauthuat,'ppvocamvagiamdau'=>$request->ppvocamvagiamdau,
            'bsgayme'=>$request->bsgayme,'giomodukien'=>$request->giomodukien,'trangthaicuabenhnhan'=>$request->trangthaicuabenhnhan]);
        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        \Log::info($request);
        LichMo::where(['id'=>$request->id])->delete();
        return "delete success";
    }
}
