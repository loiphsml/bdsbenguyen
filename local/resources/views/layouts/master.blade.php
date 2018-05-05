<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/frontend.css') }}
    <title>WEB Template 1</title>
</head>
<body>
<div class="top-line container-fluid bg-grey">

</div>
{{--Phan banner va thong tin top--}}
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-3 lban">
                <div class="row">
                    <div class="col-4 text-right p-0"><i class="fab fa-css3-alt text-primary"></i></div>
                    <div class="col-8 justify-content-center p-0 align-self-center text-left">
                        <span class="slogan"><b>Apartment</b></span>
                    </div>
                </div>
            </div>
            <div class="col-md-9 text-right justify-content-center align-self-center rbanner">
                <ul>
                    <li><i class="fas pr-2 fa-phone text-primary"></i><span class="inf">0909 123 123</span></li>
                    <li><i class="fas pr-2 fa-envelope text-primary"></i><span class="inf">H3-Arpatment@gmai.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

{{--end Phan banner va thong tin top--}}

{{--Phần Menu --}}
<div class="container-fluid bg-grey">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-grey">
            <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light"><i class="fas fa-bars"></i></span><span class="dm"> MENU</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="http://ngoisao.net">LINK 1</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            DANH SACH
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">DANH MUC</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">ABOUT US</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>

{{--Hết Menu--}}

@yield('contentbody')

{{--Phần bottom--}}


{{--End Phần bottom--}}
<div class="container-fluid bg-primary">
<div class="container text-center text-light">
    <div class="row" id="bottominfo">
        <div class="col-md-3">
            <ul>
                <li><a href=""><span class="ttbt">CONTACT</span> US</a></li>
                <li><a href=""><i class="fas fa-globe"></i> 1234 Heaven Stress, Beverly Hill
                    OldYork- United State of Lorem</a></li>
                <li><a href=""><i class="fas fa-phone-square"></i> (800) 0123 4567 890

                     - (800) 0987 654 321</a></li>
                <li><a href=""><i class="fas fa-envelope-square"></i> Email : support1@demo.com -

                    support2@demo.com</a></li>
            </ul>
        </div>

        <div class="col-md-3">
            <ul>
                <li><a href=""><span class="ttbt">SERVICES</span></a></li>
                <li><a href="">Services Apartment</a></li>
                <li><a href="">Villas</a></li>
                <li><a href="">Apartment</a></li>
                <li><a href="">House</a></li>
                <li><a href="">Offices</a></li>
                <li><a href="">Studio</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                <li><a href="">OUR'S <span class="ttbt">SUPPORT</span></a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Accordion</a></li>
                <li><a href="">Carousel</a></li>
                <li><a href="">Map</a></li>
                <li><a href="">Abouts Us</a></li>

            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                <li><a href="">Social's <span class="ttbt">NETWORK</span></a></li>
                <li><a href=""><i class="socialnw fab fa-facebook-square"></i> Follow us on FACEBOOK</a></li>
                <li><a href=""><i class="socialnw fab fa-google-plus-g"></i> Google Plus</a></li>
                <li><a href=""><i class="socialnw fab fa-twitter"></i > Twitter</a></li>
                <li><a href=""><i class="socialnw fab fa-instagram"></i> Instagram</a></li>


            </ul>
        </div>

    </div>
</div>
</div>
{{--Phần copyright--}}
<div class="container-fluid bg-light" style="height: 3px"></div>
<div class="container-fluid bg-grey">
    <div class="container text-center text-light">
        <p class="m-0 p-2">Copyright © 2018 - www.smartlinks.vn. All rights reserved</p>
    </div>
</div>
{{--end Phần copyright--}}

</body>
{{ Html::script('js/core.common.js') }}
{{ Html::script('js/script.js') }}
</html>
