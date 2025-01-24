<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Anemia',
            'penjelasan_penyakit' => 'Anemia adalah kondisi ketika jumlah sel darah merah dalam tubuh rendah dan tidak berfungsi dengan baik. Kondisi ini membuat tubuh tidak mendapat cukup oksigen sehingga kulit akan terlihat lebih pucat dan tubuh terasa mudah lelah.',
            'penyebab_penyakit' => 'Anemia terjadi ketika tubuh kekurangan sel darah merah sehat atau hemoglobin. Akibatnya, kadar oksigen di dalam darah berkurang (hipoksemia) dan sel-sel dalam tubuh juga tidak mendapat cukup oksigen. Hal ini dapat mengganggu fungsi organ secara menyeluruh.',
            'ilustrasi_penyakit' => 'ilustrasi_anemia',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Amandel',
            'penjelasan_penyakit' => 'Penyakit amandel adalah peradangan pada kelenjar lunak di belakang tenggorokan yang disebut tonsil. Peradangan ini disebut juga tonsilitis.',
            'penyebab_penyakit' => 'Penyakit amandel dapat disebabkan oleh infeksi virus atau bakteri. Penyakit ini menular dan dapat menyebar melalui droplet atau kontak erat dengan penderita.',
            'ilustrasi_penyakit' => 'ilustrasi_amandel',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Ambaien',
            'penjelasan_penyakit' => 'Ambaien, atau yang juga dikenal sebagai wasir (hemoroid), adalah kondisi medis di mana pembuluh darah di sekitar anus atau rektum bagian bawah mengalami pembengkakan atau peradangan.',
            'penyebab_penyakit' => 'Ambaien terjadi akibat tekanan berlebih pada pembuluh darah di area anus dan rektum.',
            'ilustrasi_penyakit' => 'ilustrasi_ambaien',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Darah Tinggi',
            'penjelasan_penyakit' => 'Darah tinggi, atau dikenal sebagai hipertensi, adalah kondisi medis di mana tekanan darah dalam pembuluh darah secara konsisten lebih tinggi dari batas normal.',
            'penyebab_penyakit' => 'Penyebab darah tinggi meliputi pola makan tinggi garam, obesitas, konsumsi alkohol berlebihan, merokok, dan kurang olahraga.',
            'ilustrasi_penyakit' => 'ilustrasi_darah_tinggi',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Darah Rendah',
            'penjelasan_penyakit' => 'Darah rendah, atau dikenal sebagai hipotensi, adalah kondisi di mana tekanan darah seseorang berada di bawah batas normal.',
            'penyebab_penyakit' => 'Darah rendah dapat disebabkan oleh dehidrasi, kekurangan gizi, gangguan jantung, gangguan kelenjar tiroid, kehilangan darah, dan reaksi alergi.',
            'ilustrasi_penyakit' => 'ilustrasi_darah_rendah',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Gejala Malaria',
            'penjelasan_penyakit' => 'Malaria adalah penyakit yang disebabkan oleh infeksi parasit Plasmodium, yang ditularkan melalui gigitan nyamuk Anopheles betina.',
            'penyebab_penyakit' => 'Gejala malaria disebabkan oleh infeksi parasit Plasmodium yang mengganggu fungsi tubuh, terutama sistem peredaran darah dan organ vital.',
            'ilustrasi_penyakit' => 'ilustrasi_malaria',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Sukar Kencing',
            'penjelasan_penyakit' => 'Sukar kencing, atau dikenal sebagai retensi urin, adalah kondisi di mana seseorang mengalami kesulitan untuk buang air kecil, meskipun kandung kemih terasa penuh.',
            'penyebab_penyakit' => 'Retensi urin dapat disebabkan oleh penyumbatan saluran kemih, gangguan saraf, dan efek obat-obatan.',
            'ilustrasi_penyakit' => 'ilustrasi_sukar_kencing',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Asma',
            'penjelasan_penyakit' => 'Asma adalah penyakit kronis pada saluran pernapasan yang ditandai dengan peradangan dan penyempitan saluran udara, sehingga menyebabkan kesulitan bernapas.',
            'penyebab_penyakit' => 'Asma terjadi ketika saluran pernapasan teriritasi dan menjadi sensitif, menyebabkan penyempitan dan peningkatan produksi lendir.',
            'ilustrasi_penyakit' => 'ilustrasi_asma',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Batuk',
            'penjelasan_penyakit' => 'Batuk adalah respons alami tubuh untuk membersihkan saluran pernapasan dari iritasi, lendir, atau benda asing.',
            'penyebab_penyakit' => 'Batuk dapat disebabkan oleh paparan zat iritasi, infeksi virus atau bakteri, alergi, refluks asam lambung, dan penyakit paru kronis.',
            'ilustrasi_penyakit' => 'ilustrasi_batuk',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Batuk Rejan',
            'penjelasan_penyakit' => 'Batuk Rejan atau Pertusis adalah infeksi saluran pernapasan yang disebabkan oleh bakteri Bordetella pertussis.',
            'penyebab_penyakit' => 'Penyakit ini ditandai dengan batuk yang sangat keras dan menular, terutama pada bayi dan anak-anak.',
            'ilustrasi_penyakit' => 'ilustrasi_batuk_rejan',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Batuk Empedu',
            'penjelasan_penyakit' => 'Batuk Empedu adalah istilah untuk batuk yang disertai dengan pengeluaran lendir berwarna kuning kehijauan.',
            'penyebab_penyakit' => 'Batuk ini biasanya terjadi karena iritasi atau infeksi pada saluran pernapasan.',
            'ilustrasi_penyakit' => 'ilustrasi_batuk_empedu',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Bronkitis',
            'penjelasan_penyakit' => 'Bronkitis adalah peradangan pada saluran bronkus yang menyebabkan produksi lendir berlebih dan kesulitan bernapas.',
            'penyebab_penyakit' => 'Bronkitis dapat disebabkan oleh infeksi virus atau bakteri, serta paparan zat yang mengiritasi saluran pernapasan.',
            'ilustrasi_penyakit' => 'ilustrasi_bronkitis',
        ]);
        
        $penyakit = Penyakit::create([
            'nama_penyakit' => 'Bisul',
            'penjelasan_penyakit' => 'Bisul adalah benjolan merah berisi nanah yang muncul di kulit akibat infeksi bakteri.',
            'penyebab_penyakit' => 'Bisul umumnya disebabkan oleh infeksi bakteri, terutama Staphylococcus aureus, dan dapat dipicu oleh keringat berlebihan.',
            'ilustrasi_penyakit' => 'ilustrasi_bisul',
        ]);
    }
}
