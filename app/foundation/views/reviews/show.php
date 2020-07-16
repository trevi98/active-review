<main>
    <div class="container">
        <?php foreach($data as $rev):?>
            <div class="review_card">
                <?php foreach ($rev as $key => $value):?>
                    <?php if($key == "first_name"):?>
                        <a href="<?php echo URLROOT;?>/reviews/show_review/<?php echo $rev['id'];?>">
                    <?php endif;?>
                    <?php echo "<p>".$key." : ".$value."</p>";?>
                    <?php if($key == "first_name"):?>
                        </a>
                    <?php endif;?>
                <?php endforeach;?>
            </div>
        <?php endforeach;?>
    </div>
</main>