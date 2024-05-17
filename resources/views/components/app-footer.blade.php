<footer>
    <div class="container-fluid justify-content-center p-5">
        <div class="row">
            {{-- logo --}}
            <div class="col-md-4 col-12 start">
                <a href="/">
                    <img src=" {{ asset('assets-website/images/logos/logo.jpg') }} " alt="Company Logo">
                </a>
                <p>
                    A leading company in the field of air conditioners and home appliances in Saudi Arabia.
                </p>
            </div>

            {{-- Links --}}
            <div class="col-12 col-md-4 d-flex gap-5 middle">
                <div>
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li>
                            <a href="#">Our Products</a>
                        </li>
                        <li>
                            <a href="#">Testimonials</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Instagram</a>
                        </li>
                        <li>
                            <a href="#">YouTube</a>
                        </li>
                        <li>
                            <a href="#">TikTok</a>
                        </li>
                        <li>
                            <a href="#">X</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Instagram</a>
                        </li>
                        <li>
                            <a href="#">YouTube</a>
                        </li>
                        <li>
                            <a href="#">TikTok</a>
                        </li>
                        <li>
                            <a href="#">X</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Contact --}}
            <div class="col-md-4 col-12 end">
                <h1>Get In touch With H&H Shaker</h1>
                <div class="m-3">
                    <x-arrow-button dark_background="false">Contact Us</x-arrow-button>
                </div>
            </div>
        </div>
    </div>
</footer>
