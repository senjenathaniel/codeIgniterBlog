<?php
  session()->getFlashdata('error');
  service('validation')->listErrors();


?>
<div class="container mb-5">
  <form action="/admin/create" method="post">
    <?= csrf_field(); ?>
    <!-- Editor -->
    <textarea id="default-editor" name="body"></textarea>
    <input type="submit" class="mt-5 btn btn-outline-primary" value="Create Entry" />
  </form>
</div>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'a11ychecker advcode autosave casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed powerpaste table tableofcontents tinymcespellchecker',
    toolbar: 'undo redo | styles | bold italic | link image | alignleft | aligncenter | alignright | restoredraft',
    autosave_interval: '5s',
    autosave_ask_before_unload: true,
    browser_spellcheck: true,
    content_css: 'default',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    min_height: 600,
  });
</script>