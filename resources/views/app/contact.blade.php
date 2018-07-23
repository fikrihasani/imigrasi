@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="span12">Contacts</h1>
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="{{route('index')}}">Home</a><span class="divider">/</span></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
            <!-- =========================Start Col left section ============================= -->
            <aside class="span4">
                <div class="col-left">
                    <h3>Alamat</h3>
                    <ul>
                        <li><i class="icon-home"></i> Jl. Ra Kartini No. 53, Lolu Selatan, Palu Selatan, Kota Palu, Sulawesi Tengah 94111</li>
                        <li><i class="icon-phone"></i> Telephone: + 62 45142 1433</li>
                        <li><i class="icon-phone-sign"></i> Fax: + 62 455 279</li>
                        <li><i class="icon-envelope"></i> Email: <a href="#">immigration.palu@gmail.com</a></li>
                    </ul>
                    <hr>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7978.639222030405!2d119.87964738610843!3d-0.9059189403642333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bee74ad13d239%3A0xda2d3af5ffbb743e!2sKantor+Imigrasi+Kelas+I+-+Palu!5e0!3m2!1sid!2sid!4v1532348334676" height="250" frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
    
                </div>

            </aside>
            
            <!-- =========================Start Col right section ============================= -->
            <section class="span7 ">
            <div class="col-right">
                <p class="lead">
                    Laporkan segala bentuk pelanggaran melalui form berikut:
                </p>
                <hr>            
                <div id="message-contact"></div>
                    <form method="post" action="#" id="contactform">
                        <div class="row">
                            <div class="span3">
                                <label>Nama <span class="required">* </span></label>
                                <input type="text" class="span3 ie7-margin" id="name_contact">
                            </div>
                            <div class="span3">
                                <label>Email </label>
                                <input type="email" id="email_contact" class="span3 ie7-margin">
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3">
                                <label>Nomor HP <span class="required">* </span></label>
                                <input type="text" id="phone_contact" class="span3 ie7-margin">
                            </div>
                            <div class="span3">
                                <label>Subjek <span class="required">* </span></label>
                                <input type="text" id="phone_contact" class="span3 ie7-margin">
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3">
                                <label>Message <span class="required">*</span></label>
                                <textarea rows="5" id="message_contact" class="span6"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="button-align span3">
                                <input type="submit" id="submit-contact" value="Submit" class=" button_medium">
                            </div>
                        </div>
                        <hr>
                    </form>           
                </div><!-- end col right-->
            </section>
        </div><!-- end row-->
    </div><!-- end container-->
@endsection