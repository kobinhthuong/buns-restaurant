<?php
include('../config.php');
if(isset($_POST['add'])){
    $title=$_POST['title'];
    $summary=$_POST['summary'];
    $content=$_POST['content'];
    $photo=$_POST['photo'];
    $sql="INSERT INTO posts VALUES(NULL,'$title','$summary','$content','$photo')";
    mysqli_query($conn, $sql);
    header('location:viewall.php');
}
?>
<form method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Add Post</div></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Summary</td>
            <td><intput type="text" name="summary"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content"cols="40" rows="15"></textarea></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="photo"></td>
        </tr>
        <tr>
        <td colspan="2"> <div align="center"> 
                <button name ="add" value="add">add</button>
            </div>
        </td>
    </tr>
    </table>
</form>    

