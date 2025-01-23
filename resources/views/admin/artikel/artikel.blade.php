<x-layouts.admin :title="'Management Artikel'">

    <div class="flex items-center m-4 p-4 justify-between bg-white rounded-xl shadow-md">
        <h1 class="text-xl font-semibold text-gray-700">Management Artikel</h1>

        <!-- Tombol Add User -->
        <button id="add-user-btn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
            Add User
        </button>
    </div>

    <!-- Form Add/Edit -->
    <div id="user-form" class="hidden">
        @include('admin.users.usersForm', ['user' => new \App\Models\User()])
    </div>

    <!-- Tabel Data Users -->
    <div class="bg-white mx-4 p-4 rounded-xl shadow-md">
        <table class="w-full border border-gray-300 rounded-md overflow-hidden shadow-sm">
            <thead class="bg-[#f2f2f2]">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($users as $user)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->username }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center gap-1">
                                <!-- Tombol Edit -->
                                <button class="edit-user-btn bg-yellow-400 py-1 px-2 rounded-md text-white hover:bg-yellow-500"
                                    data-id="{{ $user->id_user }}" data-username="{{ $user->username }}"
                                    data-email="{{ $user->email }}">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <!-- Tombol Delete -->
                                <form action="{{ route('admin.users.destroy', $user->id_user) }}" method="POST"
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
                @endforeach --}}
            </tbody>
        </table>
    </div>

</x-layouts.admin>
