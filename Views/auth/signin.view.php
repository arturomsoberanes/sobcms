<section class="section-auth">
  <article>
    <form action="/signin" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="username" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required/>
      </div>
      <button type="submit" class="btn btn-warning">Add User</button>
    </form>
  </article>
</section>