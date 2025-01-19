<form method="POST" action="{{ $user->id ? route('admin.users.update', $user->id) : route('admin.users.store') }}" class="mb-6 border border-gray-300 rounded p-4 bg-gray-50">
    @csrf
    @if ($user->id)
        @method('PUT')
    @endif

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-bold">{{ $user->id ? 'Edit User' : 'Add User' }}</h2>
        <!-- Tombol Close -->
        <button type="button" onclick="closeForm()" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
            Close
        </button>
    </div>

    <div class="mb-4">
        <label for="name" class="block font-medium text-gray-700">Name</label>
        <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" class="w-full px-3 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-200">
    </div>

    <div class="mb-4">
        <label for="email" class="block font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full px-3 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-200">
    </div>

    <div class="mb-4">
        <label for="password" class="block font-medium text-gray-700">Password</label>
        <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-200">
        @if ($user->id)
            <small class="text-gray-500">Kosongkan jika tidak ingin mengubah password</small>
        @endif
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
        {{ $user->id ? 'Update User' : 'Add User' }}
    </button>
</form>

<script>
    function closeForm() {
        const formContainer = document.getElementById('user-form');
        formContainer.classList.add('hidden');  // Menyembunyikan form
        formContainer.querySelector('form').reset();  // Mereset form
    }

    document.addEventListener('DOMContentLoaded', function() {
        const addUserBtn = document.getElementById('add-user-btn');
        const userForm = document.getElementById('user-form');
        const editButtons = document.querySelectorAll('.edit-user-btn');

        // Tombol Add User
        addUserBtn.addEventListener('click', function() {
            userForm.classList.remove('hidden');
            userForm.querySelector('form').reset();  // Reset form untuk Add
        });

        // Tombol Edit User
        editButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const userId = this.dataset.id;
                const userName = this.dataset.username;
                const userEmail = this.dataset.email;

                userForm.classList.remove('hidden');  // Menampilkan form
                const form = userForm.querySelector('form');

                form.action = `/admin/users/${userId}`;
                form.querySelector('input[name="username"]').value = userName;
                form.querySelector('input[name="email"]').value = userEmail;
                form.querySelector('input[name="password"]').value = '';
                form.innerHTML += `<input type="hidden" name="_method" value="PUT">`;  // Mengatur method PUT
            });
        });
    });
</script>
