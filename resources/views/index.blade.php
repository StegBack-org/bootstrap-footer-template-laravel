@extends('layouts.master')
@section('title','Home Page | laravel')
@section('head')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@endsection
@section('style')
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic');

    body {font-family: 'Poppins', Poppins;}
    .bg{background: #0d245d;color: #fff;}
    .main-heading{letter-spacing: 2px;}
    .heading{color: orange;font-size:22px;}
    .sub-heading{color: rgb(59, 127, 243);font-size:16px;}
    .list-group-item{background: none;color: #fff;border: none;padding: 0px;letter-spacing: 1px;font-size: 14px}
    .footer-text{font-size: 12px}
    .footer-content{font-size: 14px}
    .padding-1{padding-right:16px }

    .bg-white{background-color: #e5e7eb;}
    .black{color:rgb(40, 40, 40) !important}

    .bg-grey{background-color: #f2f2f2fc;}
    .card-text{font-size: 14px}
    .card{background:#fff }
</style>
@endsection

@section('body')
<div class="bg p-5">
    <div class="container-fluid">
        <div class="row justify-content-center g-2">
            <h2 class="main-heading">Site Navigator</h2>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4 class="heading">Solar-Hook</h4>
                <h5 class="sub-heading">Germany</h5>
                <ul class="list-group">
                    <li class="list-group-item">Home</li>
                    <li class="list-group-item">About</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4 class="heading">The Organization</h4>
                <h5 class="sub-heading">Country</h5>
                <ul class="list-group">
                    <li class="list-group-item">India</li>
                    <li class="list-group-item">Germany</li>
                    <li class="list-group-item">China</li>
                    <li class="list-group-item">France</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4 class="heading">Members</h4>
                <h5 class="sub-heading">Administration</h5>
                <ul class="list-group">
                    <li class="list-group-item">User 1</li>
                    <li class="list-group-item">User 2</li>
                    <li class="list-group-item">User 3</li>
                    <li class="list-group-item">User 4</li>
                    <li class="list-group-item">User 5</li>
                    <li class="list-group-item">User 6</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4 class="heading">Solar-Hook</h4>
                <h5 class="sub-heading">Germany</h5>
                <ul class="list-group">
                    <li class="list-group-item">Home</li>
                    <li class="list-group-item">About</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="footer-content p-5">Welcome to our solar energy products website where we offer a wide range of reliable, high quality solar energy products to help you harness the power of the sun. We pride ourselves on the quality of our products, which have been tested and certified to meet the highest industry standards .</p>
            </div>
        </div>
    </div>
<hr>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <span class="footer-text">Copyright © 2023</span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul class="nav">
                    <li class="nav-item footer-text padding-1">Privacy & Policy</li>
                    <li class="nav-item footer-text padding-1">Tearms & Condition</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="https://solar-hook.de/new_assets/solarhook/Solarhookdunkelplain.svg" class="img-fluid">
            </div>

            <div class="col-md-3 offset-md-1">
                <h4 class="heading">The Organization</h4>
                <h5 class="sub-heading">Country</h5>
                <ul class="list-group">
                    <li class="list-group-item black">India</li>
                    <li class="list-group-item black">Germany</li>
                    <li class="list-group-item black">China</li>
                    <li class="list-group-item black">France</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="heading">The Organization</h4>
                <h5 class="sub-heading">Country</h5>
                <ul class="list-group">
                    <li class="list-group-item black">India</li>
                    <li class="list-group-item black">Germany</li>
                    <li class="list-group-item black">China</li>
                    <li class="list-group-item black">France</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="heading">The Organization</h4>
                <h5 class="sub-heading">Country</h5>
                <ul class="list-group">
                    <li class="list-group-item black">India</li>
                    <li class="list-group-item black">Germany</li>
                    <li class="list-group-item black">China</li>
                    <li class="list-group-item black">France</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="bg-grey p-5">

    <div class="container">
        <div class="row" id="card-container">
            <div class="col-md-4 p-1">
                <div class="card shadow-sm">
                    <div class="card-body">
                        {{-- <img class="img-fluid img-thumbnail" src="https://cdn4.buysellads.net/uu/1/127419/1670532177-Stock.jpg"> --}}
                        <h3 class="card-title mt-2">Hello User!</h3>
                        <div class="card-text">
                            The default interactive shell is now zsh.
                            To update your account to use zsh, please run `chsh -s /bin/zsh`.
                            For more details, please visit https://support.apple.com/kb/HT208050.
                            Apples-iMac:footer-template apple$ php artisan make:controller WebController
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card">
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail" src="https://cdn4.buysellads.net/uu/1/127419/1670532177-Stock.jpg">
                        <h3 class="card-title mt-2">Hello User!</h3>
                        <div class="card-text">
                            The default interactive shell is now zsh.
                            To update your account to use zsh, please run `chsh -s /bin/zsh`.
                            For more details, please visit https://support.apple.com/kb/HT208050.
                            Apples-iMac:footer-template apple$ php artisan make:controller WebController
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card">
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail" src="https://cdn4.buysellads.net/uu/1/127419/1670532177-Stock.jpg">
                        <h3 class="card-title mt-2">Hello User!</h3>
                        <div class="card-text">
                            The default interactive shell is now zsh.
                            To update your account to use zsh, please run `chsh -s /bin/zsh`.
                            For more details, please visit https://support.apple.com/kb/HT208050.
                            Apples-iMac:footer-template apple$ php artisan make:controller WebController
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card">
                    <div class="card-body">
                        {{-- <img class="img-fluid img-thumbnail" src="https://cdn4.buysellads.net/uu/1/127419/1670532177-Stock.jpg"> --}}
                        <h3 class="card-title mt-2">Hello User!</h3>
                        <div class="card-text">
                            The default interactive shell is now zsh.
                            To update your account to use zsh, please run `chsh -s /bin/zsh`.
                            For more details, please visit https://support.apple.com/kb/HT208050.
                            Apples-iMac:footer-template apple$ php artisan make:controller WebController
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

    @endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      var grid = document.getElementById("card-container");
      var masonry = new Masonry(grid, {
        itemSelector: ".col-md-4",
        columnWidth: ".col-md-4",
        // gutter: 16
      });
    });
  </script>

@endsection

