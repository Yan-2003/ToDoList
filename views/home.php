<?php 
require 'class/add.class.php';
if(isset($_POST['add'])){
    $add = new add($_POST['text']);
    header("Location: /");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/main.css">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>ToDoList</h1>
    </header>
    <main>
        <div class="main--box">
            <p><?php echo @$add->message;?></p>
            <form action="" method="post" class="inputs" autocomplete="off">
                <textarea autofocus id="text" name="text" cols="30" rows="1" placeholder="what to do?"></textarea>
                <button name="add" type="submit" id="btn">Add</button>
            </form>
            <div class="container--content">
                <?php require 'request/addlist.php'?>
            </div>
        </div>
    </main>
</body>
</html>
