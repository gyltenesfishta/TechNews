<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ndrysho numrin</title>
</head>
<body>
<div class="col-md-6 offset-md-3">
                    
                    <span class="anchor" id="formChangePassword"></span>
                    <hr class="mb-5">

                    <!-- form card change password -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Ndrysho numrin</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action = "../change-info/change_number-logic.php" method = "post">
                            <?php if (isset($_GET['error'])){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <?=$_GET['error']?>
                            </div>
                            <?php } ?>
                                <div class="form-group">
                                    <label for="inputPasswordOld" >Email</label>
                                    <input type="text" class="form-control" name="email" id="inputEmail" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew" >Numri i ri</label>
                                    <input type="text" class="form-control" name="new_number" id="inputNumber" required="" value ="+383">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name ="changeNumber" class="btn btn-success btn-lg float-right" style ="margin-top: 10px;">Ruaj</button>
                                </div>
                            </form>
                        </div>