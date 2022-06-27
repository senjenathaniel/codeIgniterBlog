<div class="container" style="margin-top: 6em;">
  <div class="mt-5 mb-5">
   <img class="img-fluid rounded mx-auto d-block"  src="https://picsum.photos/700/400?grayscale" alt="">
  </div>
  
  <div class="container">
    <div class="row">
      <h1 class="display-4"><?=esc($blogs['blog_title']);?></h1>
      <b class="small">date | author</b>
      <hr>
      <div class="container"><?=esc($blogs['blog_body']);?></div>
    </div>
  </div>
</div>
