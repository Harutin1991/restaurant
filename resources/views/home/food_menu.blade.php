@extends('layouts.site')

@section('content')

    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
{{--                            <p>Home. Menu</p>--}}
                            <h2>Меню</h2>
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
                        <p>{{ __('home.deliciousMenu') }}</p>
                        <h2>{{ __('home.popularMenu') }}</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-member">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <?php $count = 0;?>
                                @foreach($products as $product)

                                    @if($count <= 2)
                                        <div class="single_food_item media">
                                            <img src='{{ asset("uploads/".$product->logo)}}'  style="width:170px !important;height:165px !important"
                                                 alt="{{$product->title}}"
                                                 class="img-responsive" >
                                            <div class="media-body align-self-center">
                                                <h3>{{$product->title}}</h3>
                                                <p>{{$product->uses_desc}}</p>
                                                <h5>{{$product->price}}</h5>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $count++; ?>
                                @endforeach
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <?php $count = 0;?>
                                @foreach($products as $product)
                                    @if($count > 2)
                                        <div class="single_food_item media">
                                            <img src='{{ asset("uploads/".$product->logo)}}'
                                                 alt="{{$product->title}}"
                                                 class="img-responsive" >
                                            <div class="media-body align-self-center">
                                                <h3>{{$product->title}}</h3>
                                                <p>{{$product->uses_desc}}</p>
                                                <h5>{{$product->price}}</h5>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $count++; ?>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
