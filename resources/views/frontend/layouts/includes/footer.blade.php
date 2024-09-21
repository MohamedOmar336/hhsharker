<footer class="footer wow fadeInUpBig" style="background-image: url('{{ asset('assets-frontend/images/footer-bg.png') }}');">
        <div class="container">
            <div class="footer-logo-list">
                <a href="#">
                    <img src="{{ asset('assets-frontend/images/white-logo.png') }}" alt="Logo">
                </a>
                <p>A leading company in the field of air conditioners and home appliances in Saudi Arabia.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading"> 
                        <h2>Get In touch With HH Shaker</h2>
                        <a class="cutome-btn mt-3" href="{{ route('frontend.contact-us') }}">Contact Us</a>
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
                <div class="col-lg-8">
                    <div class="footer-box">
                        <div class="row">
                            <div class="col-xl-4">
                                <a href="#">All Products </a>
                                <a href="#">Sales & Support </a>
                                <a href="#">Service Center</a>
                                <a href="{{ route('frontend.contact-us') }}">Contact Us</a>
                            </div>
                            <div class="col-xl-4">
                                <a href="#">Air Conditioners</a>
                                <a class="small-af" href="#">Window AC</a>
                                <a class="small-af" href="#">VRF</a>
                                <a class="small-af" href="#">Concealed</a>
                                <a class="small-af" href="#">Cassette</a>
                            </div>
                            <div class="col-xl-4">
                                <a href="#">Home Appliances </a>
                                <a class="small-af" href="#">Refrigerator</a>
                                <a class="small-af" href="#">Dishwashers </a>
                                <a class="small-af" href="#">Washing machine </a>
                                <a class="small-af" href="#">Coffee Machines </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-text">
                <div>© 2024 HH SHAKER for Modern Trading CO. LTD. All Rights Reserved</div>
                <div>Powered By <a href="#">BOB28 Studio</a></div>
            </div>
        </div>
    </footer>



    <!-- video Modal -->
    <div class="modal video-modal fade" id="videomodal" tabindex="-1" aria-labelledby="videomodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-xmark"></i></a>
                    <!-- <iframe width="100%" height="450px" src="https://www.youtube.com/embed/681PJt7mWa0?si=SO1aP5mtLFNJTf9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                    <video width="100%" height="450px" controls src="{{ asset('assets-frontend/images/home-page-video.mp4') }}"></video>
                </div>
            </div>
        </div>
    </div>