<template>
        <div class="container">
            <Beranda></Beranda>
            <Service></Service>
            <Portfolio></Portfolio>
            <Blog></Blog>
        </div>
</template>

<script>
import Beranda from '@/components/beranda/Beranda.vue';
import Service from '@/components/beranda/Service.vue';
import Portfolio from '@/components/beranda/Portfolio.vue';
import Blog from '@/components/beranda/Blog.vue';
// import { Get } from '@/api/index.js';
export default {
    components: {
        Beranda,
        Service,
        Portfolio,
        Blog
    },
    // data() {
    //     return {
    //         DataHome: []
    //     }
    // },
    // async mounted() {
    //     const response = await Get('http://localhost:9000/api/home');
    //     console.log(response);
    // },
}
</script>
