<template>
    <div class="wrap">
        <div class="card">
            <div class="img-wrap">
                <img :src="'/src/assets/img/' +image " alt="" srcset="">
            </div>
            <div class="text-wrap">
                <h2>{{ title }}</h2>
                <slot></slot>
                <p>{{ desc }}</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    // mengambil data dari luar atau file lain
    //nama props=> nama bind attribute di componentya tempat data dikirim
    props: [ 'title' , 'desc' , 'image'] ,
}
</script>

<style scoped>
.wrap{
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
}
.card{
    display: flex;
    width: 600px;
    height: auto;
    border-radius: 5px;
    border: 2.5px solid #072541;
    box-shadow: 10px 10px 30px #FFF2D8;
}
.img-wrap{
    width: 35% ;
    height: auto ;
    position: relative;
}
.img-wrap img{
    width: 100%;
    height: 100%;
}
.text-wrap h2{
    margin-bottom: -1px;
}
.text-wrap{
    width: 65%;
    height: 100%;
    margin: 20px 0px 0px 1rem;
}


</style>