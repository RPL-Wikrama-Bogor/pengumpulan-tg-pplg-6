<template>
    <div class="container">
        <Blog>
            <div class="search">
                
            </div>
        </Blog>
    </div>
</template>
<script>
import Contact from '@/components/Beranda/Contact.vue';
export default {
    components: {
        Contact
    },
    data() {
        return {
            DataContact: []
        }
    },
    async mounted() {
        const response = await Get('Contact');
        this.DataContact = response.data.data;
    }
}
</script>