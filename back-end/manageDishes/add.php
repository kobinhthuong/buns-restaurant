<form action="back-end/manageDishes/handling.php" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <html>        
            <head>
                <meta charset="UTF-8"
            <td colspan="2" ><div style="color:blue;font-size:20px" align="center">Add Dish</div><br><br> </td>
            <form action="" method="post" enctype="multipart/form-data" >
                <table width="990px" >
                    <tr>
                        <td>Category_id</td>
                        <td><input type="text" name="category_id"></td>
                    </tr>
                    <tr>
                        <td width="150px" >Name : </td>
                        <td width="840px">
                            <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="name" value="" >
                        </td>
                    </tr>
                    <tr>
                        <td >Photo : </td>
                        <td>
                            <input type="file" name="photo" >
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
                            <textarea id="description" name="description" ></textarea>  

                        </td>
                    </tr>
                    <tr>                     
                        <td>
                            <br>
                            <input type="submit" name="add_dish" value="OK" style="width:100px;height:30px;font-size:15px" >
                        </td>
                    </tr>
                </table>
            </form>

        </html>