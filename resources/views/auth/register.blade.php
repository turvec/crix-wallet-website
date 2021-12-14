@extends('layouts.guest')

@section('content')
<div class="container">
            <div class="row vh-100 justify-content-between align-items-center">
                <div class="col-12">
                    <form action="" method="POST" class="row row-eq-height lockscreen  mt-5 mb-5">@csrf

                        <div class="lock-image col-12 col-sm-5"></div>
                        <div class="login-form col-12 col-sm-7">
                            @foreach ($errors->all() as $err)
                            <p class="text-danger-text-center">{{$err}}</p>
                            @endforeach
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="Username"  name="name">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="E-mail"  name="email">
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" class="form-control" placeholder="password"  name="password">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="Phone number" name="phone">
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-primary" type="submit"> Register </button>
                            </div>

                            <div class="mt-2">Already have an account? <a href="page-login.html">Sign In</a></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
@endsection
