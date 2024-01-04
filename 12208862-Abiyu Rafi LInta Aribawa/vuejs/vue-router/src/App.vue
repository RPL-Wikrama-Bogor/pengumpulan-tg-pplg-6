<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand mx-3" href="/">My App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">home</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/about" class="nav-link">Tentang</router-link>
        </li>
      </ul>
    </div>
  </nav>
  <h2>Selamat datang di Halaman Beranda</h2>
  <p>oke bang</p>
</template>

<script>
export default {
  name: 'Navbar',
}
</script>
