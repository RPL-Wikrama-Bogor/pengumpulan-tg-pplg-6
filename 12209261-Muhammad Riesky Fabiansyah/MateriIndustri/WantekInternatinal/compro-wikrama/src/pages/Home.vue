<template>
  <Navbar></Navbar>
  <div class="container">
    <Beranda :data="DataHome"></Beranda>
    <Service :data="DataLayanan"></Service>
    <Portfolio :data="DataPortfolio"></Portfolio>
    <Blog :data="DataBlog"></Blog>

  </div>
</template>

<script>
import Navbar from '@/components/layouts/Navbar.vue'
import Beranda from '@/components/Beranda/Beranda.vue'
import Service from '@/components/Beranda/Service.vue'
import Portfolio from '@/components/Beranda/Portfolio.vue'
import Blog from '@/components/Beranda/Blog.vue'
import { Get } from '@/Api/index.js';
export default {
  components: {
    Navbar,
    Beranda,
    Service,
    Portfolio,
    Blog
  },
  data() {
    return {
      DataHome: []
    }
  },
  async created() {
    const response = await Get('http://localhost:9000/api/home');
    this.DataHome = response.data;

    const responseLayanan = await Get('http://localhost:9000/api/services');
    this.DataLayanan = responseLayanan.data.data;

    const responsePortfolio = await Get('http://localhost:9000/api/portfolio');
    this.DataPortfolio = responsePortfolio.data.data;

    const responseBlog = await Get('http://localhost:9000/api/blog');
    this.DataBlog = responseBlog.data.data;
  },
}
</script>