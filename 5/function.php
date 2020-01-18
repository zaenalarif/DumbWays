<?php
require_once('db.php');

function tambahPokemon($name,$str,$def,$photo)
{
    global $conn;

    $query = "INSERT INTO pokemon_tb (name, str, def, photo) VALUES ('$name', '$str', $def, '$photo')";
    
    if($result = mysqli_query($conn, $query)){
        return true;
    }else{
        return false;
    }
}

function getPokemon()
{
    global $conn;

    $query = "SELECT pokemon_tb.* , element_tb.name AS name_element FROM (pokemon_tb INNER JOIN element_pokemon ON pokemon_tb.id = element_pokemon.pokemonID) INNER JOIN element_tb ON element_tb.id = element_pokemon.id";
    $result = mysqli_query($conn, $query);

    return $result;
}

function getPokemonId($id)
{
    global $conn;

    $query  = "SELECT * FROM pokemon WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){
        return $result;    
    }else{
        die('gagal');
    }
    
}
function setPokemon($id, $name, $str, $def, $photo = "")
{
    global $conn;
    if($photo === ""){
        $query = "UPDATE pokemon_tb SET name='$name', str='$str', def='$def' WHERE id=$id";
    }else if($gambar !== ""){
        $query = "UPDATE pokemon_tb SET name='$name', str='$str', def='$def',photo='$photo' WHERE id=$id";
    }

    if(mysqli_query($conn, $query)){
        return true;
    }else{
        return false;
    }
}

function deletePokemon($id)
{
    global $conn;
    $query = "DELETE FROM pokemon_tb WHERE id='$id'";

    if(mysqli_query($conn, $query)){
        return true;
    }else{
        die('gagal menghapus');
    }
}


// element


function tambahElement($name)
{
    global $conn;

    $query = "INSERT INTO element_tb (name) VALUES ('$name')";
    
    if($result = mysqli_query($conn, $query)){
        return true;
    }else{
        return false;
    }
}

function setElement($id, $name)
{
    global $conn;
        $query = "UPDATE element_tb SET name='$name' WHERE id=$id";

    if(mysqli_query($conn, $query)){
        return true;
    }else{
        return false;
    }
}

function deleteElement($id)
{
    global $conn;
    $query = "DELETE FROM element_tb WHERE id='$id'";

    if(mysqli_query($conn, $query)){
        return true;
    }else{
        die('gagal menghapus');
    }
}


?>