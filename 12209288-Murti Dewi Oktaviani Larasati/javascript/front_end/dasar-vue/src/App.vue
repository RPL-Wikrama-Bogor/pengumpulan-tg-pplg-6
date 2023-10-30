<template>
  <p>----------Templating------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="Kelas"></div>
  <p>----------Data Binding----------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">uti</h1>
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
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <p>------------------list rendering-------------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ index }} {{ item }}
    </li>

  </ul>
  <p>---------------v-model-------------</p>
  <input type="text" v-model="inputKelas"> 
  {{ inputKelas }}
</template>

<script>
export default{
  data(){
    return{
      inputKelas:'',
      daftarKelas:['RPL 1', 'RPL 2', 'RPL 3'],
      typeInput: 'password',
      counterbutton: 0,
      numberComputed: 0,
      show : false,
      count: 3,
      nama : 'uti',
      number : '2',
      Kelas : '<h1>Kelas 11</h1>',
      nonaktif : false,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true
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
    ubahWarna() {
      if (this.isActive) {
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
    color: palevioletred;
  }

  .fs40px {
    font-size: 40px;
  }

  .active {
    color:palevioletred;
  }
</style>