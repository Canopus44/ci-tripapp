</div>
</body>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; <?= date('Y') ?> - <?= esc($company) ?></p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap"></use>
      </svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="<?= base_url(route_to('home')) ?>" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="<?= base_url(route_to('features')) ?>" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="<?= base_url(route_to('pricing')) ?>" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="<?= base_url(route_to('faqs')) ?>" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="<?= base_url(route_to('about')) ?>" class="nav-link px-2 text-muted">About</a></li>
    </ul>
  </footer>
</div>
<script src="<?= base_url('assets/js/app.js') ?>"></script>

</html>