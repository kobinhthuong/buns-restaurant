
<?php
$sql="select * from dishes where id ='$_GET[id]'";
$run = mysqli_query($conn, $sql);
$close = mysqli_fetch_array($run);
?>

<form action="back-end/manageDishes/manage.php?id=<?php echo $close['id']?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <tr>
            <td colspan="2" ><div style="color:blue;font-size:20px" align="center">Edit Dish</div><br><br> </td>
        </tr>
        <tr>
            <td>Category_id</td>
            <td><input type="text" name="category_id" value="<?php echo $close['category_id'] ?>"></td>
        </tr>
                   <tr>
                        <td width="150px" >Name : </td>
                        <td width="840px">
                        <input style="width:400px;margin-top:3px;margin-bottom:3px;" type="text" name="name" value="<?php echo $close['title']?>">
                        </td>
                    </tr>
                    <tr>
                        <td >Photo : </td>
                        <td>
                        <input type="file" name="photo"><img src="back-end/managePosts/uploads/<?php echo $close['photo']?>" width="60px" height="60px"/>
                        </td>
                    </tr>

                    <tr>
                        <td valign="top" >Description : </td>
                        <td>
                            <script type="text/javascript">
                                tinymce.init({
                                    selector: '#description',
                                    theme: 'modern',
                                    width: 800,
                                    height: 400,
                                    plugins: [
                                        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'save table contextmenu directionality emoticons template paste textcolor jbimages'
                                    ],
                                    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
                                    relative_urls: false
                                });

                            </script>
                           <textarea id="description" name="description" ><?php echo $close['description']?></textarea>
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
