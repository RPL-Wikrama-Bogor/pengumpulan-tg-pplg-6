<template>
  <p>-----------------templating----------------------------</p>

{{ nama}}
{{ number }}
<div :v-html="kelas"></div>

<p>-----------------data binding----------------------------</p>
<button :disabled="nonactive" >button</button>
<h1  :v-bind="property">feri</h1>
<input :type="typeInput">

<p>----------------javascript expresion---------------------</p>
{{ Cout ==0 ? count + 1 : count + 2 }}

<button v-if="show"  >submit</button>
<button v-show="show">submit</button>

<div v-if="count == 1">number 1</div>
<div v-else-if="count == 5">number 2</div>
<div v-else="count == 7" >number 3</div>

<p>----------------------computed dan method-----------------</p>
<button @click="counterNumber"  >methods</button>
<button @click="countComputed" > computed</button>
<input :type="typeInput">
<button @click="showPassword"> show password</button>

<!-- <button @click="counterNumber">{{ counterButton }}</button>
<button @click="countComputed">Computed  {{ numberComputed }}</button> -->
<p>------------------------class dan style-------------------</p>

<ul>
  <li  :class="{active:isActive, fs30px:isActive}">
    test
  </li>
</ul>
<button @click="ubahWarna">ubah warna</button>

<p>-----------------------list rendering---------------------</p>

 <ul>
  <li v-for="(item,index) in daftarKelas" >{{index+1}}{{ item }}</li>
 </ul> 


<p>----------------------v-model-----------------------</p>
<input type="text" v-model="inputKelas">{{ inputKelas }}
</template>

<script>
export default {
  data() {
      return {
        inputKelas : '',
        daftarKelas : ['RPL 1', 'RPL 2', 'RPL 3'],
        counterButton : 0,
        numberComputed : 0,
        count: 7,
        nama: 'feri',
        number: 1,
        kelas : '<h1>kelas 11</h1>',
        nonactive: true,
        property: {
            id: 1,
            class : 'color'
      },
       typeInput : 'password',
       isActive : true
      }
       
      },
      methods: {
         counterNumber(){
          this.counterButton +=  1;
         },
         showPassword() {
          if (this.typeInput == 'password') {
          this.typeInput = 'text';
         } else {
               this.typeInput = 'password';
         }
         },
         ubahWarna() {
          if (this.isActive){
            this.isActive = false;
          }else {
               this.isActive = true;

          }
         }
  },
  computed: {
    countComputed() {
         this.numbercomputed += 6;
    }
  }
}

</script>

<style>
.color {
  color: aqua;
} 

.active {
  color: blue;
}
.fs30px {
    font-size: 20px;
}  



</style>









































<!-- <script setup>
import HelloWorld from './components/HelloWorld.vue'
import TheWelcome from './components/TheWelcome.vue'
</script>

<template>
  <header>
    <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125" />

    <div class="wrapper">
      <HelloWorld msg="You did it!" />
    </div>
  </header>

  <main>
    <TheWelcome />
  </main>
</template>

<style scoped>
header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style> -->
