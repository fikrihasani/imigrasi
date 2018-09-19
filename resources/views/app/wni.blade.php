@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 20px">
        <section class="span10  ">
            <div  class="col-right">
                <div class="row">
                    <div class="span10">
                        <h3>Surat Perjalanan Republik Indonesia/Paspor</h3>
                        <!--  Tabs -->   
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#paspor1" data-toggle="tab">Paspor Biasa</a></li>
                            <li><a href="#paspor2" data-toggle="tab">Persyaratan Permohonan</a></li>
                            <li><a href="#paspor3" data-toggle="tab">Penggantian Paspor</a></li>
                            <li><a href="#paspor4" data-toggle="tab">Alur Pembuatan Paspor</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="paspor1" align="Justify">
                                &nbsp;<b>Paspor</b> merupakan bukti identitas diri di luar tanah air. Hal ini menjadi kewajiban pemilik paspor tersebut untuk menyimpan dan melindunginya dengan sebaik-baiknya. Paspor adalah dokumen milik negara. Paspor RI harus diperpanjang/diperbaharui setiap lima tahun setelah paspor tersebut habis masa berlakunya. Paspor dapat diperpanjang sebelum habis masa berlakunya jika halaman paspor tersebut penuh, rusak berat atau hilang.
                                <br><br>Paspor terdiri atas: <b>Paspor Diplomatik, Paspor Dinas</b> dan <b>Paspor Biasa</b>. <b>Paspor Diplomatik</b> diterbitkan bagi warga Negara Indonesia yang melakukan perjalanan keluar Wilayah Indonesia dalam rangka penempatan atau perjalanan tugas yang bersifat diplomatik. Sedangkan <b>Paspor Dinas</b> diterbitkan bagi warga Negara Indonesia yang melakukan perjalanan keluar Wilayah Indonesia dalam rangka penempatan atau perjalanan dinas yang tidak bersifat diplomatik. Paspor Diplomatik dan Paspor Dinas diterbitkan oleh Menteri Luar Negeri.
                                <br><br><b>Paspor biasa</b> diterbitkan oleh Menteri atau Pejabat Imigrasi yang ditunjuk dan diterbitkan untuk warga Negara Indonesia. Paspor biasa berisi 24 atau 48 halaman dan berlaku selama 5 tahun. Paspor merupakan dokumen milik negara yang dapat dibatalkan atau dicabut sewaktu-waktu oleh negara tanpa pemberitahuan.
                                <br><br>Paspor digunakan ketika kita akan memasuki perbatasan negara lain. Kemudian pihak berwenang dari negara tujuan akan memberi stempel visa atau lembar lampiran yang ditempel pada halaman paspor sebagai bukti izin untuk masuk ke suatu negara.
                                <br><br>Pada umumnya paspor berisikan tentang identitas lengkap pemegang paspor yang meliputi: foto, nama lengkap, jenis kelamin, tempat dan tanggal lahir, serta tandatangan pemegang paspor tersebut. Informasi lain yang terdapat pada paspor yakni kode negara, nomor (unik) paspor, tanggal penerbitan dan berakhirnya paspor, institusi penerbit, dan nama pejabat berwenang yang menerbitkan lengkap dengan tandatangan dan stempelnya.
                                <br><br>Dengan kemajuan teknologi, saat ini di Indonesia dan beberapa negara lain telah mengeluarkan e-passport atau elektronik passport sebagai pengganti jenis paspor konvensional yang ada saat ini. Mekanisme e-passport ini yakni dengan menanamkan suatu chip yang berisikan biodata pemegangnya dan dilengkapi dengan data biometrik-nya untuk memberi jaminan kepastian bahwa pemegang paspor tersebut adalah benar pemilik yang sah.
                            </div>
                            <div class="tab-pane" id="paspor2" align="Justify">
                                <em>(Sesuai dengan Peraturan Menteri Hukum dan HAM RI nomor 8 Tahun 2014 Tentang Paspor Biasa dan Surat Perjalanan Laksana Paspor)</em><br><br>
                                1. Mengisi formulir permohonan paspor RI dengan benar dan lengkap (perdim 11 yang didapat di Kantor Imigrasi);<br>
                                2. Melampirkan Fotocopy dan berkas asli identitas diri, antara lain:<br>
                                &nbsp;&nbsp;&nbsp; a. Kartu Tanda Penduduk Elektronik ( E-KTP )<br>
                                &nbsp;&nbsp;&nbsp; b. Kartu Keluarga ( KK ) yang sudah ditanda tangan oleh kepala keluarga<br>
                                &nbsp;&nbsp;&nbsp; c. Akte Lahir / Ijazah / Surat Nikah <i>( Harus memuat keterangan Nama, Tempat dan Tanggal Lahir, dan Nama Orang Tua.</i> <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i>Apabila tidak memuat keterangan tersebut, lampirkan surat keterangan dari instansi yang berwenang )</i><br>
                                3. Surat pewarganegaraan Indonesia bagi orang asing yang memperoleh kewarganegaraan Indonesia melalui kewarganegaraan atau penyampaian atau pernyataan untuk memilih kewarganegaraan sesuai ketentuan perundang-undangan;<br>
                                4. Penetapan ganti nama dari pejabat yang berwenang bagi yang telah ganti nama;<br>
                                5. Melampirkan surat keterangan kehilangan dari kepolisian apabila paspor lama hilang;<br>
                                6. Bagi yang bertujuan untuk Umroh / Haji, melampirkan surat rekomendasi Umroh/Haji dari Kementerian Agama dan surat rekomendasi dari biro umroh;<br>
                                7. Bagi yang bertujuan untuk bekerja, melampirkan surat rekomendasi dari Dinas Tenaga Kerja setempat, BNP3TKI. Lampirkan buku pelaut untuk tujuan bekerja diatas alat angkut (kapal laut);
                                <br><br>
                                <b>UNTUK ANAK DIBAWAH UMUR DAN MASIH DALAM TANGGUNGAN ORANG TUA</b><br>
                                1. Mengisi formulir permohonan paspor RI dengan benar dan lengkap (perdim 11 yang didapat di Kantor Imigrasi);<br>
                                2. Melampirkan Fotocopy dan berkas asli identitas diri, antara lain:<br>
                                &nbsp;&nbsp;&nbsp; a. Akte Lahir<br>
                                &nbsp;&nbsp;&nbsp; b. KTP Orang Tua<br>
                                &nbsp;&nbsp;&nbsp; c. Kartu Keluarga ( KK )<br>
                                &nbsp;&nbsp;&nbsp; d. Surat Nikah Orang Tua<br>
                                3. Paspor lama bagi yang telah memiliki paspor; <br>
                                4. Surat Pernyataan Orang Tua yang ditanda tangi oleh kedua Orang Tua bermaterai Rp.6000; <br>
                                5. Paspor kedua orang tua bagi yang telah memiliki paspor;
                            </div>
                            <div class="tab-pane" id="paspor3" align="Justify">
                            <em>(Sesuai dengan surat edaran Menteri Hukum dan HAM nomor : M.HH-07.UM.01.01 Tahun 2017)</em><br><br>
                            1. Mengisi formulir permohonan paspor RI dengan benar dan lengkap (perdim 11 yang didapat di Kantor Imigrasi);<br>
                            2. Melampirkan Fotocopy dan berkas asli identitas diri, antara lain: <br>
                            &nbsp;&nbsp;&nbsp; a. Kartu Tanda Penduduk Elektronik ( E-KTP )<br>
                            &nbsp;&nbsp;&nbsp; b. Paspor Lama diterbitkan setelah Tahun 2009 dan diterbitakan di Kantor Imigrasi di Indonesia<br>
                            <em><q> (Note : Apabila pembuatan paspor diabawah tahun 2009, pemohon membawa persayaratan sama dengan pembuatan papor baru)</q></em>
                            </div>
                            <div class="tab-pane" id="paspor4">
                                <p><img src="img/prosedur-paspor.png" class="img-responsif"></p>
                            </div>
                        </div>   
                    </div><!--  End span7 --> 
                </div> <!--  End row --> 
            </div>
        </section>
    </div>
@endsection