<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('welcome')}}"><h3>Sistem Buku Tamu</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{ route('welcome')}}">Home</a>
        <a class="nav-link" href="{{ route('tamu.create')}}">Form</a>
        <a class="nav-link" href="{{ route('tamu.index')}}">Data Tamu</a>
        <a class="nav-link" href="{{ route('about')}}">About</a>
      </div>
    </div>
  </div>
</nav>