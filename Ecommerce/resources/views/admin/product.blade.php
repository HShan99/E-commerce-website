<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
      {{-- <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <h1 style="color: white; padding-top:25px; font-size:25px">Add Product</h1>

        <form action="">
            @csrf

            <div style="padding: :15px;">
                <label>Product Title</label>
                <input type="text" name="title" placeholder="Give a product"  required="">
            </div>

            <div style="padding: :25px;">
                <label>Price</label>
                <input type="number" name="price" placeholder="Give a price"  required="">
            </div>

            <div style="padding: :15px;">
                <label>Description</label>
                <input type="text" name="des" placeholder="Give a description"  required="">
            </div>

            <div style="padding: :15px;">
                <label>Quantity</label>
                <input type="text" name="quantity" placeholder="Give a quantity"  required="">
            </div>

            <div style="padding: :15px;">
                <input type="file" name="file">
            </div>

            <div style="padding: :15px;"></div>
                <input type="submit">
            </div>

        </form>



        </div>
      </div> --}}
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-top:100px">

            {{-- @if (session()->has('message'))
            <div class="alert alert-success">

                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>

            </div>
            @endif --}}

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px">
                    <label>Product Title</label>
                    <input type="text" name="title" style="color: black" placeholder="Give a product" required>
                </div>

                <div style="padding: 15px">
                    <label>Price</label>
                    <input type="number" name="price" style="color: black" placeholder="Give a price" required>
                </div>



                <div style="padding: 15px">
                    <label>Description</label>
                    <input type="text" name="des" style="color: black" placeholder="Give a description" required>
                </div>

                <div style="padding: 15px">
                    <label>Quantity</label>
                    <input type="text" name="quantity" style="color: white" placeholder="Give a quantity" required>
                </div>

                <div style="padding: 15px">
                    <label>File</label>
                    <input type="file" name="file" style="color: white" required>
                </div>

                <div style="padding: 15px">

                    <input type="submit" class="btn btn-success ">
                </div>
            </form>

        </div>
    </div>



          <!-- partial -->
      @include('admin.script')
  </body>
</html>
