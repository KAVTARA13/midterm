  
@extends("layouts.main")
@section('content')
    <!-- header area start -->
@include("inc.header")
    <!-- header area end -->

    <!-- main wrapper start -->
    <div class="home2-main-wrapper mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 order-first order-lg-last">
                    <div class="home2-content-wrapper">

                        <!-- product wrapper area start -->
                        <div class="product-wrapper fix pb-75">
                            <div class="container-fluid plr-none">
                                <div class="section-title product-spacing home2-tab-spacing">
                                    <h3><span>ახალი</span> პროდუქტი</h3>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="one">
                                        <div class="product-gallary-wrapper">
                                            <div class="product-gallary-active2 owl-carousel owl-arrow-style product-spacing">
                                                @foreach ($products as $product)
                                                <div class="product-item ">
                                                    <div class="product-thumb">
                                                        <a href="{{ route('name',['id'=>$product->id]) }}">
                                                                <img src="{{$product->img}}" alt="{{$product->brand}}" style="height:200px;object-fit:contain">
                                                            </a>
                                                    </div>
                                                    <div class="product-caption newProduct">
                                                        <div class="manufacture-product">
                                                            <p>

                                                                {{$product->brand}}

                                                            </p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="{{ route('name',['id'=>$product->id]) }}">{{$product->title}}</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box priceToBottom">
                                                            <span class="regular-price">{{$product->price}} ₾</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- product wrapper area start -->

                        <!-- product wrapper area start -->
                        <div class="product-wrapper fix pb-75">
                            <div class="container-fluid plr-none">
                                <div class="section-title product-spacing home2-tab-spacing">
                                    <h3><span>მოთხოვნადი</span> პროდუქტი</h3>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="one">
                                        <div class="product-gallary-wrapper">
                                            <div class="product-gallary-active2 owl-carousel owl-arrow-style product-spacing">
                                                @foreach ($products as $product)
                                                <div class="product-item ">
                                                    <div class="product-thumb">
                                                        <a href="{{ route('name',['id'=>$product->id]) }}">
                                                                <img src="{{$product->img}}" alt="{{$product->brand}}" style="height:200px;object-fit:contain">
                                                            </a>
                                                    </div>
                                                    <div class="product-caption newProduct">
                                                        <div class="manufacture-product">
                                                            <p>

                                                                {{$product->brand}}

                                                            </p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="{{ route('name',['id'=>$product->id]) }}">{{$product->title}}</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box priceToBottom">
                                                            <span class="regular-price">{{$product->price}} ₾</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
 
                                </div>
                            </div>
                        </div>
                        <!-- product wrapper area start -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main wrapper end -->
@include("inc.footer")
@endsection