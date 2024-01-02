<template>
  <Navbar />
  <div class="container">
    <router-view />
  </div>
</template>

<script>
import Navbar from '@/components/Layouts/Navbar.vue'

export default {
  components: {
    Navbar
  }
}
</script>
