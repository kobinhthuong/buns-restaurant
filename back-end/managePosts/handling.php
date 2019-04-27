<?php
include("../config.php");
$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$category_id = $_POST['category_id'];
$title=$_POST['title'];
$summay=$_POST['summary'];
$content=$_POST['content'];
$photo=$_FILES['photo']['name'];
$photo_tmp=$_FILES['hinhanh']['tmp_name'];
move_uploaded_file($photo_tmp, "uploads/".$photo);
$is_shown = $_POST['is_shown'];
if(isset($_POST['add'])){
    $sql = "insert into posts (category_id,title,summary,content,photo,is_shown) values('$category_id','$title','$summary','$content','$photo','$is_shown')";
    $run= mysqli_query($conn, $sql);
    header("location:../../index.php?quanli=managePosts&ac=add");
}elseif(isset ($_POST['edit'])){
    $sql="update posts set category_id='$category_id',title='$title',summary='$summary',content='$content',photo='$photo' where id ='$id' ";
    $run= mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=managePosts&ac=edit&id'.$id);
}else{
    $sql="delete from posts where id ='$id' ";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=managePosts&ac=add');
}
?>

