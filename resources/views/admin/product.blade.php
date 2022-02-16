<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .title{
            color: white; padding-top:25px; font-size:25px;
        }
        label{
            display:inline-block;
            width:200px;
        }
    </style>
  </head>
  <body>
    
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
       {{-- @include('admin.body') --}}
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
              <div class="container" align="center">
                <h1 class="title" style="">Add Products</h1>

                @if(session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>

                @endif

                <form action="{{ url('uploadproduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                    <label for="">Product title</label>
                    <input style="color:black" type="text" name="title" placeholder="Give a product a title" required="">
                </div>

                <div style="padding:15px">
                    <label for="">Price</label>
                    <input style="color:black" type="number" name="price" placeholder="Give a product a price" required="">
                </div>

                <div style="padding:15px">
                    <label for="">Description</label>
                    <input style="color:black" type="text" name="description" placeholder="Give description" required="">
                </div>

                <div style="padding:15px">
                    <label for="">Quantity</label>
                    <input style="color:black" type="text" name="quantity" placeholder="Give a product a title" required="">
                </div>

                <div style="padding:15px">
                    <input style="color:black" type="file" name="file" placeholder="">
                </div>
    
                <div style="padding:15px">
                    <input class="btn btn-success" type="submit">
                </div>
            </form>
              </div>

            
          </div>
      <!-- page-body-wrapper ends -->
    </div>




    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>