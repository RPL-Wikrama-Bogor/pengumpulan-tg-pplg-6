<template>
  <Navbar></Navbar>
  <div class="container">
  <Beranda></Beranda>
  <Service></Service>
  <Portofolio></Portofolio>
  <Blog></Blog>
</div>
</template>
<script>
  import Navbar from './components/layouts/navbar.vue';
  import Beranda from '@/components/beranda/Beranda.vue';
  import Service from '@/components/beranda/service.vue';
  import Portofolio from '@/components/beranda/portofolio.vue';
  import Blog from '@/components/beranda/Blog.vue'
  export default {
    components: {
      Navbar,
      Beranda,
      Service,
      Portofolio,
      Blog
    }
  }
</script>