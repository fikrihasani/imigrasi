@extends('layouts.app')

@section('content')
    <section class="span10  ">
        <div  class="col-right">
        
            <div class="row">
                <div class="span10">
                    <h3>Layanan Online Keimigrasian</h3>
                    
                    <!--  Tabs -->   
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#online1" data-toggle="tab">Visa Online</a></li>
                        <li><a href="#online2" data-toggle="tab">Pelaporan Orang Asing</a></li>
                        <li><a href="#online3" data-toggle="tab">Ijin Tinggal Online</a></li>
                        <li><a href="#online4" data-toggle="tab">Antrian Online</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="online1">
                            <p align="justify">Layanan ini akan membantu Anda untuk mendapatkan Surat Persetujuan Visa yang mana surat tersebut akan menjadi dasar perwakilan Republik Indonesia di luar negeri (Kedutaan Besar, Konsulat Jenderal, atau Konsulat Republik Indonesia) untuk menerbitkan visa bagi Orang Asing</p>
                            <p class="text-center"><a href="https://visaonline.imigrasi.go.id/online/" target="_blank" class="button_large">Ajukan Visa Online </a></p>
                        </div>
                        <div class="tab-pane" id="online2">
                            <p align="justify">Keimigrasian dalam UU Nomor 6 Tahun 2011 tentang Keimigrasian didefinisikan sebagai 'hal ihwal lalu lintas orang yang masuk atau keluar wilayah Indonesia serta pengawasannya dalam rangka menjaga tegaknya kedaulatan negara'. Dalam hal lalu lintas Orang Asing serta keberadaan dan kegiatannya di wilayah Indonesia, Pemerintah Republik Indonesia menerapkan Kebijakan Selektif (selective policy). 
                            Esensi dari kebijakan ini merupakan landasan utama dari setiap peraturan Keimigrasian bagi Orang Asing, yaitu hanya Orang Asing yang bermanfaat dan tidak membahayakan keamanan dan ketertiban umum yang diperbolehkan masuk dan berada di wilayah Indonesia.
                            <br>Layanan ini merupakan layanan yang melibatkan partisipasi masyarakat agar terciptanya keamanan dan ketertiban masyarakat serta melindungi kepentingan nasional dan tegaknya kedaulatan negara.</p>
                            <p class="text-center"><a href="https://apoa.imigrasi.go.id/poa/" target="_blank" class="button_large">Laporkan Orang Asing</a></p>
                        </div>
                        <div class="tab-pane" id="online3">
                            <p align="justify">Setiap Orang Asing yang berada di Wilayah Indonesia, berdasarkan Pasal 48 ayat (1) Undang-undang Nomor 6 tahun 2011, wajib memiliki Izin Tinggal. Adapun Izin Tinggal keimigrasian yang dapat dimiliki oleh orang asing terdiri dari Izin Tinggal Kunjungan, Izin Tinggal Terbatas, dan Izin Tinggal Tetap.
                            <br>Layanan Permohonan Izin Tinggal Online merupakan Aplikasi berbasis web yang bertujuan untuk memberikan layanan Izin Tinggal Keimigrasian secara online kepada pemohon Izin Tinggal Keimigrasian<p>
                            <p class="text-center"><a href="https://izintinggal.imigrasi.go.id/IT-online/" target="_blank" class="button_large">Ajukan Ijin Tinggal Online </a></p>
                        </div>
                        <div class="tab-pane" id="online4">
                            <p align="justify">Layanan Antrian Paspor Online adalah aplikasi yang dibuat untuk menghindari penumpukan calon pemohon paspor di unit Layanan Paspor/ Kantor Imigrasi.
                            Oleh karena itu aplikasi ini dibuat sedemikian rupa agar masyarakat yang ingin membuat paspor, tidak perlu mengantri lagi di loket antrian pada unit layanan paspor, untuk bisa memiliki nomor antrian dapat dilakukan dangan cara registrasi melalui aplikasi antrian online.</p>
                            <p class="text-center"><a href="https://antrian.imigrasi.go.id/" target="_blank" class="button_large">Daftar Antrian Online </a></p>
                        </div>
                    </div>
                </div><!--  End span7 --> 
            </div> <!--  End row --> 
        </div>
    </section>
@endsection