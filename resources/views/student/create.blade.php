<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Rakesh Mallik</title>
  </head>
  <body>
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                  <h2>Add Student</h2>
                  
                  <form action="{{ route('student.store') }}" method="post">
                    @csrf
                    <input type="text" class ="form-control mb-3"name ="name" placeholder="Name">
                    <input type="emali" class ="form-control mb-3"name ="email" placeholder="Email">
                    <input type="class" class ="form-control mb-3"name ="class" placeholder="Class">

                    <button type="submit" class="btn btn-primary">Add Student</button>



                  </form>
            
                </div>
            </div>
        </div>
    </div>

    @if(session('massage')=='successfull')
    <script>
      swal("Good job!", "Add successfull Students!", "success");
    </script>
    @endif







    <!-- Optional JavaScript; choose one of the two! -->
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>