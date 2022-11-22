@extends('layouts.main')

@section('content')
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
        <img class="img-fluid" src="assets/dist/assets/logo1.png" ><br><br>
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                method="GET" action="{{route('home')}}" style="float:auto;"> 
                <div class="input-group rounded">
                    <input type="text" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" 
                    name="keyword" value="{{ request()->get('keyword') }}" />
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <br><br>
        </div>

        <div class="row">
            @foreach($celebrities as $celebrity)
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('celebrities:display', $celebrity) }}" href="{{ route('celebrities:display', $celebrity) }}" >
                        <div class="portfolio-hover" style="background-color:#ffe2e6;">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{url('image/'.$celebrity->attachment1)}}" >
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{ $celebrity->star}}</div>
                    </div>
                </div>
            </div>
            @endforeach
            @guest
            @else
                @if(auth()->user()->role='admin')
                    <div class="col-md-12 text-center">
                        <a href="{{route('celebrities:index')}}" class="btn btn-secondary btn-circle btn-xl" style="background-color:#656565;border:none;"><i class="fa fa-plus" style="font-size:44px"></i></a>
                    </div>
                @endif
            @endguest
        </div>
    </div>
</section>
@endsection