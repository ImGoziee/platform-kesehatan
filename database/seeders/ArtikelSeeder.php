<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artikel = Artikel::create([
            'judul_artikel' => 'Penyebab Penyakit Kanker',
            'isi_artikel' => 'Kanker adalah penyakit serius yang terjadi akibat pertumbuhan sel-sel tubuh yang tidak terkendali. Penyakit ini dapat menyerang berbagai organ dan jaringan, menyebabkan gangguan fungsi tubuh. Memahami penyebab kanker sangat penting untuk mencegah dan mengurangi risikonya. Berikut beberapa penyebab utama penyakit kanker.',
            'gambar_artikel' => 'abc',
        ]);
        
        $artikel = Artikel::create([
            'judul_artikel' => 'Penyebab Terjadinya Diabetes',
            'isi_artikel' => 'Diabetes adalah kondisi kesehatan yang ditandai dengan tingginya kadar gula darah (glukosa) dalam tubuh. Penyakit ini dapat memengaruhi kualitas hidup seseorang jika tidak dikelola dengan baik. Ada beberapa faktor utama yang menjadi penyebab terjadinya diabetes, baik tipe 1 maupun tipe 2..',
            'gambar_artikel' => 'abc',
        ]);
        $artikel = Artikel::create([
            'judul_artikel' => 'Cara Menghindari Risiko Terjangkit HIV',
            'isi_artikel' => 'Human Immunodeficiency Virus (HIV) adalah virus yang menyerang sistem kekebalan tubuh, membuat tubuh lebih rentan terhadap berbagai infeksi. Upaya pencegahan HIV sangat penting, mengingat belum adanya obat yang benar-benar menyembuhkan penyakit ini. Berikut adalah beberapa langkah yang dapat diambil untuk mengurangi risiko terjangkit HIV:',
            'gambar_artikel' => 'abc',
        ]);

        $artikel = Artikel::create([
            'judul_artikel' => 'Cara Perawatan Penyakit Kanker',
            'isi_artikel' => 'Kanker adalah penyakit kompleks yang membutuhkan pendekatan perawatan yang beragam, tergantung pada jenis, stadium, dan kondisi pasien. Tujuan perawatan kanker dapat meliputi penyembuhan, pengendalian gejala, atau meningkatkan kualitas hidup pasien. Berikut adalah beberapa cara perawatan penyakit kanker yang umum digunakan.',
            'gambar_artikel' => 'gambar_kanker',
        ]);

        $artikel = Artikel::create([
            'judul_artikel' => 'Penyakit Kronis Akibat Rokok',
            'isi_artikel' => 'Rokok adalah salah satu penyebab utama berbagai penyakit kronis di dunia. Kandungan zat berbahaya seperti nikotin, tar, karbon monoksida, dan ribuan bahan kimia lainnya dalam rokok dapat merusak tubuh secara perlahan. Paparan jangka panjang terhadap zat ini berdampak pada banyak organ tubuh, menyebabkan penyakit serius yang sulit disembuhkan. Berikut adalah beberapa penyakit kronis akibat rokok.',
            'gambar_artikel' => 'gambar_rokok',
        ]);

        $artikel = Artikel::create([
            'judul_artikel' => 'Terapi Penyembuhan TBC',
            'isi_artikel' => 'Tuberkulosis (TBC) adalah penyakit menular yang disebabkan oleh bakteri Mycobacterium tuberculosis. Penyakit ini dapat menyerang paru-paru maupun organ lain di tubuh. Meskipun serius, TBC dapat disembuhkan dengan terapi yang tepat. Berikut adalah metode terapi yang umum digunakan untuk penyembuhan TBC.',
            'gambar_artikel' => 'gambar_tbc',
        ]);

        $artikel = Artikel::create([
            'judul_artikel' => 'Macam-Macam Penyakit TBC',
            'isi_artikel' => 'Tuberkulosis (TBC) adalah penyakit menular yang disebabkan oleh bakteri Mycobacterium tuberculosis. Penyakit ini biasanya menyerang paru-paru, tetapi juga dapat menyebar ke bagian tubuh lainnya. Berdasarkan lokasi infeksi dan tingkat keparahannya, TBC dibedakan menjadi beberapa jenis. Berikut adalah macam-macam penyakit TBC yang perlu diketahui.',
            'gambar_artikel' => 'gambar_macam_tbc',
        ]);

        $artikel = Artikel::create([
            'judul_artikel' => 'Penyebab Penyakit Jantung',
            'isi_artikel' => 'Penyakit jantung merupakan salah satu penyebab utama kematian di dunia. Kondisi ini melibatkan berbagai gangguan pada fungsi jantung dan pembuluh darah yang dapat memengaruhi kualitas hidup penderitanya. Memahami penyebab penyakit jantung sangat penting untuk mencegah risiko dan menjaga kesehatan secara keseluruhan.',
            'gambar_artikel' => 'gambar_jantung',
        ]);

        $artikel = Artikel::create([
            'judul_artikel' => 'Penyebab Penyakit Stroke',
            'isi_artikel' => 'Stroke adalah kondisi medis serius yang terjadi ketika suplai darah ke otak terganggu, mengakibatkan kerusakan pada sel-sel otak. Penyakit ini merupakan salah satu penyebab utama kematian dan kecacatan di seluruh dunia. Memahami penyebab stroke sangat penting untuk pencegahan dan pengobatan. Berikut adalah penyebab utama penyakit stroke.',
            'gambar_artikel' => 'gambar_stroke',
        ]);
        
    }
}
