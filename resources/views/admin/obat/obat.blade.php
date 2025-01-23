<x-layouts.admin :title="'Management Obat'">

    <div class="flex items-center m-4 p-4 justify-between bg-white rounded-xl shadow-md">
        <h1 class="text-xl font-semibold text-gray-700">Management Obat</h1>

        <!-- Tombol Add User -->
        <button id="add-obat-btn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
            Add Data
        </button>
    </div>

    <!-- Form Add/Edit -->
    <div id="obat-form" class="hidden">
        @include('admin.obat.obatForm', ['obat' => new \App\Models\Obat()])
    </div>

    <!-- Tabel Data Users -->
    <div class="bg-white mx-4 p-4 rounded-xl shadow-md">
        <table class="w-full border border-gray-300 rounded-md overflow-hidden shadow-sm">
            <thead class="bg-[#f2f2f2]">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Resep</th>
                    <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                    <th class="border border-gray-300 px-4 py-2">Ilustrasi</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($obat as $g)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $g->nama_obat }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $g->resep_obat }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $g->deskripsi_obat }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center w-full"><img class="w-40 max-w-40" src="{{ asset('storage/' . $g->ilustrasi_obat) }}" alt="Illustration"></div>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center gap-1">
                                <button class="edit-obat-btn bg-yellow-400 py-1 px-2 rounded-md text-white hover:bg-yellow-500"
                                    data-id="{{ $g->id_obat }}" 
                                    data-nama="{{ $g->nama_obat }}"
                                    data-resep="{{ $g->resep_obat }}"
                                    data-deskripsi="{{ $g->deskripsi_obat }}"
                                    data-image='{{ $g->ilustrasi_obat }}'>
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <form action="{{ route('admin.obat.destroy', $g->id_obat) }}" method="POST"
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
