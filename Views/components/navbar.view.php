<nav class="d-flex justify-content-center mt-4 principal-nav">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Blog</a>
    </li>
    <?php if (Core\Auth::check()): ?>
      <li class="nav-item">
        <a class="nav-link" href="/admin">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
    <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
    <?php endif; ?>
  </ul>
</nav>