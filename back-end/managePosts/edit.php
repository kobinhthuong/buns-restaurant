<?php
$sql="select * from posts where id ='$_GET[id]'";
$run = mysqli_query($conn, $sql);
$dong = mysqli_fetch_array($run);
?>
<form action="back-end/managePosts/handling.php?id=<?php echo $dong['id']?>" method="post" enctype="multipart/form-data">
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
            <td><intput type="text" name="summary" value="<?php echo $dong['summary']?>"></td>
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
            <td>Is_shown</td>
            <td><input type="text" name="is_shown" value = <?php $dong['is_shown']?>></td>
        </tr>
        <tr>
        <td colspan="2"> <div align="center"> 
                <button name ="edit" value="edit">edit</button>
            </div>
        </td>
    </tr>
    </table>
</form>    



