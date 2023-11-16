<template>
    <!-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css -->
    <div class="wrap">
        <div class="card">
            <div class="img-wrap">
            <img :src="'/src/assets/img/'+image" alt="" srcset="">
            <div class="img-profil">
                <img :src="'/src/assets/img/'+profil" alt="" srcset="">
            </div>
            </div>
            <div class="text-wrap">
                <h3>{{ judul }}</h3>
                <p>{{ text1 }}</p>
                <div class="card-info">
                <p>{{ nama }}</p>
                <p>{{ tanggal }}</p>
                <!-- <p><i class="bi bi-arrow-bar-right"></i></p> -->
            </div>
                <slot></slot>
                <div v-html="text"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['judul', 'text1', 'image', 'profil', 'tanggal', 'nama'],
}
</script>

<style scoped>


.wrap {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 25px;
    margin-top: 9em;
}
.card {
    width: 800px;
    height: 300px;
    border-radius: 5px;
    display: flex;
    border-radius: 10px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
}
.img-wrap {
    width: 35%;
    height: 100%;
}
.text-wrap {
    width: 65%;
    height: 100%;
    padding: 50px;
    margin-top: -10px;
    font-family: Arial, Helvetica, sans-serif;
}
.img-wrap img {
    width: 100%;
    height: 100%;
    border-radius: 10px 0px 0px 10px ;
}

.card-info{
    margin-left: 5em;
    font-size: 13px;
}
.img-profil {
    width: 60px;
    margin-top: -95px;
    margin-left: 21.0em;
}

.img-profil img{
    width: 50px;
   height: 50px;
   border-radius: 50%;
}
</style>