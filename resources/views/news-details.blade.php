@extends('layouts.main')
<link rel="stylesheet" href="css/news-details.css">

{{-- Image Bg --}}
<div class="main-img-news-detail">
    <div class="color-primary" style="width:100%">
        <div style="height:100px;" class="container d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-center align-items-center cursor-pointer">
                <div class="me-2">
                    PRODUCTS
                </div>  
                <div>
                    <img src="images/leaf.png" alt="">
                </div>
            </div>
            <div>
                <img src="images/homlabLogo.png" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center cursor-pointer">
                <div class="me-2">Menu</div>
                <div>
                    <img src="images/IconMenu.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div  class="d-flex align-items-center main-container-news-details">
        <div class="color-secondary col-6 d-flex flex-column align-items-end">
            <div class="news-detail-title-jumbotron font-asul news-detail-inner-container-jumbotron">
                Dreaming of The Perfect Art it Was Keeps Us Awake
            </div>
            <br>
            <div class="about-heading font-mulish news-detail-inner-container-jumbotron" >
                20 JANUARY 2022
            </div>
            <br>
            <div class="about-subheading font-asul news-detail-inner-container-jumbotron">
                Pellentesque sagittis hendrerit diam, eu hendrerit odio ultricies a. 
                Curabitur tincidunt, sem et pretium consequat, massa ligula gravida ex, 
                id dignissim quam risus et dolor
            </div>
        </div>
        <div class="col-6 container-image-inner-jumbotron">
            <img src="images/product-details/img-1.png" alt="">
        </div>
    </div>
</div>
   
@section('container')
    <div class="d-flex justify-content-center align-items-center background-container">
        <div class="news-detail-jumbotron-container">

        </div>
    </div>

    {{-- Content --}}
    <div  class="container about-main-container-news"> 
        <div style="height: auto" class="d-flex">
            <div class="col-6 font-mulish color-secondary"> 
                <div class="about-subheading font-asul" style="width: 65%; margin-top:40px">
                    Maecenas elementum a leo vel lacinia. Maecenas quis auctor justo. Nam ultrices ante eros, 
                    eu bibendum lacus interdum et. Fusce egestas venenatis enim. Maecenas lobortis condimentum maximus. 
                    Suspendisse imperdiet purus dui, non finibus libero convallis non. Nullam auctor leo elit, 
                    non eleifend ex convallis in. Nunc blandit metus quis malesuada luctus.
                </div>
                <br><br>  
                <div style="width:50%; height:1px; background-color:#2C3F2C">
                </div>
                <br>
                <div class="color-secondary about-body-text">
                    <br><br>
                    <div style="width: 65%"">
                        Pellentesque sagittis hendrerit diam, eu hendrerit odio ultricies a. Curabitur tincidunt, 
                        sem et pretium consequat, massa ligula gravida ex, id dignissim quam risus et dolor. 
                        Mauris sed auctor nibh, ornare maximus risus. Fusce facilisis sed dui nec ultricies. 
                        Morbi enim neque, sagittis id aliquam egestas, placerat nec leo. Donec sapien odio, 
                        varius at vestibulum ut, ultricies at nisl. Donec sit amet cursus ipsum. Nunc et ipsum 
                        luctus massa ornare dictum. Nulla ex sem, pretium ut maximus non, tempus posuere quam. 
                        Aliquam euismod magna eu mi luctus, a pulvinar erat tincidunt. Morbi nec magna purus.
                    </div>
                    <br><br>
                    <div style="width: 65%"">
                        Pellentesque sagittis hendrerit diam, eu hendrerit odio ultricies a. Curabitur tincidunt, 
                        sem et pretium consequat, massa ligula gravida ex, id dignissim quam risus et dolor. 
                        Mauris sed auctor nibh, ornare maximus risus. Fusce facilisis sed dui nec ultricies. 
                        Morbi enim neque, sagittis id aliquam egestas, placerat nec leo. Donec sapien odio, 
                        varius at vestibulum ut, ultricies at nisl. Donec sit amet cursus ipsum. Nunc et ipsum 
                        luctus massa ornare dictum. Nulla ex sem, pretium ut maximus non, tempus posuere quam. 
                        Aliquam euismod magna eu mi luctus, a pulvinar erat tincidunt. Morbi nec magna purus.
                    </div>
                    <br><br>
                    <div class="about-subheading font-asul">
                        Article by homlab
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex flex-column justify-content-between">
                <div  style="margin-bottom:10px; height:454px; width:100%; ">
                    <img class="images-wrapper" src="images/news/img-3.png" alt="">
                </div>
                <div class="container-wrapper-bg-2"style="">
                    <div  style="width:50%; height:100%">
                        <img class="images-wrapper" src="images/news/img-6.png" alt="">
                    </div>
                    <div class="color-primary" style="width:50%; height:100%">
                        <img class="images-wrapper" src="images/news/img-7.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection