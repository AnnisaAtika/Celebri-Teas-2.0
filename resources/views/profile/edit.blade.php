@extends('layouts.main')

@section('content')
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">PROFILE</h2>
        </div>
        <form action="{{route('profile:update',$user)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-4" style="margin:auto;">
                    <div class="team-member" >
                        <div class="row justify-content-center">
                            <div class="profile-header-container">
                                <div class="profile-header-img">
                                    <img class="rounded-circle" src="{{url('image/'.auth()->user()->avatar)}}" />
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">   
                                </div>
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                            </form>
                        </div>
                        <h4>ADMIN</h4>
                        <br>

                        <div class="form-group">   
                            <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" style="background-color:#FFF4F4; width:440px; text-align:center;" required>
                        </div>

                        <br>
                        <div class="form-group">   
                            <input type="text" name="email" class="form-control" value="{{ auth()->user()->email }}" style="background-color:#FFF4F4; width:440px; text-align:center;" required>
                        </div> 

                        <br>
                        <div class="form-group">   
                            <input type="text" name="phone" class="form-control" value="{{ auth()->user()->phone }}" style="background-color:#FFF4F4; width:440px; text-align:center;" required>
                        </div>
                        <br><br>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary" style="width: 140px; margin: auto;  background-color: #C79C9C; border:none;">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="{{ route('profile:password', $user) }}" class="needs-validation" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-4" style="margin:auto;">
                    <div class="team-member" >
                        <div class="form-group">   
                            <input type="password" name="current_password" class="form-control" placeholder="Current Password" style="background-color:#FFF4F4; width:440px; text-align:center;" required>
                        </div>

                        <br>
                        <div class="form-group">  
                            <input type="password" name="password" class="form-control" placeholder="New Password" style="background-color:#FFF4F4; width:440px; text-align:center;" required> 
                        </div> 

                        <br>
                        <div class="form-group">  
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password" style="background-color:#FFF4F4; width:440px; text-align:center;" required> 
                        </div>
                        <br><br>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary" style="width: 140px; margin: auto;  background-color: #C79C9C; border:none;">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection