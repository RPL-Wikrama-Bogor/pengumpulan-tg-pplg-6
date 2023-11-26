    <template>
    <div class="wrap">
        <div class="card">
            <div class="img-wrap">
                <img :src="'/src/assets/img/' +image" alt="" srcset="">
            </div>
            <div class="text-wrap">
                <h3>{{ judul }}</h3>
        <div v-html="text"></div>
        <slot></slot>
            </div>
        </div>
    </div>
    </template>

<script>
export default {
    // mengambill data dari luar atau file lain
    // nama props == nama bind attribute dicomponent nya tempat data dikirim
    props: ['judul', 'text', 'image'],
}
</script>

<style scoped>
    .wrap {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    }

    .card {
    display: flex;
    width: 600px;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    transition: box-shadow 0.3s ease;
    }

    .img-wrap {
    flex: 1;
    }

    .img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    .text-wrap {
    flex: 1;
    padding: 16px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    }

    h3 {
    font-size: 20px;
    margin-bottom: 8px;
    }
    </style>