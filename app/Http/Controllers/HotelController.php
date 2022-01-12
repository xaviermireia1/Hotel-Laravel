<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarHoteles(Request $request){
        if (empty($request->all())) {
            $listaHoteles = DB::table('tbl_hotel')->get();
        }else{
            $listaHoteles = DB::table('tbl_hotel')->where('City', 'like','%'.$request['City'].'%')->get();
        }
        return view('mostrarHoteles', compact('listaHoteles'));
    }
    public function crearHoteles(){
        return view('crear');
    }
    public function crearHotelesPost(Request $request){
        $datos = $request->except('_token');
        DB::table('tbl_hotel')->insertGetId(["Name"=>$datos['Name'],"City"=>$datos['City'],"Stars"=>$datos['Stars']]);
        return redirect('mostrar');
    }
    public function eliminarHotel($id){
        $hotel=DB::table('tbl_hotel')->where('id','=',$id)->delete();
        return redirect('mostrar');
    }
    public function modificarHoteles($id){
        $hotel=DB::table('tbl_hotel')->where('id','=',$id)->first();
        return view('modificar',compact('hotel'));
    }
    public function modificarHotelesPut(Request $request){
        $datos=$request->except('_token','_method');
        DB::table('tbl_hotel')->where('id','=',$datos['id'])->update($datos);
        return redirect('mostrar');
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
