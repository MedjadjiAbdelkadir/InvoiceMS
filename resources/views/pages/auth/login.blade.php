
@extends('layouts.master2')

@push('title')| Login @endpush

@section('css')
<style>
body {
    font-family: "Poppins", sans-serif;
    background-color: #ddd;
    font-size: 14px;
}

.login-page{
    font-family: "Poppins", sans-serif;
    justify-content: center;
    align-items: center;
    /* background-color: #f5f0f0; */
    font-size: 14px;
}
.login-page .container {
    background-color: #fff;
    border-radius: 10px;
}
.login-page .container .form-section{
    
}
.login-page .container .socials-section{

}

.login-page .container .form-section form input {
    margin: 10px 0px;
    border: none;
    padding: 15px;
    background-color: #efefef;
    border-radius: 5px;
}
/* End Login page Styles */
</style>

@endsection

{{-- @section('content')

				
	<livewire:counter /> 

@endsection --}}
@section('content') 
<div class="login-page mt-sm-0 mt-md-4">
    <div class="container">
        <div class="row">
            {{-- <div class="col-sm-12 col-md-12 col-lg-7 pt-sm-1 pp-sm-1 pt-md-5 pb-md-5"> --}}
               @livewire('login.select-type')               
            {{-- </div> --}}
            <div class="col-sm-12 col-md-5 d-none d-lg-block">
                <img src="{{ asset('images/login-img.jpg') }}" style="width: 100%;" alt="" srcset="">
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection