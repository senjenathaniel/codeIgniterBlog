<div class="container">
    <div class="row">
        <?php foreach ($blog as $post): ?>
        <div class="col s12 m4">
            <div class="card medium">
                <div class="card-image">
                    <img class="responsive-img" src="<?=$post['blog_image_url'];?>" alt="photo">
                    <span class="card-title"><?=$post['blog_title'];?></span>
                </div>
                <div class="card-content">
                    <p><?=substr($post['blog_body'], 0, 72) . "...";?></p>
                </div>
                <div class="card-action">
                    <a class="waves-effect waves-teal btn-flat" href="/blog/<?=$post['id'];?>">Read</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>