<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Image List </title>
</head>

<body>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>

    <body>
        <a href="<?= base_url('image_add')?>" class='btn btn-success '>ADD IMAGE</a>

        <div class="container">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Id_User</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <?php

foreach ($records as $row)  { 
    $url = base_url("list_image/remove/".$row->id);
    $url2 = base_url("list_image/load/".$row->id);
    $id = $row->id;
    $id_user=$row->id_user;
    $name = $row->name;
   
   
    echo"<tr>
    <td>" .$id."</th>
    <td>" .$id_user."</th>
    <td> ".$name ."</td>
    <td><a href='$url2' class='btn btn-success'>Update</a>  <a href='$url' class='btn btn-danger'>Delete</a></td>

 

  </tr>";
} ?>

                </tbody>
            </table>
        </div>


        </tbody>
        </table>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>

    </html>