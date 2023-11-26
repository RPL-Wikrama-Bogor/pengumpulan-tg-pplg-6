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
import Beranda from './components/beranda/Beranda.vue';
import Navbar from './components/layout/Navbar.vue';
import Service from './components/beranda/Service.vue';
import  Portofolio  from './components/beranda/Portofolio.vue'
import Blog from './components/beranda/Blog.vue'
export default{
    components:{
    Navbar,
    Beranda,
    Service,
    Portofolio,
    Blog
}
}
</script>