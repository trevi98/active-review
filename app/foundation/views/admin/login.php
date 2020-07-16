

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="<?php echo URLROOT;?>/admin/login" method="post">
            <input type="text" name="username" id="">
            <input type="password" name="password" id="">
            <button type="submit" name="login">Login</button>
        </form>
        <?php if(!empty($data)):?>
            <div class="err">
                <?php echo $data;?>
            </div>
        <?php endif;?>
    </main>
</body>
</html>