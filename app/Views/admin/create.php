<?=session()->getFlashdata('error')?>
<?=service('validation')->listErrors()?>

<div class="container">
  <form action="/admin/create">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Blog Entry</label>
<input type="text" class="form-control" id="title" name="body">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
