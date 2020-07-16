<main>
    <div class="container">
        <div class="review_card">
            <?php foreach ($data as $key => $value):?>
                <?php echo "<p>".$key." : ".$value."</p>";?>
            <?php endforeach;?>
            <a href="<?php echo URLROOT;?>/reviews/accept_review/<?php echo $data['id'];?>">
                Accept
            </a>
            <a href="<?php echo URLROOT;?>/reviews/delete_review/<?php echo $data['id'];?>">Delete</a>
        </div>
    </div>
</main>