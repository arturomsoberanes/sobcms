<section class="section-write">
  <article>
    <form action="<?= $post ? 'write/' . $post->id : 'new-post' ?>" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="title"
          value="<?= $post ? $post->title : ''; ?>" />
      </div>
      <div class="mb-3">
        <label for="excerpt" class="form-label">Excerpt:</label>
        <input type="text" class="form-control" id="excerpt" name="excerpt" aria-describedby="excerpt"
          value="<?= $post ? $post->excerpt : ''; ?>" />
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Content:</label>
        <textarea name="content" id="content" cols="30" rows="10">
          <?= $post ? $post->content : ''; ?>
        </textarea>
      </div>
      <div class="mb-3">
        <label for="featured_image" class="form-label">Featured Image (Optional):</label>
        <input class="form-control" type="file" id="featured_image" name="featured_image">
      </div>
      <button type="submit" class="btn btn-warning">
        <?= $post ? 'Update' : 'Add' ?>
      </button>
    </form>
  </article>
</section>