@extends('layouts.main')
<link rel="stylesheet" href="css/contact.css">
@section('container')
    <div class="text-contact color-primary font-mulish">
        CONTACT
    </div>
    <br>
    <div class="color-primary font-asul contact-title-text">
        <div>
            We're A Friendly Bunch
        </div>
        <div>
            Why Not Call Us Or Drop Us A Line?
        </div>
    </div>
    <br>
    <div class="contact-line"></div>
    <div class="main-container">
        <div class="col-6 image-wrapper">
            <img class="image-contact" src="images/contact/jumbotronContact.png" alt="">
        </div>
        <div style="height:100%" class="col-6 body-container">
            <div style="height:100%;" class="d-flex flex-column">
                <div class="body-wrapper-container">
                    <div class="col-7">
                        <div class="text-contact color-primary font-asul">
                            / OUR LOCATION
                        </div>
                        <div class="text-body color-secondary font-mulish">
                            Semarang, Indonesia
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="text-contact color-primary font-asul">
                            / CALL US
                        </div>
                        <div class="text-body color-secondary font-mulish">
                            +62 811 890 900
                        </div>
                    </div>
                </div>
                <div class="body-wrapper-container">
                    <div class="col-7">
                        <div class="text-contact color-primary font-asul">
                            / EMAIL
                        </div>
                        <div class="text-body color-secondary font-mulish">
                            homlab@gmail.com
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="text-contact color-primary font-asul">
                            / INSTAGRAM
                        </div>
                        <div class="text-body color-secondary font-mulish">
                            @____homlab
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom-container')
    <div class="email-main-container">
        <div class="container">
            <div class="contact-line"></div>
            <div class="find-us-container">
                <div class=" col-6 contact-title-text color-primary font-asul">
                    <div>Question Left?</div>
                    <div>We Will Be Happy To</div>
                    <div>Answer:</div>
                </div>
                <div class="font-mulish col-6 ">
                    <div class="text-body-email color-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Sed commodo, nisl at viverra aliquet, magna risus consectetur quam, 
                        sed auctor libero lectus a mauris. Fusce facilisis mi nec lacus efficitur 
                        fermentum. In placerat elit lacus, 
                        consequat dictum sem tincidunt at.
                    </div>

                    <div>
                        <div>
                            <div class="container-text-input">
                                YOUR NAME
                            </div>
                            <div class="line-input">
                               
                            </div>
                        </div>
                        <div>
                            <div class="container-text-input">
                                PHONE NUMBER
                            </div>
                            <div class="line-input">
                                
                            </div>
                        </div>
                        <div>
                            <div class="container-text-input">
                                MESSAGES
                            </div>
                            <div class="line-input">
                                
                            </div>
                        </div>
                        <div class="container-text-input">
                            <button type="button" class="btn btn-outline-light button-container">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
    </div>
@endsection