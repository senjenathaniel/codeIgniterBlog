<?=session()->getFlashdata('error')?>
<?=service('validation')->listErrors()?>


<div class="container" id="editorjs">
  
</div>
<script>
const editor = new EditorJS({
  holder: 'editorjs',
  tools: {
    // code : CodeTool,
    header: Header,
    list: List,
    image: SimpleImage,
    quote: {
      class: Quote,
      inlineToolbar: true,
      shortcut: 'CMD+SHIFT+O',
      config: {
        quotePlaceholder: 'Enter a quote',
        captionPlaceholder: 'Quote\'s author',
      },
    }
  }
});

</script>
<!-- 
<div class="container">
  <form action="/admin/create">
    <?= csrf_field(); ?>
    <div class="mb-3">
      <input type="text" class="form-control" style="border-color: transparent;" id="title" name="title" placeholder="Title" >
    </div>
    <div class="mb-3">
      <div class="form-floating">
        <textarea class="form-control" placeholder="Blog content here" name="body" id="blog_body"
          style="height: 100px"></textarea>
        <label for="floatingTextarea2">Blog Entry</label>
      </div>
    </div>

    <input type="submit" class="btn btn-primary" value="Create Entry" />
  </form> -->
</div>

<script src="editor.js"></script>