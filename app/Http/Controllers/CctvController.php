<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cctv;

class CctvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cctv.index', [
            'cctv' => Cctv::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cctv.create-or-edit',['act'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'owner' => 'required',
            'ip_address' => 'required',
            'lokasi' => 'required',

            'link' => 'required',


        ]);
        Cctv::create([
            'owner' => $request->owner,
            'ip_address' => $request->ip_address,

            'lokasi' => $request->lokasi,
            'status' => $request->status ? 1 : 0,
            'link' => $request->link,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,

        ]);

        return redirect()->route('cctv.index')->with(['message'=>'Cctv Berhasil di Tambah!','status'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cctv  $cctv
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Cctv::find($id);
        return view('cctv.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cctv  $cctv
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cctv::find($id);
        return view('cctv.create-or-edit', [
            'data' => $data,
            'act' => 'edit'
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cctv  $cctv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            Cctv::where('id', $id)
            ->update([
                'owner' => $request->owner,
                'ip_address' => $request->ip_address,
                'lokasi' => $request->lokasi,
                'status' => $request->status ? 1 : 0,
                'link' => $request->link,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]);



        return redirect()->route('cctv.index')->with(['message'=>'Cctv Berhasil di Update!','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cctv  $cctv
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Cctv::destroy($id);
        return redirect()->route('cctv.index')->with(['message'=>'Cctv Berhasil di Delete','status'=>'success']);
    }
}
