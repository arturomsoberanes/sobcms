<section class="section-admin">
  <article>
    <h2 class="fs-1">What you want to do?</h2>
    <div class="text-center mb-3">
      <a class="btn btn-success" href="admin/write">
        <span class="bi bi-journal-plus fw-bold"></span> Add Post
      </a>
    </div>
    <h2 class="fs-1 mb-3">Posts:</h2>
    <ul class="list-group list-group-flush">
      <?php foreach ($posts as $post): ?>
        <li class="list-group-item bg-transparent text-white">
          <div class="row g-0">
            <div class="col-md-8">
              <?= $post->title; ?>
            </div>
            <div class="col-md-4">
              <form class="d-inline-block ms-4" action="admin/delete/post/<?= $post->id ?>" method="post"
                onsubmit="return confirm('¿Deseas eliminar la busqueda?')">
                <button class="btn btn-danger bi bi-trash" href="posts"></button>
              </form>
              <a class="d-inline-block btn btn-primary bi bi-pencil-fill" href="admin/write/<?= $post->id?>"></a>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </article>
</section>