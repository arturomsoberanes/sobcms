<h2 class="fs-1 mb-3">Users:</h2>
<ul class="list-group list-group-flush">
  <?php foreach ($users as $user): ?>
    <li class="list-group-item bg-transparent text-white">
      <div class="row g-0">
        <div class="col-md-8">
          <?= $user->name; ?>
        </div>
        <div class="col-md-4">
          <form class="d-inline-block ms-4" action="admin/delete/user/<?= $user->id ?>" method="post"
            onsubmit="return confirm('Are you sure of delete this user?')">
            <button class="btn btn-danger bi bi-trash" href="posts"></button>
          </form>
          <a class="d-inline-block btn btn-primary bi bi-pencil-fill" href="admin/user/<?= $user->id ?>"></a>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
</ul>