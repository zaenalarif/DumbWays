<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pokemon</title>
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
        <h1>Tambah Pokemon</h1>
    </header>

    <div class="body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="wrapper">
                <label class="label" for="">Name</label><br>
                <input class="input" type="text" name="name" id="">
            </div>
            <div class="wrapper">
                <label class="label" for="">Str</label><br>
                <input class="input" type="text" name="str" id="">
            </div>
            <div class="wrapper">
                <label class="label" for="">Def</label><br>
                <input class="input" type="text" name="def" id="">
            </div>
            <div class="wrapper">
                <label class="label" for="">Foto</label>
                <input class="input" type="file" name="photo" id="">
            </div>

            <input class="submit" type="submit" value="Tambah">
        </form>
    </div>
</body>
</html>