<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img"
         style="background-image:url({{asset('images/bg_3.jpg')}});">
    <div class="overlay"></div>
    <div class="container" id="datlich">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
                <span class="subheading" style="font-size:18px">Đặt lịch bảo dưỡng và sửa chữa</span>
                <span class="subheading" style="font-size:18px"> Miễn phí tư vấn hotline:<a href="tel://0913578333" style="color:black;font-size:28px">0913578333</a></span>
                <form action="{{ route('booking.store') }}" method="POST" class="appointment">
                    @csrf
                    <input type="hidden" name="status" value="0"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>

                                        <select name="service_id" class="form-control">
                                            <option value="">Chọn dịch vụ</option>
                                            @foreach($services as $ct)
                                                <option value="{{$ct->id}}" @if(isset($selectedServiceId) && $selectedServiceId === $ct->id) selected @endif>
                                                    {{$ct->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="customer_name" class="form-control" required="text"
                                       placeholder="Tên Bạn">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" minlength="10" pattern="\d*" maxlength="13"
                                       class="form-control" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <input type="datetime-local" name="booking_time" required="text"
                                           class="form-control" placeholder="Ngày đặt">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" required="email" name="email" class="form-control"
                                       placeholder="Hòm thư">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="customer_comment" id="" cols="30" rows="7" class="form-control"
                                          placeholder="Ghi Chú"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Đặt lịch" class="btn btn-dark py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
