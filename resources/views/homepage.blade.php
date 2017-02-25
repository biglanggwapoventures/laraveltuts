@extends('partials.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if(session()->get('registered'))
                <div class="alert alert-success">
                    New user has been created!
                </div>
            @endif
        </div>
    </div>
</div>
@endsection