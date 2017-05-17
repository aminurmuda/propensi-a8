<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use DB;

class borang extends Model
{
    protected $table = 'borang';
        /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getBorang($jenisBorang,$nomorStandar,$kode_prodi,$tahun)
    {
        return DB::table('borang')
            ->select('borang.*')
            ->where('kode_prodi',$kode_prodi)
            ->where('tahun',$tahun)
            ->where('standar',$nomorStandar)
            ->where('jenis',$jenisBorang)
            ->get();
    }

    public static function getIdBorang($jenisBorang,$nomorStandar,$kode_prodi,$tahun)
    {
        return DB::table('borang')
            ->select('borang.id')
            ->where('kode_prodi',$kode_prodi)
            ->where('tahun',$tahun)
            ->where('standar',$nomorStandar)
            ->where('jenis',$jenisBorang)
            ->get();
    }  

      public static function updateBorang($jenisBorang,$nomorStandar,$kode_prodi,$tahun,$isi)
    {
        return DB::table('borang')
            ->where('kode_prodi', $kode_prodi)
          ->where('tahun', $tahun)
          //->where('standar',$nomorStandar)
          ->where('jenis',$jenisBorang)
          ->update(['isi' => $isi]);
    } 

    public static function inisiasiBorang($kodeProdi,$tahun,$idHistori,$kodeBorang,$standar) {
        $isi='';
        if ($kodeBorang=='3A' && $standar==2) {
          $isi = '{"standar2":{"judul":"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU","2.1":{"judul":"2.1 Sistem Tata Pamong","narasi":"Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. ","perintah":"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.","isian":""},"2.2":{"judul":"2.2 Kepemimpinan","narasi":"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat. Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.","perintah":"Jelaskan pola kepemimpinan dalam Program Studi.","isian":""},"2.3":{"judul":"2.3 Sistem Pengelolaan","narasi":"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning</i>, <i>organizing</i>, <i>staffing</i>, <i>leading</i>, <i>controlling</i> dalam kegiatan  internal maupun eksternal.","perintah":"Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.","isian":"<p>jsadnsajdaaskdmaksm</p>"},"2.4":{"judul":"2.4 Penjaminan Mutu","perintah":"Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.","isian":"<p>asdkasjd jdasnkdjan</p>"},"2.5":{"judul":"2.5 Umpan Balik","perintah":"Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.","isian":""},"2.6":{"judul":"2.6 Keberlanjutan","perintah":"Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:","pertanyaan":["a. Upaya untuk peningkatan animo calon mahasiswa","b. Upaya peningkatan mutu manajemen","c. Upaya untuk peningkatan mutu lulusan","d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan","e. Upaya dan prestasi memperoleh dana hibah kompetitif"],"isian":""}}}';
        } else if ($kodeBorang=='3A' && $standar=='4') {
          $isi = '{"standar4":{"4.1":{"judul":"Sistem Seleksi dan Pengembangan","narasi":"-","perintah":"Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).","isian":""},"4.2":{"judul":"Monitoring dan Evaluasi","narasi":"-","perintah":"Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).","isian":""},"4.3":{"judul":"Dosen Tetap","narasi":"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.nDosen tetap dipilah dalam 2 kelompok, yaitu:n1. dosen tetap yang bidang keahliannya sesuai dengan PSn2. dosen tetap yang bidang keahliannya di luar PS","isian":{"4.3.1":{"perintah":"Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:","tabel":[{"Nama Dosen Tetap":"","NIDN**":"","Tgl. Lahir":"","Jabatan Akademik***":"","Gelar Akademik":"","Pendidikan S1, S2, S3 dan Asal PT*":"","Bidang Keahlian untuk Setiap Jenjang Pendidikan":""}],"keterangan":"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan."},"4.3.2":{"perintah":"Data dosen tetap yang bidang keahliannya di luar bidang PS:","tabel":[{"Nama Dosen Tetap":"","NIDN**":"","Tgl. Lahir":"","Jabatan Akademik***":"","Gelar Akademik":"","Pendidikan S1, S2, S3 dan Asal PT*":"","Bidang Keahlian untuk Setiap Jenjang Pendidikan":""}],"keterangan":"* Lampirkan fotokopi ijazahn** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan."},"4.3.3":{"perintah":"Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)","tabel":[{"Nama Dosen Tetap":"","sks Pengajaran pada":{"PS Sendiri":"","PS Lain PT Sendiri":"","PT Lain":""},"sks Penelitian":"","sks Pengabdian kepada Masyarakat":"","sks Manajemen**":{"PT Sendiri":"","PT Lain":""},"Jumlah sks":"","Jumlah":{"3":"","4":"","5":"","6":"","7":"","8":"","9":"","10":""},"Rata-rata*":{"3":"","4":"","5":"","6":"","7":"","8":"","9":"","10":""}}],"keterangan":"Catatan: n Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1 / 2 kali sks mata kuliah.n * rata - rata adalah jumlah sks dibagi dengan jumlah dosen tetap. n ** sks manajemen dihitung sbb: n Beban kerja manajemen untuk jabatan - jabatan ini adalah sbb.nBeban kerja manajemen untuk jabatan - jabatan ini adalah sbb. n - rektor / direktur politeknik 12 sks n - pembantu rektor / dekan / ketua sekolah tinggi / direktur akademi 10 sks n - ketua lembaga / kepala UPT 8 sksn - pembantu dekan / ketua jurusan / kepala pusat / ketua senat akademik / ketua senat fakultas 6 sksn - sekretaris jurusan / sekretaris pusat / sekretaris senat akademik / sekretaris senat universitas / sekretaris senat fakultas / kepala lab.atau studio / kepala balai / ketua PS 4 sksn - sekretaris PS 3 sksn Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara."},"4.3.4":{"perintah":"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:","tabel":[{"Nama Dosen Tetap":"","Bidang Keahlian":"","Kode Mata Kuliah":"","Nama Mata Kuliah":"","Jumlah Kelas":"","Jumlah Pertemuan yang Direncanakan":"","Jumlah Pertemuan yang Dilaksanakan":"","Jumlah":{"7":"","8":""}}]},"4.3.5":{"perintah":"Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:","tabel":[{"Nama Dosen Tetap":"","Bidang Keahlian":"","Kode Mata Kuliah":"","Nama Mata Kuliah":"","Jumlah Kelas":"","Jumlah Pertemuan yang Direncanakan":"","Jumlah Pertemuan yang Dilaksanakan":"","Jumlah":{"7":"","8":""}}]}}},"4.4":{"judul":"Dosen Tidak Tetap","4.4.1":{"perintah":"Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:","tabel":[{"Nama Dosen Tidak Tetap":"","NIDN**":"","Tgl. Lahir":"","Jabatan Akademik***":"","Gelar Akademik":"","Pendidikan S1, S2, S3 dan Asal PT*":"","Bidang Keahliah untuk Setiap Jenjang Pendidikan":""}],"keterangan":"* Lampirkan fotokopi ijazah.n** NIDN : Nomor Induk Dosen Nasionaln*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan."},"4.4.2":{"perintah":"Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:","tabel":[{"Nama Dosen Tdk Tetap":"","Bidang Keahlian":"","Kode Mata Kuliah":"","Nama Mata Kuliah":"","Jumlah Kelas":"","Jumlah Pertemuan yang Direncanakan":"","Jumlah Pertemuan yang Dilaksanakan":"","Jumlah":{"7":"","8":""}}]}},"4.5":{"judul":"Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir","4.5.1":{"perintah":"Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)","tabel":[{"Nama Tenaga Ahli/Pakar":"","Nama dan Judul Kegiatan":"","Waktu Pelaksanaan":""}]},"4.5.2":{"perintah":"Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS","tabel":[{"Nama Dosen":"","Jenjang Pendidikan Lanjut":"","Bidang Studi":"","Perguruan Tinggi":"","Negara":"","Tahun Mulai Studi":""}]},"4.5.3":{"perintah":"Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri","tabel":[{"Nama Dosen":"","Jenis Kegiatan*":"","Tempat":"","Waktu":"","Sebagai":{"Penyaji":"","Peserta":""}}],"keterangan":"* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll"},"4.5.4":{"perintah":"Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).","keterangan":"* Sediakan dokumen pendukung pada saat asesmen lapangan.","tabel":[{"Nama Dosen":"","Prestasi yang Dicapai*":"","Waktu Pencapaian":"","Tingkat (Lokal, Nasional, Internasional)":""}]},"4.5.5":{"perintah":"Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.","tabel":[{"Nama Dosen":"","Nama Organisasi Keilmuan atau Organisasi Profesi":"","Kurun Waktu":"","Tingkat (Lokal, Nasional, Internasional":""}]}},"4.6":{"judul":"Tenaga Kependidikan","4.6.1":{"perintah":"Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:","tabel":[{"Jenis Tenaga Kependidikan":"Pustakawan*","Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir":{"S3":"","S2":"","S1":"","D4":"","D3":"","D2":"","D1":"","SMA/SMK":""},"Unit Kerja":""},{"Jenis Tenaga Kependidikan":"Laboran/ Teknisi/ Analis/ Operator/ Programmer","Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir":{"S3":"","S2":"","S1":"","D4":"","D3":"","D2":"","D1":"","SMA/SMK":""},"Unit Kerja":""},{"Jenis Tenaga Kependidikan":"Administrasi","Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir":{"S3":"","S2":"","S1":"","D4":"","D3":"","D2":"","D1":"","SMA/SMK":""},"Unit Kerja":""},{"Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir":{"S3":"","S2":"","S1":"","D4":"","D3":"","D2":"","D1":"","SMA/SMK":""}}],"keterangan":"* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan"},"4.6.2":{"perintah":"Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.","isian":""}}}}';
        } else if ($kodeBorang=='3A' && $standar=='7') {
          $isi = '{"standar7":{"judul":"7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA","7.1":{"judul":"7.1 Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS","7.1.1":{"perintah":"Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:","keterangan":"Catatan: (*) sediakan data pendukung pada saat asesmen lapangan"},"7.1.2":{"perintah":"Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?","perintah2":"Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah  ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi.","isian":""},"7.1.3":{"perintah":"Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:","keterangan":"Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai"},"7.1.4":{"perintah":"Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.","keterangan":"*Lampirkan surat paten HaKI atau keterangan sejenis."}},"7.2":{"judul":"7.2 Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PKM)","7.2.1":{"perintah":"Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:","keterangan":"Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)"},"7.2.2":{"perintah":"Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?","perintah2":"Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat","isian":""}},"7.3":{"judul":"7.3 Kegiatan Kerjasama dengan Instansi Lain","7.3.1":{"perintah":"Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.","keterangan":"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan"},"7.3.2":{"perintah":"Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.","keterangan":"Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan"}},"7":{"isian":{"nomorIsian":""}}}}
';
        } else if ($kodeBorang=='3B' && $standar=='2') {
          $isi = '{"standar2":{"judul":"2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU","2.1":{"judul":"2.1 Tata Pamong","narasi":"Tata pamong adalah suatu sistem yang dapat menjadikan kepemimpinan, sistem pengelolaan dan penjaminan mutu berjalan secara efektif di dalam universitas/institusi yang mengelola program studi.  Hal-hal yang menjadi fokus di dalam tata pamong termasuk bagaimana kebijakan  dan strategi disusun sedemikian rupa sehingga memungkinkan terpilihnya pemimpin dan pengelola yang kredibel dan sistem penyelenggaraan program studi secara kredibel, transparan, akuntabel, bertanggung jawab dan  menerapkan prinsip-prinsip keadilan. Organisasi dan sistem tata pamong yang baik <i>(good governance)</i> mencerminkan kredibilitas, transparansi, akuntabilitas, tanggungjawab dan keadilan Fakultas/Sekolah Tinggi dalam mengelola program studi. ","perintah":"Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Fakultas/Sekolah Tinggi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, akuntabel, transparan, bertanggung jawab dan adil.","isian":""},"2.2":{"judul":" 2.2  Struktur Organisasi, Kordinasi, dan Cara Kerja Fakultas/Sekolah Tinggi","narasi":"","perintah":"Gambarkan struktur organisasi  Fakultas/Sekolah Tinggi serta tugas/fungsi dari tiap unit yang ada.","isian":""},"2.3":{"judul":"2.3 Kepemimpinan","narasi":"Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu  membuat keputusan yang tepat dan cepat.Kepemimpinan mampu memprediksi masa depan, merumuskan dan  mengartikulasi visi yang realistis, kredibel,  serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara  intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada  seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi   kepemimpinan dikenal kepemimpinan operasional, kepemimpinan  organisasi, dan kepemimpinan publik.  Kepemimpinan operasional  berkaitan dengan kemampuan menjabarkan visi, misi ke dalam   kegiatan operasional program studi.  Kepemimpinan organisasi   berkaitan dengan pemahaman tata kerja antar unit dalam organisasi  perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan  menjalin kerjasama dan menjadi rujukan bagi publik.","perintah":"Jelaskan pola kepemimpinan dalam Fakultas/Sekolah Tinggi.","isian":""},"2.4":{"judul":"2.4 Sistem Pengelolaan","narasi":"Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling,</i> serta operasi internal dan eksternal","perintah":"Jelaskan sistem pengelolaan Fakultas/Sekolah Tinggi serta ketersediaan Renstra dan Renop.","isian":""},"2.5":{"judul":"2.5 Sistem Penjaminan Mutu Fakultas/Sekolah Tinggi","perintah":"Jelaskan sistem penjaminan mutu dalam Fakultas/Sekolah Tinggi.  Jelaskan pula standar mutu yang digunakan.","isian":""}}}';
        } else if ($kodeBorang=='3B' && $standar=='4') {
          $isi = '{"standar4":{"4.1":{"judul":"Dosen Tetap","narasi":"Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 20jam/minggu.","isian":"-","4.1.1":{"perintah":"Tuliskan jumlah dosen tetap yang bidang keahliannya sesuai dengan masing-masing PS di lingkungan Fakultas/Sekolah Tinggi, berdasarkan jabatan fungsional dan pendidikan tertinggi, dengan mengikuti format tabel berikut:","tabel":"-","isian":"-","keterangan":"-"},"4.1.2":{"perintah":"Tuliskan banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:","tabel":"-","isian":"-","keterangan":"-"},"4.1.3":{"perintah":"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.","tabel":"-","isian":"","keterangan":"-"}},"4.2":{"judul":"Tenaga Kependidikan","perintah":"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.","tabel":"-","isian":"","keterangan":"-"}}}';
        } else if ($kodeBorang=='3B' && $standar=='7') {
          $isi = '{"standar7":{"7.1":{"judul":"Penelitian","narasi":"-","isian":"-","7.1.1":{"perintah":"Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing-masing PS di lingkungan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:","tabel":"-","isian":"-","keterangan":"-"},"7.1.2":{"perintah":"Uraikan pandangan pimpinan Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.","tabel":"-","isian":"","keterangan":"-"}},"7.2":{"judul":"Pelayanan/Pengabdian kepada Masyarakat","narasi":"Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)","isian":"-","7.2.1":{"perintah":"Tuliskan jumlah dan dana kegiatan pelayanan/pengabdian kepada masyarakat yang dilakukan oleh masing-masing PS di lingkungan Fakultas dalam tiga tahun terakhir dengan mengikuti format tabel berikut:","tabel":"-","isian":"-","keterangan":"-"},"7.2.2":{"perintah":"Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.","tabel":"-","isian":"","keterangan":"-"}}}}';
        } else if ($kodeBorang=='ED') {
          $isi = '';
        }

        if($kodeBorang!='ED') {
          return DB::table('borang')
                    ->insert(['kode_prodi'=> $kodeProdi, 'tahun' => $tahun, 'id_histori' => $idHistori,'jenis'=>$kodeBorang,'standar'=>$standar,'isi'=>$isi]);
        }

       return DB::table('borang')
                    ->insert(['kode_prodi'=> $kodeProdi, 'tahun' => $tahun, 'id_histori' => $idHistori,'standar'=>0,'jenis'=>$kodeBorang,'isi'=>$isi]);
    }


