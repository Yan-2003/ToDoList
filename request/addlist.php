<?php
require 'class/check.class.php';
require 'class/remove.class.php';
$db = json_decode(file_get_contents("database/list.json"), true);

if(isset($_POST['check'])){
    $check = new check($_POST['check']);
    header("Location: /");
}
if(isset($_POST['delete'])){
    $delete = new remove($_POST['delete']);
    header("Location: /");
}


?>


<?php if($db != NULL):?>
<?php foreach($db as $list):?>
<div class="list <?php if($list['check'] == true){echo "check";}?>">
    <div class="text <?php if($list['check'] == true){echo "check";}?>">
        <p><?php echo $list['list']?></p>
    </div>
    <form action="" method="post" class="edit">
        <button class = "icons" name="check" type="sumbit" value="<?php echo $list['id']?>"><img width = "15" src="assets/img/check.png" alt=""></button>
        <button class = "icons" name="delete" type="sumbit" value="<?php echo $list['id']?>"><img width = "15" src="assets/img/remove.png" alt=""></button>
    </form>
</div>
<?php endforeach?>
<?php endif?>