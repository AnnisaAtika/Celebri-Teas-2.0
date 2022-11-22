@extends('layouts.main')

@section('content')
<div class="container marketing">
    <div class="d-flex">
        <hr class="my-auto flex-grow-1">
            <h1 class="section-heading text-uppercase">{{$celebrity->star}}</h1>
        <hr class="my-auto flex-grow-1">
    </div><br>
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="featurette-heading">{{$celebrity->title1}}</h2>
                    <p class="lead">{{$celebrity->body1}}</p>
                </div>
            </div>
            <div class="row bottom-right">
                <div class="col-sm-12" >
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image" width="750" height="370" src="{{url('image/'.$celebrity->attachment2)}}"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600" src="{{url('image/'.$celebrity->attachment1)}}"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
        </div>
   </div>

    <hr class="featurette-divider">

    <div class="row">
    <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600" src="{{url('image/'.$celebrity->attachment3)}}"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="featurette-heading">{{$celebrity->title2}}</h2>
                    <p class="lead">{{$celebrity->body2}}</p>
                </div>
            </div>
            <div class="row bottom-right">
                <div class="col-sm-12"  >
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image" width="750" height="370" src="{{url('image/'.$celebrity->attachment4)}}"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                </div>
            </div>
        </div>  
   </div>

    <hr class="featurette-divider">

    <div class="row">
        <div class="col-sm-12" >
            <h2 class="featurette-heading">{{$celebrity->title3}}</h2>
            <p class="lead">{{$celebrity->body3}}</p>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center" >
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="750" height="370" src="{{url('image/'.$celebrity->attachment5)}}"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
            </div>
        </div>
   </div>

    <hr class="featurette-divider">

    <div class="row">
        <div class="col-sm-12" >
            <h2 class="featurette-heading">{{$celebrity->title4}}</h2>
            <p class="lead">{{$celebrity->body4}}</p>
        </div>
   </div>

    <div class="col-md-12 text-center">
        <a href="{{route('home')}}" class="btn btn-secondary" style="width: 140px; margin: auto;" >Back</a>
    </div>

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@endsection