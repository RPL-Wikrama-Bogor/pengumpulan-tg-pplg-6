<template>
    <p>-----------templating-------------</p>
    {{ nama }}
    {{ number }}
    <div v-html="kelas"></div>
    <p>-----------data binding-----------</p>
    <button :disabled="nonaktif">button</button>
    <h1 :class="property.class">Khai</h1>
    <input :type="typeInput">
    <p>-----------data binding-----------</p>
    {{ count === 0 ? count + 1 : count + 2 }}
    <p>-----------v-if-----------</p>
    <button v-if="show">submit</button>
    <button v-show="show">submit</button>
    
    <div v-if="count === 1">
      number 1
    </div>
    <div v-else-if="count === 2">
      number 2
    </div>
    <div v-else>
      lebih dari 2
    </div>
    
    <p>-------------computed dan methods---------</p>
    <button @click="counterNumber">methods {{ counterButton }}</button>
    <button @click="countComputed">Computed {{ numberComputed }}</button>
    
    <input :type="typeInput">
    <button @click="showPassword">show password</button>
    <p>-------------class dan style---------</p>
    <ul>
      <li :class="{
         active: isActive,
         fs40px:isActive }">
        test
      </li>
    </ul>
    <button @click="ubahWarna">Ubah warna</button>
    <p>-------------List Rendering-----------</p>
    <ul>
      <li v-for="(item,index) in daftarKelas">{{ index+1 }}{{ item }}
      </li>
    </ul>
    <p>-------------v-Model-----------</p>
    <input type="text" v-model="inputkelas">
    {{ inputkelas }}
</template>

<script>
export default {
  data() {
    return {
      inputkelas: '',
      daftarKelas: ['PPLG 1', 'PPLG 2', 'PPLG 3'],

      typeInput: 'password',
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 1,
      nama: 'Khairul',
      number: 1,
      kelas: '<h1>kelas 11</h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      isActive: true
    };
  },
  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword() {
      if (this.typeInput === 'password') {
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password';
      }
    },
    ubahWarna() {
     if(this.isActive){
      this.isActive=false;
     }else{
      this.isActive=true;
     }
    }
  },
  computed: {
    countComputed() {
     this.numberComputed += 6;
    }
  }
};
</script>

<style>
.color {
  color: red;
}
.fs40px {
  font-size: 40px;
}
.active {
  color: blue;
}
</style>
