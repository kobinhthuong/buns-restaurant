
<?php
include("../config.php");
$sql = "select * from dishes where id ='$_GET[id]'";
$run = mysqli_query($conn, $sql);
$close = mysqli_fetch_array($run);
?>
<form method="post" enctype="multipart/form-data">
    <table width="100%" border="1"> 
        <tr>
            <td colspan="2" ><div style="color:blue;font-size:20px" align="center">Edit Dish</div><br><br> </td>
        </tr>
        <tr>
            <td width="150px" >Name : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" type="text" name="name" value="<?php echo $close['title'] ?>">
            </td>
        </tr>
        <tr>
            <td >Photo : </td>
            <td>
                <input type="file" name="photo"><img src="back-end/managePosts/uploads/<?php echo $close['photo'] ?>" width="60px" height="60px"/>
            </td>
        </tr>

        <tr>
            <td valign="top" >Description : </td>
            <td>
                <textarea id="description" name="description" ><?php echo $close['description'] ?></textarea>
            </td>
        </tr>        

        <tr>
            <td colspan="2"> <div align="center"> 
                    <button name ="edit" value="edit">Edit</button>
                </div>
            </td>
        </tr>
    </table>
</form>    
