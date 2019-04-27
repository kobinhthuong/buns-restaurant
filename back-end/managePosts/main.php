<div class="left">
    <?php
    if(isset($_GET['ac']))
        {
        $tam=$_GET['ac'];
        }else
            {
            $tam='';
            }if($tam=='add')
                    {
                include('back-end/managePosts/add.php');
                    }if($tam=='edit'){
                        include('back-end/managePosts/edit.php');
                    }
    ?>
</div>
<div class="right">
    <?php
    include('back-end/managePosts/viewall.php');
    ?>
</div>

