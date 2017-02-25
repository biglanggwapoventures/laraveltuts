@extends('partials.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title clearfix">
                        Register
                        <i class="glyphicon glyphicon-pencil pull-right"></i>
                    </h4>
                </div>
                <form action="{{ url('/register') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        @if($errors->count())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
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
                            <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Register</button>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>
@endsection