@extends('layouts.site')

@section('content')
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
{{--                            <p>Контакты</p>--}}
                            <h2>Контакты</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section section_padding">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">

                <!DOCTYPE html>
                <html>
                <head>
                    <title>Example with an interactive map</title>
                </head>
                <body>
                <div id="mymap" style="width: 100%; height: 200px"></div>
                </body>
                </html>
                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A053bd947d462cc1a45aeba4070defff75501905071c0eaf68436ac9976ec698c&id=mymap&lang=en_US&apikey=<API-key>"></script>
                <script src="./js/js"></script>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Свяжитесь с нами</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form"
                          action="https://preview.colorlib.com/theme/buri/contact_process.php" method="post"
                          id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                          onfocus="this.placeholder = &#39;&#39;"
                                          onblur="this.placeholder = &#39;Enter Message&#39;"
                                          placeholder="Текст"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                           onfocus="this.placeholder = &#39;&#39;"
                                           onblur="this.placeholder = &#39;Enter your name&#39;"
                                           placeholder="Имя">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                           onfocus="this.placeholder = &#39;&#39;"
                                           onblur="this.placeholder = &#39;Enter email address&#39;"
                                           placeholder="Почта">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                           onfocus="this.placeholder = &#39;&#39;"
                                           onblur="this.placeholder = &#39;Enter Subject&#39;" placeholder="Заголовок">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_4">
                                Отправить письмо
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>{{ $contactInfo->country }}</h3>
                            <p>{{ $contactInfo->factory_name }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>{{ $contactInfo->telephone_number }}</h3>
                            <p>{{ $contactInfo->fax_number }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>{{ $contactInfo->po_box }}</h3>
                            <p>Отправьте нам свой запрос в любое время!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
