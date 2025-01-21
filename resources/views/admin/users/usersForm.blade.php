<form method="POST" id="user-form" action="{{ $user->id_user ? route('admin.users.update', $user->id_user) : route('admin.users.store') }}" class="m-4 border rounded-xl p-4 bg-white">
    @csrf
    @if ($user->id_user)
        @method('PUT')
    @endif
    <!-- <input type="hidden" name="_method" value="PUT"> -->

    <div class="flex justify-between items-center pb-4 mb-4 border-b">
        <h2 class="text-lg font-bold">{{ $user->id_user ? 'Edit User' : 'Add User' }}</h2>
        <!-- Tombol Close -->
        <button type="button" onclick="closeForm()" class="px-2.5 py-1 bg-gray-100 border-2 border-gray-300 text-gray-400 rounded-md">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <div class="mb-4">
        <label for="name" class="block font-medium text-gray-700">Name</label>
        <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
    </div>

    <div class="mb-4">
        <label for="email" class="block font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
    </div>

    <div class="mb-4">
        <label for="password" class="block font-medium text-gray-700">Password</label>
        <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
        @if ($user->id_user)
            <small class="text-gray-500">Kosongkan jika tidak ingin mengubah password</small>
        @endif
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
        {{ $user->id_user ? 'Update User' : 'Add User' }}
    </button>
</form>

<script>
    function closeForm() {
        const formContainer = document.getElementById('user-form');
        formContainer.classList.add('hidden');  // Menyembunyikan form
        formContainer.querySelector('form').reset();  // Mereset form
        formContainer.querySelector('form input[name="_method"]').remove();
        formContainer.querySelector('form button[type="submit"]').innerText = 'Add User';  // Mereset form
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
                console.log(this.dataset)
                userForm.classList.remove('hidden');  // Menampilkan form
                const form = userForm.querySelector('form');

                form.innerHTML += `<input type="hidden" name="_method" value="PUT">`;  // Mengatur method PUT
                form.action = `/admin/users/${userId}`;
                form.querySelector('input[name="username"]').value = userName;
                form.querySelector('input[name="email"]').value = userEmail;
                form.querySelector('input[name="password"]').value = '';
                form.querySelector('button[type="submit"]').innerText = 'Update User';
            });
        });
    });
</script>
