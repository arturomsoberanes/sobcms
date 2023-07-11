<section class="section-show-post">
  <article class="text-start">
    <h2>
      <?= $post->title; ?>
    </h2>
    <p>
      <?= $post->excerpt; ?>
    </p>
    <div class="my-4">
      <?= $post->content; ?>
    </div>
    <blockquote class="blockquote mb-0">
      <footer class="blockquote-footer">Published On: <?= showDate($post->published_on) ?></footer>
    </blockquote>
  </article>
  </section>