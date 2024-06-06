<?php
    include 'config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP CRUD</title>
  </head>
  <body>

    <section>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Roll</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Addess</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $query = 'SELECT * FROM students';
    $students = mysqli_query($connention, $query);

    if($students){
        while($row = mysqli_fetch_assoc($students)){
            $id      = $row['id'];
            $name    = $row['name'];
            $roll    = $row['roll'];
            $clas    = $row['class'];
            $phone   = $row['phone'];
            $email   = $row['email'];
            $address = $row['address'];

           echo 
           '<tr>
           <th scope="row">'.$id.'</th>
           <td>'.$name.'</td>
           <td>'.$clas.'</td>
           <td>'.$roll.'</td>
           <td>'.$phone.'</td>
           <td>'.$email.'</td>
           <td>'.$address.'</td>
           <td>
             <a href="#" class="btn btn-primary">Edit</a>
             <a href="#" class="btn btn-danger">Delete</a>
           </td>
         </tr>';
        };
    }

    ?>
  </tbody>
</table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>