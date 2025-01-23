<x-layouts.admin :title="'Kelola Ahli'">

    <div class="flex items-center m-4 p-4 justify-between bg-white rounded-xl shadow-md">
        <h1 class="text-xl font-semibold text-gray-700">Kelola "Ahli"</h1>

        <!-- Tombol Add User -->
        <button id="add-ahli-btn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
            Add Ahli
        </button>
    </div>

    <!-- Form Add/Edit -->
    <div id="ahli-form" class="hidden">
        @include('admin.ahli.ahliForm', ['ahli' => new \App\Models\ahli()])
    </div>

    <!-- Tabel Data Users -->
    <div class="bg-white mx-4 p-4 rounded-xl shadow-md">
        <table class="w-full border border-gray-300 rounded-md overflow-hidden shadow-sm">
            <thead class="bg-[#f2f2f2]">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Foto</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Nomor</th>
                    <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ahli as $l)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $l->nama_ahli }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center w-full"><img class="w-40 max-w-40" src="{{ asset('storage/' . $l->foto_ahli) }}" alt="Image"></div>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ $l->email_ahli}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $l->nomor_ahli}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $l->deskripsi_ahli}}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center gap-1">
                                <!-- Tombol Edit -->
                                <button class="edit-ahli-btn bg-yellow-400 py-1 px-2 rounded-md text-white hover:bg-yellow-500"
                                    data-id="{{ $l->id_ahli }}" data-nama="{{ $l->nama_ahli }}"
                                    data-image="{{ $l->foto_ahli }}" data-email="{{ $l->email_ahli }}"
                                    data-nomor="{{ $l->nomor_ahli }}" data-deskripsi="{{ $l->deskripsi_ahli }}">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <!-- Tombol Delete -->
                                <form action="{{ route('admin.ahli.destroy', $l->id_ahli) }}" method="POST"
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
