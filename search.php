<?php
    include 'app/search.php';
?>

<?php include 'layouts/header.php' ?>
<h4>Qidiruv natijalari</h4>

<?php if (!isset($key)): ?>
    <div class="alert alert-danger text-center">
        Siz kalit yozmadingiz!
    </div>
<?php elseif (count($items) == 0): ?>
    <div class="alert alert-danger text-center">
        Natija topilmadi!
    </div>
<?php else: ?>
    <?php foreach ($items as $item): ?>
        <h3><?= $item['title'] ?></h3>
        <p><?= $item['short'] ?></p>
    <?php endforeach; ?>
<?php endif; ?>
<?php include 'layouts/footer.php' ?>