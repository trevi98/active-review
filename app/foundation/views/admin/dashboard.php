

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/dashboard.css">
</head>
<body>
    <div class="big">
        <div class="yaser">
            <img src="../public/uploads/logo1.png" alt="">
            <a href="#">Reviews</a>
            <a href="<?php echo URLROOT;?>/reviews/show_accepted">Accepted Reviews</a>
            <!-- <a href=""></a> -->
        </div>
        <div class="main-right">

            <div class="foqani">
                <div class="sircul c1">
                    <div class="in all"><?php echo count($data2);?></div>
                        <p class="zz">All Reviews</p>
                </div>
                <div class="sircul c2">
                <div class="in accepted"><?php echo $data1['count(id)'];?></div>
                    <p>Accepted</p>
                </div>
                <div class="sircul c3">
                <div class="in deleted"><?php echo count($data2)-$data1['count(id)'];?></div>
                    <p>Pendidng</p>
                </div>
            </div>
            <div class="westani">

                <div class="ysar">
                    <?php foreach($data2 as $review):?>
                        <div class="list">

                                    <a href ="<?php echo URLROOT;?>/admin/show_review/<?php echo $review['id'];?>"><?php echo "name : ".$review['first_name'];?>
                        </div>
                    <?php endforeach;?>
                </div>
                <!-- <div class="card"></div> -->
                    <div class="yamin">

    
                 </div>
            </div>
        </div>
    </div>
</body>
</html>