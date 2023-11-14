<template>
<p>------------------------------- </p>
{{ nama }}
{{ umur }}
<!-- {{ pekerjaan }} -->
<div v-html="pekerjaan"></div>
<p>------------------------------- </p>
<button :disabled="nonaktif">Button</button>
<p>------------------------------- </p>
<h1 v-bind="property">Hello World</h1>
<input :type="type">
<br>
{{ count == 0 ? count + 1 : count + 2 }}
<button v-if="show">Tambah</button>

<p>------------------------------- </p>

<div v-if="count == 1">1</div>
<div v-else-if="count == 2">2</div>
<div v-else>lebih dari 3</div>

<p>------------------------------- </p>

<ul>
  <li v-for="(value, index) in myObject">
   {{ index  }} {{ value.title }}
  </li>
</ul>


<p>------------------------------- </p>

<p>Message is: {{ message }}</p>
<input v-model="message" placeholder="edit me" />

<p>-----------Computed and methods------------ </p>

<button @click="counterNumber">{{ counterb }}</button>
<button @click="countComputed">{{ NumberComputed }}</button>

<p>------------Show password-------------- </p>

<input :type="typeInput" placeholder="isi sini"><button @click="showPassword">Show</button>

<p>------------Class dan style-------------- </p>

<ul>
  <li class="fs" :class="{active: isActive, fs40px: isActive}">
    test
  </li>
</ul>
<button @click="ubahWarna">Ubah warna</button>

</template>




<script>
import { ref } from "vue";
export default {
  data(){
    const message = ref("")
    const myObject = [
      {
        title: 'Ini tempat nongkrong, bukan tempat berantem',
        author: 'Jane Doe',
        publishedAt: '2016-04-10'
      },
      {
        title: 'Cara nimpa anjing',
        author: 'Jane Doe',
        publishedAt: '2016-04-10'
      },
      {
        title: 'Nongkrong diseruduk sapi hendak dikurban',
        author: 'Jane Doe',
        publishedAt: '2016-04-10'
      },
      {
        title: 'Engga jadi nyebrang, bajunya nyangkut',
        author: 'Jane Doe',
        publishedAt: '2016-04-10'
      },
    ]
    
    return{
      typeInput: "password",
      NumberComputed: 0,
      counterb: 0,
      myObject,
      message,
      show: true,
      count: 2,
      nama: 'Reyhan au',
      umur: 16,
      pekerjaan: "<h1>Programmer</h1>", 
      nonaktif: false,
      property: {
        id: 1,
        class: "color"
      },
      type: 'number',
      isActive: true
    }
  },
  methods:{
    counterNumber(){
      this.counterb += 1
    },
    showPassword(){
      if(this.typeInput == "password"){
        this.typeInput = "text"
      }else{
        this.typeInput = "password"
      }
    },
      ubahWarna(){
      if(this.isActive == true){
        this.isActive = false
      }else{
        this.isActive = true
      }
    },
  },


  computed: {
    countComputed(){
      this.NumberComputed += 7
    }
  }
}
</script>

<style> 
.color{
  color: red;
}

.fs40px{
  font-size: 40px;
}

.active{
  color: blue;
}
</style>

