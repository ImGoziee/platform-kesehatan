<x-layouts.admin :title="'Management Penyakit'">
    <div class="flex items-center m-4 p-4 justify-between bg-white rounded-xl shadow-md">
        <h1 class="text-xl font-semibold text-gray-700">Management Penyakit</h1>

        <!-- Tombol Add User -->
        <button id="add-penyakit-btn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
            Add Data
        </button>
    </div>

    <!-- Form Add/Edit -->
    <div id="penyakit-form" class="hidden">
        @include('admin.penyakit.penyakitForm', [
        'penyakit' => new \App\Models\Penyakit(),
        'obats' => \App\Models\Obat::select('id_obat', 'nama_obat')->get()
    ])
    </div>

    <!-- Tabel Data Users -->
    <div class="bg-white mx-4 p-4 rounded-xl shadow-md">
        <table class="w-full border border-gray-300 rounded-md overflow-hidden shadow-sm">
            <thead class="bg-[#f2f2f2]">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Penjelasan</th>
                    <th class="border border-gray-300 px-4 py-2">Penyebab</th>
                    <th class="border border-gray-300 px-4 py-2">Ilustrasi</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penyakits as $penyakit)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $penyakit->nama_penyakit }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $penyakit->penjelasan_penyakit }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $penyakit->penyebab_penyakit }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center w-full"><img class="w-40 max-w-40" src="{{ asset('storage/' . $penyakit->ilustrasi_penyakit) }}" alt="Illustration"></div>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center gap-1">
                                <!-- Tombol Edit -->
                                <button class="edit-penyakit-btn bg-yellow-400 py-1 px-2 rounded-md text-white hover:bg-yellow-500"
                                    data-id="{{ $penyakit->id_penyakit }}" data-name="{{ $penyakit->nama_penyakit }}"
                                    data-penjelasan="{{ $penyakit->penjelasan_penyakit }}" data-obat="{{ $penyakit->id_obat }}" data-penyebab="{{ $penyakit->penyebab_penyakit }}" data-image="{{ $penyakit->ilustrasi_penyakit }}">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <!-- Tombol Delete -->
                                <form action="{{ route('admin.penyakit.destroy', $penyakit->id_penyakit) }}" method="POST"
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
