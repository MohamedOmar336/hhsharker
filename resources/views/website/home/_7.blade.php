<section class="container-lg py-5">
    <div class="mt-5">
        <div class="d-flex gap-3">
            <header class="d-flex flex-column w-50">
                <x-tag>Testimonials</x-tag>

                <h1 class="fw-bold text-uppercase display-3">
                    What they Say about us
                </h1>
            </header>
            <div class="d-flex flex-column ml-3 w-50 justify-content-around">
                <div class="d-flex flex-column flex-grow">
                    <p class="info-text fs-6">
                        Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.
                    </p>
                    <div class="m-3">
                        <x-arrow-button>Learn More</x-arrow-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex z-10 gap-3 mt-5 font-medium text-dark ">
        <div class="d-flex flex-column w-33">
            <x-testimonial-card title='Amazing Product!' description='"Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed."' name='John David'>
                <img src="{{ asset('assets-website/images/face.jpg') }}" alt="John David" class="rounded-circle w-25">
            </x-testimonial-card>
        </div>
        <div class="d-flex flex-column w-33">
            
        </div>
        
        <div class="d-flex flex-column w-33">
            <x-testimonial-card title='Amazing Product!' description='"Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed."' name='John David'>
                <img src="{{ asset('assets-website/images/face.jpg') }}" alt="John David" class="rounded-circle w-25">
            </x-testimonial-card>
        </div>
    </div>
    
    <h2 class="text-center text-uppercase display-1 fw-bolder">
        Testimonials
    </h2>
    
    <div class="d-flex gap-3">
        <div class="d-flex flex-column w-33">
            <x-testimonial-card title='Amazing Product!' description='"Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed."' name='John David'>
                <img src="{{ asset('assets-website/images/face.jpg') }}" alt="John David" class="rounded-circle w-25">
            </x-testimonial-card>
        </div>
        <div class="d-flex flex-column w-33 ml-0">
            <x-testimonial-card title='Amazing Product!' description='"Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed."' name='John David'>
                <img src="{{ asset('assets-website/images/face.jpg') }}" alt="John David" class="rounded-circle w-25">
            </x-testimonial-card>
        </div>
        <div class="d-flex flex-column w-33 ml-0">
            <x-testimonial-card title='Amazing Product!' description='"Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed."' name='John David'>
                <img src="{{ asset('assets-website/images/face.jpg') }}" alt="John David" class="rounded-circle w-25">
            </x-testimonial-card>
        </div>
    </div>
</section>
