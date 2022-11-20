@include('components.head')
        <!-- Start Preloader Area -->
    @include('components.preloader')
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
    @include('components.top-header')
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
    @include('components.navbar')
        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
    @include('components.sidebar')
        <!-- End Sidebar Modal -->

        <!-- Start Main Banner Area -->
    @include('home-blocks.banner-block')
        <!-- End Main Banner Area -->

        <!-- Start Top Products Area -->
    @include('home-blocks.top-product-block')
        <!-- End Top Products Area -->

        <!-- Start Detox Water Area -->
    @include('home-blocks.detox-block')
        <!-- End Detox Water Area -->

        <!-- Start Department Area -->
    @include('home-blocks.department')
        <!-- End Department Area -->

        <!-- Start Why Choose Area -->
    @include('home-blocks.why-choose')
        <!-- End Why Choose Area -->

        <!-- Start Featured Products Area -->
    @include('home-blocks.featured-product-block')
        <!-- End Featured Products Area -->

        <!-- Start Testimonial Area -->
    @include('home-blocks.star-testimonial-block')
        <!-- End Testimonial Area -->

        <!-- Start Best Sellers Products Area -->
    @include('home-blocks.best-seller')
        <!-- End Best Sellers Products Area -->

        <!-- Start Overview Area -->
    @include('home-blocks.start-overview')
        <!-- End Overview Area -->

        <!-- Start Most Viewed Products Area -->
    @include('home-blocks.start-most-view')
        <!-- End Most Viewed Products Area -->

        <!-- Start Blog Area -->
    @include('home-blocks.blog-area')
        <!-- End Blog Area -->

        <!-- Start Newsletter Area -->
    @include('home-blocks.newsletter')
        <!-- End Newsletter Area -->

        <!-- Start Partner Area -->
    @include('home-blocks.partner')
        <!-- End Partner Area -->

        <!-- Start Footer Area -->
        @include('components.footer')
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Start QuickView Modal Area -->
        <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="flaticon-cancel"></i></span>
                    </button>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="products-image"></div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="product-content">
                                <h3>Seasoned Tomatoes</h3>
                                <div class="price">
                                    <span class="new-price">$541.00</span>
                                    <span class="old-price">$652.00</span>
                                </div>
                                <div class="product-review">
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <a href="#" class="rating-count">5 reviews</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                <div class="product-add-to-cart">
                                    <div class="input-counter">
                                        <span class="minus-btn">
                                            <i class='bx bx-minus'></i>
                                        </span>
                                        <input type="text" value="1">
                                        <span class="plus-btn">
                                            <i class='bx bx-plus'></i>
                                        </span>
                                    </div>
                                    <button type="submit" class="default-btn">
                                        Add to cart
                                    </button>
                                </div>

                                <div class="buy-checkbox-btn">
                                    <div class="item">
                                        <input class="inp-cbx" id="cbx" type="checkbox">
                                        <label class="cbx" for="cbx">
                                            <span>
                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                </svg>
                                            </span>
                                            <span>I agree with the terms and conditions</span>
                                        </label>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="btn btn-light">Buy it now!</a>
                                    </div>
                                </div>

                                <div class="products-share">
                                    <ul class="social">
                                        <li><span>Share:</span></li>
                                        <li>
                                            <a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End QuickView Modal Area -->

        <!-- Jquery Slim JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Popper JS -->
        <script src="{{asset('assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('assets/js/jquery.meanmenu.js') }}"></script>
        <!-- Nice Select JS -->
        <script src="{{asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Odometer JS -->
        <script src="{{asset('assets/js/odometer.min.js') }}"></script>
        <!-- Jquery Appear JS -->
        <script src="{{asset('assets/js/jquery.appear.min.js') }}"></script>
        <!-- Ajaxchimp JS -->
		<script src="{{asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
		<!-- Form Validator JS -->
		<script src="{{asset('assets/js/form-validator.min.js') }}"></script>
		<!-- Contact JS -->
        <script src="{{asset('assets/js/contact-form-script.js') }}"></script>
        <!-- Wow JS -->
        <script src="{{asset('assets/js/wow.min.js') }}"></script>
        <!-- Custom JS -->
        <script src="{{asset('assets/js/main.js') }}"></script>
    </body>
</html>