    public static function getAllBorangByProdi($kode_prodi)
    {
        return DB::table('borang')
            ->join('histori_akreditasi','borang.id_histori','=','histori_akreditasi.id')
            ->join('program_studi', 'histori_akreditasi.kode_prodi', '=', 'program_studi.kode_prodi')
            ->select('borang.id_histori','borang.isi','borang.jenis','borang.standar', 'borang.tahun', 'program_studi.nama_prodi','program_studi.kode_prodi','borang.kode_prodi as kodeProdiFakultas','borang.is_reviewed as status')
            ->where('borang.kode_prodi',$kode_prodi)
            ->groupBy('borang.id_histori','borang.isi','borang.jenis','borang.standar', 'borang.tahun', 'program_studi.nama_prodi','program_studi.kode_prodi','borang.is_reviewed')
            ->get();
    }

    public static function getAllBorang()
    {
        return DB::table('borang')
            ->join('histori_akreditasi','borang.id_histori','=','histori_akreditasi.id')
            ->join('program_studi', 'histori_akreditasi.kode_prodi', '=', 'program_studi.kode_prodi')
            ->select('borang.id_histori', 'borang.jenis', 'borang.tahun', 'program_studi.kode_prodi','program_studi.nama_prodi','borang.kode_prodi as kodeProdiFakultas','borang.is_reviewed as status')
            ->groupBy('borang.id_histori', 'borang.jenis', 'borang.tahun', 'program_studi.kode_prodi','program_studi.nama_prodi','borang.kode_prodi','borang.is_reviewed')
            ->get();
    }

