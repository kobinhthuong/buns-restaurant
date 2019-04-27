
    <?php
    $sql = "select * from loaisp ";
    $run = mysqli_query($conn, $sql);
    ?>
    <tr>
        <td>loai sp</td>
        <td><select name="loaisp">
                <?php
                while($dong = mysqli_fetch_array($run)){
                    ?>
                <option value="<?php echo $dong['id_loaisp']?>" ><?php echo $dong['tenloaisp'] ?></option> 
                <?php } ?>
            </select></td>
    </tr>

<html>
    <head>
        <meta charset="UTF-8"
    <td colspan="2" ><b style="color:blue;font-size:20px" >Add Dish</b><br><br> </td>
    <body>
        <form action="" method="post" enctype="multipart/form-data" >
            <table width="990px" >

                <tr>
                    <td width="150px" >Name : </td>
                    <td width="840px">
                        <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="name" value="" >
                    </td>
                </tr>
                <tr>
                    <td >Updated at : </td>
                    <td>
                        <input type="datetime" name="updated_at" >
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <br>
                        <input type="submit" name="add_dish" value="Add Dish" style="width:100px;height:30px;font-size:15px" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>