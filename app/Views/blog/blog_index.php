<h2>Latest Posts</h2>
<div class="row">
    <?php foreach ($blog as $post): ?>
    <div class="col s6 m6">
        <div class="card">
            <div class="card-image">
                <img class="responsive-img" src="<?=$post['blog_image_url'];?>" alt="photo">
                <span class="card-title"><?=$post['blog_title'];?></span>
            </div>
            <div class="card-content">
                <em><?=substr($post['blog_posting_time'], 0, 10);?> | <?=$post['blog_author'];?></em>
                <p><?=substr($post['blog_body'], 0, 60) . "...";?></p>
            </div>
            <div class="card-action">
                <a href="/blog/<?=$post['blog_id'];?>">Read More</a>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>