<h2 class="text-center text-white my-3">Blog</h2>
<section class="text-white w-100 section-blog">
  <?php foreach ($posts as $post): ?>
    <article class="card text-bg-dark mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?= $post->featured_image; ?>" class="img-fluid rounded-start" alt="featured image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">
              <?= $post->title; ?>
            </h5>
            <p class="card-text">
              <?= $post->excerpt; ?>
            </p>
            <blockquote class="blockquote mb-0">
              <footer class="blockquote-footer">Published On:
                <?= showDate($post->published_on) ?>
              </footer>
            </blockquote>
            <a href="posts/<?= $post->id ?>" class="my-2 btn btn-warning">
              Show more...
            </a>
          </div>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
</section>