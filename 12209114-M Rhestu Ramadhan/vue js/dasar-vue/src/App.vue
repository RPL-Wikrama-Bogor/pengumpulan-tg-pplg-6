<template>
   <p>----------------Templating-----------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>----------------Data bidang-----------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">apong</h1>
  <input :type="typeInput">
  <p>----------------Data bidang-----------------</p>
  {{ count == 0 ? count + 1 : count + 2}}
  <p>----------------v-if----------------</p>
  <button v-show="show">submit</button>
  <button v-if="show">submit</button>
  <div v-if="count==1">
    number 1
  </div>
  <div v-else-if="count==2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  <p>----------------v-if----------------</p>
  <button @click="counterNumber">{{ counterButton }}</button>
  {{ counterButton }}
  <button @click="countComputed">computed {{ numberComputed }}</button>
  <p>----------------computed dan method-----------------</p>
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  <p>----------------class dan style-----------------</p>
  <ul>
    <li :class="{active:isActive, fs40px:isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <p>----------------cendering-----------------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ index +1 }}  {{ item }}</li>
  </ul>
  <p>----------------v model-----------------</p>
  <input type="text" v-model="inputKelas">{{ inputKelas }}
</template>

<script>
export default{
  data() {
    return{
      inputKelas: '',
      daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 2,
      nama: 'asep',
      number: 0,
      kelas: '<h1>kelas 11</h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true
    }
   },
   methods: {
    counterNumber(){
      (this.counterButton += 1)
    },
    showPassword(){
      if(this.typeInput == 'password'){
        this.typeInput = 'text'
      }else{
        this.typeInput = 'password'
      }
    },
    ubahWarna(){
      if(this.isActive){
        this.isActive = false;
      } else{
        this.isActive = true;
      }
    }
   },
   computed:{
    countComputed(){
      this.numberComputed += 6;
    }
   }
}
</script>

<style>
  .color{
    color: firebrick;
  }
  .fs40px{
    font-size: 40px;
  }
  .active{
    color: chocolate;
  }
</style>