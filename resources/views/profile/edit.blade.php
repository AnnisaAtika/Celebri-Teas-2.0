@extends('layouts.main')

@section('content')
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container mt-14">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="main-wrapper container">
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <form action="{{route('profile:update',$user)}}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <div class="form-row">
                                <label for="name_validation" style="float:left;">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ auth()->user()->name }}" style="background-color:#FFF4F4" required>
                            </div>
                            <div class="form-row">
                                <label for="name_validation" style="float:left;">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}" style="background-color:#FFF4F4" required>
                            </div>
                            <div class="form-row">
                                <label for="name_validation" style="float:left;">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ auth()->user()->phone }}" style="background-color:#FFF4F4" required>
                            </div>
                            <br>
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" style="width: 700px; margin: auto;  background-color: #C79C9C; border:none;">Update</button>
                            </div>
                        </form>
                        <hr>
                        <form action="{{ route('profile:password', $user) }}" class="needs-validation" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-row">
                                <label for="name_validation" style="float:left;">Current Password</label>
                                <input type="password" name="current_password" class="form-control" placeholder="Current Password" style="background-color:#FFF4F4" required>
                            </div>
                            <div class="form-row">
                                <label for="name_validation" style="float:left;">New Password</label>
                                <input type="password" name="password" class="form-control" placeholder="New Password" style="background-color:#FFF4F4" required>
                            </div>
                            <div class="form-row">
                                <label for="name_validation" style="float:left;">Confirm New Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password" style="background-color:#FFF4F4" required>
                            </div>
                            <br>
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" style="width: 700px; margin: auto;  background-color: #C79C9C; border:none;">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection