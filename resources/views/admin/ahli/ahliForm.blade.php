<form method="POST" id="ahli-form" action="{{ $ahli->id_ahli ? route('admin.ahli.update', $ahli->id_ahli) : route('admin.ahli.store') }}" enctype="multipart/form-data" class="m-4 border rounded-xl p-4 bg-white">
    @csrf
    @if ($ahli->id_ahli)
        @method('PUT')
    @endif
    <!-- <input type="hidden" name="_method" value="PUT"> -->

    <div class="flex justify-between items-center pb-4 mb-4 border-b">
        <h2 class="text-lg font-bold">{{ $ahli->id_ahli ? 'Edit ahli' : 'Add ahli' }}</h2>
        <!-- Tombol Close -->
        <button type="button" onclick="closeForm()" class="px-2.5 py-1 bg-gray-100 border-2 border-gray-300 text-gray-400 rounded-md">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <div class="mb-4">
        <label for="nama_ahli" class="block font-medium text-gray-700">Name</label>
        <input type="text" name="nama_ahli" id="nama_ahli" value="{{ old('nama_nama_ahli', $ahli->nama_ahli) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
    </div>
    
    <div class="mb-4">
        @if($ahli->foto_ahli)
        <div class="flex justify-center w-full"><img class="w-40 max-w-40" src="{{ asset('storage/' . $ahli->foto_ahli) }}" alt="Image"></div>
        @endif
        <label for="foto_ahli" class="block font-medium text-gray-700">Foto</label>
        <input type="file" class="form-control" id="foto_ahli" name="foto_ahli">
    </div>

    <div class="mb-4">
        <label for="email_ahli" class="block font-medium text-gray-700">Email</label>
        <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" name="email_ahli" id="email_ahli">{{ old('email_ahli', $ahli->email_ahli) }}</textarea>
    </div>

    <div class="mb-4">
        <label for="nomor_ahli" class="block font-medium text-gray-700">Nomor</label>
        <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" name="nomor_ahli" id="nomor_ahli">{{ old('nomor_ahli', $ahli->nomor_ahli) }}</textarea>
    </div>

    <div class="mb-4">
        <label for="deskripsi_ahli" class="block font-medium text-gray-700">Deskripsi</label>
        <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" name="deskripsi_ahli" id="deskripsi_ahli">{{ old('deskripsi_ahli', $ahli->deskripsi_ahli) }}</textarea>
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
        {{ $ahli->id_ahli ? 'Update ahli' : 'Add ahli' }}
    </button>
</form>

<script>
    function closeForm() {
        const formContainer = document.getElementById('ahli-form');
        formContainer.classList.add('hidden');  // Menyembunyikan form
        formContainer.querySelector('form').reset();  // Mereset form
        formContainer.querySelector('form input[name="_method"]').remove();
        formContainer.querySelector('form button[type="submit"]').innerText = 'Add ahli';  // Mereset form
    }

    document.addEventListener('DOMContentLoaded', function() {
        const addahliBtn = document.getElementById('add-ahli-btn');
        const Ahliform = document.getElementById('ahli-form');
        const editButtons = document.querySelectorAll('.edit-ahli-btn');

        // Tombol Add obat
        addahliBtn.addEventListener('click', function() {
            Ahliform.classList.remove('hidden');
            Ahliform.querySelector('form').reset();  // Reset form untuk Add
        });

        // Tombol Edit obat
        editButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const ahliId = this.dataset.id;
                const ahliNama = this.dataset.nama;
                const ahliEmail = this.dataset.email;
                const ahliNomor = this.dataset.nomor;
                const ahliDeskirpsi = this.dataset.deskripsi;
                const obatImage = this.dataset.image;
                console.log(this.dataset)
                Ahliform.classList.remove('hidden');  // Menampilkan form
                const form = Ahliform.querySelector('form');

                form.innerHTML += `<input type="hidden" name="_method" value="PUT">`;  // Mengatur method PUT
                form.action = `/admin/ahli/${ahliId}`;
                form.querySelector('input[name="nama_ahli"]').value = ahliNama;
                form.querySelector('textarea[name="email_ahli"]').value = ahliEmail;
                form.querySelector('textarea[name="nomor_ahli"]').value = ahliNomor;
                form.querySelector('textarea[name="deskripsi_ahli"]').value = ahliDeskirpsi;
                form.querySelector('button[type="submit"]').innerText = 'Update obat';
            });
        });
    });
</script>
