
<title>{{ config('app.name')  }} @stack('title')</title>
<!-- Title -->

<!-- Favicon -->
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>
<!-- Icons css -->
<link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet">
<!--  Custom Scroll bar-->
<link href="{{URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
<!--  Sidebar css -->
<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
<!-- Sidemenu css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
{{-- <link rel="stylesheet" href="{{URL::asset('assets/css/sidemenu.css')}}"> --}}

@if (App::getLocale() == 'ar')
<link rel="stylesheet" href="{{URL::asset('assets/css-rtl/sidemenu.css')}}"> 
@yield('css')
<!--- Style css -->
<link href="{{URL::asset('assets/css-rtl/style.css')}}" rel="stylesheet">
<!--- Dark-mode css -->
<link href="{{URL::asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">
<!---Skinmodes css-->
<link href="{{URL::asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet"> 

@else
    

 <link rel="stylesheet" href="{{URL::asset('assets/css/sidemenu.css')}}"> 
@yield('css')
<!--- Style css -->
<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">

<!--- Dark-mode css -->
<link href="{{URL::asset('assets/css/style-dark.css')}}" rel="stylesheet">
<!---Skinmodes css-->
<link href="{{URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet">

@endif

@livewireStyles
<link href="{{URL::asset('style.css')}}" rel="stylesheet">


<style>
    .box {

    }
    .box.selected {
        background-color: lightblue;
    }
</style>