        public static function updateStatus($idHistori,$jenisBorang,$status) {
      return DB::table('borang')
            ->where('id_histori',$idHistori)
            ->where('jenis',$jenisBorang)
          ->update(['is_reviewed' => $status]);
    }

    public static function getAllBorangByIdHistori($idHistori)
    {
        return DB::table('borang')
            ->join('program_studi', 'borang.kode_prodi', '=', 'program_studi.kode_prodi')
            ->select('borang.id_histori', 'borang.jenis', 'borang.tahun', 'program_studi.kode_prodi','program_studi.nama_prodi','borang.is_reviewed as status')
            ->where('borang.id_histori',$idHistori)
            ->groupBy('borang.id_histori', 'borang.jenis','borang.tahun', 'program_studi.kode_prodi','program_studi.nama_prodi','borang.is_reviewed')
            ->get();
    }
     
         public static function getIdBorangByIdHistori($jenisBorang,$nomorStandar,$idHistori)
    {
        return DB::table('borang')
            ->select('borang.id')
            ->where('id_histori',$idHistori)
            ->where('standar',$nomorStandar)
            ->where('jenis',$jenisBorang)
            ->get();
    } 

            public static function getBorangByIdHistori($jenisBorang,$nomorStandar,$idHistori)
    {
        return DB::table('borang')
            ->select('borang.*')
            ->where('id_histori',$idHistori)
            ->where('standar',$nomorStandar)
            ->where('jenis',$jenisBorang)
            ->get();
    }


}
