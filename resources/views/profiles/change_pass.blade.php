@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change Password</div>
                @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>{{ Session::get('message') }}</strong> 
                        </div>
                    @endif
                <div class="card-body">
                    <form action="{{ route('update',['id' => Auth::user()->id ])}}" method="POST">
                        @method('PUT')
                        @csrf
                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <a href="{{ route('home') }}" class="btn btn-danger center">Back</a>
                        <input type="submit" value="Update" class="btn btn-success center" style="float: right;">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
