<footer class="footer wow fadeInUpBig" style="background-image: url('{{ asset('assets-frontend/images/footer-bg.png') }}');">
        <div class="container">
            <div class="footer-logo-list">
                <a class="wow fadeInLeftBig" data-wow-delay="0.5s" href="#">
                    <img src="{{ asset('assets-frontend/images/white-logo.png') }}" alt="Logo">
                </a>
                <p class="wow fadeInRightBig" data-wow-delay="0.5s">{{ __('website.footer.title') }}</p>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeftBig" data-wow-delay="1s">
                    <div class="section-heading"> 
                        <h2>{{ __('website.footer.get_in_touch') }}</h2>
                        <a class="cutome-btn mt-3" href="{{ route('frontend.contact-us',['locale' => app()->getLocale()]) }}">{{ __('website.footer.button') }}</a>
                    </div>
                    <div class="footer-social">
                        <a href="#">
                            <img src="{{ asset('assets-frontend/images/footer-instagram.svg') }}" alt="Footer Social">
                        </a> 
                        <a href="#">
                            <img src="{{ asset('assets-frontend/images/footer-x.svg') }}" alt="Footer Social">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets-frontend/images/footer-tiktok.svg') }}" alt="Footer Social">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets-frontend/images/footer-youtube.svg') }}" alt="Footer Social">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets-frontend/images/footer-snapchat.svg') }}" alt="Footer Social">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets-frontend/images/footer-whatsapp.svg') }}" alt="Footer Social">
                        </a>
                    </div>
                </div> 
                <div class="col-lg-8 wow fadeInRightBig" data-wow-delay="1s">
                    <div class="footer-box">
                        <div class="row">
                            <div class="col-xl-4">
                                <a href="{{ route('frontend.home-appliances.product-list-1',['locale' => app()->getLocale()]) }}">All Products </a>
                                <a href="{{ route('frontend.sales-and-support',['locale' => app()->getLocale()]) }}">Sales & Support </a>
                                <a href="{{ route('frontend.commercial-support',['locale' => app()->getLocale()]) }}">Service Center</a>
                                <a href="{{ route('frontend.contact-us',['locale' => app()->getLocale()]) }}">Contact Us</a>
                            </div>
                            <div class="col-xl-4">
                                <a href="{{ route('frontend.air-conditioner',['locale' => app()->getLocale()]) }}">Air Conditioners</a>
                                @foreach($headerAirConditionerArr as $ac)                                   
                                    <a class="small-af" href="{{ route('frontend.air-conditioner.parent',['locale' => app()->getLocale(),'parent'=>$ac->slug]) }}">
                                        {{ $ac->name }}
                                    </a>
                                @endforeach
                            </div>
                            <div class="col-xl-4">
                                <a href="{{ route('frontend.home-appliances',['locale' => app()->getLocale()]) }}">Home Appliances </a>
                                @foreach($headerHomeAppliencesrArr->take(4) as $ac)
                                    <a class="small-af" href="{{ route('frontend.home-appliances.parent',['locale' => app()->getLocale(),'parent'=>$ac->slug]) }}">{{ $ac->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-text">
                <div class="wow fadeInLeftBig" data-wow-delay="1s">© {{ __('website.footer.copy_right') }}</div>
                <div class="wow fadeInRightBig" data-wow-delay="1s">{{ __('website.footer.powered_by') }} <a href="#">{{ __('website.footer.powered_by_title') }}</a></div>
            </div>
        </div>
    </footer>

</div>
</div>
</div>

    <!-- video Modal -->
    <div class="modal video-modal fade" id="videomodal" tabindex="-1" aria-labelledby="videomodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-xmark"></i></a>
                    <!-- <iframe width="100%" height="450px" src="https://www.youtube.com/embed/681PJt7mWa0?si=SO1aP5mtLFNJTf9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <iframe width="100%" height="450px" src="https://www.youtube.com/embed/JgAj1EYdwTo?si=si5m8mKcX4CqjAVw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <video width="100%" height="450px" controls src="{{ asset('assets-frontend/images/home-page-video.mp4') }}"></video> --}}
                </div>
            </div>
        </div>
    </div>

    @push('extra-js')
    <script>
        $(document).ready(function(){
            var routepath = '{{  Route::currentRouteName() }}';
            if(routepath == 'frontend.home' && localStorage.getItem('isDarkMode') == 1){
                $('body').addClass('dark-mode');
                $('.dark-ligh-btn').addClass('dark-active');
            }
        })

        function setDarkMode(val){
            localStorage.setItem('isDarkMode',val);
            if(val == true){
                $('body').addClass('dark-mode');
                $('.dark-ligh-btn').addClass('dark-active');
            }else{
                $('body').removeClass('dark-mode');
                $('.dark-ligh-btn').removeClass('dark-active');
            }
        }
    </script>
    @endpush