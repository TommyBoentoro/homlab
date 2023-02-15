@extends('layouts.main')
<link rel="stylesheet" href="css/product-details.css">
@section('container')
    <div class="d-flex">
        <div class="image-wrapper col-6">
            <img class="image-content" src="images/products/img-1.png" alt="">
        </div>
        <div class="mt-5 product-details-container col-6">
            <div class="font-asul color-primary product-details-text-title">
                Eggware Mug
            </div>
            <br>
            <div class="pd-line"></div>
            <br><br>
            <div class="d-flex color-primary">
                <div class="col-4">
                    <div class="font-mulish pd-text-subtitle">
                        Material
                    </div>
                    <div class="font-asul pd-text-title">
                        Egg Shell
                    </div>
                </div>
                <div class="col-4">
                    <div class="font-mulish pd-text-subtitle">
                        Weight
                    </div>
                    <div class="font-asul pd-text-title">
                        500 gr
                    </div>
                </div>
                <div class="col-4">
                    <div class="font-mulish pd-text-subtitle">
                        Dimension (cm)
                    </div>
                    <div class="font-asul pd-text-title">
                        7 x 3 x 10
                    </div>
                </div>
            </div>
            <br><br>
            <div class="font-mulish color-secondary pd-text-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aenean nulla ipsum, faucibus viverra dapibus ac, vehicula 
                vel eros. Duis consequat ante ac lacus fermentum, a interdum 
                velit posuere. Sed pretium pharetra felis ut fermentum. Sed 
                faucibus eros id orci vulputate, ac tristique ante gravida. 
                Praesent sit amet est sit amet orci egestas tempus. 
            </div>
            <br><br>
            <div class="d-flex gap-3">
                <button type="button" class="pd-button-primary">SHOP NOW</button>
                <button type="button" class="pd-button-secondary">CONTACT VIA WA</button>
            </div>
        </div>
    </div>
    <br><br><br>
    <div style="width: 100%" class="d-flex justify-content-center font-asul color-primary pd-text-poetry">
        <div class="pd-container-poetry">
            “Pottery is emotion put into measure. 
            The emotion must come by nature, but the measure 
            can be acquired by art.”
        </div>
    </div>
    <br><br><br>

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
    <br><br><br>
@endsection

@section('bottom-container')
    <div class="font-mulish color-primary pd-main-container">
        <div class=" container">
            <div class="pd-text-subtitle">
                WHAT'S ON
            </div>
            <br>
            <div class="font-asul pd-text-h1">
                Further Reading
            </div>
            <br><br>
            <div class="d-flex align-items-center gap-5">
                <div class="pd-container-wrapper col-7">
                    <img  src="images/product-details/img-1.png" alt="">
                    <div class="pd-text-reading-left pd-container-absolute-left font-asul color-white">
                        <div>FOR THE BETTER</div>
                        <div>NATURE</div>
                    </div>
                    <div class="color-white pd-container-absolute-right pd-text-reading-right">
                        JANNUARY, 20
                    </div>
                </div>
                <div class="col-6 pd-image-wrapper-right">
                    <img  src="images/product-details/img-2.png" alt="">
                </div>
            </div>  
            <br><br>
            <div>
                <button style="background-color: #2C3F2C" type="button" class="pd-button-primary">READ MORE</button>
            </div>  

        </div>
    </div>
    {{-- margin --}}
    <div></div>
@endsection