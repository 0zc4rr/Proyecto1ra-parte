<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>

    <div class="container">
        <div class="row" style="text-align:center">
            <h2>Clientes</h2>
        </div>
        <div>


           <a href="C:/xampp/htdocs/Proyecto-camisetas/controlador/userNew.php">
            <button type="button" class="btn btn-primary">
            Nuevo
          </button>
           </a>

           <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">
           Nuevo Modal
          </button>

        </div>

        <div class="row">
          <?php
                require_once 'C:/xampp/htdocs/Proyecto-camisetas/login/controlador/controlador.php';
                $usrctrl = new usuarioControlador();
                $datan = $usrctrl->getdata(); // extrae datos de Usuarios

                echo '<table class="table">
                      <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Password</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                    ';

                  foreach($datan as $reg){
                    echo ' <tr>
                            <th scope="row">'.$reg->id.'</th>
                            <td>'.$reg->email.'</td>
                            <td>'.$reg->name.'</td>
                            <td>'.$reg->password.'</td>
                            <td>
                                <button type="button" class="btn btn-danger">Update</button>
                                <button type="button" class="btn btn-warning">Delete</button>
                          </tr>';                
                    }
                    echo ' </tbody>
                    </table>';
              ?>
                    
        </div>

    </div>
     

 <!-- Modal  Nuevo-->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Users</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  id="myform" action="../controlador/addUser.php" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="recipient-name" name="email">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<!-- End Modal -->
 

  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>