<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ValidasiHandphone;

class HandphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beranda()
    {
        $handphone = Handphone::paginate(6);
        return view('index', compact('handphone'));
    }

    public function index()
    {
        $handphone = Handphone::all();
        return view('admin.handphone.index', compact('handphone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.handphone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidasiHandphone $request)
    {
        $request->validated();

        if ($request->has('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'gambarhandphone/';
            $file->move($tujuan_upload, $nama_file);

            $handphone = new Handphone([
                'gambar' => $nama_file,
                'merk' => $request->merk,
                'harga' => $request->harga,
            ]);
        }

        $handphone->save();
        return redirect()->route('handphone');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function show(Handphone $handphone)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $handphone = Handphone::where('id', $id)->firstOrFail();
        return view('admin.handphone.edit', compact('handphone'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $handphone = Handphone::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('gambar')) {
            // Hapus gambar lama
            if (File::exists(public_path('gambarhandphone/' . $handphone->gambar))) {
                File::delete(public_path('gambarhandphone/' . $handphone->gambar));
            }

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'gambarhandphone/';
            $file->move($tujuan_upload, $nama_file);
            $data['gambar'] = "$nama_file";
        } else {
            unset($data['gambar']);
        }

        $handphone->update($data);
        return redirect('handphone');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $handphone = Handphone::find($id);

        // hapus gambar
        if (File::exists(public_path('gambarhandphone/' . $handphone->gambar))) {
            File::delete(public_path('gambarhandphone/' . $handphone->gambar));
        }

        $handphone->delete();
        return redirect('handphone');
    }
}
