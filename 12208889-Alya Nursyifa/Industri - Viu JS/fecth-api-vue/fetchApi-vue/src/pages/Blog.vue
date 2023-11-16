<template>
    <div class="container">
        <div class="blog">
            <h3>Blog</h3>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari Judul" @keyup="search" v-model="searchTerm">
            </div>
            <div class="row-blog">
                <Card v-for="item in filteredDataBlog" :blog="item" :key="item.id"></Card>
            </div>
        </div>
    </div>
</template>

<script>
import Card from '@/components/Blog/Card.vue';
import { Get } from '@/Api/index.js';

export default {
    props: ['data'],
    components: {
        Card,
    },
    data() {
        return {
            DataBlog: [],
            searchTerm: ''
        }
    },
    async created() {
        const response = await Get('http://127.0.0.1:9000/api/blog');
        console.log(response);
        this.DataBlog = response.data.data;
    },
    computed: {
        filteredDataBlog() {
            return this.DataBlog.filter(item => item.title.toLowerCase().includes(this.searchTerm.toLowerCase()));
        }
    },
    methods: {
        async search() {

        }
    }
}
</script>
