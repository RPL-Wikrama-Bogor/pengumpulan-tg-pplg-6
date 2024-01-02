<template>
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
  /* min-height: ;
  min-width: 600px;
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
  border-radius: 10px;
  background: white;
  transition: all 0.5s ease;
  margin: 10px 10px;
  font-family: sans-serif; */
}
.img-wrap {
    width: 35%;
    height: 100%;
    /* position: relative; */
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
    /* position: absolute; */
}

.card-info{
    margin-left: 25em;
    font-size: 13px;
}
.img-profil {
    width: 60px;
    margin-top: -83px;
    margin-left: 330px;
}

.img-profil img{
    width: 55px;
   height: 55px;
   border-radius: 50%;
}
.card-info{
    margin-left: 70px;
    margin-top: 50px;
}
</style>