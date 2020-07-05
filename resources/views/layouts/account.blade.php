<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <link rel="stylesheet" href="{{asset('css/public.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  

</head>
<body>

@include('partials.header')
<div class="main account-main cf">
    <div class="left account-sidebar">
    <div class="row">
    <div class=" col col-12">
    @include('partials.account-sidebar')
    
    </div>
    </div>
    </div>
    <div class="left account-main-content">
        <div class="row">
        <div class="col col-12">
            @yield('main')
        </div>
        </div>
    </div>

</div>
    

@include('partials.footer')
</body>
</html>