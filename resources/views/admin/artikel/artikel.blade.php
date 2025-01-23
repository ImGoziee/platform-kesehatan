<x-layouts.admin :title="'Management Artikel'">

    <div class="flex items-center m-4 p-4 justify-between bg-white rounded-xl shadow-md">
        <h1 class="text-xl font-semibold text-gray-700">Management Artikel</h1>

        <!-- Tombol Add User -->
        <button id="add-artikel-btn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
            Add Data
        </button>
    </div>

    <!-- Form Add/Edit -->
    <div id="artikel-form" class="hidden">
        @include('admin.artikel.artikelForm', ['artikel' => new \App\Models\Artikel()])
    </div>

    <!-- Tabel Data Users -->
    <div class="bg-white mx-4 p-4 rounded-xl shadow-md">
        <table class="w-full border border-gray-300 rounded-md overflow-hidden shadow-sm">
            <thead class="bg-[#f2f2f2]">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Judul</th>
                    <th class="border border-gray-300 px-4 py-2">Isi Artikel</th>
                    <th class="border border-gray-300 px-4 py-2">Gambar Artikel</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikels as $artikel)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $artikel->judul_artikel }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $artikel->Isi_artikel }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center w-full"><img class="w-40 max-w-40" src="{{ asset('storage/' . $artikel->gambar_artikel) }}" alt="Illustration"></div>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center gap-1">
                                <!-- Tombol Edit -->
                                <button class="edit-artikel-btn bg-yellow-400 py-1 px-2 rounded-md text-white hover:bg-yellow-500"
                                    data-id="{{ $artikel->id_artikel }}" data-judul="{{ $artikel->judul_artikel }}" data-isi="{{ $artikel->Isi_artikel }}">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <!-- Tombol Delete -->
                                <form action="{{ route('admin.artikel.destroy', $artikel->id_artikel) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white bg-red-500 py-1 px-2 rounded-md hover:bg-red-600">
                                        <i class="fa-solid fa-trash mx-0.5"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.admin>
