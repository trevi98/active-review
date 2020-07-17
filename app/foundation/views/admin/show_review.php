
<?php
    $var="     <div class='star'><span class='fa fa-star checked' id='s1'></span>
    <span class='fa fa-star checked' id='s2'></span>
    <span class='fa fa-star checked' id='s3'></span>
    <span class='fa fa-star checked' id='s4'></span>
    <span class='fa fa-star checked' id='s5'></span>
</div>
";
$i=0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/dashboard.css">
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <input type="text" name="" id="value" value="<?php echo $data3['star'];?>">
    <div class="big">
        <div class="yaser">
            <img src="../../public/uploads/logo1.png" alt="">
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

                                    <a href ="<?php echo URLROOT;?>/admin/show_review/<?php echo $review['id'];?>"><?php echo "name : ".$review['first_name'];?></a>
                        </div>
                    <?php endforeach;?>
                </div>
                <!-- <div class="card"></div> -->
                    <div class="yamin">
                        <?php foreach($data3 as $key => $value):?>
                            <p id="p<?php echo $i;?>">
                                <?php if($key == "star"):?>
                                    <?php echo $key." : ".$var;?>
                                <?php else:?>
                                    <?php echo $key." : ".$value;?>
                                <?php endif;?>
                            </p>
                                <?php echo"<p style='display:none;'>;".$i++."</p>";?>
                        <?php endforeach;?>
                        <a href="<?php echo URLROOT;?>/reviews/accept_review/<?php echo $data3['id'];?>">Accept</a>
                        <a href="<?php echo URLROOT;?>/reviews/delete_review/<?php echo $data3['id'];?>">Delete</a>
                 </div>
            </div>
        </div>
    </div>
    <script>
        let v = document.querySelectorAll(".fa");
        let val = document.querySelector("#value").value;
        if(val == 1){
            for(let i =0 ;i<1;i++){
                v[i].style.color="#fdce04";
            }
        }
        if(val == 2){
            for(let i =0 ;i<2;i++){
                v[i].style.color="#fdce04";
            }
        }
        if(val == 3){
            for(let i =0 ;i<3;i++){
                v[i].style.color="#fdce04";
            }
        }
        if(val == 4){
            for(let i =0 ;i<4;i++){
                v[i].style.color="#fdce04";
            }
        }
        if(val == 5){
            for(let i =0 ;i<5;i++){
                v[i].style.color="#fdce04";
            }
        }
    </script>   
</body>
</html>