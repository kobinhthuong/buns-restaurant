<?php
include("../config.php");
$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$category_id = $_POST['category_id'];
$name=$_POST['name'];
$description=$_POST['description'];
$photo=$_FILES['photo']['name'];
$photo_tmp=$_FILES['images']['tmp_name'];
move_uploaded_file($photo_tmp, "uploads/".$photo);
if(isset($_POST['add'])){
    $sql = "insert into dishes (category_id,name,photo,description) values('$category_id','$name','$photo','$description')";
    $run= mysqli_query($conn, $sql);
    header("location:../../index.php?manage=manageDishes&ac=add");
}elseif(isset ($_POST['edit'])){
    $sql="update dishes set category_id='$category_id',name='$name',photo='$photo',description='$description' where id ='$id' ";
    $run= mysqli_query($conn, $sql);
    header('location:../../index.php?manage=manageDishes&ac=edit&id'.$id);
}else{
    $sql="delete from dishes where id ='$id' ";
    mysqli_query($conn, $sql);
    header('location:../../index.php?manage=manageDishes&ac=add');
}
?>
