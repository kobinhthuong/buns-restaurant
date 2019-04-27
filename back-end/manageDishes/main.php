<div class="left">
    <?php
    if(isset($_GET['dish']))
        {
        $d=$_GET['dish'];
        }else
            {
            $d='';
            }if($d=='add')
                    {
                include('back-end/manageDishes/add.php');
                    }if($d=='edit'){
                        include('back-end/manageDishes/edit.php');
                    }
    ?>
</div>
<div class="right">
    <?php
    include('back-end/manageDishes/dishes.php');
    ?>
</div>
