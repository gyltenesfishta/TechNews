<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change User</title>
</head>
<body>
<div class="col-md-6 offset-md-3">
                    
                    <span class="anchor" id="formChangePassword"></span>
                    <hr class="mb-5">

                    <!-- form card change password -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Ndrysho Përdoruesin</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action = "../change-info/change_user-logic.php" method = "post">
                            <?php if (isset($_GET['error'])){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <?=$_GET['error']?>
                            </div>
                            <?php } ?>
                                <div class="form-group">
                                    <label for="inputPasswordOld" >Shkruaj E-Mail</label>
                                    <input type="text" class="form-control" name="email" id="email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew" >Shkruani përdoruesin e ri</label>
                                    <input type="text" class="form-control" name="new_username" id="username" required="">
                                    <span class="form-text small text-muted">  
                                    </span>
                                </div>
                                <div class="form-group" style="margin-top: 10px;">
                                    <button type="submit" name ="changeUser" class="btn btn-success btn-lg float-right">Save</button>
                                </div>
                            </form>
                        </div>
</body>
</html>