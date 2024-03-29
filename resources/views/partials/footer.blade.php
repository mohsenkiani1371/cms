<footer class="footer-area relative sky-bg" id="contact-page">
    <div class="absolute footer-bg"></div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>{{ $footer->title }}</h2>
                        <p>{{ $footer->description_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <address class="side-icon-boxes">
                        <div class="side-icon-box">
                            <div class="side-icon">
                                <img src="images/location-arrow.png" alt="">
                            </div>
                            <p><strong>آدرس: </strong> {{ $footer->address }}</p>
                        </div>
                        <div class="side-icon-box">
                            <div class="side-icon">
                                <img src="images/phone-arrow.png" alt="">
                            </div>
                            <p><strong>تلفن(ها): </strong>
                                @foreach (explode(',', $footer->telephones) as $i => $telephone)
                                    <a href="callto:{{ $telephone }}">{{ $telephone }}</a>
                                    <br>
                                @endforeach
                            </p>
                        </div>
                        <div class="side-icon-box">
                            <div class="side-icon">
                                <img src="images/mail-arrow.png" alt="">
                            </div>
                            <p><strong>ایمیل: </strong>
                                @foreach (explode(',', $footer->emails) as $i => $email)
                                    <a href="mailto:{{ $email }}">{{ $email }}</a>
                                    <br>
                                @endforeach
                            </p>
                        </div>
                    </address>
                </div>
                <div class="col-xs-12 col-md-8">
                    <form action="{{ url('message') }}" id="contact-form" method="post" class="contact-form">
                        @csrf
                        <div class="form-double">
                            <input type="text" id="form-name" name="name" placeholder="نام شما" class="form-control" required="required">
                            <input type="email" id="form-email" name="email" class="form-control" placeholder="آدرس ایمیل" required="required">
                        </div>
                        <input type="text" id="form-subject" name="subject" class="form-control" placeholder="عنوان پیام">
                        <textarea id="form-message" name="body" rows="5" class="form-control" placeholder="متن پیام" required="required"></textarea>
                        <button type="submit" class="button">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 pull-right">
                    <ul class="social-menu text-right x-left">
                        @if ($footer->facebook)
                            <li><a href="https://facebook.com/{{$footer->facebook}}"><i class="fa fa-facebook"></i></a></li>
                        @endif
                        @if ($footer->twitter)
                            <li><a href="https://twitter.com/{{$footer->twitter}}"><i class="fa fa-twitter"></i></a></li>
                        @endif
                        @if ($footer->google)
                            <li><a href="https://plus.google.com/{{$footer->google}}"><i class="fa fa-google"></i></a></li>
                        @endif
                        @if ($footer->linkedin)
                            <li><a href="https://linkedin.com/{{$footer->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                        @endif
                        @if ($footer->instagram)
                            <li><a href="https://instagram.com/{{$footer->instagram}}"><i class="fa fa-instagram"></i></a></li>
                        @endif
                        @if ($footer->telegram)
                            <li><a href="https://telegram.me/{{$footer->telegram}}"><i class="fa fa-telegram"></i></a></li>
                        @endif



                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>{{ $footer->description_2 }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>Made by Mohsen Kiani. All rights reserved &copy; 2019</p>
                </div>
            </div>
        </div>
    </div>
</footer>
