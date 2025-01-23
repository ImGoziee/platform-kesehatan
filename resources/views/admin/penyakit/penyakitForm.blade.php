<form method="POST" id="penyakit-form" action="{{ $penyakit->id_penyakit ? route('admin.penyakit.update', $penyakit->id_penyakit) : route('admin.penyakit.store') }}"  enctype="multipart/form-data" class="m-4 border rounded-xl p-4 bg-white">
    @csrf
    @if ($penyakit->id_penyakit)
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
        <label for="nama_penyakit" class="block font-medium text-gray-700">Name</label>
        <input type="text" name="nama_penyakit" id="nama_penyakit" value="" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
    </div>

    <div class="mb-4">
        <label for="Obat">Obat</label>
        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200"" data-trigger name="obat" id="obat" required>
            <option value="" disabled selected>Pilih Obat</option>
            @foreach ($obats as $obat)
                <option value="{{ $obat->id_obat }}">{{ $obat->nama_obat }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="penjelasan_penyakit" class="block font-medium text-gray-700">Penjelasan Penyakit</label>
        <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" name="penjelasan_penyakit" id="penjelasan_penyakit"></textarea>
    </div>

    <div class="mb-4">
        <label for="penyebab_penyakit" class="block font-medium text-gray-700">Penyebab Penyakit</label>
        <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" name="penyebab_penyakit" id="penyebab_penyakit"></textarea>
    </div>

    <div class="mb-4">
        @if($penyakit->ilustrasi_penyakit)
        <div class="flex justify-center w-full"><img class="w-40 max-w-40" src="{{ asset('storage/' . $penyakit->ilustrasi_penyakit) }}" alt="Image"></div>
        @endif
        <label for="ilustrasi_penyakit" class="block font-medium text-gray-700">Ilustrasi</label>
        <input type="file" class="form-control" id="ilustrasi_penyakit" name="ilustrasi_penyakit">
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
        {{ $penyakit->id_penyakit ? 'Update Data' : 'Add Data' }}
    </button>
</form>

<script>
    function closeForm() {
        const formContainer = document.getElementById('penyakit-form');
        formContainer.classList.add('hidden');  // Menyembunyikan form
        formContainer.querySelector('form').reset();  // Mereset form
        formContainer.querySelector('form input[name="_method"]').remove();
        formContainer.querySelector('form button[type="submit"]').innerText = 'Add Penyakit';  // Mereset form
    }

    document.addEventListener('DOMContentLoaded', function() {
        const addpenyakitBtn = document.getElementById('add-penyakit-btn');
        const penyakitForm = document.getElementById('penyakit-form');
        const editButtons = document.querySelectorAll('.edit-penyakit-btn');

        // Tombol Add obat
        addpenyakitBtn.addEventListener('click', function() {
            penyakitForm.classList.remove('hidden');
            penyakitForm.querySelector('form').reset();  // Reset form untuk Add
        });

        // Tombol Edit obat
        editButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const penyakitId = this.dataset.id;
                const penyakitName = this.dataset.name;
                const penyakitObat = this.dataset.obat;
                const penyakitPenjelasan = this.dataset.penjelasan;
                const penyakitPenyebab = this.dataset.penyebab;
                const penyakitIlustrasi = this.dataset.image;

                penyakitForm.classList.remove('hidden');
                const form = penyakitForm.querySelector('form');

                form.querySelector('input[name="_method"]')?.remove();
                
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'PUT';
                form.appendChild(methodInput);

                form.action = `/admin/penyakit/${penyakitId}`;
                
                form.querySelector('input[name="nama_penyakit"]').value = penyakitName;
                
                const obatSelect = form.querySelector('select[name="obat"]');
                obatSelect.value = penyakitObat;
                
                form.querySelector('textarea[name="penjelasan_penyakit"]').value = penyakitPenjelasan;
                form.querySelector('textarea[name="penyebab_penyakit"]').value = penyakitPenyebab;
                
                form.querySelector('button[type="submit"]').innerText = 'Update Data';
            });
        });
    });
</script>
