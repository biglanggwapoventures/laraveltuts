@extends('homepage')

@section('body')

<h4>Login</h4>


<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form method="POST" action="{{ url('/login') }}">
            <ul>
                @if(isset($loginError))
                        <li>{{ $loginError }}</li> 
                @endif
            </ul>
            
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('id_number') ? ' has-error' : '' }}">
                <label class="control-label">ID #</label>
                <input type="text" name="id_number" class="form-control" >
                @if($errors->has('id_number'))
                    <span class="help-block">{{ $errors->first('id_number') }}</span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="control-label">Password</label>
                <input type="password" name="password" class="form-control" >
                @if($errors->has('password'))
                    <span class="help-block">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-info">Login!</button>
            
</form>

    </div>
</div>


<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form method="POST" action="{{ url('/animal') }}">
            
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="control-label">Name</label>
                <input type="text" name="name" class="form-control" >
                @if($errors->has('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-info">make new anmal!</button>
            
</form>

    </div>
</div>
@endsection