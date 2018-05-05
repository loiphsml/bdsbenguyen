@extends('layouts/master')
@section('contentbody')
    {{--phan slider va search nang cao--}}
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt-3 slider">
                    {{--phan slider--}}
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'img-slider')) }}

                </div>
                <div class="col-md-5 p-3 rsearchbanner">
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'img-slider')) }}
                </div>
            </div>
        </div>
    </div>
    {{--Endphan slider va search nang cao--}}

    {{--phang hien thi cac danh muc san pham nha dat--}}

    <div class="container-fluid">
        <div class="container mt-3">
            <div class="row">
                <div id="titledm" class="col-12 justify-content-center align-self-center">
                    <span class="m-0 p-1 text-dark">
                        <a href="http://batdongsan.com.vn"><span class="text-primary">DANH SÁCH BẤT ĐỘNG SẢN </span></a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{--end phang hien thi cac danh muc san pham nha dat--}}

    {{-- phần bđs cần thể hiện ra--}}

    <div class="container-fluid">
        <div class="container p-3">
            <div class="row">

                <div class="col-md-3 card mb-5">
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'imgbds')) }}
                    <div class="card-body p-0 m-0 pt-1">
                        <h5 class="card-title pt-1">New Studio For Rent With 01 Bedroom In ...</h5>
                        <p class="card-text text-center m-0 bg-primary text-light pt-1">
                            ID: 0951 <br>
                            Price: US$ 400 /month
                        </p>

                    </div>
                </div>

                <div class="col-md-3 card mb-5">
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'imgbds')) }}
                    <div class="card-body p-0 m-0 pt-1">
                        <h5 class="card-title pt-1">New Studio For Rent With 01 Bedroom In ...</h5>
                        <p class="card-text text-center m-0 bg-primary text-light pt-1">
                            ID: 0951 <br>
                            Price: US$ 400 /month
                        </p>

                    </div>
                </div>

                <div class="col-md-3 card mb-5">
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'imgbds')) }}
                    <div class="card-body p-0 m-0 pt-1">
                        <h5 class="card-title pt-1">New Studio For Rent With 01 Bedroom In ...</h5>
                        <p class="card-text text-center m-0 bg-primary text-light pt-1">
                            ID: 0951 <br>
                            Price: US$ 400 /month
                        </p>

                    </div>
                </div>

                <div class="col-md-3 card mb-5">
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'imgbds')) }}
                    <div class="card-body p-0 m-0 pt-1">
                        <h5 class="card-title pt-1">New Studio For Rent With 01 Bedroom In ...</h5>
                        <p class="card-text text-center m-0 bg-primary text-light pt-1">
                            ID: 0951 <br>
                            Price: US$ 400 /month
                        </p>

                    </div>
                </div>

                <div class="col-md-3 card mb-5">
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'imgbds')) }}
                    <div class="card-body p-0 m-0 pt-1">
                        <h5 class="card-title pt-1">New Studio For Rent With 01 Bedroom In ...</h5>
                        <p class="card-text text-center m-0 bg-primary text-light pt-1">
                            ID: 0951 <br>
                            Price: US$ 400 /month
                        </p>

                    </div>
                </div>

                <div class="col-md-3 card mb-5">
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'imgbds')) }}
                    <div class="card-body p-0 m-0 pt-1">
                        <h5 class="card-title pt-1">New Studio For Rent With 01 Bedroom In ...</h5>
                        <p class="card-text text-center m-0 bg-primary text-light pt-1">
                            ID: 0951 <br>
                            Price: US$ 400 /month
                        </p>

                    </div>
                </div>

                <div class="col-md-3 card mb-5">
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'imgbds')) }}
                    <div class="card-body p-0 m-0 pt-1">
                        <h5 class="card-title pt-1">New Studio For Rent With 01 Bedroom In ...</h5>
                        <p class="card-text text-center m-0 bg-primary text-light pt-1">
                            ID: 0951 <br>
                            Price: US$ 400 /month
                        </p>

                    </div>
                </div>

                <div class="col-md-3 card mb-5">
                    {{ Html::image('images/aboutus/001.jpg','',array('class'=>'imgbds')) }}
                    <div class="card-body p-0 m-0 pt-1">
                        <h5 class="card-title">New Studio For Rent With 01 Bedroom In ...</h5>
                        <p class="card-text text-center m-0 bg-primary text-light pt-1">
                            ID: 0951 <br>
                            Price: US$ 400 /month
                        </p>

                    </div>
                </div>


            </div>
        </div>
    </div>

    {{-- end phần bđs cần thể hiện ra--}}

    {{-- Lisst infor thooong tin bds cho thue--}}
    <div class="container-fluid bg-light text-dark">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-4">
                    <p class="p-0 m-0 text-left text-primary pb-2 listds">
                        APARTMENTS FOR RENT IN HOAN KIEM
                    </p>
                    <ul class="list-group-item- pl-4 dsbds">
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                    </ul>
                    <p class="text-right"><a class="text-danger" href="">Read more >></a></p>
                </div>
                <div class="col-md-4"><p class="p-0 m-0 text-left text-primary pb-2 listds" >
                        APARTMENTS FOR RENT IN HOAN KIEM
                    </p>
                    <ul class="list-group-item- pl-4 dsbds">
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                    </ul>
                    <p class="text-right"><a class="text-danger" href="">Read more >></a></p></div>
                <div class="col-md-4"><p class="p-0 m-0 text-left text-primary pb-2 listds">
                        APARTMENTS FOR RENT IN HOAN KIEM
                    </p>
                    <ul class="list-group-item- pl-4 dsbds">
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                    </ul>
                    <p class="text-right"><a class="text-danger" href="">Read more >></a></p></div>
                <div class="col-md-4"><p class="p-0 m-0 text-left text-primary pb-2 listds">
                        APARTMENTS FOR RENT IN HOAN KIEM
                    </p>
                    <ul class="list-group-item- pl-4 dsbds">
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                    </ul>
                    <p class="text-right"><a class="text-danger" href="">Read more >></a></p></div>
                <div class="col-md-4"><p class="p-0 m-0 text-left text-primary pb-2 listds">
                        APARTMENTS FOR RENT IN HOAN KIEM
                    </p>
                    <ul class="list-group-item- pl-4 dsbds">
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                    </ul>
                    <p class="text-right"><a class="text-danger" href="">Read more >></a></p></div>
                <div class="col-md-4">
                    <p class="p-0 m-0 text-left text-primary pb-2 listds">
                        APARTMENTS FOR RENT IN HOAN KIEM
                    </p>
                    <ul class="list-group-item- pl-4 dsbds">
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                    </ul>
                    <p class="text-right"><a class="text-danger" href="">Read more >></a></p></div>
                <div class="col-md-4">
                    <p class="p-0 m-0 text-left text-primary pb-2 listds">
                        APARTMENTS FOR RENT IN HOAN KIEM
                    </p>
                    <ul class="list-group-item- pl-4 dsbds">
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                    </ul>
                    <p class="text-right"><a class="text-danger" href="">Read more >></a></p></div>
                <div class="col-md-4">
                    <p class="p-0 m-0 text-left text-primary pb-2 listds">
                        APARTMENTS FOR RENT IN HOAN KIEM
                    </p>
                    <ul class="list-group-item- pl-4 dsbds">
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                    </ul>
                    <p class="text-right"><a class="text-danger" href="">Read more >></a></p></div>
                <div class="col-md-4">
                    <p class="p-0 m-0 text-left text-primary pb-2 listds">
                        APARTMENTS FOR RENT IN HOAN KIEM
                    </p>
                    <ul class="list-group-item- pl-4 dsbds">
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                        <li><a href="">New studio for rent 01 bedroom in Ham Lo </a></li>
                    </ul>
                    <p class="text-right"><a class="text-danger" href="">Read more >></a></p></div>
            </div>
        </div>
    </div>
    {{-- End Lisst infor thooong tin bds cho thue--}}

@endsection