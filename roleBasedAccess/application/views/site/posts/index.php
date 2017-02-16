<h2><?= $title ?></h2>
<?php foreach ($posts as $value): ?>
    <h3> <?php echo $value->title ?></h3>
    <small class="post-date">Posted On: <?php echo $value->created_at ?></small>
    <?php echo $value->body ?>
    <p><a href="<?=base_url("posts/{$value->slug}")?>" class="btn btn-default">Read More..</a></p>
<?php endforeach; ?>

