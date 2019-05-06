<?php
include("../config.php");
$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$run = mysqli_query($con, "SELECT * FROM posts WHERE id=$id");
$dong = mysqli_fetch_array($run);
?>
<?php
if(isset($_POST['edit'])){
    $title=$_POST['title'];
   $summary=$_POST['summary'];
   $content=$_POST['content'];
   $photo=$_POST['photo'];
    $sql="update posts set title='$title',summary='$summary',content='$content',photo='$photo' where id =$id ";
    $run= mysqli_query($con, $sql);
    header('location:viewall.php');
}elseif(isset($_POST['delete'])){
    $sql="delete from posts where id =$id ";
    mysqli_query($con, $sql);
    header('location:viewall.php');
}
?>
<form method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Edit Post</div></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" value="<?php echo $dong['title']?>"></td>
        </tr>
        <tr>
            <td>Summary</td>
            <td><input type="text" name="summary" value="<?php echo $dong['summary']?>"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content"cols="40" rows="15"><?php echo $dong['content']?></textarea></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="photo"><img src="uploads/posts/<?php echo $dong['photo']?>" width="60px" height="60px"/></td>
        </tr>
        <tr>
        <td colspan="2"> <div align="center"> 
                <button name ="edit" value="edit">edit</button>
            </div>
        </td>
    </tr>
    </table>
</form>    
<<<<<<< HEAD

=======
<?php
if(isset($_POST['edit'])){
    $title=$_POST['title'];
   $summary=$_POST['summary'];
   $content=$_POST['content'];
   $photo=$_POST['photo'];
    $sql="update posts set title='$title',summary='$summary',content='$content',photo='$photo' where id =$id ";
    $run= mysqli_query($con, $sql);
    header('location:viewall.php');
}
else if (isset($_POST['delete'])){
    $sql="delete from posts where id ='$id' ";
    mysqli_query($con, $sql);
    header('location:viewall.php');
}
?>
>>>>>>> 97e4a14b3e1e17e9aac5af587ccf7f232e049b86


