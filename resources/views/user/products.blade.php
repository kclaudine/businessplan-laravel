<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
          </div>
        </div>

        @foreach($data as $product)

        <div class="col-md-4">
          <div class="product-item">
            {{-- productimage is the name of the image in the public forder --}}
            <a href="{{ route('viewbooking',$product->id) }}"><img src="/productimage/{{ $product->image }}" heigt="300px" width="200px" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{ $product->title }}</h4></a>
              <h6>{{ $product->price }}</h6>
              <p>{{ $product->description }}</p>
                <!-- Button trigger modal -->
                
              <button style="color:blue" type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$product->id}}">
                Booking 
              </button>
              {{-- <span>Reviews (32)</span> --}}
            </div>
          </div>
        </div>
        @endforeach 
      </div>
      {{-- after adding the links go to the app->provider
        ->appserviceprovider.php and import pagination and down in the boot add paginator too --}}
        <div class="d-flex justify-content-center">
          {!! $data->links() !!}
        </div>
    </div>  
  </div>
  