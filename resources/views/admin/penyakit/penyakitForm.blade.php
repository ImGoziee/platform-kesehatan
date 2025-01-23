{{-- <form method="POST" id="obat-form" action="{{ $obat->id_obat ? route('admin.obat.update', $obat->id_obat) : route('admin.obat.store') }}" enctype="multipart/form-data" class="m-4 border rounded-xl p-4 bg-white">
    @csrf
    @if ($obat->id_obat)
        @method('PUT')
    @endif
    <!-- <input type="hidden" name="_method" value="PUT"> -->

    <div class="flex justify-between items-center pb-4 mb-4 border-b">
        <h2 class="text-lg font-bold">{{ $obat->id_obat ? 'Edit obat' : 'Add obat' }}</h2>
        <!-- Tombol Close -->
        <button type="button" onclick="closeForm()" class="px-2.5 py-1 bg-gray-100 border-2 border-gray-300 text-gray-400 rounded-md">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <div class="mb-4">
        <label for="nama_obat" class="block font-medium text-gray-700">Name</label>
        <input type="text" name="nama_obat" id="nama_obat" value="{{ old('nama_obat', $obat->nama_obat) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
    </div>

    <div class="mb-4">
        <label for="resep_obat" class="block font-medium text-gray-700">Resep</label>
        <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" name="resep_obat" id="resep_obat">{{ old('resep_obat', $obat->resep_obat) }}</textarea>
    </div>

    <div class="mb-4">
        <label for="deskripsi_obat" class="block font-medium text-gray-700">Deskripsi</label>
        <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" name="deskripsi_obat" id="deskripsi_obat">{{ old('deskripsi_obat', $obat->deskripsi_obat) }}</textarea>
    </div>

    <div class="mb-4">
        @if($obat->id_ilustrasi_obat)
        <div class="flex justify-center w-full"><img class="w-40 max-w-40" src="{{ asset('storage/' . $g->ilustrasi_obat) }}" alt="Illustration"></div>
        @endif
        <label for="ilustrasi_obat" class="block font-medium text-gray-700">Ilustrasi</label>
        <input type="file" class="form-control" id="ilustrasi_obat" name="ilustrasi_obat">
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
        {{ $obat->id_obat ? 'Update obat' : 'Add obat' }}
    </button>
</form>

<script>
    function closeForm() {
        const formContainer = document.getElementById('obat-form');
        formContainer.classList.add('hidden');  // Menyembunyikan form
        formContainer.querySelector('form').reset();  // Mereset form
        formContainer.querySelector('form input[name="_method"]').remove();
        formContainer.querySelector('form button[type="submit"]').innerText = 'Add obat';  // Mereset form
    }

    document.addEventListener('DOMContentLoaded', function() {
        const addobatBtn = document.getElementById('add-obat-btn');
        const obatForm = document.getElementById('obat-form');
        const editButtons = document.querySelectorAll('.edit-obat-btn');

        // Tombol Add obat
        addobatBtn.addEventListener('click', function() {
            obatForm.classList.remove('hidden');
            obatForm.querySelector('form').reset();  // Reset form untuk Add
        });

        // Tombol Edit obat
        editButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const obatId = this.dataset.id;
                const obatName = this.dataset.nama;
                const obatResep = this.dataset.resep;
                const obatDeskirpsi = this.dataset.deskripsi;
                const obatImage = this.dataset.image;
                console.log(this.dataset)
                obatForm.classList.remove('hidden');  // Menampilkan form
                const form = obatForm.querySelector('form');

                form.innerHTML += `<input type="hidden" name="_method" value="PUT">`;  // Mengatur method PUT
                form.action = `/admin/obat/${obatId}`;
                form.querySelector('input[name="nama_obat"]').value = obatName;
                form.querySelector('textarea[name="resep_obat"]').value = obatResep;
                form.querySelector('textarea[name="deskripsi_obat"]').value = obatDeskirpsi;
                form.querySelector('button[type="submit"]').innerText = 'Update obat';
            });
        });
    });
</script> --}}
