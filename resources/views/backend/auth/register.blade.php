@extends('backend.layouts.auth_layout')

@section('content')
<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Create an account</h2>
    </div>
    <form>

        <div class="input-group custom">
            <input
                type="text"
                class="form-control form-control-lg"
                placeholder="Fullname"
            />
            <div class="input-group-append custom">
                <span class="input-group-text"
                    ><i class="icon-copy dw dw-user1"></i
                ></span>
            </div>
        </div>
        <div class="input-group custom">
            <input
                type="text"
                class="form-control form-control-lg"
                placeholder="Username"
            />
            <div class="input-group-append custom">
                <span class="input-group-text"
                    ><i class="icon-copy dw dw-user1"></i
                ></span>
            </div>
        </div>
        <div class="input-group custom">
            <input
                type="email"
                class="form-control form-control-lg"
                placeholder="Email"
            />
            <div class="input-group-append custom">
                <span class="input-group-text"
                    ><i class="icon-copy dw dw-user1"></i
                ></span>
            </div>
        </div>
        <div class="input-group custom">
            <input
                type="password"
                class="form-control form-control-lg"
                placeholder="Enter your Password"
            />
            <div class="input-group-append custom">
                <span class="input-group-text"
                    ><i class="dw dw-padlock1"></i
                ></span>
            </div>
        </div>
        <div class="row pb-30">
            <div class="col-6">
                <div class="custom-control custom-checkbox">
                    <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customCheck1"
                    />
                    <label class="custom-control-label" for="customCheck1"
                        >Term & Conditions</label
                    >
                </div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group mb-0">
                  
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Create Account">
                
                   
                </div>
                <div
                    class="font-16 weight-600 pt-10 pb-10 text-center"
                    data-color="#707373"
                >
                    OR
                </div>
                <div class="input-group mb-0">
                    <a
                        class="btn btn-outline-primary btn-lg btn-block"
                        href="/auth/login"
                        >Login to Your Account </a
                    >
                </div>
            </div>
        </div>
    </form>
</div>

@endsection