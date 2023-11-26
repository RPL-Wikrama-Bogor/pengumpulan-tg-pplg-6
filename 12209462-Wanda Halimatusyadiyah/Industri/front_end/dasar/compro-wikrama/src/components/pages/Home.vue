<template>
    <div class="container">
        <Section></Section>
        <Service></Service>
        <Portofolio></Portofolio>
        <Blog></Blog>
    </div>
</template>

<script>
import Section1 from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue';
import Portofolio from '@/components/Beranda/Portofolio.vue'; 
import Blog from '@/components/Beranda/Blog.vue';
import Contact from '@/components/Beranda/Contact.vue';

export default {
    components: {
        Section1,
        Service,
        Portofolio,
        Blog,
        Contact
    },
    data() {
        return {
            DataHome: []
        }
    },
    async mounted() {
        const response = await Get('http//localhost:9000/api/home');
        // console.log(response);
        this.DataHome = response.data;
    },
}
</script>