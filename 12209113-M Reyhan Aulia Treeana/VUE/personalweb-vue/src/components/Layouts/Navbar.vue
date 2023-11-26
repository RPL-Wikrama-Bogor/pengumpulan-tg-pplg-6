<template>
    <div bg-danger>
        <nav class="navbar navbar-expand-lg bg-danger navbar-dark">
            <div class="container bg-danger">
              <a class="navbar-brand bg-danger" href="#">Personal Web with Vue</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse bg-danger" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto bg-danger">
                  <router-link to="/" class="nav-link">Home</router-link>
                  <router-link to="/about" class="nav-link">About</router-link>
                  <router-link to="/portfolio" class="nav-link">Portfolio</router-link>
                </div>
              </div>
            </div>
          </nav>
    </div>
</template>
