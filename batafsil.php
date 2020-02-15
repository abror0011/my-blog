<?php
    include 'app/batafsil.php';
?>
<?php
    include 'layouts/header.php';
?>
<!--Card boshlash -->
<div>
    <h2 class="mt-3 mb-4">Yangiliklar</h2>
</div>
    
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title mb-4"><?php echo $news['title']; ?></h5>
        <img src="<?php echo $news['img'];?>" class="card-img-top mb-4" alt="..." style="width:800px;">
        <div class="text-left mb-4">
                <?=date_format(date_create($news['created_at']), '<b>H:i</b> d/m/Y')?>
        </div>
        <p class="card-text"><?php echo $news['content'] ?></p>
    </div>
</div>
<?php
    include 'layouts/footer.php';
?>