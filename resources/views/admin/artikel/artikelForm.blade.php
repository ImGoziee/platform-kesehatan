<form method="POST" id="artikel-form" action="{{ $artikel->id_artikel ? route('admin.artikel.update', $artikel->id_artikel) : route('admin.artikel.store') }}"  enctype="multipart/form-data" class="m-4 border rounded-xl p-4 bg-white">
    @csrf
    @if ($artikel->id_artikel)
        @method('PUT')
    @endif
    {{--  --}}
    <!-- <input type="hidden" name="_method" value="PUT"> -->

    <div class="flex justify-between items-center pb-4 mb-4 border-b">
        <h2 class="text-lg font-bold"></h2>
        <!-- Tombol Close -->
        <button type="button" onclick="closeForm()" class="px-2.5 py-1 bg-gray-100 border-2 border-gray-300 text-gray-400 rounded-md">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <div class="mb-4">
        <label for="judul" class="block font-medium text-gray-700">Judul</label>
        <input type="text" name="judul" id="judul" value="" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
    </div>

    <div class="mb-4">
        <label for="isi_artikel" class="block font-medium text-gray-700">Isi Artikel</label>
        <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" name="isi_artikel" id="isi_artikel"></textarea>
    </div>


    <div class="mb-4">
        @if($artikel->gambar_artikel)
        <div class="flex justify-center w-full"><img class="w-40 max-w-40" src="{{ asset('storage/' . $artikel->gambar_artikel) }}" alt="Image"></div>
        @endif
        <label for="gambar_artikel" class="block font-medium text-gray-700">Ilustrasi</label>
        <input type="file" class="form-control" id="gambar_artikel" name="gambar_artikel">
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
        {{ $artikel->id_artikel ? 'Update Data' : 'Add Data' }}
    </button>
</form>

<script>
    function closeForm() {
        const formContainer = document.getElementById('artikel-form');
        formContainer.classList.add('hidden');  // Menyembunyikan form
        formContainer.querySelector('form').reset();  // Mereset form
        formContainer.querySelector('form input[name="_method"]').remove();
        formContainer.querySelector('form button[type="submit"]').innerText = 'Add Artikel';  // Mereset form
    }

    document.addEventListener('DOMContentLoaded', function() {
        const addpenyakitBtn = document.getElementById('add-artikel-btn');
        const penyakitForm = document.getElementById('artikel-form');
        const editButtons = document.querySelectorAll('.edit-artikel-btn');

        // Tombol Add obat
        addpenyakitBtn.addEventListener('click', function() {
            penyakitForm.classList.remove('hidden');
            penyakitForm.querySelector('form').reset();  // Reset form untuk Add
        });

        // Tombol Edit obat
        editButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const artikelId = this.dataset.id;
                const artikelJudul = this.dataset.judul;
                const artikelIsi = this.dataset.isi;

                console.log(this.dataset);

                penyakitForm.classList.remove('hidden');
                const form = penyakitForm.querySelector('form');

                form.querySelector('input[name="_method"]')?.remove();
                
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'PUT';
                form.appendChild(methodInput);

                form.action = `/admin/artikel/${artikelId}`;
                
                form.querySelector('input[name="judul"]').value = artikelJudul;
                
                form.querySelector('textarea[name="isi_artikel"]').value = artikelIsi;
                
                form.querySelector('button[type="submit"]').innerText = 'Update Data';
            });
        });
    });
</script>
