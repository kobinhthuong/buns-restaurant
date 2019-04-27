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
                include('back-end/manageDishes/add.php');
                    }if($tam=='edit'){
                        include('back-end/manageDishes/edit.php');
                    }
    ?>
</div>
<div class="right">
    <?php
    include('back-end/manageDishes/dishes.php');
    ?>
</div>
