
<!-- <?php print_r($data);?> -->


<main>
    <div class="container">
        <?php foreach($data as $rev):?>
            <div class="review_card">
                <?php foreach ($rev as $key => $value):?>
                    <?php if($key == "first_name"):?>
                        <a href="<?php echo URLROOT;?>/reviews/show_review_admin/<?php echo $rev['id'];?>">
                    <?php endif;?>
                    <?php echo "<p>".$key." : ".$value."</p>";?>
                    <?php if($key == "first_name"):?>
                        </a>
                    <?php endif;?>
                <?php endforeach;?>
                <a href="<?php echo URLROOT;?>/reviews/accept_review/<?php echo $rev['id'];?>">
                    Accept
                </a>
                <a href="<?php echo URLROOT;?>/reviews/delete_review/<?php echo $rev['id'];?>">Delete</a>
            </div>
        <?php endforeach;?>
    </div>
</main>