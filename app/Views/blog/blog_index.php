
    <div class="container pt-5">
        <div class="row">
            <?php foreach ($blog as $post): ?>
            <div class="col">
                <div class="card mb-3" style="width: 18rem;">
                    <img style="height: 17em;" src="<?=$post['blog_image_url'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4><?=substr($post['blog_title'], 0, 20);?></h4>
                        <p><?=substr($post['blog_body'], 0, 60) . "...";?></p>
                        <p><a class="btn btn-primary" href="/blog/<?=$post['id'];?>">Read More</a></p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
