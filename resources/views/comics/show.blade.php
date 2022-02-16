@extends('layout.app')

@section('title', 'Comic Page DC Comics')

@section('jumbotron-comics')
    <div class="jumbotron-comics">

    </div>
@endsection

@section('content')

<div class="comic_description">
    <div class="bg_brand">
    <img src="{{$comic['thumb'] }}" alt="Comic" class="img_show">
    </div>
    <section class=" bg_comics">
        <div class="comics container_dimension">

            <div class="comic_card_show">



                <div class="container_comic_description">
                    <div class="left_description">
                        <h2>{{$comic['title']}}</h2>
                        <div>
                            <p
                            class="price">US.Price: $ {{$comic['price']}}
                            <span>Available</span>
                            <span>Check Availibility</span>
                        </p>

                        </div>

                        <p class="desc"> {{$comic['description']}}</p>
                    </div>
                    <div class="img_description">
                        <span>Advertisement</span>
                        <img src="{{asset('img/adv.jpg')}}" alt="logo" class="adv_img">
                    </div>
                </div>



            </div>
        </div>

<div class="artists">
    <div class="container_dimension">
        <div class="talent ">
            <h3>Talent</h3>
            <div class="border_tp">Art by:
                 <p>


                    @if($comic['artists'])
                    @forelse($comic['artists'] as $artist)
                    <a href="#" style="color: #0282F9; text-decoration: none">{{$artist}}</a>
                    @empty
                    <a href="#">No artists to show</a>
                    @endforelse
                    @endif
                </p>

            </div>

            <div  class="border_tp">Written by:
                <p>

                    @if($comic['writers'])
                    @forelse($comic['writers'] as $writer)
                    <a href="#" style="color: #0282F9; text-decoration: none">{{$writer}}</a>
                    @empty
                    <a href="#">No writers to show</a>
                    @endforelse
                    @endif
                </p>

            </div>
        </div>

        <div class="specs">
            <h3>Specs</h3>
            <div class="border_tp">Series: <span style="color: #0282F9; text-transform: uppercase">{{$comic['series']}}</span></div>
            <div  class="border_tp">U.S. Price: <span>{{$comic['price']}}</span></div>
            <div class="border_tp">On Sale Date: <span>{{$comic['sale_date']}}</span></div>
        </div>
    </div>


</div>
<div class="digital_shop ">
    <div class="container_dimension">
        <div class="side_border" style="text-transform: uppercase">Digital comics</div>
        <div class="side_border" style="text-transform: uppercase">Shop DC</div>
        <div class="side_border" style="text-transform: uppercase">Comic shop locator</div>
        <div class="side_border" style="text-transform: uppercase">Subscriptions</div>
    </div>

</div>
</section>

@endsection
