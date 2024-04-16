<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="/">
                                <h3 class="text-white">{{ $appSetting->wedsite_name ?? 'Wedsite Name' }}</h3>
                            </a>
                        </div>
                        <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna
                            eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
                            facilisis luctus, metus.</p>
                        <p class="call">
                            Got Question? Call us 24/7
                            <span>
                                <a href="tel:{{ $appSetting->phone1 ?? 'Phone 1' }}">+
                                    {{ $appSetting->phone1 ?? 'Phone 1' }}</a>
                            </span>
                        </p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Customer Service</h4>
                        <ul>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Get In Tuch</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>{{ $appSetting->address ?? 'Adsress' }}</li>
                                <li>{{ $appSetting->email1 ?? 'Email 1' }}</li>
                                <li>{{ $appSetting->phone1 ?? 'Phone 1' }}</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li>
                                <a href="{{ $appSetting->facebook ?? '' }}" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ $appSetting->twitter ?? '' }}" target="_blank"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{ $appSetting->instagram ?? '' }}" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{ $appSetting->youtube ?? '' }}" target="_blank"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> -
                                All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
