<?php
include("../config.php");
$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$title=$_POST['title'];
$summary=$_POST['summary'];
$content=$_POST['content'];
$photo=$_FILES['photo']['name'];
$photo_tmp=$_FILES['photo']['tmp_name'];
move_uploaded_file($photo_tmp, "uploads/posts".$photo);
$is_shown = $_POST['is_shown'];
if(isset($_POST['add'])){
    $sql = "insert into posts (title,summary,content,photo,is_shown) values('$title','$summary','$content','$photo','$is_shown')";
    $run= mysqli_query($conn, $sql);
    header("location:../../index.php?quanli=managePosts&ac=add");
}elseif(isset ($_POST['edit'])){
    $sql="update posts set title='$title',summary='$summary',content='$content',photo='$photo' where id ='$id' ";
    $run= mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=managePosts&ac=edit&id'.$id);
}else{
    $sql="delete from posts where id ='$id' ";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=managePosts&ac=add');
}
?>

