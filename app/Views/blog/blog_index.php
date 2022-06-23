<div style="padding-top: 4em;">
    <div class="container">
        <div class="row">
            <?php foreach ($blog as $post): ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?=$post['blog_image_url'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4><?=substr($post['blog_title'], 0, 20);?></h4>
                        <p><a class="btn btn-primary" href="/blog/<?=$post['id'];?>">Read More</a></p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>