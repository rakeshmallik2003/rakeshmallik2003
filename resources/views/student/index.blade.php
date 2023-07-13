<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Rakesh Mallik</title>
  </head>
  <body>
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                  <h2>All Student</h2>
                  <table class="table table-striped">
                    <tr>
                     <td>ID</td>
                     <td>Name</td>
                     <td>Email</td>
                     <td>Class</td>
                     <td>Manage</td>
                    </tr>
                    @forelse($data as $single_data)

                    <tr>
                     <td>{{ $single_data->id }}</td>
                     <td>{{ $single_data->name }}</td>
                     <td>{{ $single_data->email }}</td>
                     <td>{{ $single_data->class }}</td>
                     <td>
                      <a href="{{ route('student.show',$single_data->id) }}"><i class="fa-regular fa-eye" style="color: #c51ba6; font-size: 25px;"></i></a>
                      
                      <a href="{{ route('student.edit',$single_data->id) }}">
                      <i class="fa-solid fa-user-pen fa-flip-horizontal" style="color: #e80202;font-size: 25px;"></i></a>

                      <!-- <a href="{{ route('student.destroy',$single_data->id) }}">
                      <i class="fa-solid fa-anchor-circle-xmark" style="color: #ff2600;font-size:25px;"></i></a> -->
                      <form class= "d-inline" action="{{ route('student.destroy',$single_data->id) }}" method ="post">
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Delete" class = "btn btn-danger">
                      </form>
 


                     </td>
                    </tr>

                    @empty
                    <tr>
                      <td colspan="5">NO Data(NO student Found)</td>
                    </tr>
                    @endforelse
                  </table>
                </div>
            </div>
        </div>
    </div>

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