<nav class="navbar navbar-expand-lg">
<div class="container">
  <a class="navbar-brand" href="/">Curriculum Vitae</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ $title === 'Blog' ? 'active' : '' }}" href="/blog">Contacts</a>
          </li>
      </ul>
  </div>
</div>
</nav>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
