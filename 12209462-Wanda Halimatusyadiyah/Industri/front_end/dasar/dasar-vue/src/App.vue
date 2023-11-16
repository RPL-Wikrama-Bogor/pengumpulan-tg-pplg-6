<template>
  <p>----------Templating------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="Kelas"></div>
  <p>----------Data Binding----------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">Wanda</h1>
  <input :type="typeInput">
  <p>----------Data Binding----------</p>
  {{ count==0 ? count + 1 : count + 2  }}
  <p>-------------v-If---------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>

  <div v-if="count == 1">
    Number 1
  </div>
  <div v-else-if="count== 2">
    Number 2
  </div>
  <div v-else>
    Lebih dari 2
  </div>
  <p>-------------computed and methods---------------</p>
  <button @click="counternumber">Methods {{ counterbutton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>

  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  <p>-------------class dan style---------------</p>
  <ul>
    <li :class="{ active:isActive,fs40px:isActive}">
      Wanda
    </li>
  </ul>
  <button @click="ubahwarna">ubah warna</button>
  <p>-------------list rendering---------------</p>

  <ul>
    <li v-for="(item,index) in DaftarKelas">{{ index+1 }} {{ item }}
    </li>
    
  </ul>

  <p>-------------v-model ---------------</p>
  <input type="text" v-model="rombel">
  {{ rombel }}

  <p>-------------v-model ---------------</p>

</template>

<script>
export default{
  data(){
    return{
      rombel:'',
      DaftarKelas:['PPLG 1', 'PPLG 2','PPLG 3'],
      typeInput: 'password',
      counterbutton: 0,
      numberComputed: 0,
      show : false,
      count: 3,
      nama : 'Wanda',
      number : 'Nda',
      Kelas : '<h1>Kelas 11</h1>',
      nonaktif : false,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive:true
    }
  },
  methods: {
    counternumber(){
      this.counterbutton += 1;
    },
    showPassword() {
      if(this.typeInput == 'password') {
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password';
      }
    },
    ubahwarna(){
      if(this.isActive){
        this.isActive = false;

      } else {
        this.isActive = true;
      }
    }
  },
  computed: {
    countComputed() {
      this.numberComputed += 6;
    }
  }
}
</script>

<style>
  .color {
    color: rgb(0, 213, 255);
    }
    .fs40px {
      font-size: 40px;
    }

    .active {
      color:cadetblue;
    }
</style>