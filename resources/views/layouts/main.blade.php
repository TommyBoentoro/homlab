<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homlab</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/utils.css">
    {{--  --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asul&family=Mulish:wght@300;400&display=swap" rel="stylesheet">

</head>
<body>
    {{-- Navbar --}}
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
    {{--  --}}

    {{-- Main Content --}}
    <div class="container mt-4">
        @yield('container')
    </div>
    {{--  --}}

    {{-- Email us --}}
    <div>
        @yield('bottom-container')
    </div>

    {{-- Footer --}}
    <div>
        <div class="wrapper-footer">
            <img class="image-bg-footer" src="images/footer-bg.png" alt="">
        </div>
        <div style="width:100%; height:400px; background-color:#2C3F2C">
            <div class="container d-flex flex-column align-items-center color-white">
                <div style="margin-top: 64px" class="text-footer-title-wrapper text-footer-title font-mulish">
                    Pellentesque sagittis hendrerit diam, eu hendrerit odio ultricies a. Curabitur tincidunt,
                    sem et pretium consequat, 
                </div>
                <div class="mt-5 font-test" style="width: 500px; text-align:center">
                    <img src="images/homlabLogoFooter.png" alt="">
                </div>
                <div class="mt-5 d-flex justify-content-between text-footer-title-wrapper text-footer-link">
                    <div class="cursor-pointer">
                        ABOUT US
                    </div>
                    <div class="cursor-pointer">
                        ARTICLES
                    </div>
                    <div class="cursor-pointer">
                        PRODUCTS
                    </div>
                    <div class="cursor-pointer">
                        CONTACTS
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center font-mulish color-white footer-2-container text-footer-2" >
                <div>@2021 homlab, All Rights Reserved</div>
                <div class="gap-socmed-logo d-flex">
                    <div>
                        <img src="images/email.png" alt="">
                    </div>
                    <div>
                        <img src="images/facebook.png" alt="">
                    </div>
                    <div>
                        <img src="images/whatsapp.png" alt="">
                    </div>
                    <div>
                        <img src="images/instagram.png" alt="">
                    </div>
                </div>
            </div>      
        </div>
    </div>
    {{--  --}}

</body>
</html>