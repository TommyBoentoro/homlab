@extends('layouts.main')
<link rel="stylesheet" href="css/about.css">
@section('container')
        {{-- Main Container --}}
        <div  class="container about-main-container"> 
            <div style="height: auto" class="d-flex">
                <div class="col-6 font-mulish color-primary">
                    <div class="about-heading font-asul ms-2">ABOUT US</div>  
                    <div class="about-subheading font-asul" style="width: 65%; margin-top:40px">
                        We produced artisanal biofabricated goods from hom with aesthetic and efficacy in mind. 
                        We always try to see how we can apply biomaterials in our everyday life. We believe the 
                        future will rely on biomaterials
                    </div>
                    <br><br>  
                    <div style="width:50%; height:1px; background-color:#FE5C36">
                    </div>
                    <br>
                    <div class="color-secondary about-body-text">
                        <div style="width: 65%"">
                            Started as a creative outlet during the early stressful period of pandemic, 
                            two friends experimented with bio materials on their own. 
                        </div>
                        <br><br>
                        <div style="width: 65%"">
                            Joshua has always been fascinated with bioplastic, so this working from home period allowed 
                            him to research and develop the perfect bioplastic formula. Celine, with a handful of eggshells waste around her, 
                            started to brainstorming how to reuse this waste. She then started experimenting turning eggshells into eggware.
                        </div>
                        <br><br>
                        <div style="width: 65%"">
                            The two of them shared their journey with each other. And as their experiment went by, perfecting their formula, 
                            they decided to start working together. Now working as a team of three, we strive to continue experimenting with 
                            other biomaterials from waste and transform to goods for you to enjoy in everyday life.
                        </div>
                    </div>
                </div>
                <div class="col-6 d-flex flex-column justify-content-between">
                    <div  style="margin-bottom:10px; height:454px; width:100%; ">
                        <img class="images-wrapper" src="images/about/bg-1.png" alt="">
                    </div>
                    <div class="container-wrapper-bg-2"style="">
                        <div  style="width:50%; height:100%">
                            <img class="images-wrapper" src="images/about/bg-3.png" alt="">
                        </div>
                        <div class="color-primary" style="width:50%; height:100%">
                            <img class="images-wrapper" src="images/about/bg-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Margin --}}
        <div style="height: 120px;">

        </div>
@endsection
