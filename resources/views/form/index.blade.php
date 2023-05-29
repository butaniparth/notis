<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    
   

    <div class="container">
    <h3 class="mt-5">Admin Diplay</h3>
    <a href="create" class="btn btn-success">Add</a>
    
    <form action="" method="post" class="text-right">
        @csrf
   

    
      <!-- <table class="table table-hover mt-5 table-dark"> -->
      <table class="table mt-5 table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>


        @foreach($form as $row)

        <tr>
          <td>{{ $loop->index+1 }}</td>
          <td>{{ $row->name }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->address }}</td>
         
          
          <td>{{ $row->created_at }}</td>	
          <td>{{ $row->updated_at }}</td>

         
      </tr>

        @endforeach
  </tbody>
</table>
</form>
</div>

</body>
</html>