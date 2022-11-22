@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row-justify-content-center">
        <div class="col-md-12">
            <div class="card mx-auto">
                <div class="card-header" style="background-color:#b8d1ae;">{{__('Celebrity Details')}}</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!--STAR-->
                        <div class="form-group">
                            <label>Star</label>
                            <input type="text" name="star" class="form-control" value="{{ $celebrity->star }}" style="background-color:#FFF4F4; width:450px;" readonly>
                        </div>

                        <!--TITLE 1-->
                        <div class="form-group">
                            <label>Title 1</label>
                            <input type="text" name="title1" class="form-control" value="{{ $celebrity->title1 }}" style="background-color:#FFF4F4;" readonly>
                        </div>

                        <div class="form-group">
                            <label>Body 1</label>
                            <textarea type = "text" name = "body1" class="form-control" style="background-color:#FFF4F4;" readonly>{{ $celebrity->body1 }}</textarea>
                        </div>

                        <div class="form-group">
                            <br>
                            <label>Attachment 1 :</label>
                            <img src="{{url('image/'.$celebrity->attachment1)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>

                        <div class="form-group">
                        <br>
                            <label>Attachment 2 :</label>
                            <img src="{{url('image/'.$celebrity->attachment2)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>

                        <!--TITLE 2-->
                        <div class="form-group">
                            <br>
                            <label>Title 2</label>
                            <input type="text" name="title2" class="form-control" value="{{ $celebrity->title2 }}" style="background-color:#FFF4F4;" readonly>
                        </div>

                        <div class="form-group">
                            <label>Body 2</label>
                            <textarea type = "text" name = "body2" class="form-control" value="{{ $celebrity->body2 }}" style="background-color:#FFF4F4;" readonly>{{ $celebrity->body2 }}</textarea>
                        </div>

                        <div class="form-group">
                            <br>
                            <label>Attachment 3 :</label>
                            <img src="{{url('image/'.$celebrity->attachment3)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>

                        <div class="form-group">
                            <br>
                            <label>Attachment 4 :</label>
                            <img src="{{url('image/'.$celebrity->attachment4)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>

                        <!--TITLE 3-->
                        <div class="form-group">
                            <br>
                            <label>Title 3</label>
                            <input type="text" name="title3" class="form-control" value="{{ $celebrity->title3 }}" style="background-color:#FFF4F4;" readonly>
                        </div>

                        <div class="form-group">
                            <label>Body 3</label>
                            <textarea type = "text" name = "body3" class="form-control" value="{{ $celebrity->body3 }}" style="background-color:#FFF4F4;" readonly>{{ $celebrity->body3 }}</textarea>
                        </div>

                        <div class="form-group">
                            <br>
                            <label>Attachment 5 :</label>
                            <img src="{{url('image/'.$celebrity->attachment5)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>

                        <!--TITLE 4-->
                        <div class="form-group">
                            <br>
                            <label>Title 4</label>
                            <input type="text" name="title4" class="form-control" value="{{ $celebrity->title4 }}" style="background-color:#FFF4F4;" readonly>
                        </div>

                        <div class="form-group">
                            <label>Body 4</label>
                            <textarea type = "text" name = "body4" class="form-control" value="{{ $celebrity->body4 }}" style="background-color:#FFF4F4;" readonly>{{ $celebrity->body4 }}</textarea>
                        </div>

                        <br>
            
                        <!--SAVE BUTTON-->
                        <div class="col-md-12 text-center">
                            
                            <a href="{{route('celebrities:index')}}" class="btn btn-secondary" style="width: 140px; margin: auto;" >Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 