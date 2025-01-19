<x-layouts.admin :title="'Users Management'">

    <h1 class="text-2xl font-bold mb-4">Users Management</h1>

    <!-- Tombol Add User -->
    <button id="add-user-btn" class="px-4 py-2 mb-4 bg-green-500 text-white rounded hover:bg-green-600">
        Add User
    </button>

    <!-- Form Add/Edit -->
    <div id="user-form" class="hidden">
        @include('admin.users.usersForm', ['user' => new \App\Models\User()])
    </div>

    <!-- Tabel Data Users -->
    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border border-gray-300 px-4 py-2">#</th>
                <th class="border border-gray-300 px-4 py-2">Name</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $user->username }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <!-- Tombol Edit -->
                        <button class="edit-user-btn text-blue-500 hover:underline" data-id="{{ $user->id }}"
                            data-name="{{ $user->name }}" data-email="{{ $user->email }}">
                            Edit
                        </button>

                        <!-- Tombol Delete -->
                        {{-- <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layouts.admin>