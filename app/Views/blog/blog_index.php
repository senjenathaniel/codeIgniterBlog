<div class="container pt-5">
    <?php if (!empty($blogs) && is_array($blogs)): ?>
    <h2><?=esc($title)?></h2>
    <div class="row">

        <?php foreach ($blogs as $post): ?>
        <div class="col">
            <div class="card mb-3" style="width: 18rem;">
                <img style="height: 17em;" src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4><?=substr($post['blog_title'], 0, 20);?></h4>
                    <p><?=substr($post['blog_body'], 0, 60) . "...";?></p>
                    <p><a class="btn btn-primary" href="/blogs/<?=$post['id'];?>">Read More</a></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <?php else: ?>
    <h2>There are currently no blogs to display!</h2>
    <?php endif;?>

</div>