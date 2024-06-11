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

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create.php">Insert Student Data</a>
          </li>
      </div>
    </div>
  </nav>

  <section class="mt-5">
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

        if ($students) {

        $serialNumber = 1;

          while ($row = mysqli_fetch_assoc($students)) {
            $id      = $row['id'];
            $name    = $row['name'];
            $roll    = $row['roll'];
            $clas    = $row['class'];
            $phone   = $row['phone'];
            $email   = $row['email'];
            $address = $row['address'];

            echo
            '<tr>
           <th scope="row">' . $serialNumber . '</th>
           <td>' . $name . '</td>
           <td>' . $clas . '</td>
           <td>' . $roll . '</td>
           <td>' . $phone . '</td>
           <td>' . $email . '</td>
           <td>' . $address . '</td>
           <td>
             <a href="edit.php?id='.$id.'" class="btn btn-primary">Edit</a>
             <a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</a>
           </td>
         </tr>';

         $serialNumber++;
          };
        }

        ?>
      </tbody>
    </table>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>