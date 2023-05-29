<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <title>Register Form</title>
  </head>
  <body>

  @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
   </div>
   @endif

   <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card mt-3">
          <h3>Register Form !!!</h3>
          <form action="/store" method="post" class="mt-5" enctype="multipart/form-data">
            @csrf
              <div class="form-group col-md-12">
                <label>Name :</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ old('name') }}"/>

              </div>

              <div class="form-group col-md-12">
                <label>Email :</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email" id="email">
              </div>

              <div class="form-group col-md-12">
                <label >Address :</label>
              <textarea name="address" id="address" cols="100" rows="2"></textarea>
              </div>


              <div class="form-group col-12 mt-3 mx-5">
                <button class="btn btn-dark" type="submit">Submit</button>
                <a href="/index" class="btn btn-info">Display</a>
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>