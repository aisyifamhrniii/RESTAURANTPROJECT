<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        h1{
            color: white;
            text-align: center;
        }

        label{
            display: inline-block;
            width: 250px;
            font-size: 18px !important;
            color: white !important;
        }

        input[type=text]{
            width: 200px;
            height: 50px;
        }
    </style>

  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


            <h1>Add Product</h1>
            <div class="div_deg" >
                <form action="">
                    <div>
                        <label>Product Title</label>
                        <input type="text" name="title" required>
                    </div>
                    
                    <div>
                        <label>Description</label>
                        <textarea name="description" required></textarea>
                    </div>

                    <div>
                        <label>Price</label>
                        <input type="text" name="price" required>
                    </div>

                    <div>
                        <label>Quantity</label>
                        <input type="number" name="qty" required>
                    </div>

                    <div>
                        <label>Product Category</label>
                        <select>
                            <option>
                                abc
                            </option>
                        </select>
                    </div>

                    <div>
                        <label>Product Image</label>
                        <input type="file" name="image" required>
                    </div>


                </form>
            </div>
          <div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>