<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="/">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/manage">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
      </ul>
    </div>
  </div>
</nav>