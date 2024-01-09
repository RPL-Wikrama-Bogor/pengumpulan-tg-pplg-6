<template>

     <p>----------data bidang---------</p>
    {{ nama }}
    {{ number }}
    <div v-html="rombel"></div>

    <p>----------data bidang---------</p>
    <button if:disabled="nonaktif">tombol</button>
    <h1 v-bind="property">F</h1>
    <input type="typeinput">

    <p>--------data bidang-----------</p>
    {{ count == 0 ? count + 1 : count +2}}
 
    <p>----------v------------</p>

    <button v-if="show">Tombol</button>
    <button v-show="show">submit</button>

         <div v-if="count==1">
            number 1
         </div>
        <div v-else="count==1">
            number 2
        </div>
        <div v-else>
            lebih dari 2
        </div>

        <p>-----------v----------</p>
        <input :type="typeinput">
        <button @click="showpassword">show password</button>
        <!-- <button @click="counternumber">{{ counterbutton }}</button>
        <button @click="countcomputed">computed{{ numbercomputed }}</button> -->
        <p>-----------compputted dan method------------</p>
        <ul>
            <li class="fs" :class="{active:isActive, fs40px:isActive}"> 
                F
            </li>
        </ul>
        <button @click="ubahwarna">ubah warna</button>
        <ul>
            <li v-for="(item, index) in daftarrombel">{{ index+1 }} {{ item }}</li>
        </ul>
        <p>----------v-model------------</p>
            <input type="text" v-model="inputkelas">
            {{ inputkelas }}
</template>
<script>
export default{
    data(){
        return{
            inputkelas:'',
            daftarrombel: ['RPL 1', 'RPL 2', 'RPL 3'],
            conterbutton: 0,
            numbercomputed: 0,
            show: false,
            count: 0,
            nama: 'Rizki',
            number: '99',
            rombel: '<h1> RPL </h1>',
            nonaktif: false,
            property: {
                id: 1,
                class:'color'
            },
            typeinput: 'password',
            isActive: true
        }
    },
    methods : {
        counternumber(){
            this.counterbutton += 1;
        },
        showpassword(){
            if(this.typeinput == 'password'){
            this.typeinput = 'text'
            }else{
                this.typeinput = 'password'
            }
        }, ubahwarna(){
            if(this.isActive){
                this.isActive = false;
            }else{
                this.isActive = true;
            }
        }
    },
    computed: {
        countcompoted(){

        }
    }
}
</script>

<style>
.color{
    color: grey;
}
.fs40px{ 
    font-size:40px;
}
.active{
  color:green;
}
</style>