@extends('layouts.app')

@section('contact')
class="active"
@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2" style="padding: 140px 0 60px 0;">
    <h3>Contacto</h3>
</div>
<!-- bradcam_area_end -->

<!-- ================ contact section start ================= -->
<section class="contact-section" style="padding: 100px 0 60px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Queremos saber de ti :)</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu mensaje'" placeholder="Escribe tu mensaje"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu nombre'" placeholder="Escribe tu nombre">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu correo electrónico'" placeholder="Escribe tu correo electrónico">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu asunto'" placeholder="Escribe tu asunto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <!--div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div-->
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+52 618 839 3111</h3>
                        <p>Lun a Vie 9am a 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>contacto@mrpython.xyz</h3>
                        <p>Envianos un mensaje</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

@endsection