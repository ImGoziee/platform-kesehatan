<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class Obats extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('admin.obat.obat', compact('obat'));
    }

    public function store(Request $request)
    {
        try {
            
            $request->validate([
                'nama_obat' => 'required|string|max:255',
                'resep_obat' => 'required|string|max:255',
                'deskripsi_obat' => 'required|string|max:255',
                'ilustrasi_obat' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $ilustrasiPath = null;
            if ($request->hasFile('ilustrasi_obat')) {
                $ilustrasiPath = $request->file('ilustrasi_obat')->store('image/obat', 'public');
            }
            Obat::create([
                'nama_obat' => $request->nama_obat,
                'resep_obat' => $request->resep_obat,
                'deskripsi_obat' => $request->deskripsi_obat,
                'ilustrasi_obat' => $ilustrasiPath,
                'id_ahli' => 2,
                'id_penyakit' => 2,
            ]);

            return redirect()->route('admin.obat.index')->with('success', 'Data added successfully.');

        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }



    }

    public function update(Request $request, $id)
{
    try {
        // Validasi data input
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'resep_obat' => 'required|string|max:255',
            'deskripsi_obat' => 'required|string|max:255',
            'ilustrasi_obat' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Gambar opsional saat update
        ]);

        // Temukan obat berdasarkan ID
        $obat = Obat::findOrFail($id);

        if ($request->hasFile('ilustrasi_obat')) {
            if ($obat->ilustrasi_obat && file_exists(public_path('storage/' . $obat->ilustrasi_obat))) {
                unlink(public_path('storage/' . $obat->ilustrasi_obat));  // Menghapus gambar lama
            }

            $ilustrasiPath = $request->file('ilustrasi_obat')->store('image/obat', 'public');
        } else {
            $ilustrasiPath = $obat->ilustrasi_obat;
        }

        // Perbarui data obat
        $obat->update([
            'nama_obat' => $request->nama_obat,
            'resep_obat' => $request->resep_obat,
            'deskripsi_obat' => $request->deskripsi_obat,
            'ilustrasi_obat' => $ilustrasiPath, // Menyimpan path gambar (jika ada)
            'id_ahli' => 2,  // Gantilah dengan ID ahli yang sesuai
            'id_penyakit' => 2,  // Gantilah dengan ID penyakit yang sesuai
        ]);

        return redirect()->route('admin.obat.index')->with('success', 'Data updated successfully.');

    } catch (\Throwable $th) {
        // Tangani error jika ada
        dd($th);
    }
}

    


    public function destroy(Request $req, $id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('admin.obat.index')->with('success', 'Data deleted successfully.');
    }

}
