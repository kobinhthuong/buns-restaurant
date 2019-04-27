<?php
$sql = "select * from posts order by id desc";
$run = mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
    <tr>
        <td>id</td>
        <td>Category_id</td>
        <td>Title</td>
        <td>Summary</td>
        <td>Content</td>
        <td>Photo</td>
        <td>Is_shown</td>
        <td colspan="2"><div align="center">Action</div></td>
    </tr>
    <?php 
    $id=0;
    while($dong= mysqli_fetch_array($run)){
    ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $dong['category_id']?></td>
        <td><?php echo $dong['title']?></td>
        <td><?php echo $dong['summary']?></td>
        <td><?php echo $dong['content']?></td>
        <td><img src="back-end/managePosts/uploads/<?php echo $dong['hinhanh']?>" width="60px" height="60px"></td>
        <td><?php echo $dong['is_shown']?></td>
        <td><a href ="index.php?quanli=managePosts&ac=edit&id=<?php echo $dong['id']?>" >Edit</a></td>
        <td><a href="back-end/managePosts/handling.php&id=<?php echo $dong['id']?>">Delete</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
