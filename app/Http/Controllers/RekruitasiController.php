<?php

namespace App\Http\Controllers;

use App\Models\Rekruitasi;
use Dotenv\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class RekruitasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('rekruitasis')->get();
        $response = [
            'message' => "show all data",
            'data' => $data
        ];
        return response()->json($response, 200);
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
        $validator = FacadesValidator::make($request->all(), [
            'nama' => ['required'],
            'ktp' => ['required'],
            'lahir' => ['required'],
            'pendidikan' => ['required'],
            'divisi' => ['required'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        try {
            $save = Rekruitasi::create($request->all());
            $response = [
                'message' => 'kamu berhasil mendaftar',
                'data' => $save
            ];
            return response()->json($response, 201);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'kamu gagal mendaftar' . $e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekruitasi  $rekruitasi
     * @return \Illuminate\Http\Response
     */
    public function show(Rekruitasi $rekruitasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekruitasi  $rekruitasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekruitasi $rekruitasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekruitasi  $rekruitasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $save = Rekruitasi::findorfail($id);
        $validator = FacadesValidator::make($request->all(), [
            'nama' => ['required'],
            'ktp' => ['required'],
            'lahir' => ['required'],
            'pendidikan' => ['required'],
            'divisi' => ['required'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        try {
            $save->update($request->all());
            $response = [
                'message' => 'Data berhasil diperbaharui',
                'data' => $save
            ];
            return response()->json($response, 201);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Data gagal diperbaharui' . $e->errorInfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekruitasi  $rekruitasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Rekruitasi::findorfail($id);
        try {
            $delete->delete();
            $response = [
                'message' => 'Data berhasil dihapus',
            ];
            return response()->json($response, 200);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Data gagal dihapus' . $e->errorInfo
            ]);
        }
    }
    public function approve($id)
    {
        $approve = Rekruitasi::findorfail($id);
        $approve->status = 'approve';
        $approve->save();

        $response = [
            'message' => 'kamu di terima',
            'data' => $approve
        ];
        return response()->json($response, 201);
    }
    public function decline($id)
    {
        $decline = Rekruitasi::findorfail($id);
        $decline->delete();

        $response = [
            'message' => 'kamu di tolak',
            'data' => $decline
        ];
        return response()->json($response, 201);
    }
}
