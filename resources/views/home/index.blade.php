@extends('layouts.site')

@section('content')

    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Expensive but the best</h5>
                            <h1>Modern restaurant in center of the city</h1>
                            <a href="./index.html#" class="btn_1">book a table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
echo "<pre>";
print_r($contactInfo);
print_r($aboutInfo);die;
?>

    <section class="about_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="about_part_iner">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="about_text">
                                    <h5>{{ __('home.aboutUs') }}</h5>
                                    <h2>Delicious food provider since 1990</h2>
                                    <p>
                                        Good lights it very to above. Days image to sea. Over
                                        there seasons and spirit beast in. Greater bearing
                                        creepeth very behold fourth night morning seed moved.
                                    </p>
                                    <p>
                                        Good lights it very to above. Days image to sea. Over
                                        seasons and spirit beast in over greater bearing creepeth.
                                    </p>
                                    <a href="./index.html#" class="btn_3">learn More</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="about_img">
                                    <img src="./images/xabout.png.pagespeed.ic.VlfjiV_Qeq.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="food_menu">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <p>Popular Menu</p>
                        <h2>Delicious Food Menu</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-member">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="./images/xsingle_food_1.png.pagespeed.ic.BEzTNKCjrm.webp"
                                         class="img-responsive" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Pork Sandwich</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>Form $40.00</h5>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="./images/xsingle_food_2.png.pagespeed.ic.u-KHJaO00s.webp"
                                         class="img-responsive" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Roasted Marrow</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>Form $40.00</h5>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="./images/xsingle_food_3.png.pagespeed.ic.oyVNuZ3Bdi.webp"
                                         class="img-responsive" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Summer Cooking</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>Form $40.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="./images/xsingle_food_4.png.pagespeed.ic.X1RRnZ9nUv.webp"
                                         class="img-responsive" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Easter Delight</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>Form $40.00</h5>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="./images/xsingle_food_5.png.pagespeed.ic.tJjFhHxITl.webp"
                                         class="img-responsive" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Tiener Schnitze</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>Form $40.00</h5>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="./images/xsingle_food_6.png.pagespeed.ic.NcNuzzTtD-.webp"
                                         class="img-responsive" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Chicken Roast</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>Form $40.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <div class="intro_video_icon">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                               href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="ti-control-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="review_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Отзывы</p>
                        <h2>Что они сказали</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="client_review_part owl-carousel owl-loaded owl-drag">


                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transition: all 0.25s ease 0s; width: 4252px; transform: translate3d(-2125px, 0px, 0px);">
                                <div class="owl-item cloned" style="width: 334.333px; margin-right: 20px;">
                                    <div class="client_review_single">
                                        <div class="client_review_text">
                                            <p>
                                                Невероятно вкусный пирог с бараниной и лимонный (как бы пирог
                                                из детства , так готовила мама ) Всем рекомендую

                                            </p>
                                            <div class="client_review_img">
                                                <img src="./images/xclient_1.png.pagespeed.ic.Abc2kQ5Pxi.webp" alt="#"
                                                     data-pagespeed-url-hash="729397122"
                                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                <h4>Alexandr</h4>
                                                <div class="review_icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 334.333px; margin-right: 20px;">
                                    <div class="client_review_single">
                                        <div class="client_review_text">
                                            <p>
                                                Во-первых это невероятно вкусно, качественно и с душой.
                                                Во-вторых, классные сочетания, каждый раз глаза разбегаются,
                                                хочется попробовать все.
                                            </p>
                                            <div class="client_review_img">
                                                <img src="./images/xclient_2.png.pagespeed.ic.Nh5FwpSR-l.webp" alt="#"
                                                     data-pagespeed-url-hash="1023897043"
                                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                <h4>Andrey</h4>
                                                <div class="review_icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 334.333px; margin-right: 20px;">
                                    <div class="client_review_single">
                                        <div class="client_review_text">
                                            <p>
                                                Интересный интерьер, вкусная кухня и самое крутое
                                                адекватные цены Отделочное спасибо официанту
                                                он сделал наш вечер
                                            </p>
                                            <div class="client_review_img">
                                                <img src="./images/xclient_3.png.pagespeed.ic.i3mDTqRcqw.webp" alt="#"
                                                     data-pagespeed-url-hash="1318396964"
                                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                <h4>Artur</h4>
                                                <div class="review_icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 334.333px; margin-right: 20px;">
                                    <div class="client_review_single">
                                        <div class="client_review_text">
                                            <p>
                                                Сейчас в такую сырую погоду хочется поужинать в уютном
                                                заведении. Приятная атмосфера и интерьер с расслабляющей
                                                музыкой.
                                            </p>
                                            <div class="client_review_img">
                                                <img src="./images/xclient_1.png.pagespeed.ic.Abc2kQ5Pxi.webp" alt="#"
                                                     data-pagespeed-url-hash="729397122"
                                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                <h4>Slava</h4>
                                                <div class="review_icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 334.333px; margin-right: 20px;">
                                    <div class="client_review_single">
                                        <div class="client_review_text">
                                            <p>
                                                Кухня потрясающая, коктейли на уровне. Берёшь что угодно
                                                из меню и оно вкусно). Хорошее заведение. Рекомендую !
                                                все понравилось.
                                            </p>
                                            <div class="client_review_img">
                                                <img src="./images/xclient_2.png.pagespeed.ic.Nh5FwpSR-l.webp" alt="#"
                                                     data-pagespeed-url-hash="1023897043"
                                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                <h4>Vladimir</h4>
                                                <div class="review_icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 334.333px; margin-right: 20px;">
                                    <div class="client_review_single">
                                        <div class="client_review_text">
                                            <p>
                                                Уже не первый раз в этом месте, периодически ходим сюда с
                                                друзьями. Здесь безумно вкусно и очень приветливый
                                                персонал.
                                            </p>
                                            <div class="client_review_img">
                                                <img src="./images/xclient_3.png.pagespeed.ic.i3mDTqRcqw.webp" alt="#"
                                                     data-pagespeed-url-hash="1318396964"
                                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                <h4>Dmitriy</h4>
                                                <div class="review_icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                            </button>
                        </div>
                        <div class="owl-dots">
                            <button role="button" class="owl-dot"><span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                            <button role="button" class="owl-dot active"><span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_part_iner">
                        <h3>{{ __('home.contactUs') }}</h3>
                        <div class="single_contact_part">
                            <h5>address</h5>
                            <p>240, Kings street, New York city USA</p>
                        </div>
                        <div class="single_contact_part">
                            <h5>WE ARE OPEN</h5>
                            <p>Mon - Fri (9.00-19.00)</p>
                            <p>Sat - Sun (9.00-19.00)</p>
                        </div>
                        <div class="single_contact_part">
                            <h5>RESERVATION</h5>
                            <p>+880 367 251 167</p>
                            <span>barires@contact.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
