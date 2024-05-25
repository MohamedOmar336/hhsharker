<x-layout>
    <x-slot:title>
        Company Founders | HH Sharker
    </x-slot:title>

    <div id="vision">
        <!-- Values and vision -->
        <section class="container pt-2 pb-5">
            <div class="row align-items-center pb-5">
                <div class="col-md-6">
                    <x-tag class="figure">Values and vision</x-tag>
                    
                    <x-section-header class="mt-3 medium">Values and vision</x-section-header>
                </div>
                <div class="col-md-6">
                    <p class="info-text">
                        Our priority is to provide the best services promptly, meeting the needs of our customers quickly and efficiently. We aim to ensure the highest levels of comfort and satisfaction for them.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mx-3">
                <img src="{{ asset('assets-website/images/hands-wide.jpg') }}" class="img-fluid rounded-4" alt="img">
            </div>
        </section>

        <!-- img section separator -->
        <x-divider />

        <!-- H&h Shaker Value -->
        <section class="container py-5">

            <!-- left gradient circle background -->
            <div class="circel-gradient-bg"></div>

            <div class="row align-items-center pb-5">
                <div class="col-md-6">
                    <x-tag class="figure">Value</x-tag>
                    
                    <x-section-header class="mt-3">H&H Shaker Value</x-section-header>
                </div>
                <div class="col-md-6">
                    <p class="info-text">
                        At the core of our company lies a deep commitment to prioritizing our customers, ensuring their needs and satisfaction are our primary focus.
                    </p>
                    <p class="info-text">
                        We believe that communication with customers should be simple and effective. Therefore, we strive to provide a comfortable, enjoyable, and smooth shopping experience for our customers, focusing on providing exceptional customer service and high-quality products. 
                    </p>
                    <p class="info-text">
                        We are recognized as the premier option for consumers and the preferred partner for brands in the electronics and electrical appliances sector in the Kingdom of Saudi Arabia. 
                    </p>
                </div>
            </div>
        </section>

        <!-- Grid -->
        <div class="container grid-container">
            <div class="d-flex flex-column-reverse p-2" style="background-image: url('{{ asset('assets-website/images/grid-1.jpg') }}')">
                <div class="content-bottom d-flex flex-column gap-2 w-100">
                    <div class="text-100">100%</div>
                    <div class="text-satisfied">Satisfied Customer</div>
                </div>
            </div>

            <div class="item2">
                <img src="{{ asset('assets-website/images/grid-2.jpg') }}" />
                
                <div class="grid-sub-item sub-item2">
                    <div class="content">
                        <div class="text-custom-1">Simple & Efficient</div>
                        <div class="text-custom-2">Communication with customers</div>
                    </div>
                </div>
            </div>

            <div class="item3">
                <div class="content-10y w-100">
                    <div class="text-10y">10Y</div>
                    <div class="text-10y-desc">Experiences</div>
                </div>
                
                <img src="{{ asset('assets-website/images/grid-3.jpg') }}" />
            </div>

            <div class="item4" style="background-image: url('{{ asset('assets-website/images/grid-4.jpg') }}')">
                <div class="content-bottom d-flex flex-column gap-2 w-100">
                    <div class="text-100">100%</div>
                    <div class="text-satisfied">Satisfied Customer</div>
                </div>
            </div>
        </div>

        <!-- faces -->
        <section id="faces" class="align-content-center bg-gradient-top py-5 text-center wrapper">
            <div class="container"> 
                <x-section-header class="medium">We are committed to help</x-section-header>
                <x-section-header class="medium">our customer</x-section-header>
            </div>
        </section>

        <!-- H&h Shaker Vision -->
        <section class="wrapper py-5 bg-gradient-bottom">
            <div class="container">
                <div class="row align-items-center pb-5 gap-3">
                    <div class="col-md-4">
                        <x-tag class="figure">Vision</x-tag>
                        
                        <x-section-header class="medium">H&H Shaker Vision</x-section-header>
                    </div>
                    <div class="col-md-7">
                        <img src="{{ asset('assets-website/images/team-wide.jpg') }}" class="img-fluid rounded-5" alt="img">
                    </div>
                </div>
    
                <div class="row align-items-center pb-5 gap-3">
                    <div class="col-md-4">
                        <img src="{{ asset('assets-website/images/team.jpg') }}" class="img-fluid rounded-5" alt="img">
                    </div>
                    <div class="col-md-7">
                        <p class="info-text">
                            At the core of our company lies a deep commitment to prioritizing our customers, ensuring their needs and satisfaction are our primary focus.
                        </p>
                        <p class="info-text">
                            We believe that communication with customers should be simple and effective. Therefore, we strive to provide a comfortable, enjoyable, and smooth shopping experience for our customers, focusing on providing exceptional customer service and high-quality products. 
                        </p>
                        <p class="info-text">
                            We are recognized as the premier option for consumers and the preferred partner for brands in the electronics and electrical appliances sector in the Kingdom of Saudi Arabia. 
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
