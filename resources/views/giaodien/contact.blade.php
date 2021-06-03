<!DOCTYPE html>
<html lang="en">
<head>
    @include('giaodien.layouts.style')
</head>
<body>
@include('giaodien.layouts.main-header')
@include('giaodien.layouts.category', ['isDisplayBooking' => true])

<!-- END nav -->
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
                                    <p><span>Địa chỉ:</span> Lô 9-15C Trung Yên 3 - Trung Hòa - Cầu Giấy - Hà Nội6
                                    </p>
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
                                            href="mailto:trungyenauto@gmail.com">trungyenauto@gmail.com</a></p>
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
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14897.809491446262!2d105.799923!3d21.014578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6a9be8c84c6c0f2!2sTrung%20Y%C3%AAn%20Auto!5e0!3m2!1svi!2sus!4v1622533864589!5m2!1svi!2sus"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('giaodien.layouts.booking')
<br>
<!-- footer -->
@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
