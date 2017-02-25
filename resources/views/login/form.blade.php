@extends('partials.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title clearfix">
                        Login
                        <i class="glyphicon glyphicon-log-in pull-right"></i>
                    </h4>
                </div>
                <form action="{{ url('/login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        @if($errors->count() || isset($loginError))
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @if(isset($loginError))
                                       <li>{{ $loginError }}</li> 
                                    @endif
                                    @foreach($errors->all() AS $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>
@endsection