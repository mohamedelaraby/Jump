<!-- INCLUDE MAIN HEADER -->
<?php require APP_ROOT . '/views/inc/header.php';?>
<h1><?= $data['title']; ?></h1>
 
<ul class="list-group">
    <?php foreach ($data['post'] as $item) :?> 
        <li class="list-group-item"><?php echo $item->title;?></li>
        <li class="list-group-item"><?php echo $item->author;?></li>
        <li class="list-group-item"><?php echo $item->body;?></li>
        <br><hr><br>
    <?php endforeach;?>
</ul>

<!-- INCLUDE MAIN FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php';?>