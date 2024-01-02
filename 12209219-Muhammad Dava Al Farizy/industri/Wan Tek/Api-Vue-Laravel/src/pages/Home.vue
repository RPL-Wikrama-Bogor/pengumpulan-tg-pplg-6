    <template>
    <div class="container">
        <Beranda :data="DataHome"></Beranda>
        <Service :data="DataLayanan" id="#port"></Service>
        <Portfolio :data="DataPortfolio"></Portfolio>
        <Blog :data="DataBlog"></Blog>
    </div>
</template>

<script>
import Beranda from '@/components/beranda/Beranda.vue';
import Service from '@/components/beranda/Service.vue';
import Portfolio from '@/components/beranda/Portfolio.vue';
import Blog from '@/components/beranda/Blog.vue';
import { Get } from '@/api/index.js';
export default {
    components: {
        Beranda,
        Service,
        Portfolio,
        Blog
    },
    data() {
        return {
            DataHome: [],
            DataLayanan: [],
            DataPortfolio: [],
            DataBlog:[]
        }
    },
    async created() {
        //api home
        const response = await Get('http://127.0.0.1:9000/api/home');
        this.DataHome = response.data;
        //api sevice
        const responseLayanan = await Get('http://127.0.0.1:9000/api/services')
        this.DataLayanan = responseLayanan.data.data;
        //api portfolio
        const responsePortfolio = await Get('http://127.0.0.1:9000/api/portfolio')
        this.DataPortfolio = responsePortfolio.data.data;
        //api blog
        const responseBlog = await Get('http://127.0.0.1:9000/api/blog')
        this.DataBlog = responseBlog.data.data;
    },
}
</script>
