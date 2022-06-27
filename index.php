<?php require 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a href="#" class="navbar-branc">mistacode tv</a>
        </div>
    </nav>
    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h3>php - search filter using pdo</h3>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                form group insert
            </div>
            
            <div class="col-md-8">
                <form action="search.php" method="POST">
                    <div class="form-inline">
                        
                        <input type="text" name="keyword">
                        <button class="btn-success" name="search">Search</button>
                    </div>
                    
                </form>
                <?php include 'search.php';?>
            </div>
        </div>
    </div>
</body>
</html>