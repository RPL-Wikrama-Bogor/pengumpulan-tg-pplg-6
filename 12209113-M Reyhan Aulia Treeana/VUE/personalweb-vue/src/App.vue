<template>
  <div>
    <Navbar />
    <router-view></router-view>
    <Footer />
  </div>
</template>

<script>
import Navbar from './components/Layouts/Navbar.vue'
import Footer from './components/Layouts/Footer.vue'

export default {
  components: {
    Navbar,
    Footer
  }
}
</script>