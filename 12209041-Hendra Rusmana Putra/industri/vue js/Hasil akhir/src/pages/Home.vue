<template>
    <div class="container">
        <Section1 :data="DataHome"></Section1>
        <Service :data="DataLayanan"></Service>
        <Portofolio :data="DataPortofolio"></Portofolio>
        <Blog :data="DataBlog"></Blog>
    </div>
    </template>
    
    <script>
    import Section1 from '@/components/Beranda/Section1.vue';
    import Service from '@/components/Beranda/Service.vue';
    import Portofolio from '@/components/Beranda/Portofolio.vue';
    import Blog from '@/components/Beranda/Blog.vue';
    import { Get } from '../Api/index.js';

  export default{
    components: {
      Section1,
      Service,
      Portofolio,
      Blog
  },
  data() {
    return {
        DataHome: [],
        DataLayanan: [],
        DataPortofolio: [],
        DataBlog: []
    }
  },
  async created(){
    // api untuk home
    const response = await Get('http://localhost:9000/api/home');
    this.DataHome = response.data;

    // api untuk layanan
    const responseLayanan =  await Get('http://localhost:9000/api/services');
    this.DataLayanan = responseLayanan.data.data;

    const responsePortofolio =  await Get('http://localhost:9000/api/portfolio');
    this.DataPortofolio = responsePortofolio.data.data;

    const responseBlog =  await Get('http://localhost:9000/api/blog');
    this.DataBlog = responseBlog.data.data;
  }
}
</script>   