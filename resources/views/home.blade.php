@extends('layouts.main')
<link rel="stylesheet" href="css/home.css">
@section('container')
    <div class="home-main-container">
        <img src="images/home-1.png" alt="">
        <div class="home-jumbotron-text text-h1 color-primary">
            <div>
                Pottery is emotion 
            </div>
            <div>
                Put into measure.
            </div>
        </div>
    </div>
    <div class="line-home"></div>

    <br><br><br><br><br><br>
    <div class="color-primary">
        <div class="home-text-subtitle font-mulish">
            WHAT'S ON
        </div>
    </div>
    <br>
    <div class="home-text-title font-asul color-primary">
        <div>
            Volumes From
        </div>
        <div>
            The Archive
        </div>
    </div>
    <br><br>
    <div class="d-flex">
        <div class="col-1 line-home-body">
            
        </div>
        <div class="col-6 font-mulish color-primary">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Curabitur id justo magna. Vestibulum mattis viverra urna, 
            eget dapibus quam. Proin vel sapien hendrerit, ullamcorper
            ex vitae, aliquam magna. Integer eget ex ac felis sagittis
            varius nec dapibus lectus. Nam sollicitudin justo quis magna 
            commodo, non cursus leo auctor. 
        </div>
    </div>
    <br><br><br><br><br><br>
    <div class="d-flex flex-column align-items-center">
        <div class="home-text-subtitle font-mulish color-primary">
            OUR HOMEPAGE
        </div>
        <br>
        <div class="home-text-title font-asul color-primary">
            Our Products
        </div>
        <br>
        <div class="line-home-body-2">
            
        </div>
        <br>
        <div class="home-container-body-text font-mulish color-primary">
            Pellentesque sagittis hendrerit diam, 
            eu hendrerit odio ultricies a. Curabitur 
            tincidunt, sem et pretium consequat, massa 
            ligula gravida ex, id dignissim quam risus 
            et dolor. 
        </div>
        <br><br>

        <div class="d-flex">
            <div class="col-4">
                <div>
                    <img src="images/products/img-1.png" alt="">
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="container-text-product">
                        <div class="font-asul font-product-title color-primary">
                            Eggware Mug
                        </div>
                        <div class="font-mulish color-primary font-product-body">
                            Pellentesque sagittis hendrerit diam, 
                            eu hendrerit odio ultricies a. 
                            Curabitur tincidunt, sem et pretium consequat.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="images/products/img-2.png" alt="">
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="container-text-product">
                        <div class="font-asul font-product-title color-primary">
                            Eggware Mug
                        </div>
                        <div class="font-mulish color-primary font-product-body">
                            Pellentesque sagittis hendrerit diam, 
                            eu hendrerit odio ultricies a. 
                            Curabitur tincidunt, sem et pretium consequat.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="images/products/img-3.jpg" alt="">
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="container-text-product">
                        <div class="font-asul font-product-title color-primary">
                            Eggware Mug
                        </div>
                        <div class="font-mulish color-primary font-product-body">
                            Pellentesque sagittis hendrerit diam, 
                            eu hendrerit odio ultricies a. 
                            Curabitur tincidunt, sem et pretium consequat.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="d-flex justify-content-center">
            <button type="button" class="pd-button-primary">SHOP NOW</button>
        </div>
        <br><br><br><br>
    </div>

   
@endsection