@extends('layouts.app')

@section('content')
<div class="bg-green-600 h-screen w-screen">
    <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
        <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
            <div class="flex flex-col w-full md:w-1/2 p-4">
                <div class="flex flex-col flex-1 justify-center mb-8">
                    <h1 class="text-4xl text-center font-thin"><span class="text-green-600">Farm</span>erce</h1>
                    <div class="w-full mt-4">
                        <form class="form-horizontal w-3/4 mx-auto" method="POST" action="{{ route('login') }}">
                           @csrf
                            <div class="flex flex-col mt-4">
                                <input id="email" placeholder="your_email@email.com" type="email" class="flex-grow h-8 px-2 border rounded border-grey-400 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                               
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           
                            </div>
                            <div class="flex flex-col mt-4">
                                <input  id="password" placeholder="********" type="password" class="form-control @error('password') is-invalid @enderror flex-grow h-8 px-2 rounded border border-grey-400" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="flex items-center mt-4">
                                <input type="checkbox" name="remember" id="remember" class="mr-2"> <label for="remember" class="text-sm text-grey-dark">Remember Me</label>
                            </div>
                            <div class="flex flex-col mt-8">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                    Login
                                </button>
                            </div>
                        </form>
                        @if (Route::has('register'))

                        <div class="text-center mt-4">
                            <a class="no-underline hover:underline text-blue-dark text-xs" href="{{ route('register') }}">
                                Dont have an account?
                            </a>
                        </div>
                        @endif

                      
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg" style="background: url({{asset('images/cover/carousel.jpg')}}); background-size: cover; background-position: center center;"></div>
        </div>
    </div>
</div>

@endsection
