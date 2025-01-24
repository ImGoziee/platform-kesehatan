<?php

namespace Database\Seeders;

use App\Models\Sub_bab_artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubBabArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Faktor Genetik',
            'id_artikel' => 1,
            'isi_sub_bab' => 'Faktor genetik atau keturunan merupakan salah satu penyebab kanker yang tidak dapat diubah. Individu dengan riwayat keluarga yang memiliki kanker cenderung memiliki risiko lebih tinggi untuk mengembangkan penyakit ini. Mutasi gen tertentu yang diwariskan, seperti BRCA1 dan BRCA2 pada kanker payudara, meningkatkan kerentanan terhadap kanker.',
            'urutan_sub_bab' => 1,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Gaya Hidup Tidak Sehat',
            'id_artikel' => 1,
            'isi_sub_bab' => 'Kebiasaan buruk seperti merokok, mengonsumsi alkohol berlebihan, dan pola makan yang buruk dapat memicu terjadinya kanker. Merokok, misalnya, diketahui sebagai penyebab utama kanker paru-paru dan berbagai jenis kanker lainnya. Pola makan tinggi lemak jenuh, garam, dan gula dapat meningkatkan risiko kanker usus besar, lambung, serta hati.',
            'urutan_sub_bab' => 2,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Paparan Zat Karsinogenik',
            'id_artikel' => 1,
            'isi_sub_bab' => 'Zat karsinogenik, seperti bahan kimia beracun, radiasi, atau polusi udara, dapat menyebabkan kerusakan DNA dalam sel tubuh. Paparan radiasi ultraviolet (UV) dari sinar matahari berlebihan, misalnya, sering dikaitkan dengan kanker kulit. Selain itu, paparan bahan kimia seperti asbes, arsenik, dan formaldehida juga berisiko memicu kanker.',
            'urutan_sub_bab' => 3,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Infeksi Virus dan Bakteri',
            'id_artikel' => 1,
            'isi_sub_bab' => 'Beberapa jenis kanker disebabkan oleh infeksi virus atau bakteri tertentu. Virus human papillomavirus (HPV) berhubungan dengan kanker serviks, sementara virus hepatitis B dan C dapat menyebabkan kanker hati. Infeksi Helicobacter pylori juga dikaitkan dengan kanker lambung.',
            'urutan_sub_bab' => 4,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Gangguan Sistem Imun',
            'id_artikel' => 1,
            'isi_sub_bab' => 'Sistem imun yang lemah dapat meningkatkan risiko kanker. Kondisi seperti HIV/AIDS atau penggunaan obat imunosupresan pada pasien transplantasi organ dapat membuat tubuh lebih rentan terhadap infeksi dan pertumbuhan sel abnormal.',
            'urutan_sub_bab' => 5,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Kesimpulan',
            'id_artikel' => 1,
            'isi_sub_bab' => 'Penyakit kanker disebabkan oleh kombinasi faktor genetik dan lingkungan. Mencegah kanker dapat dilakukan dengan menghindari kebiasaan tidak sehat, mengurangi paparan zat berbahaya, mendapatkan vaksinasi, serta menjalani pola hidup sehat. Deteksi dini dan pemeriksaan kesehatan rutin juga berperan penting dalam mengurangi dampak penyakit ini.',
            'urutan_sub_bab' => 6,
        ]);

        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Faktor Genetik',
            'id_artikel' => 2,
            'isi_sub_bab' => 'Faktor keturunan memainkan peran penting dalam risiko seseorang mengembangkan diabetes. Jika salah satu atau kedua orang tua memiliki diabetes, kemungkinan untuk mewarisi kondisi ini menjadi lebih tinggi. Diabetes tipe 1, khususnya, sering kali berkaitan dengan predisposisi genetik tertentu.',
            'urutan_sub_bab' => 1,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Gaya Hidup Tidak Sehat',
            'id_artikel' => 2,
            'isi_sub_bab' => 'Pola makan yang buruk, seperti konsumsi makanan tinggi gula, lemak, dan kalori, dapat meningkatkan risiko diabetes tipe 2. Selain itu, kurangnya aktivitas fisik atau gaya hidup yang sedentari dapat menyebabkan berat badan berlebih, yang merupakan faktor risiko utama diabetes.',
            'urutan_sub_bab' => 2,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Obesitas atau Berat Badan Berlebih',
            'id_artikel' => 2,
            'isi_sub_bab' => 'Obesitas, terutama di area perut, berhubungan erat dengan resistensi insulin, yaitu kondisi ketika tubuh tidak dapat menggunakan insulin secara efektif. Ini merupakan penyebab utama diabetes tipe 2.',
            'urutan_sub_bab' => 3,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Gangguan pada Sistem Kekebalan Tubuh',
            'id_artikel' => 2,
            'isi_sub_bab' => 'Diabetes tipe 1 terjadi ketika sistem kekebalan tubuh menyerang sel-sel pankreas yang memproduksi insulin. Meskipun penyebab pastinya belum diketahui, faktor genetik dan lingkungan seperti infeksi virus diduga berperan dalam kondisi ini.',
            'urutan_sub_bab' => 4,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Faktor Usia',
            'id_artikel' => 2,
            'isi_sub_bab' => 'Risiko diabetes tipe 2 meningkat seiring bertambahnya usia, terutama setelah usia 45 tahun. Hal ini mungkin disebabkan oleh penurunan aktivitas fisik, penambahan berat badan, atau perubahan fungsi pankreas.',
            'urutan_sub_bab' => 5,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Ketidakseimbangan Hormon',
            'id_artikel' => 2,
            'isi_sub_bab' => 'Kondisi medis tertentu seperti sindrom ovarium polikistik (PCOS) atau gangguan hormon lainnya dapat meningkatkan risiko diabetes karena dapat memengaruhi cara tubuh memproses insulin.',
            'urutan_sub_bab' => 6,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Stres Kronis',
            'id_artikel' => 2,
            'isi_sub_bab' => 'Stres berkepanjangan dapat memengaruhi kadar hormon dalam tubuh dan meningkatkan risiko diabetes. Stres juga sering kali memicu kebiasaan makan yang tidak sehat, yang memperburuk risiko.',
            'urutan_sub_bab' => 7,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Kesimpulan',
            'id_artikel' => 2,
            'isi_sub_bab' => 'Dengan memahami berbagai penyebab diabetes, langkah-langkah pencegahan dapat dilakukan lebih dini. Mengadopsi pola hidup sehat, menjaga berat badan ideal, dan rutin memeriksakan kesehatan adalah cara-cara efektif untuk mengurangi risiko terkena diabetes.',
            'urutan_sub_bab' => 8,
        ]);

        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Operasi',
            'id_artikel' => 4,
            'isi_sub_bab' => 'Operasi adalah salah satu metode utama dalam pengobatan kanker. Prosedur ini bertujuan untuk mengangkat tumor atau jaringan yang terinfeksi dari tubuh. Operasi biasanya dilakukan pada kanker yang masih berada dalam tahap awal dan belum menyebar ke bagian lain dari tubuh.',
            'urutan_sub_bab' => 1,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Kemoterapi',
            'id_artikel' => 4,
            'isi_sub_bab' => 'Kemoterapi menggunakan obat-obatan kimia untuk membunuh sel-sel kanker. Obat ini dapat diberikan melalui suntikan, infus, atau obat oral. Meskipun efektif, kemoterapi sering menyebabkan efek samping seperti mual, rambut rontok, dan kelelahan, karena juga dapat merusak sel-sel sehat.',
            'urutan_sub_bab' => 2,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Radioterapi',
            'id_artikel' => 4,
            'isi_sub_bab' => 'Radioterapi menggunakan radiasi energi tinggi untuk menghancurkan sel kanker. Proses ini biasanya dilakukan pada lokasi tertentu di tubuh, seperti payudara, otak, atau prostat. Radioterapi dapat digunakan sebagai pengobatan utama atau dikombinasikan dengan metode lain seperti operasi atau kemoterapi.',
            'urutan_sub_bab' => 3,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Terapi Targeted dan Imunoterapi',
            'id_artikel' => 4,
            'isi_sub_bab' => 'Terapi targeted bekerja dengan cara menyerang molekul atau gen spesifik yang membantu pertumbuhan kanker. Sementara itu, imunoterapi memanfaatkan sistem imun tubuh untuk melawan sel kanker. Kedua metode ini lebih terfokus dan cenderung memiliki efek samping yang lebih ringan dibandingkan kemoterapi.',
            'urutan_sub_bab' => 4,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Perawatan Paliatif',
            'id_artikel' => 4,
            'isi_sub_bab' => 'Perawatan paliatif ditujukan untuk meningkatkan kualitas hidup pasien dengan mengelola gejala dan efek samping kanker. Ini mencakup pengobatan nyeri, dukungan psikologis, hingga terapi nutrisi untuk memperkuat tubuh pasien selama perawatan.',
            'urutan_sub_bab' => 5,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Pengobatan Alternatif dan Pelengkap',
            'id_artikel' => 4,
            'isi_sub_bab' => 'Beberapa pasien memilih untuk melengkapi perawatan medis dengan terapi alternatif seperti akupunktur, meditasi, atau herbal tertentu. Namun, terapi ini harus didiskusikan dengan dokter untuk memastikan keamanannya.',
            'urutan_sub_bab' => 6,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Kesimpulan',
            'id_artikel' => 4,
            'isi_sub_bab' => 'Perawatan kanker memerlukan pendekatan yang terintegrasi dan disesuaikan dengan kondisi pasien. Dengan kombinasi metode medis modern dan dukungan emosional yang tepat, pasien kanker dapat memiliki peluang lebih baik untuk pemulihan dan kualitas hidup yang lebih baik.',
            'urutan_sub_bab' => 7,
        ]);

        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Hipertensi (Tekanan Darah Tinggi)',
            'id_artikel' => 5,
            'isi_sub_bab' => 'Hipertensi adalah faktor risiko utama stroke. Tekanan darah tinggi dapat merusak dinding pembuluh darah, membuatnya lebih rentan terhadap pecah atau tersumbat. Stroke yang disebabkan oleh hipertensi sering kali berupa stroke hemoragik, yaitu pecahnya pembuluh darah di otak.',
            'urutan_sub_bab' => 1,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Aterosklerosis',
            'id_artikel' => 5,
            'isi_sub_bab' => 'Aterosklerosis terjadi ketika plak lemak menumpuk di dinding arteri, menyebabkan penyempitan dan kekakuan pembuluh darah. Kondisi ini dapat menghalangi aliran darah ke otak, yang memicu stroke iskemik, jenis stroke paling umum.',
            'urutan_sub_bab' => 2,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Penyakit Jantung',
            'id_artikel' => 5,
            'isi_sub_bab' => 'Gangguan jantung seperti fibrilasi atrium, serangan jantung, atau gagal jantung dapat meningkatkan risiko stroke. Fibrilasi atrium, misalnya, menyebabkan pembentukan gumpalan darah yang dapat berpindah ke otak dan menyumbat aliran darah.',
            'urutan_sub_bab' => 3,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Diabetes',
            'id_artikel' => 5,
            'isi_sub_bab' => 'Diabetes meningkatkan risiko stroke karena kadar gula darah yang tinggi dapat merusak pembuluh darah dan mempercepat proses aterosklerosis. Selain itu, diabetes sering dikaitkan dengan tekanan darah tinggi dan obesitas, yang juga merupakan faktor risiko stroke.',
            'urutan_sub_bab' => 4,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Merokok dan Konsumsi Alkohol',
            'id_artikel' => 5,
            'isi_sub_bab' => 'Merokok dapat merusak pembuluh darah dan meningkatkan pembentukan gumpalan darah. Sementara itu, konsumsi alkohol berlebihan dapat meningkatkan tekanan darah, yang akhirnya memicu risiko stroke.',
            'urutan_sub_bab' => 5,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Faktor Gaya Hidup',
            'id_artikel' => 5,
            'isi_sub_bab' => 'Gaya hidup yang tidak sehat, seperti pola makan tinggi lemak dan garam, kurang olahraga, serta obesitas, dapat meningkatkan risiko stroke. Kebiasaan ini menyebabkan tekanan darah tinggi, kolesterol tinggi, dan diabetes, yang semuanya terkait dengan stroke.',
            'urutan_sub_bab' => 6,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Kesimpulan',
            'id_artikel' => 5,
            'isi_sub_bab' => 'Stroke disebabkan oleh berbagai faktor yang saling berkaitan, seperti hipertensi, penyakit jantung, dan gaya hidup yang buruk. Dengan mengenali penyebabnya, langkah-langkah pencegahan seperti mengontrol tekanan darah, menjaga pola makan sehat, dan berhenti merokok dapat dilakukan untuk mengurangi risiko stroke secara signifikan.',
            'urutan_sub_bab' => 7,
        ]);

        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Pola Hidup Tidak Sehat',
            'id_artikel' => 6,
            'isi_sub_bab' => 'Pola hidup yang tidak sehat menjadi faktor utama penyebab penyakit jantung. Kebiasaan seperti merokok, konsumsi alkohol berlebihan, dan pola makan tinggi lemak jenuh, garam, serta gula dapat meningkatkan risiko terjadinya penyakit ini. Merokok, misalnya, merusak pembuluh darah dan meningkatkan tekanan darah, yang pada akhirnya membebani jantung.',
            'urutan_sub_bab' => 1,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Kurangnya Aktivitas Fisik',
            'id_artikel' => 6,
            'isi_sub_bab' => 'Kurangnya aktivitas fisik juga berkontribusi besar terhadap risiko penyakit jantung. Gaya hidup sedentari, seperti duduk terlalu lama atau minimnya olahraga, dapat menyebabkan obesitas dan meningkatkan kadar kolesterol serta tekanan darah. Semua faktor ini menjadi pemicu utama gangguan pada sistem kardiovaskular.',
            'urutan_sub_bab' => 2,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Faktor Genetik dan Usia',
            'id_artikel' => 6,
            'isi_sub_bab' => 'Selain gaya hidup, faktor genetik memainkan peran penting dalam risiko penyakit jantung. Individu dengan riwayat keluarga yang memiliki penyakit jantung cenderung lebih rentan mengalaminya. Selain itu, risiko penyakit jantung meningkat seiring bertambahnya usia karena elastisitas pembuluh darah menurun, dan fungsi jantung melemah.',
            'urutan_sub_bab' => 3,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Stres dan Gangguan Emosional',
            'id_artikel' => 6,
            'isi_sub_bab' => 'Stres berkepanjangan juga berpotensi memicu penyakit jantung. Ketika seseorang mengalami stres, tubuh melepaskan hormon seperti adrenalin dan kortisol, yang dapat meningkatkan tekanan darah dan denyut jantung. Jika hal ini berlangsung terus-menerus, beban pada jantung menjadi lebih besar.',
            'urutan_sub_bab' => 4,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Penyakit Terkait',
            'id_artikel' => 6,
            'isi_sub_bab' => 'Beberapa penyakit seperti hipertensi, diabetes, dan kolesterol tinggi seringkali menjadi penyebab utama penyakit jantung. Kondisi-kondisi ini memengaruhi aliran darah dan meningkatkan risiko terjadinya plak pada pembuluh darah, yang dapat menyebabkan serangan jantung atau stroke.',
            'urutan_sub_bab' => 5,
        ]);
        
        $sub_bab_artikel = Sub_bab_artikel::create([
            'judul_sub_bab' => 'Kesimpulan',
            'id_artikel' => 6,
            'isi_sub_bab' => 'Untuk mencegah penyakit jantung, penting bagi kita untuk menjalani pola hidup sehat, rutin berolahraga, mengelola stres, dan memeriksakan kesehatan secara teratur. Dengan langkah-langkah ini, risiko penyakit jantung dapat ditekan, sehingga kualitas hidup dapat tetap terjaga.',
            'urutan_sub_bab' => 6,
        ]);
    }
}
