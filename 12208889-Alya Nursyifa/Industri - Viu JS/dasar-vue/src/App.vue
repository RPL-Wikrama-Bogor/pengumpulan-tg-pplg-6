<template>
  <p>----------Templating------------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>

  <p>-----------Data Binding----------------</p>
  <button :disabled="nonaktif">Button</button>
  <h1 v-bind="property">Feitann</h1>
  <input :type="typeInput">
  <button @click="showPassword">Show</button>

  <p>-----------Data Binding----------------</p>
  {{ count == 0 ? count + 1 : count + 2 }} 

  <p>--------------V - If-------------------</p>
  <button v-if="show">Submit</button>
  <button v-show="show">Submit</button>

  <div v-if="count == 1">
    number 1
  </div>
  <div v-else-if="count == 2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>

  <p>-----------Computed dan Methods---------</p>
  <button @click="counterNumber">{{ counterButton }} </button>
  <button @click="countComputed">Computed {{ numberComputed }} </button>

  <input :type="typeInput">
  <button @click="showPassword">Show</button>



  <p>--------------Class dan Style-------------------</p>
  <ul>
    <li :class="{active:isActive, fs40px: isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">Ubah Ukuran</button>

  <p>--------------Rendering-------------------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">
      {{ index+1 }}{{ item }}
    </li>
  </ul>

  <p>--------------V - Model-------------------</p>
  <input type="text" v-model="inputKelas">
  {{ inputKelas }}
</template>

<script>
export default{
  data(){
    return {
      inputKelas: '',
      daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count : 3,
      nama : 'Alyaaa',
      number : 15,
      kelas : '<h1>Kelas 11</h1>',
      nonaktif:true,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive:true
    }
  },
  methods:{
    counterNumber(){
      this.counterButton += 1;
    },
    showPassword(){
    if (this.typeInput == 'password'){
      this.typeInput = 'text';
    } else {
      this.typeInput = 'password';
    }
  },
    ubahWarna(){
    if(this.isActive){
      this.isActive = false;
    }else {
      this.isActive = true;
    }
  }
  },
  computed: {
    countComputed(){
      this.numberComputed += 6
    }
  }
}
</script>

<style>
.color {
  color: blue;
}

.fs40px{
  font-size: 40px;
}

.active{
  color: blue;
}

</style>