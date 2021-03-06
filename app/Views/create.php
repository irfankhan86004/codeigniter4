<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Add User</title>
</head>

<body>
  <div class="container">
    <a href="<?=base_url('users/list') ?>" class='btn btn-danger'>Back</a>

    <?php $validation=\Config\Services::validation();?>

    <form action="<?=base_url('user-store') ?>" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>

        <?php if($validation->getError('name')){?>
        <div class="alert alert-danger">
          <?=$error=$validation->getError('name');?>
        </div>
        <?php }?>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

        <?php if($validation->getError('email')){?>
        <div class="alert alert-danger">
          <?=$error=$validation->getError('email');?>
        </div>
        <?php }?>

      </div>
      <div class="mb-3">
        <label for="status" class="form-label">status </label>
        <input type="text" class="form-control" name="status" id="status" aria-describedby="emailHelp">

        <?php if($validation->getError('status')){?>
        <div class="alert alert-danger">
          <?=$error=$validation->getError('status');?>
        </div>
        <?php }?>

      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password </label>
        <input type="text" class="form-control" name="password" id="password" aria-describedby="emailHelp">


        <?php if($validation->getError('password')){?>
        <div class="alert alert-danger">
          <?=$error=$validation->getError('password');?>
        </div>
        <?php }?>

      </div>



      <div class="mb-3">
        <label for="choose" class="form-label">choose file </label>
        <input type="file" class="form-control" name="img" id="img" aria-describedby="emailHelp">

      </div>


      <button type="submit" class="btn btn-info">Add User</button>
    </form>


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