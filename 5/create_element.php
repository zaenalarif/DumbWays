<?php

require_once('db.php');
require_once('function.php');
// $target_dir = "uploads/";
// $gambar = $target_dir . basename($_FILES["gambar"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($gambar,PATHINFO_EXTENSION));

if(isset($_POST['tambah'])){
  $name     = $_POST['name'];
  
  if(!empty(trim($name)) ){
        if(tambahElement($name)){
            header('Location: index.php ');
        }else{
            echo 'gagal';
        }
  }else{
    die('ada yang kosong');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Element</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .wrapper{
        margin: 10px 5px;
    }

    .wrapper .label{
        font-size: 20px;
    }
    .wrapper .input{
        border: 1px solid blue;
        width: 200px;
        font-size: 20px;
    }

    .submit{
        font-size: 1rem;
        background-color: aqua;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        cursor: pointer;
    }
    </style>
</head>
    <header>
        <h1>Tambah Element</h1>
    </header>

    <div class="body">
        <form action="" method="post">
            <div class="wrapper">
                <label class="label" for="">Name</label><br>
                <input class="input" type="text" name="name" id="">
            </div>

            <input class="submit" type="submit" name="tambah" value="Tambah">
        </form>
    </div>
</body>
</html>