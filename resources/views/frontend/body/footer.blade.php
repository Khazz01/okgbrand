<section id="footer" class="footer-area pt-100px">
    <div class="container footer-container">
        <div class="row">
            <div class="col-lg-4 footer-col responsive-column-half">
                <div class="footer-item">
                    <ul class="generic-list-item pt-4 footer-item">
                      <li><a href="{{route('/')}}">
                          <img style=""src="{{asset('frontend/img/brandlogo.jpg')}}" alt="footer logo" class="footer__logo brandlogo">
                      </a></li>
                        <li>+234 7070659197</li>
                        <li><a href="mailto: hello.okgbrand@gmail.com"> hello.okgbrand@gmail.com</a></li>
                        
<!--
                        <li><h3 class="fs-20 font-weight-semi-bold pt-2 pb-2">We are on</h3></li> -->
                        <li class="break"></li>
                        <li class="list-inline-item"><a href="https://x.com/okgbrand?t=9THUKbgZPq02UrnbpMF07w&s=09" target="_blank"><i class="fa-brands fa-2x fa-square-x-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/groups/13116778" target="_blank"><i class="fa-brands fa-2x fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/2347070659197?text=Hello%20there!" target="_blank"><i class="fa-brands fa-2x fa-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/OKGBRAND"><i class="fa-brands fa-2x fa-github" target="_blank"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/share/1F4UeVf4eZ/" target="_blank"><i class="fa-brands fa-2x fa-square-facebook"></i></a></li>
                        <li><a href="https://wa.me/2347070659197?text=Hello%20there!" target="_blank">Join our whatsapp Community &nbsp<i class="fa-brands fa-2x fa-whatsapp"></i></a></li>
                    </ul>
                    
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 footer-col responsive-column-half">
                <div class="footer-item">
                    <!--  -->
                    <ul class="generic-list-item footer-item">
                      <li><h3 class="fs-20 font-weight-semi-bold">Company</h3></li>
                        <li><a href="{{route('about')}}">About us</a></li>
                        <li><a href="#footer">Contact us</a></li>
                        <li><a href="{{route('become.staff')}}">Become a Staff</a></li>
                        <li><a href="{{route('faq')}}">FAQs</a></li>
                        <li><a href="{{route('TNC')}}">Terms & Conditions</a></li>
                        <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4  footer-col responsive-column-half">
                <div class="footer-item">
                    <ul class="generic-list-item footer-item">
                        <li><h3 class="fs-20 font-weight-semi-bold">Services</h3></li>
                        <li><a href="{{ route('/') }}#rate" class="dropdown-item"> Digital Store Promotion</a></li>
                                                                                    <li><a href="{{ route('/') }}#email" class="dropdown-item">Email List Generation</a></li>
                                        
                                             <li><a href="{{ route('/') }}#webdev" class="dropdown-item"> Website Development</a></li>
                                          <li><a href="{{ route('/') }}#videdit" class="dropdown-item"> Video Editing</a></li>
                                          <li><a href="{{ route('/') }}#videdit" class="dropdown-item">Graphics Designs</a></li>
                                          <li><a href="{{ route('/') }}#start" class="dropdown-item">Write E-book</a></li>
                                          <li><a href="{{ route('/') }}#start" class="dropdown-item">E-learning and Certification</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="copyright-content py-4">
        <div class="container">
            @php
                $date = new DateTime();
                $year = $date->format('Y')
            @endphp
                    <p class="copy-desc">&copy; {{$year}} OkgBrand.</p>
        </div><!-- end container -->
    </div><!-- end copyright-content -->
</section><!-- end footer-area -->

