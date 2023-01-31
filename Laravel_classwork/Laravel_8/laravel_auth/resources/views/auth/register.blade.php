@extends('layouts.app')

@section('title', 'Registration Page')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <form method="post" action="{{route('register')}}">
            @csrf
            <!-- Email input -->
            <h1 class="p-5 mt-5">Registration Form</h1>
            
         {{-- @if($errors->any())
         <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)          
                <li>{{$error}}</li>
                @endforeach
            </ul>
         </div>
         @endif --}}
            <div class="form-outline mb-4">
                <div class="form-outline mb-4">
                    <input type="text" id="name" name="name" class="form-control" />
                    <label class="form-label" for="name" name="name">Name </label>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    {{-- name ar namefield k dorse error a --}}
                  </div>
                  <div class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control" />
              <label class="form-label" for="email" name="email">Email address</label>
              @error('email')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
          
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="password" name="password" class="form-control" />
              <label class="form-label" for="password" name="password">Password</label>
              @error('password')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-outline mb-4">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" />
                <label class="form-label" for="password_confirmation" name="password">Confirm Password</label>
              </div>
          
          
            <!-- Submit button -->
            <button type="submit"  class="btn btn-primary btn-block mb-4">Sign in</button>
          
            <!-- Register buttons -->
            <div class="text-center">
              <p>Not a member? <a href="{{route('login')}}">Login</a></p>
              
             
            </div>
          </form>
    </div>
</div>
@endsection