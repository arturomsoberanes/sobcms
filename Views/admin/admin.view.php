<section class="section-admin">
  <article class="text-center">
    <h2 class="fs-1">What you want to do?</h2>
    <div class="mb-3">
      <a class="btn btn-success" href="admin/write">
        <span class="bi bi-journal-plus fw-bold"></span> Add Post
      </a>
      <a class="btn btn-warning" href="admin/user">
        <span class="bi bi-person-fill-add fw-bold"></span> Add User
      </a>
    </div>
  </article>
  <article class="row g-0">
    <div class="col-md-6">
      <?php require 'components/list-admin-posts.view.php'; ?>
    </div>
    <div class="col-md-6">
      <?php require 'components/list-admin-users.view.php'; ?>
    </div>
  </article>
</section>