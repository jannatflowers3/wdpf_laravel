@extends('layouts.app')
@section('title','Login Page')
   
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <form method="post" action="{{route('login')}}">
            @csrf
            <!-- Email input -->
            <h1 class="p-5 mt-5">Login Form</h1>
            
         @if($errors->any())
         <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)          
                <li>{{$error}}</li>
                @endforeach
            </ul>
         </div>
         @endif
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" name="email" class="form-control" />
              <label class="form-label" for="form2Example1" name="email">Email address</label>
            </div>
          
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" name="password" class="form-control" />
              <label class="form-label" for="form2Example2" name="password">Password</label>
            </div>
          
          
            <!-- Submit button -->
            <button type="submit"  class="btn btn-primary btn-block mb-4">Sign in</button>
          
            <!-- Register buttons -->
            <div class="text-center">
              <p>Not a member? <a href="{{route('register')}}">Register</a></p>
              <p>or sign up with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>
          
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>
          
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>
          
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
    </div>
</div>


@endsection