{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        .btn:hover {
            background: linear-gradient(to right, #45a049, #1e87d6);
            /* Ubah warna gradasi saat hover */
        }
    </style>
    @vite('resources/sass/app.scss')
</head>

<body> --}}
@extends('layouts.app')

@section('content')

<style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
    }
</style>
    <div class="container text-center my-5">
        <h1 class="mb-4">UTS Framework - Mini Project</h1>
        <h5 class="mb-4">Perkenalkan,</h5>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ Vite::asset('resources/images/1.png') }}" class="d-block mx-auto" alt="..."
                        style="max-height: 400px;">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ Vite::asset('resources/images/2.png') }}" class="d-block mx-auto" alt="..."
                        style="max-height: 400px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/images/3.png') }}" class="d-block mx-auto" alt="..."
                        style="max-height: 400px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
@endsection

{{-- @vite('resources/js/app.js')
</body>

</html> --}}
