
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
    <div class="inner-list-div">
        <img src="{{ isset($product->product_image) ?  Storage::url($product->product_image) : asset('assets-frontend/images/inner-prod-1.png')}}">

        <div class="innter-body-text">
            <h3>{{ $product->name ?? ''}}</h3>
            @if(isset($product->children[0]->model_number))
                <p>{{ $product->children[0]->model_number }}</p>
            @endif

            @if(!empty($product->features))
                <div>
                    @foreach (array_slice($product->features,0,4) as $feature)
                        <span>{{ $feature['title'] ?? ''}}</span>
                    @endforeach
                </div>
            @endif
            <a href="{{ route('frontend.product.page',['locale' => app()->getLocale(),'id'=>$product->id]) }}">Learn More</a>
        </div>
    </div>
</div>
