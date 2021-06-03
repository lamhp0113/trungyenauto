<footer class="footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="logo"><a href="#">Trung Yên Auto</a></h2>
                    <p> CÔNG TY CỔ PHẦN ĐẦU TƯ TRUNG YÊN AUTO
                        Hệ thống sửa chữa và chăm sóc ô tô đạt chuẩn
                    </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Dịch vụ</h2>
                    <ul class="list-unstyled">
                        @foreach($serviceslist as $dv)
                        <li><a href="/services_detail/{{$dv->id}}" class="py-1 d-block"><span class="fa fa-check mr-3"></span>{{$dv->name}}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Thông tin liên hệ</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map-marker"></span><span class="text">Lô 9-15C Trung Yên 3 - Trung Hòa - Cầu Giấy - Hà Nội
                                    <br>(Hoặc : Ngõ 2 - Số 45 Trung Kính- Trung Hòa- Cầu Giấy- Hà Nội)
                                </span>
                                <br/>
                            </li>
                            <li><a href="tel://0913578333"><span class="icon fa fa-phone"></span><span
                                        class="text">0913578333</span></a></li>
                            <li><a href="mailto:trungyenauto@gmail.com"><span class="icon fa fa-paper-plane"></span><span class="text">trungyenauto@gmail.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Giờ hoạt động</h2>
                    <div class="opening-hours">
                        <h4>Mở các ngày trong tuần:</h4>
                        <p class="pl-3">
                            <span>Thứ 2 – Thứ 6: 8h to 20h</span>
                            <span>Thứ 7, Chủ nhật: 9h to 17h</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
