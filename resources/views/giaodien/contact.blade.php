<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auto Repair - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('giaodien.layouts.style')

</head>
<body>
@include('giaodien.layouts.main-header')
@include('giaodien.layouts.category')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="wrapper">
                <div class="row no-gutters" style="padding-bottom: 10px;">
                    <div class="col-md-5 d-flex align-items-stretch" style="padding-right: 5px;">
                        <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                            <h3 class="mb-4 mt-md-4">Thông tin liên hệ</h3>
                            <div class="dbox w-100 d-flex align-items-start">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Địa chỉ:</span> Lô 9-15C Trung Yên 3 - Trung Hòa - Cầu Giấy - Hà Nội6</p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Hotline:</span> <a href="tel://0913578333">0913578333</a></p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Hòm Thư:</span> <a
                                            href="mailto:info@yoursite.com">trungyenauto@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Website</span> <a href="#">trungyenauto.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 d-flex">
                        <div id="map" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
