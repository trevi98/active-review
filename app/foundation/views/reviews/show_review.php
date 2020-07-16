<main>
    <div class="container">
        <div class="review_card">
            <?php foreach ($data as $key => $value):?>
                <?php echo "<p>".$key." : ".$value."</p>";?>
            <?php endforeach;?>
        </div>
    </div>
</main>