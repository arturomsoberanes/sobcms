<section class="section-auth">
  <article>
    <form action="/admin/user/<?= $user ? "update/{$user->id}" : 'add' ?>" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="<?= $user ? $user->name : ''?>" <?= !$user && 'required'?> />
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="username" value="<?= $user ? $user->username : ''?>" <?= !$user && 'required'?> />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value="<?= $user ? $user->email : ''?>" <?= !$user && 'required'?> />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" <?= !$user && 'required'?> />
      </div>
      <button type="submit" class="btn btn-warning">
        <?= $user ? 'Update User' : 'Add User' ?>
      </button>
      <a href="/admin" class="btn btn-secondary">Cancel</a>
    </form>
  </article>
</section>