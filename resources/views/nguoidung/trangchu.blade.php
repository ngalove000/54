<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/custom.css')}}">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/iziModal.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-datetimepicker.min.css')}}">

</head>
<body>
{{--start menu--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" onclick="$('head').animatescroll();" href="javascript:void(0)">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="$('#qua').animatescroll();" href="javascript:void(0)">Bưởi Quả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="$('#mui').animatescroll();" href="javascript:void(0)">Bưởi Tách Sẵn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="$('#ep').animatescroll();" href="javascript:void(0)">Bưởi Ép</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="$('#le').animatescroll();" href="javascript:void(0)">Bưởi Lễ</a>
                </li>
            </ul>
            {{--<form class="form-inline my-2 my-lg-0">--}}
            {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
            {{--</form>--}}
        </div>
    </div>
</nav>
{{--end menu--}}

{{--start slider--}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{url('img/Banner_Web.png')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{url('img/Banner_Web2.png')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{url('img/Banner_Web3.png')}}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{--end slider--}}

{{--start tiêu chí--}}
<section class="xanhla">
    <div class="container">
        <div class="cach30"></div>
        <div class="row">
            <div class="col-md-3">
                <h6 class="tieuchi"><i class="icon ion-leaf"></i> Xuất Xứ Tại Vườn</h6>
            </div>
            <div class="col-md-3">
                <h6 class="tieuchi"><i class="icon ion-android-bicycle"></i> Giao Hàng Nhanh Chóng</h6>
            </div>
            <div class="col-md-3">
                <h6 class="tieuchi"><i class="icon ion-bag"></i> Giá Thành Hợp Lý</h6>
            </div>
            <div class="col-md-3">
                <h6 class="tieuchi"><i class="icon ion-ribbon-a"></i> Sản Phẩm Chất Lượng</h6>
            </div>
        </div>
        <div class="cach20"></div>
    </div>
</section>
{{--end tiêu chí--}}

<div class="cach30"></div>
{{--bưởi quả--}}
<section class="trang" id="qua">
    <div class="container">
        <div class="cach15"></div>

        <div class="tieudemuc">
            <h1><b>Bưởi Quả</b></h1>
        </div>
        <div class="cach15"></div>

        <div class="row">
            <div class="col-md-6">
                <div class="cach15"></div>

                <img class="img-fluid anhto"
                     src="https://netdepnguoiviet.com/wp-content/uploads/2017/04/cach-chua-benh-tu-cac-bo-phan-khac-nhau-cua-cay-buoi2.jpg"
                     alt="">
            </div>
            <div class="col-md-6">
                <div class="cach15"></div>

                <ul>
                    <li><h5>Những quả bưởi năm roi chín mọng được chọn lọc từ các vườn bưởi với kinh nghiệm trồng trọt
                            lâu năm.</h5></li>
                    <li><h5>Bưởi to đẹp, đầy đủ cành nhánh rất thích hợp cho việc trưng bày hoặc thờ cúng vào những dịp
                            lễ, rằm...</h5></li>
                    <li><h5>Múi bưởi bên trong rất nhiều nước, không hạt, không khô, sượng...</h5></li>
                    <li><h5>Đội ngũ giao hàng chuyên nghiệp hỗ trợ giao hàng tận nơi cho bạn trong thời gian sớm
                            nhất.</h5></li>
                </ul>
                <div class="muangay">
                    <button class="btn btn-primary trigger">ĐẶT MUA NGAY</button>
                </div>
            </div>
        </div>
    </div>
</section>
{{--bưởi quả--}}

<div class="cach30"></div>
<div class="cach30"></div>

{{--bưởi tách sẵn--}}
<section class="xanhla" id="mui">
    <div class="container">
        <div class="cach30"></div>

        <div class="cach15"></div>

        <div class="tieudemuc">
            <h1><b>Bưởi Tách Sẵn</b></h1>
        </div>
        <div class="cach15"></div>

        <div class="row">
            <div class="col-md-6">
                <div class="cach15"></div>

                <ul>
                    <li><h5>Những quả bưởi năm roi chín mọng được chọn lọc từ các vườn bưởi với kinh nghiệm trồng trọt
                            lâu năm.</h5></li>
                    <li><h5>Bưởi to đẹp, đầy đủ cành nhánh rất thích hợp cho việc trưng bày hoặc thờ cúng vào những dịp
                            lễ, rằm...</h5></li>
                    <li><h5>Múi bưởi bên trong rất nhiều nước, không hạt, không khô, sượng...</h5></li>
                    <li><h5>Đội ngũ giao hàng chuyên nghiệp hỗ trợ giao hàng tận nơi cho bạn trong thời gian sớm
                            nhất.</h5></li>
                </ul>
                <div class="muangay">
                    <button class="btn btn-primary">ĐẶT MUA NGAY</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cach15"></div>

                <img class="img-fluid anhto"
                     src="http://ydvn.net/stores/images/cach%20ngam%20ruou%20buoi%20giup%20dep%20da%20ngan%20ngua%20soi%20than.jpg"
                     alt="">
            </div>

        </div>
    </div>
    <div class="cach30"></div>
    <div class="cach30"></div>

</section>
{{--bưởi tách sẵn--}}

{{--bưởi ép--}}
<section class="trang" id="ep">
    <div class="container">
        <div class="cach30"></div>

        <div class="cach15"></div>

        <div class="tieudemuc">
            <h1><b>Bưởi Ép</b></h1>
        </div>
        <div class="cach15"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="cach15"></div>

                <img class="img-fluid anhto"
                     src="https://i0.wp.com/www.newspakistan.tv/wp-content/uploads/2017/07/detox.jpg?fit=1651%2C1282&ssl=1"
                     alt="">
            </div>
            <div class="col-md-6">
                <div class="cach15"></div>

                <ul>
                    <li><h5>Những quả bưởi năm roi chín mọng được chọn lọc từ các vườn bưởi với kinh nghiệm trồng trọt
                            lâu năm.</h5></li>
                    <li><h5>Bưởi to đẹp, đầy đủ cành nhánh rất thích hợp cho việc trưng bày hoặc thờ cúng vào những dịp
                            lễ, rằm...</h5></li>
                    <li><h5>Múi bưởi bên trong rất nhiều nước, không hạt, không khô, sượng...</h5></li>
                    <li><h5>Đội ngũ giao hàng chuyên nghiệp hỗ trợ giao hàng tận nơi cho bạn trong thời gian sớm
                            nhất.</h5></li>
                </ul>
                <div class="muangay">
                    <button class="btn btn-primary">ĐẶT MUA NGAY</button>
                </div>
            </div>
        </div>
    </div>
    <div class="cach30"></div>
    <div class="cach30"></div>

</section>
{{--bưởi ép--}}

{{--bưởi tách sẵn--}}
<section class="xanhla" id="le">
    <div class="container">
        <div class="cach30"></div>

        <div class="cach15"></div>

        <div class="tieudemuc">
            <h1><b>Bưởi Lễ</b></h1>
        </div>
        <div class="cach15"></div>

        <div class="row">
            <div class="col-md-6">
                <div class="cach15"></div>

                <ul>
                    <li><h5>Những quả bưởi năm roi chín mọng được chọn lọc từ các vườn bưởi với kinh nghiệm trồng trọt
                            lâu năm.</h5></li>
                    <li><h5>Bưởi to đẹp, đầy đủ cành nhánh rất thích hợp cho việc trưng bày hoặc thờ cúng vào những dịp
                            lễ, rằm...</h5></li>
                    <li><h5>Múi bưởi bên trong rất nhiều nước, không hạt, không khô, sượng...</h5></li>
                    <li><h5>Đội ngũ giao hàng chuyên nghiệp hỗ trợ giao hàng tận nơi cho bạn trong thời gian sớm
                            nhất.</h5></li>
                </ul>
                <div class="muangay">
                    <button class="btn btn-primary">ĐẶT MUA NGAY</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cach15"></div>

                <img class="img-fluid anhto"
                     src="https://buoile.files.wordpress.com/2015/01/img_1103-002.jpg"
                     alt="">
            </div>

        </div>
    </div>
    <div class="cach30"></div>
    <div class="cach30"></div>

</section>
{{--bưởi tách sẵn--}}


<!-- Modal structure -->
<div id="modal2">
    <form action="/action_page.php" name="frmThongTin">
        <div class="row">
            <div class="col-md-6">
                <h5>Bưởi lễ</h5>
                <img class="img-fluid"
                     src="https://buoile.files.wordpress.com/2015/01/img_1103-002.jpg"
                     alt="">
                <br>
                <br>
                <h6>Khối lượng/Thể tích: 1,5 Kg</h6>
                <h6>Giá: 50,000 VNĐ</h6>
                <h6>Đơn vị: Hộp</h6>
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="text" class="form-control">
                </div>
                {{--<div>--}}
                {{--<button class="btn btn-primary btnfull" id="btnMua">ĐẶT MUA</button>--}}
                {{--</div>--}}
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Họ và tên quý khách</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhận hàng</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Thời gian nhận hàng</label>
                    <div class="input-append date" id="ngaygiao">
                        <input size="16" type="text" readonly class="form-control">
                        <span class="add-on"><i class="icon-th"></i></span>

                    </div>
                </div>
                <div class="form-group">
                    <label>Ghi chú</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div>
                    <button class="btn btn-primary btnfull">MUA NGAY</button>
                </div>
            </div>
        </div>
    </form>
    {{--<form action="" name="frmDatHang">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<img class="img-fluid"--}}
    {{--src="https://buoile.files.wordpress.com/2015/01/img_1103-002.jpg"--}}
    {{--alt="">--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
    {{--<h5>Bưởi lễ</h5>--}}
    {{--<h6>Khối lượng/Thể tích: 1,5 Kg</h6>--}}
    {{--<h6>Đơn vị: Hộp</h6>--}}
    {{--<div class="form-group">--}}
    {{--<label>Số lượng</label>--}}
    {{--<input type="text" class="form-control">--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<button class="btn btn-primary btnfull">ĐẶT MUA</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
</div>


<div id="modal">

    <form action="" name="frmDatHang">
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid"
                     src="https://buoile.files.wordpress.com/2015/01/img_1103-002.jpg"
                     alt="">
            </div>
            <div class="col-md-6">
                <h5>Bưởi lễ</h5>
                <h6>Khối lượng/Thể tích: 1,5 Kg</h6>
                <h6>Đơn vị: Hộp</h6>
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="text" class="form-control">
                </div>
                <div>
                    <button class="btn btn-primary btnfull" id="btnMua">ĐẶT MUA</button>
                </div>
            </div>
        </div>
    </form>
</div>

<footer>
    <div class="container">
        <div class="cach30"></div>
        <div class="row">
            <div class="col-md-4">
                <h5>THÔNG TIN LIÊN HỆ</h5>
                <h6 id="hotline">Hotline: 01649 444 440</h6>
                <h6>Email: buoimientay@gmail.com</h6>
                <h6>Văn phòng: Hưng Phú, Ninh Kiều, TP Cần Thơ</h6>
            </div>
            <div class="col-md-4">
                <H5>BƯỞI MIỀN TÂY</H5>
                <a href=""><h6>Giới thiệu về Bưởi Miền Tây</h6></a>
                <a href=""><h6>Hướng dân mua hàng</h6></a>
                <a href=""><h6>Câu hỏi thường gặp</h6></a>
            </div>
            <div class="col-md-4">
                <h5>KẾT NỐI VỚI CHÚNG TÔI</h5>
                <a href=""><i class="icon ion-social-facebook xahoi"></i> </a>

                <a href=""><i class="icon ion-social-youtube xahoi"></i></a>
            </div>
        </div>
        <div class="cach15"></div>
        <div class="col-md-12">
            <h6 id="banquyen">Bản quyển thuộc về Bưởi Miền Tây</h6>
        </div>
        <div class="cach20"></div>

    </div>
</footer>

<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<script src="{{url('js/iziModal.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/vi.js"></script>
<script src="{{url('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{url('js/animatescroll.min.js')}}"></script>
<script src=""></script>

<script src="{{url('js/custom.js')}}"></script>
</body>
</html>