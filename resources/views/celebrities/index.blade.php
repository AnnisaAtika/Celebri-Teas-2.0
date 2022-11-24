@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row-justify-content-center">
        <div class="col-md-14">
        <br>
            <div class="container mt-14">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class = "card">
                <div class = "card-header" >{{__('Celebrity Index') }}
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                        method="GET" action="{{route('celebrities:index')}}" style="float:right;"> 
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
                </div>
            </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color:#ffe2e6;">
                                <th>CELEBRITY</th>
                                <th>DESCRIPTION 1</th>
                                <th>DESCRIPTION 2</th>
                                <th>DESCRIPTION 3</th>
                                <th>DESCRIPTION 4</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($celebrities as $celebrity)
                                <tr> 
                                    <td class="text-uppercase"><b>{{ $celebrity->star }}</b></td>
                                    <td>{{ $celebrity->title1 }}</td>
                                    <td>{{ $celebrity->title2 }}</td>
                                    <td>{{ $celebrity->title3 }}</td>
                                    <td>{{ $celebrity->title4 }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('celebrities:show', $celebrity) }}"><span class="fa fa-eye"></a>  
                                        <a class="btn btn-primary" href="{{ route('celebrities:edit', $celebrity) }}"><i class="fa fa-pencil"></i></a> 
                                        <a class="btn btn-danger" href="{{ route('celebrities:delete', $celebrity) }}" ><span class="fa fa-remove"></span></a>       
                                    </td>
                                </tr>   
                            @endforeach
                        </tbody> 
                    </table>  
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <br>
            <a href="{{route('celebrities:create')}}" class="btn btn-secondary btn-circle btn-xl" style="background-color:#656565;border:none;"><i class="fa fa-plus" style="font-size:44px"></i></a>
        </div>
    </div>
</div>
@endsection