<template>
    <div class="container">
        <Section></Section>
        <Service></Service>
        <Portfolio></Portfolio>
        <Blog></Blog>
    </div>
</template>

<script>
import Section1 from '@/components/Beranda/Section.vue';
import Service from '@/components/Beranda/Service.vue';
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '../../Api';
export default {
    components: {
        Section1,
        Service,
        Portfolio,
        Blog
    },
    data() {
        return {
            DataHome: []
        }
    },
    async mounted() {
        const response = await Get('http://localhost:9000/api/home');
        console.log(response);
    },
}
</script>