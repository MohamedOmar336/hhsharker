<section class="container-lg py-5">
    <div class="mt-5">
        <div class="d-flex gap-3">
            <header class="d-flex flex-column w-50">
                <x-tag>Testimonials</x-tag>

                <x-section-header>What they Say about us</x-section-header>
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
    <div class="d-flex z-10 justify-content-between">
        <div class="d-flex flex-column w-33">
            <x-testimonial-card title='Amazing Product!' description='"Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed."' name='John David'>
                <img src="{{ asset('assets-website/images/face.jpg') }}" alt="John David" class="rounded-circle w-25">
            </x-testimonial-card>
        </div>
        
        <div class="d-flex flex-column w-33">
            <x-testimonial-card title='Amazing Product!' description='"Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed."' name='John David'>
                <img src="{{ asset('assets-website/images/face.jpg') }}" alt="John David" class="rounded-circle w-25">
            </x-testimonial-card>
        </div>
    </div>
    
    <div class="testimonial-text">
        Testimonials
    </div>
    
    <div class="d-flex justify-content-between">
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
