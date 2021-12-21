@extends ('layouts.app')


@section('content')
    <div id="comics_wrapper">
        <div id="jumbotron"></div>
        <div id="comics" class="container row m-auto py-3">
            @foreach($comics as $comic)
                <div class="col-2 mt-4">
                    <div id="comic">
                        <div class="poster">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}} poster">
                        </div>
                        <p class="my-4">{{$comic['series']}}</p>
                    </div>
                <!-- /comic-->
                </div>
            @endforeach
        </div>
        <!-- /#comics -->
        <div id="controls" class="container text-center pb-5">
            <button class="btn-loadMore">Load More</button>
        </div>
        <!-- /#controls -->
        <div id="merchandising" class="d-flex align-items-center">
           
        <div class="container row m-auto py-3">
                <div class="col text-center d-flex align-items-center">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" />
                    <p class="ms-2">DIGITAL COMICS</p>
                </div>
                <div class="col text-center d-flex align-items-center">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" />
                    <p class="ms-2">DC MERCHADISE</p>
                </div>
                <div class="col text-center d-flex align-items-center">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" />
                    <p class="ms-2">SUBSCTIPTION</p>
                </div>
                <div class="col text-center d-flex align-items-center">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" />
                    <p class="ms-2">COMIC SHOP LOCATOR</p>
                </div>
                <div class="col text-center d-flex align-items-center">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" />
                    <p class="ms-2">CD POWER VISA</p>
                </div>
            </div>
        
        </div>
        <!-- /#marchandising -->
    </div>
    <!-- /comics_wrapper -->
@endsection