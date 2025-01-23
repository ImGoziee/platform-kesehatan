<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class Penyakits extends Controller
{
    public function index()
    {
        $penyakits = Penyakit::all();
        return view('admin.penyakit.penyakit', compact('penyakits'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_penyakit' => 'required|string|max:255',
                'obat' => 'required|string|max:255',
                'penjelasan_penyakit' => 'required|string|max:255',
                'penyebab_penyakit' => 'required|string|max:255',
                'ilustrasi_penyakit' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Gambar opsional saat update
            ]);


            $fotoPath = null;
            if ($request->hasFile('ilustrasi_penyakit')) {
                $fotoPath = $request->file('ilustrasi_penyakit')->store('image/penyakit', 'public');
            }

            Penyakit::create([
                'nama_penyakit' => $request->nama_penyakit,
                'id_obat' => $request->obat,
                'penjelasan_penyakit' => $request->penjelasan_penyakit,
                'penyebab_penyakit' => $request->penyebab_penyakit,
                'ilustrasi_penyakit' => $fotoPath,
            ]);
            // dd($request->all());

            return redirect()->route('admin.penyakit.index')->with('success', 'Data added successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $penyakit = Penyakit::findOrFail($id);

            $request->validate([
                'nama_penyakit' => 'required|string|max:255',
                'obat' => 'required|string|max:255',
                'penjelasan_penyakit' => 'required|string|max:255',
                'penyebab_penyakit' => 'required|string|max:255',
                'ilustrasi_penyakit' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $updateData = [
                'nama_penyakit' => $request->nama_penyakit,
                'id_obat' => $request->obat,
                'penjelasan_penyakit' => $request->penjelasan_penyakit,
                'penyebab_penyakit' => $request->penyebab_penyakit,
            ];

            if ($request->hasFile('ilustrasi_penyakit')) {
                $fotoPath = $request->file('ilustrasi_penyakit')->store('image/penyakit', 'public');
                $updateData['ilustrasi_penyakit'] = $fotoPath;
            }

            $penyakit->update($updateData);

            return redirect()->route('admin.penyakit.index')->with('success', 'Data updated successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function destroy($id){
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->delete();
        
        return redirect()->route('admin.penyakit.index')->with('success', 'Data delete successfully.');
    }
}
