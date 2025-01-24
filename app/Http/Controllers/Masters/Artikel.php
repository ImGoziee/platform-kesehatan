<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use App\Models\Artikel as ModelsArtikel;
use Illuminate\Http\Request;

class Artikel extends Controller
{
    public function index()
    {
        $artikels = ModelsArtikel::all();
        return view('admin.artikel.artikel', compact('artikels'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
                'isi_artikel' => 'required|string|max:255',
                'gambar_artikel' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Gambar opsional saat update
            ]);


            $fotoPath = null;
            if ($request->hasFile('gambar_artikel')) {
                $fotoPath = $request->file('gambar_artikel')->store('image/artikel', 'public');
            }

            ModelsArtikel::create([
                'judul_artikel' => $request->judul,
                'isi_artikel' => $request->isi_artikel,
                'gambar_artikel' => $fotoPath,
            ]);
            // dd($request->all());

            return redirect()->route('admin.artikel.index')->with('success', 'Data added successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $artikel = ModelsArtikel::findOrFail($id);

            $request->validate([
                'judul' => 'required|string|max:255',
                'isi_artikel' => 'required|string|max:255',
                'gambar_artikel' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Gambar opsional saat update
            ]);

            $updateData = [
                'judul' => $request->judul,
                'isi_artikel' => $request->isi_artikel,
            ];

            if ($request->hasFile('gambar_artikel')) {
                $fotoPath = $request->file('gambar_artikel')->store('image/artikel', 'public');
                $updateData['gambar_artikel'] = $fotoPath;
            }

            $artikel->update($updateData);

            return redirect()->route('admin.artikel.index')->with('success', 'Data updated successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function destroy($id){
        $artikel = ModelsArtikel::findOrFail($id);
        $artikel->delete();
        
        return redirect()->route('admin.artikel.index')->with('success', 'Data delete successfully.');
    }
}
