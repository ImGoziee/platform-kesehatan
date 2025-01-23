<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use App\Models\ahli;
use Illuminate\Http\Request;

class Ahlis extends Controller
{
    public function index()
    {
        $ahli = ahli::all();
        return view('admin.ahli.ahli', compact('ahli'));
    }

    public function store(Request $request)
    {
        try {
            
            $request->validate([
                'nama_ahli' => 'required|string|max:255',
                'email_ahli' => 'required|string|max:255',
                'nomor_ahli' => 'required|string|max:255',
                'deskripsi_ahli' => 'required|string|max:255',
                'foto_ahli' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Gambar opsional saat update
            ]);

            $fotoPath = null;
            if ($request->hasFile('foto_ahli')) {
                $fotoPath = $request->file('foto_ahli')->store('image/ahli', 'public');
            }

            ahli::create([
                'nama_ahli' => $request->nama_ahli,
                'email_ahli' => $request->email_ahli,
                'nomor_ahli' => $request->nomor_ahli,
                'deskripsi_ahli' => $request->deskripsi_ahli,
                'foto_ahli' => $fotoPath,
                'id_obat' => 2,
            ]);

            return redirect()->route('admin.ahli.index')->with('success', 'Data added successfully.');

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
            'nama_ahli' => 'required|string|max:255',
            'email_ahli' => 'required|string|max:255',
            'nomor_ahli' => 'required|string|max:255',
            'deskripsi_ahli' => 'required|string|max:255',
            'foto_ahli' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Gambar opsional saat update
        ]);

        // Temukan obat berdasarkan ID
        $ahli = ahli::findOrFail($id);

        if ($request->hasFile('foto_ahli')) {
            if ($ahli->foto_ahli && file_exists(public_path('storage/' . $ahli->foto_ahli))) {
                unlink(public_path('storage/' . $ahli->foto_ahli));  // Menghapus gambar lama
            }

            $fotoPath = $request->file('foto_ahli')->store('image/ahli', 'public');
        } else {
            $fotoPath = $ahli->foto_ahli;
        }

        // Perbarui data obat
        $ahli->update([
            'nama_ahli' => $request->nama_ahli,
            'email_ahli' => $request->email_ahli,
            'nomor_ahli' => $request->nomor_ahli,
            'deskripsi_ahli' => $request->deskripsi_ahli,
            'foto_ahli' => $fotoPath,
            'id_obat' => 2,
        ]);

        return redirect()->route('admin.ahli.index')->with('success', 'Data updated successfully.');

    } catch (\Throwable $th) {
        // Tangani error jika ada
        dd($th);
    }
}

    


    public function destroy(Request $req, $id)
    {
        $ahli = ahli::findOrFail($id);
        $ahli->delete();

        return redirect()->route('admin.ahli.index')->with('success', 'Data deleted successfully.');
    }

}
