
<div class="row">

    @foreach ($brands as $brand)
        <a href="{{ route('brand.detail', $brand->id) }}" class="col-lg-4 col-sm-6">
            <div class="single-features">
                <img src="{{ $brand->picture_url }}" alt="image">

                <h3>{{ $brand->name }}</h3>
            </div>
        </a>
    @endforeach





</div>
