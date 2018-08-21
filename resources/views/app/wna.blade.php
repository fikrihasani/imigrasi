@extends('layouts.app')

@section('content')
    <section class="span10  ">
        <div  class="col-right">
        
            <div class="row">
                <div class="span10">
                    <h3>Layanan Warga Negara Asing</h3>
                    
                    <!--  Tabs -->   
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#wna1" data-toggle="tab">Izin Tinggal Kunjungan</a></li>
                        <li><a href="#wna2" data-toggle="tab">Izin Tinggal Terbatas</a></li>
                        <li><a href="#wna3" data-toggle="tab">Izin Tinggal Tetap</a></li>
                        <li><a href="#wna4" data-toggle="tab">Mutasi Data Orang Asing</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="wna1"> 
                            <a class="accrodian-trigger" href="#">Deskripsi</a>
                            <div  id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p align="justify">Izin Tinggal Kunjungan adalah izin tinggal bagi orang asing yang masuk ke wilayah 
                                    Indonesia dengan Visa Kunjungan yang diberikan oleh Pejabat Imigrasi di Tempat Pemeriksaan Imigrasi. Permohonan Izin Tinggal Kunjungan
                                    bagi anak yang lahir di wilayah Indonesia dari orang tua pemegang Izin Tinggal Kunjungan, permohonan tersebut diajukan kepada Kepala 
                                    Kantor Imigrasi atau Pejabat Imigrasi yang ditunjuk pada Kantor Imigrasi yang wilayah kerjanya meliputi tempat tinggal yang bersangkutan. 
                                    Perpanjangan Izin Tinggal Kunjungan diberikan oleh Kepala Kantor Imigrasi yang wilayah kerjanya meliputi tempat tinggal orang asing</p>
                                    
                                    <p align="justify">
                                        Izin Tinggal Kunjungan diberikan oleh Pejabat Imigrasi atau Pejabat Dinas Luar Negeri untuk berada di Wilayah Indonesia. Izin Tinggal Kunjungan diberikan kepada:
                                        <br/>1. Orang Asing yang masuk wilayah Indonesia dengan Visa Kunjungan; atau
                                        <br/>2. Anak yang baru lahir di wilayah Indonesia dan pada saat lahir ayah dan / atau ibunya pemegang Izin Tinggal Kunjungan. Izin Tinggal Kunjungan tersebut diberikan sesuai dengan Izin Tinggal Kunjungan ayah dan/atau ibunya.
                                        <br/>3. Orang Asing dari negara yang dibebaskan dari kewajiban memiliki Visa sesuai dengan ketentuan peraturan perundang-undangan;
                                        <br/>4. Orang Asing yang bertugas sebagai awak Alat Angkut yang sedang berlabuh atau berada di wilayah Indonesia sesuai dengan ketentuan peraturan perundang-undangan;
                                        <br/>5. Orang Asing yang masuk wilayah Indonesia dalam keadaan darurat; dan
                                        <br/>6. Orang Asing yang masuk wilayah Indonesia dengan Visa Kunjungan saat kedatangan
                                    </p>

                                    <p align="justify">
                                    Izin Tinggal Kunjungan berakhir karena beberapa sebab antara lain:
                                        <br/>1. Pemegang izin kembali ke negara asalnya;
                                        <br/>2. Habis masa berlaku;
                                        <br/>3. Beralih status menjadi Izin Tinggal Terbatas;
                                        <br/>4. Dibatalkan oleh Menteri atau Pejabat Imigrasi yang ditunjuk;
                                        <br/>5. Pemegang izin dikenai deportasi; atau
                                        <br/>6. Pemegang izin Meninggal dunia.
                                    </p>  
                                </div>
                            </div>
                            <a class="accrodian-trigger" href="#">Syarat</a>
                            <div id="collapseTwo" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>
                                        <b>Permohonan Perpanjangan</b>
                                        <br>Persyaratan Umum, melampirkan :
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;1. Formulir permohonan.
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;2. Surat permintaan dan jaminan dari Penjamin.
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;3. Paspor kebangsaan asli dan fotocopy yang terdapat bukti izin kunjungan yang sah dan berlaku.
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;4. Permohonan perpanjangan kedua hingga kelima melampirkan bukti pendaftaran orang asing dari Kepala Kantor Imigrasi atau
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;  Pejabat Imigrasi yang ditunjuk.
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;5. Tidak termasuk dalam daftar cegah-tangkal.
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;6. Membayar Biaya Imigrasi sesuai dengan ketentuan.
                                        <br>Persyaratan Khusus, melampirkan :
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;1. Bukti jaminan berupa return-ticket untuk pulang atau meneruskan perjalanan ke negara lain.
                                        <br><br>
                                        <b>Permohonan Baru</b>
                                        <br>Permohonan Izin Tinggal kunjungan bagi Orang Asing yang masuk wilayah Indonesia dengan Visa Kunjungan, melampirkan :
                                        <br>1. Surat penjaminan dari Penjamin pada saat mengajukan permohonan Visa; dan
                                        <br>2. Paspor yang sah dan masih berlaku.
                                        <br>3. Permohonan Izin Tinggal Kunjungan bagi anak yang lahir di Wilayah Indonesia dari orang tua pemegang Izin Tinggal Kunjungan diajukan dengan mengisi formulir permohonan dan melampirkan persyaratan:
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;a. Paspor kebangsaan anak dari perwakilan negaranya di Indonesia;
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;b. Surat keterangan kelahiran anak dari rumah sakit atau akta kelahiran dari pejabat yang berwenang;
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;c. Fotokopi paspor kebangsaan orang tua; dan
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;d. Fotokopi Izin Tinggal Kunjungan orang tua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="wna2">
                            <a class="accrodian-trigger" href="#">Deskripsi</a>
                            <div class="accrodian-data">
                                <p style=”text-align: justify; text-indent: 0.5in;>
                                    <b>Izin Tinggal terbatas diberikan kepada:</b> <br>
                                    1. Orang Asing yang masuk Wilayah Indonesia dengan Visa tinggal terbatas atau Orang Asing yang diberikan alih status dari Izin <br>
                                    &nbsp;&nbsp;Tinggal kunjungan, yang meliputi :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. Orang Asing dalam rangka penanaman modal;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. Bekerja sebagai tenaga ahli;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. Melakukan tugas sebagai rohaniawan;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. Mengikuti pendidikan dan pelatihan;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;e. Mengadakan penelitian ilmiah;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;f. Menggabungkan diri dengan suami atau istri pemegang Izin Tinggal terbatas;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;g. Menggabungkan diri dengan ayah dan/atau ibu bagi anak berkewarganegaraan asing yang mempunyai hubungan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; hukum kekeluargaan dengan ayah dan/atau ibu warga negara Indonesia;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;h. Menggabungkan diri dengan ayah dan/atau ibu pemegang Izin Tinggal terbatas atau Izin Tinggal Tetap bagi anak yang berusia 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; di bawah 18 (delapan belas) tahun dan belum kawin;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;i. Orang Asing eks warga negara Indonesia; dan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;j. Wisatawan lanjut usia mancanegara
                                    <br>2. Anak yang pada saat lahir di Wilayah Indonesia ayah dan/atau ibunya pemegang Izin Tinggal terbatas;
                                    <br>3. Nakhoda, awak kapal, atau tenaga ahli asing di atas kapal laut, alat apung, atau instalasi yang beroperasi di wilayah perairan
                                    <br>&nbsp;&nbsp;&nbsp;dan wilayah yurisdiksi Indonesia sesuai dengan ketentuan peraturan perundang-undangan;
                                    <br>4. Orang Asing yang kawin secara sah dengan warga negara Indonesia; atau
                                    <br>5. Anak dari Orang Asing yang kawin secara sah dengan warga negara Indonesia
                                    <br><br>
                                    <b>Izin Tinggal terbatas berakhir karena pemegang Izin Tinggal terbatas:</b>
                                    <br>1. Kembali ke negara asalnya dan tidak bermaksud masuk lagi ke Wilayah Indonesia;
                                    <br>2. Kembali ke negara asalnya dan tidak kembali lagi melebihi masa berlaku Izin Masuk Kembali yang dimilikinya;
                                    <br>3. Memperoleh kewarganegaraan Republik Indonesia;
                                    <br>4. Izinnya telah habis masa berlaku;
                                    <br>5. Izinnya beralih status menjadi Izin Tinggal Tetap;
                                    <br>6. Izinnya dibatalkan oleh Menteri atau Pejabat Imigrasi yang ditunjuk;
                                    <br>7. Dikenai Deportasi; atau
                                    <br>8. Meninggal dunia
                                </p>
                            </div>
                            <a class="accrodian-trigger" href="#">Syarat</a>
                            <div class="accrodian-data">
                                <p>
                                   A. Persyaratan Umum, melampirkan:
                                    <br>1. Surat Permohonan dari Sponsor;
                                    <br>2. Surat Pernyataan dan Jaminan dari Sponsor;
                                    <br>3. Fotocopy KTP Sponsor;
                                    <br>4. Fotocopy Paspor, visa dan cap pendaratan dan Paspor Asli;
                                    <br>5. Surat penjaminan dari Penjamin, kecuali Orang Asing yang kawin secara sah dengan warga negara Indonesia;
                                </p>
                                <p align="Justify">
                                   B. Persyaratan Khusus:
                                    <br>1. Bagi Orang Orang Asing dalam rangka penanaman modal, bekerja sebagai tenaga ahli dan melakukan tugas sebagai rohaniawan, melampirkan persyaratan :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. Surat keterangan domisili;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. Surat rekomendasi dari kementerian atau lembaga pemerintah nonkementerian terkait;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. Rencana Penggunaan Tenaga Kerja Asing (RPTKA) dari instansi berwenang;
                                    <br><br>2. Bagi Orang Orang Asing dalam rangka mengikuti pendidikan dan pelatihan, dan mengadakan penelitian ilmiah, melampirkan persyaratan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. Surat keterangan domisili;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. Surat rekomendasi dari kementerian atau lembaga pemerintah nonkementerian terkait;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. Rekomendasi untuk maksud belajar/penelitian dari instansi yang berwenang (Kemendiknas /LIPI);
                                    <br><br>3. Bagi anak yang pada saat lahir di Wilayah Indonesia ayah dan/atau ibunya pemegang Izin Tinggal terbatas, melampirkan persyaratan :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. fotokopi akta kelahiran;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. fotokopi akta perkawinan atau buku nikah dari orang tua;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi paspor kebangsaan ayah dan/atau ibuyang sah dan masih berlaku;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. fotokopi Izin Tinggal terbatas ayah dan/atau ibu yang masih berlaku;    
                                    <br><br>4. Bagi Orang Asing yang kawin secara sah dengan warga negara Indonesia, melampirkan persyaratan :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat permohonan dari suami atau istri yang warga negara Indonesia;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. surat keterangan domisili;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi akta perkawinan atau buku nikah;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. fotokopi surat bukti pelaporan perkawinan dari kantor catatan sipil untuk pernikahan yang dilangsungkan di luar negeri;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;e. fotokopi kartu tanda penduduk suami atau istri warga negara Indonesia yang masih berlaku;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;f. fotokopi kartu keluarga suami atau istri yang warga negara Indonesia.
                                    <br><br>5. Bagi anak dari Orang Asing yang kawin secara sah dengan warga negara Indonesia, melampirkan persyaratan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat permohonan dari ayah dan/atau ibu warga negara Indonesia;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. surat keterangan domisili;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi akta kelahiran;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. fotokopi akta perkawinan atau buku nikah orang tua;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;e. fotokopi kartu tanda penduduk ayah atau ibu warga negara Indonesia yang masih berlaku;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;f. fotokopi kartu keluarga ayah atau ibu yang warga negara Indonesia;
                                    <br><br>6. Bagi Orang Asing yang menggabungkan diri dengan suami atau istri pemegang Izin Tinggal terbatas, melampirkan persyaratan :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat keterangan domisili;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. fotokopi akta perkawinan atau buku nikah;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi Izin Tinggal terbatas suami atau istri;
                                    <br><br>7. Bagi anak berkewarganegaraan asing yang menggabungkan diri dengan ayah dan/atau ibuwarga negara Indonesia, melampirkan persyaratan : 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat permohonan dari ayah dan/atau ibu warga negara Indonesia;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. surat keterangan domisili;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. akta kelahiran;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. fotokopi akta perkawinan atau buku nikah orang tua;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;e. fotokopi kartu tanda penduduk ayah dan/atau ibu warga negara Indonesia yang masih berlaku;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;f. fotokopi kartu keluarga ayah dan/atau ibu yang warga negara Indonesia;
                                    <br><br>8. Bagi anak yang berusia di bawah 18 (delapan belas) tahun dan belum kawin yang menggabungkan diri denganayah dan/atau ibu pemegang Izin Tinggal terbatas atau Izin Tinggal Tetap, melampirkan persyaratan : 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat keterangan domisili;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. fotokopi akta kelahiran;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi akta perkawinan atau buku nikah orang tua;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. fotokopi paspor kebangsaan ayah dan/atau ibu yang sah dan masih berlaku;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;e. fotokopi Izin Tinggal terbatas ayah dan/atau ibu yang sah dan masih berlaku;
                                    <br><br>9. Bagi Orang Asing eks warga negara Indonesia, melampirkan persyaratan :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat keterangan domisili;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. bukti yang menunjukkan pernah menjadi warga negara Indonesia;
                                    <br><br>10. Bagi wisatawan lanjut usia mancanegara, melampirkan persyaratan : 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat keterangan domisili;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. surat sponsor dari Biro Perjalanan yang ditunjuk oleh Kementerian Kebudayaan dan Pariwisata.
                                    <br><br>11. Bagi nakhoda, awak kapal, atau tenaga ahli asing di atas kapal laut, alat apung, atau instalasi yang beroperasi di wilayah perairan dan wilayah yurisdiksi Indonesia, melampirkan persyaratan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. daftar awak kapal yang ditandatangani oleh nakhoda dan diketahui oleh Pejabat Imigrasi di Tempat Pemeriksaan Imigrasi;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. fotokopi paspor kebangsaan yang telah diberikan Tanda Masuk; dan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. rekomendasidari kementerian atau lembaga pemerintah nonkementerian terkait.
                                <br><br>
                                C. Ketentuan mengenai persyaratan sebagaimana dimaksud dalam point A dan B, berlaku juga bagi perpanjangan Izin Tinggal terbatas.
                                <br>D. Selain memenuhi persyaratan sebagaimana dimaksud dalam point A dan point B, untuk perpanjangan Izin Tinggal Terbatas juga harus melampirkan kartu Izin Tinggal terbatas yang lama.
                                <br>E. Permohonan Izin Tinggal Terbatas, diajukan oleh Orang Asing atau Penjamin dengan mengisi formulir permohonan dan melampirkan persyaratan yang telah ditentukan kepadaKepala Kantor Imigrasi atau Pejabat Imigrasi yang ditunjuk yang wilayah kerjanya meliputi tempat tinggal Orang Asing.
                                <br>F. Permohonan Izin Tinggal Terbatas bagi Orang Asing yang masuk Wilayah Indonesia dengan Visa tinggal terbatasharus diajukan dalam waktu paling lama 30 (tiga puluh) hari sejak Tanda Masuk diberikan.
                                <br>G. Dalam hal permohonan Izin Tinggal terbatas tidak diajukan dalam jangka waktu yang telah ditentukan, dikenai biaya beban sesuai dengan ketentuan peraturan perundang-undangan.
                                <br>H. Perpanjangan Izin Tinggal Terbatas diberikan oleh Kepala Kantor Imigrasi yang wilayah kerjanya meliputi tempat tinggal orang asing untuk jangka waktu paling lama 1 (satu) tahun, dan diberikan paling banyak 5 (lima) kali berturut-turut.
                                <br>I. Perpanjangan yang pertama dan kedua dilaksanakan Kepala Kantor Imigrasi setelah mendapat persetujuan Kepala Kantor Wilayah Kementerian Hukum dan HAM dalam hal ini Kepala Divisi Keimigrasian.
                                <br>J. Perpanjangan yang ketiga sampai dengan kelima dilaksanakan Kepala Kantor Imigrasi setelah mendapat persetujuan tertulis Direktur Jenderal Imigrasi melalui pertimbangan Kepala Kantor Wilayah Kementerian Hukum dan HAM dalam hal ini Kepala Divisi Keimigrasian.

                                </p>
                            </div> 
                        </div>
                        <div class="tab-pane" id="wna3">
                            <a class="accrodian-trigger" href="#">Deskripsi</a>
                            <div class="accrodian-data">
                                <p>
                                    Izin Tinggal Tetap dapat diberikan kepada:
                                    <br>1. Orang Asing pemegang Izin Tinggal Terbatas sebagai rohaniawan, pekerja, investor, dan lanjut usia;
                                    <br>2. keluarga karena perkawinan campuran;
                                    <br>3. suami, istri, dan/atau anak dari Orang Asing pemegang Izin Tinggal Tetap; dan
                                    <br>4. Orang Asing eks warga negara Indonesia dan eks subjek anak berkewarganegaraan ganda Republik Indonesia.
                                    <br> Izin Tinggal Tetap bagi Orang Asing sebagaimana dimaksud di atas diberikan <b>melalui alih status</b>.
                                    <br><br>Izin Tinggal Tetap yang diberikan kepada Orang Asing juga dapat diberikan kepada:
                                    <br>1. eks subyek anak berkewarganegaraan ganda Republik Indonesia yang memilih kewarganegaraan asing;
                                    <br>2. anak yang lahir di Indonesia dari Orang Asing pemegang Izin Tinggal Tetap; dan
                                    <br>3. warga negara Indonesia yang kehilangan kewarganegaraan Indonesia di Wilayah Indonesia.
                                    <br>Izin Tinggal Tetap bagi Orang Asing sebagaimana dimaksud di atas diberikan secara langsung <b>tanpa melalui alih status</b>.
                                </p>
                            </div>
                            <a class="accrodian-trigger" href="#">Syarat</a>
                            <div class="accrodian-data">
                                <p>
                                    <b>Mengisi formulir dan melampirkan persyaratan</b>:
                                    <br>1. paspor kebangsaan yang sah dan masih berlaku;
                                    <br>2. fotokopi Izin Tinggal terbatas yang masih berlaku kecuali bagi Orang Asing eks subyek anak berkewarganegaraan ganda Republik Indonesia yang memilih kewarganegaraan asing, anak yang lahir di Indonesia dari Orang Asing pemegang Izin Tinggal Tetap dan warga negara Indonesia yang kehilangan kewarganegaraan Indonesia di Wilayah Indonesia.
                                    <br>3. surat keterangan domisili;
                                    <br>4. pernyataan integrasi yang telah ditandatangani oleh yang bersangkutan; dan
                                    <br>5. rekomendasi dari kementerian atau lembaga pemerintah nonkementerian terkait.
                                    <br><br>
                                    <b>Selain melampirkan persyaratan sebagaimana dimaksud pada point 1, bagi</b>:
                                    <br> 1. anak yang akan mengikuti atau menggabungkan diri dengan ayah dan/atau ibu pemegang Izin Tinggal Tetap, juga harus melampirkan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat penjaminan dari Penjamin;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. fotokopi akta kelahiran;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi akta perkawinanatau buku nikah orang tua;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. fotokopi paspor kebangsaanayah dan/atau ibu yang sah dan masih berlaku;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;e. fotokopi Izin Tinggal Tetap ayah dan/atau ibu yang masih berlaku; dan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;f. keputusan mengenai alih status Izin Tinggalnya.
                                    <br><br>2. anak yang lahir di Wilayah Indonesia dari orang tua pemegang Izin Tinggal Tetap, juga harus melampirkan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat penjaminan dari Penjamin;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. fotokopi akta kelahiran;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi akta perkawinanatau buku nikah orang tua;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. fotokopi paspor kebangsaanayah dan/atau ibu yang sah dan masih berlaku; dan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;e. fotokopi Izin Tinggal Tetap ayah dan/atau ibu yang masih berlaku.
                                    <br><br>3. Orang Asing eks warga negara Indonesia, juga harus melampirkan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat penjaminan dari Penjamin;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. bukti yang menunjukan pernah menjadi warga negara Indonesia; dan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. keputusan mengenai alih status Izin Tinggalnya.
                                    <br><br>4. Anak berkewarganegaraan ganda yang memilih kewarganegaraan asing, juga harus melampirkan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat permohonan dari ayah atau ibu warga negara Indonesia;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. isian formulir penyampaian pernyataan memilih kewarganegaraan asing sesuai dengan ketentuan peraturan perundang-undangan;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. bukti pengembalian Paspor bagi yang memiliki; dan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. bukti pengembalian affidavit.
                                    <br><br>5. Suami atau istri warga negara asing yang menggabungkan diri dengan istri atau suami warga negara Indonesia, juga harus melampirkan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat permohonan dari suami atau istri warga negara Indonesia;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. fotokopi akta perkawinan atau buku nikah;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi surat melaporkan perkawinan dari instansi yang berwenang untuk perkawinan yang dilangsungkan di luar negeri;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. fotokopi kartu tanda penduduk suami atau isteri warga negara Indonesia yang masih berlaku;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;e. fotokopi kartu keluarga suami atau isteri yang warga negara Indonesia; dan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;f. keputusan alih status.
                                    <br><br>6. Anak berkewarganegaraan asing dari hasil perkawinan yang sah yang menggabungkan diri dengan ayah atau ibu warga negara Indonesia, juga harus melampirkan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat permohonan dari ayah atau ibu warga negara Indonesia;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. fotokopi kartu tanda penduduk ayah atau ibu yang warga negara Indonesia yang masih berlaku;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi kartu keluarga ayah atau ibu yang warga negara Indonesia; dan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. surat keputusan alih status.
                                    <br><br>7. Anak dari Orang Asing yang kawin secara sah dengan warga negara Indonesia yang belum berusia 18 (delapan belas) tahun dan belum kawin yang menggabungkan dengan ayah atau ibu warga negara Indonesia, juga harus melampirkan:
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;a. surat permohonan dari ayah atau ibu warga negara Indonesia;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;b. fotokopi akta perkawinan atau buku nikah orang tua;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;c. fotokopi kartu tanda penduduk ayah atau ibu yang warga negara Indonesia yang masih berlaku;
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;d. fotokopi kartu keluarga ayah atau ibu yang warga negara Indonesia; dan
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;e. surat keputusan alih status.
                                    <b>
                                    <br><br>Ketentuan mengenai persyaratan, berlaku juga bagi perpanjangan Izin Tinggal Tetap.
                                    <br>Selain memenuhi persyaratan sebagaimana dimaksud pada point 1 dan point 2, untuk perpanjangan Izin Tinggal Tetap juga harus melampirkan kartu Izin Tinggal Tetap yang lama.
                                    </b>
                                </p>
                            </div>    
                        </div>
                        <div class="tab-pane" id="wna4">
                            <a class="accrodian-trigger" href="#">Kelahiran Anak Indonesia Ganda Terbatas</a>
                            <div class="accrodian-data">
                                <p>
                                    1. Surat Permohonan dari Penjamin / Orang Tua;
                                    <br>2. Fotocopy Akte lahir anak;
                                    <br>3. Fotocopy Akte nikah orang tua;
                                    <br>4. Fotocopy KTP dan KK Orang Tua;
                                    <br>5. Fotocopy dan Asli Paspor dan Dokumen Keimigrasian (Kitas/Kitap) orang tua
                                </p>
                            </div>
                            <a class="accrodian-trigger" href="#">Kelahiran Anak Warga Negara Asing</a>
                            <div class="accrodian-data">
                                <p> 
                                    1. Surat Permohonan dari Penjamin / Orang Tua;
                                    <br>2. Surat Jaminan dari Penjamin;
                                    <br>3. Fotocopy KTP Penjamin;
                                    <br>4. Fotocopy Akte Lahir Anak;
                                    <br>5. Fotocopy dan Asli Paspor dan Dokumen Keimigrasian (Kitas/Kitap) Orang Tua.
                                </p>
                            </div>
                            <a class="accrodian-trigger" href="#">Laporan Perkawinan</a>
                            <div class="accrodian-data">
                                <p>
                                    1. Surat Permohonan dari Penjamin;
                                    <br>2. Fotocopy KTP Penjamin;
                                    <br>3. Fotocopy buku nikah atau akta perkawinan;
                                    <br>4. Fotocopy dan Asli Paspor dan Dokumen Keimigrasian (Kitas/Kitap).
                                </p>
                            </div>
                            <a class="accrodian-trigger" href="#">Laporan Perceraian</a>
                            <div class="accrodian-data">
                                <p>
                                    1. Surat Permohonan dari Penjamin;
                                    <br>2. Fotocopy KTP Penjamin;
                                    <br>3. Fotocopy buku nikah atau akta perkawinan;
                                    <br>4. Fotocopy dan Asli Paspor dan Dokumen Keimigrasian (Kitas/Kitap).
                                </p>
                            </div>
                            <a class="accrodian-trigger" href="#">Laporan Meninggal Dunia</a>
                            <div class="accrodian-data">
                                <p> 
                                    1. Surat Permohonan dari Penjamin;
                                    <br>2. Fotocopy KTP Penjamin;
                                    <br>3. Fotocopy buku nikah atau akta perkawinan;
                                    <br>4. Fotocopy dan Asli Paspor dan Dokumen Keimigrasian (Kitas/Kitap).
                                </p>
                            </div>
                            <a class="accrodian-trigger" href="#">Mutasi Alamat Lokal</a>
                            <div class="accrodian-data">
                                <p>
                                    1. Surat Permohonan dari Penjamin;
                                    <br>2. Surat Jaminan dari Penjamin;
                                    <br>3. Fotocopy KTP Penjamin;
                                    <br>4. Fotocopy KK ( bagi Penjamin perorangan );
                                    <br>5. Surat Keterangan Domisili dari Kelurahan atau Catatan Sipil;
                                    <br>6. Fotocopy IMTA dan RPTKA;
                                    <br>7. Fotocopy dan Asli Paspor dan Dokumen Keimigrasian (Kitas/Kitap).
                                </p>
                            </div>
                            <a class="accrodian-trigger" href="#">Mutasi Alamat dari/ ke Kantor Imigrasi Lain</a>
                            <div class="accrodian-data">
                                <p>
                                    1. Surat Permohonan dari Penjamin;
                                    <br>2. Surat Jaminan dari Penjamin;
                                    <br>3. Fotocopy KTP Penjamin;
                                    <br>4. Fotocopy KK ( bagi Penjamin perorangan );
                                    <br>5. Surat keterangan pindah domisili dari instansi yang berwenang;
                                    <br>6. Fotocopy IMTA dan RPTKA;
                                    <br>7. Fotocopy dan Asli Paspor dan Dokumen Keimigrasian (Kitas/Kitap);
                                    <br>8. Surat pengantar pindah dan berkas permohon dari Kantor Imigrasi berasal.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div><!--  End span7 --> 
            </div> <!--  End row --> 
        </div>
    </section>
@endsection