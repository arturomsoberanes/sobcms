<section class="section-auth">
  <article>
    <form action="/login" method="post">
      <div class="mb-3">
        <label for="email_username" class="form-label">Email address or Username:</label>
        <input type="text" class="form-control" id="email_username" name="email_username" aria-describedby="emial">
        <div id="email_username" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-warning">Submit</button>
    </form>
  </article>
</section>