<x-layout>
    <x-slot:title>
        About Us | HH Sharker
    </x-slot:title>

    <div id="about">
        <section class="container py-5">
            <div class="row justify-content-center align-items-center mx-3">
                <div class="col-md-6 text-center d-none d-md-block">
                    <img src="{{ asset('assets-website/images/hands-on.jpg') }}" class="img-fluid rounded-4 adv" alt="img">
                </div>

                <div class="left col-md-6 text-md-start d-flex flex-column">
                    <x-tag class="figure">About Us</x-tag>
                    
                    <h2 class="mt-3 text-uppercase display-1 fw-bolder">
                        who we are?
                    </h2>
                    <p class="info-text mt-3">
                        HH Shaker Company is one of the leading companies in the field of air conditioners and home appliances in the Kingdom of Saudi Arabia.
                    </p>
                    <p class="info-text mt-3 mb-5">
                        Shaker Group was established During the reign of Sheikh Ibrahim Shaker in 1950. It has built a solid reputation and strong market presence over the past more than half a century.
                    </p>
                    <div class="ms-3">
                        <x-arrow-button class="px-3">Contact Us</x-arrow-button>
                    </div>
                </div>
            </div>
        </section>

        <!-- img section separator -->
        <x-divider />

        <section class="container py-5">
            <div class="text-center col-12">
                <img src="{{ asset('assets-website/images/office.jpg') }}" class="img-fluid rounded-4 adv" alt="office space">
            </div>

            <div class="info-section d-flex justify-content-between mt-5 px-5 py-3 rounded-4">
                <x-sm-info-card bg_transparent="true" main="100%" sub="Satisfied Customer"></x-sm-info-card>
                <x-sm-info-card bg_transparent="true" main="10Y" sub="Warrantty"></x-sm-info-card>
                <x-sm-info-card bg_transparent="true" main="No. 1" sub="Efficiency"></x-sm-info-card>
            </div>

            <div class="my-3 px-5 row">
                <div class="col-md-6 col-12">
                    <p class="info-text">The journey was completed by the modern trading company, Hussein and Hassan Ghazi Shaker Ltd, representing the esteemed history of the Shaker Group.</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="info-text">Thanks to our commitment to quality and efficiency, we succeed in providing a diverse range of high-quality products to meet diverse customer needs.</p>
                </div>
            </div>
        </section>

        <section class="container py-5">
            <div class="row justify-content-center align-items-center mx-3">
                <div class="left col-md-6 text-md-start d-flex flex-column">
                    <h2 class="mt-3 text-uppercase display-2 fw-bolder">
                        100% Satisfied customer
                    </h2>
                    <p class="info-text mt-3">
                        We offer a wide variety of home appliances, including air conditioners, refrigerators, washing machines, televisions, and others. In addition to delivery, installation and maintenance services.
                    </p>
                    <p class="info-text mt-3 mb-5">
                        We also prioritize social and economic responsibility, aiming to deliver unique services that offer solutions to enhance the quality of life for our customers.
                    </p>
                </div>

                <div class="col-md-6 text-center d-none d-md-block">
                    <img src="{{ asset('assets-website/images/meeting.jpg') }}" class="img-fluid rounded-4" alt="img">
                </div>
            </div>
        </section>
    </div>
</x-layout>
