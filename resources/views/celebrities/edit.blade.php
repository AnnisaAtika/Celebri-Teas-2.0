@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row-justify-content-center">
        <div class="col-md-12">
            <div class="card mx-auto">
                <div class="card-header" style="background-color:#b8d1ae;">{{__('Update Celebrity Details')}}</div>
                <div class="card-body">
                    <form action="{{route('celebrities:update', $celebrity)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!--STAR-->
                        <div class="form-group">
                            <label>Star</label>
                            <input type="text" name="star" class="form-control" value="{{ $celebrity->star }}" style="background-color:#FFF4F4; width:450px;">
                            @if ($errors->has('star'))
                                <span class="text-danger">{{ $errors->first('star') }}</span>
                            @endif
                        </div>
                        <!--TITLE 1-->
                        <div class="form-group">
                            <label>Title 1</label>
                            <input type="text" name="title1" class="form-control" value="{{ $celebrity->title1 }}" style="background-color:#FFF4F4;">
                            @if ($errors->has('title1'))
                                <span class="text-danger">{{ $errors->first('title1') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Body 1</label>
                            <textarea type = "text" name = "body1" class="form-control"  style="background-color:#FFF4F4;">{{ $celebrity->body1 }}</textarea>
                            @if ($errors->has('body1'))
                                <span class="text-danger">{{ $errors->first('body1') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Attachment 1</label>
                            <input type="file" name="attachment1" class="form-control" id="chooseFile" style="background-color:#FFF4F4; width:450px;">
                            @if ($errors->has('attachment1'))
                                <span class="text-danger">{{ $errors->first('attachment1') }}</span>
                            @endif
                            <br>
                            Image : <img src="{{url('image/'.$celebrity->attachment1)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>
                        <div class="form-group">
                        <br>
                            <label>Attachment 2</label>
                            <input type="file" name="attachment2" class="form-control" id="chooseFile" style="background-color:#FFF4F4; width:450px;">
                            @if ($errors->has('attachment2'))
                                <span class="text-danger">{{ $errors->first('attachment2') }}</span>
                            @endif
                            <br>
                            Image : <img src="{{url('image/'.$celebrity->attachment2)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>
                        <!--TITLE 2-->
                        <div class="form-group">
                            <br>
                            <label>Title 2</label>
                            <input type="text" name="title2" class="form-control" value="{{ $celebrity->title2 }}" style="background-color:#FFF4F4;">
                            @if ($errors->has('title2'))
                                <span class="text-danger">{{ $errors->first('title2') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Body 2</label>
                            <textarea type = "text" name = "body2" class="form-control" style="background-color:#FFF4F4;">{{ $celebrity->body2 }}</textarea>
                            @if ($errors->has('body2'))
                                <span class="text-danger">{{ $errors->first('body2') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Attachment 3</label>
                            <input type="file" name="attachment3" class="form-control" id="chooseFile" style="background-color:#FFF4F4;width:450px;">
                            @if ($errors->has('attachment3'))
                                <span class="text-danger">{{ $errors->first('attachment3') }}</span>
                            @endif
                            <br>
                            Image : <img src="{{url('image/'.$celebrity->attachment3)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>
                        <div class="form-group">
                            <br>
                            <label>Attachment 4</label>
                            <input type="file" name="attachment4" class="form-control" id="chooseFile" style="background-color:#FFF4F4;width:450px;">
                            @if ($errors->has('attachment4'))
                                <span class="text-danger">{{ $errors->first('attachment4') }}</span>
                            @endif
                            <br>
                            Image : <img src="{{url('image/'.$celebrity->attachment4)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>
                        <!--TITLE 3-->
                        <div class="form-group">
                            <br>
                            <label>Title 3</label>
                            <input type="text" name="title3" class="form-control" value="{{ $celebrity->title3 }}" style="background-color:#FFF4F4;">
                            @if ($errors->has('title3'))
                                <span class="text-danger">{{ $errors->first('title3') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Body 3</label>
                            <textarea type = "text" name = "body3" class="form-control"  style="background-color:#FFF4F4;">{{ $celebrity->body3 }}</textarea>
                            @if ($errors->has('body3'))
                                <span class="text-danger">{{ $errors->first('body3') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Attachment 5</label>
                            <input type="file" name="attachment5" class="form-control" id="chooseFile" style="background-color:#FFF4F4;width:450px;">
                            @if ($errors->has('attachment5'))
                                <span class="text-danger">{{ $errors->first('attachment5') }}</span>
                            @endif
                            <br>
                            Image : <img src="{{url('image/'.$celebrity->attachment5)}}" alt="" style="width: 150px; height:100px;"/>
                        </div>
                        <!--TITLE 4-->
                        <div class="form-group">
                            <br>
                            <label>Title 4</label>
                            <input type="text" name="title4" class="form-control" value="{{ $celebrity->title4 }}" style="background-color:#FFF4F4;">
                            @if ($errors->has('title4'))
                                <span class="text-danger">{{ $errors->first('title4') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Body 4</label>
                            <textarea type = "text" name = "body4" class="form-control" style="background-color:#FFF4F4;">{{ $celebrity->body4 }}</textarea>
                            @if ($errors->has('body4'))
                                <span class="text-danger">{{ $errors->first('body4') }}</span>
                            @endif
                        </div>
                        <br>
                        <!--SAVE BUTTON-->
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary" style="width: 140px; margin: auto;  background-color: #C79C9C; border:none;">Update</button>
                            &nbsp;&nbsp;&nbsp;
                            <a href="{{route('celebrities:index')}}" class="btn btn-secondary" style="width: 140px; margin: auto;" >Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 