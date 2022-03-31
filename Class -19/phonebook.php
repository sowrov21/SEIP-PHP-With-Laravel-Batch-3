  <?php
  
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $phoneNumber = $_POST['phoneNumber'];
 
      echo "<pre>";
     // print_r($_POST);
      echo "</pre>";

      session_start();

      
      if(empty($_SESSION) ){
         $_SESSION['phonebook'] = array();
      }
      else{
      array_push(  $_SESSION['phonebook'],$_POST);

      echo "<pre>";
      print_r($_SESSION['phonebook'] );
      echo "</pre>";
      }

     
    

  }

  else  if(isset($_POST['clear'])){

    session_destroy();
  }
  
  
  
  ?>
  <!doctype html>  
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Hello, world!</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <h3 class="text-center">PHONEBOOK</h3>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Save new</div>
                        <div class="card-body">
                            <form action="" method="POST">
                                    <div class="form-group mb-2">
                                        <label for="firstName">First Name</label>
                                        <input type="text" name="firstName" id="firstName" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="lastName" id="lastName" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control form-control-lg">
                                    </div>
                                    <button class="btn btn-success" type="submit">SAVE</button>

                                    <button class="btn btn-primary" name="clear">CLEAR</button>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">All Numbers</div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mobile Number</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                
                                // foreach ($_SESSION['phonebook'] as $phonebook)
                                // {
                                //     echo $phonebook;
                                // }
                                
                                ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                            
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>