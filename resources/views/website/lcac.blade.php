<x-layout>
    <x-slot:title>
        Light Commercial Air Conditioner | HH Sharker
    </x-slot:title>

    <div id="vision">
        <!-- Values and vision -->
        <section class="container pt-2 pb-5">
            <div class="row align-items-center pb-5">
                <div class="col-md-7 d-flex flex-column gap-5">                        
                    <h2 class="mt-3 text-uppercase display-1 fw-bolder">
                        Light Commercial air conditioner
                    </h2>
                    <div class="ms-3">
                        <x-arrow-button class="px-3">Contact Us</x-arrow-button>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets-website/images/unknown.jpg') }}" class="img-fluid rounded-4" alt="img">
                </div>
            </div>
            <div class="row justify-content-center align-items-center mx-3">
                <div class="col-md-8">
                    <div class="row d-flex gap-3">
                        <x-feature-card name="3D Airflow">
                            <img src="{{ asset('assets-website/images/unknown.jpg') }}" class="img-fluid rounded-4 image" alt="img">
                        </x-feature-card>

                        <x-feature-card name="Easy Maintenance">
                            <img src="{{ asset('assets-website/images/unknown.jpg') }}" class="img-fluid rounded-4 image" alt="img">
                        </x-feature-card>

                        <x-feature-card name="Fresh Air">
                            <img src="{{ asset('assets-website/images/unknown.jpg') }}" class="img-fluid rounded-4 image" alt="img">
                        </x-feature-card>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="info-text">Lorem ipsum dolor sit amet consectetur. Tempor pellentesque viverra malesuada tempor sollicitudin. Orci egestas at feugiat quam pretium faucibus elementum. Venenatis magnis pretium donec interdum. Mi magna vitae consectetur lectus leo.</p>
                </div>
            </div>
        </section>

        <!-- img section separator -->
        <x-divider />

        <!-- H&h Shaker Value -->
        <section class="container py-5">
            <div class="text-center">
                <x-tag class="align-self-center figure">LCAC</x-tag>
            
                <h1 class="align-self-center text-uppercase my-2 fw-bold display-1">
                    Your Partner in Comfort and Efficiency
                </h1>
            </div>

            <div class="d-flex flex-column gap-5 py-5">
                <x-feature-card-wide title="Concealed Splits" description="Experience high-efficiency cooling with optimal air distribution">
                    <img src="{{ asset('assets-website/images/unknown-wide.jpg') }}" class="img-fluid image" alt="img">
                </x-feature-card-wide>
                
                <x-feature-card-wide title="Concealed Splits" description="Experience high-efficiency cooling with optimal air distribution">
                    <img src="{{ asset('assets-website/images/unknown-wide.jpg') }}" class="img-fluid image" alt="img">
                </x-feature-card-wide>

                <x-feature-card-wide title="Floor Standing Splits" description="Experience high-efficiency cooling with optimal air distribution">
                    <img src="{{ asset('assets-website/images/unknown-wide.jpg') }}" class="img-fluid image" alt="img">
                </x-feature-card-wide>
            </div>
        </section>
    </div>
</x-layout>
