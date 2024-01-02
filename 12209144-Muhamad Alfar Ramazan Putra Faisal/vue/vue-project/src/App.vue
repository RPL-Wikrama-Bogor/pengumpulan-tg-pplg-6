<template>

  <p>-----------Templating-----------</p>
  {{ nama }}
  {{ number }}
  <div v-html="rombel"></div>
  <p>-----------Data Binding-----------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">brewwz</h1>
  <input :type="typeinput">
  <p>-----------Data Binding-----------</p>
  {{ count == 0 ? count + 1 : count + 2  }}
  <p>-----------v-if-----------</p>

  <button v-if="show">submit</button>
  <button v-show="show">submit</button>

  <div v-if="count==1">
    number 1
  </div>
  <div v-else-if="count==2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  <p>-----------computed dan method-----------</p>
  <!-- <button @click="counternumber">{{ counterbutton }}</button>
  <button @click="countcomputed">computed {{ numbercomputed }}</button> -->

  <input :type="typeinput">
  <button @click="showpassword">show password</button>
  <p>-----------class dan style-----------</p>

  <ul>
    <li :class="{active: isActive, fs40px: isActive}">
      test
    </li>
  </ul>
  <button @click="ubahwarna">ubah</button>
  <p>-----------rendering-----------</p>
  <ul>
    <li v-for="(item, index) in daftarrombel">{{ index + 1 }}{{ item }}</li>
  </ul>
  <p>-----------v-model-----------</p>
  <input type="text" v-model="inputkelas">
  {{ inputkelas }}
</template>

<script>

export default{
  data() {
    return{
      inputkelas: '',
      daftarrombel:['PPLG 1', 'PPLG 2', 'PPLG 3'],   
      counterbutton: 0,
      numbercomputed: 0,
      show: false,
      count: 2,
      nama: 'ramazan',
      number: 22,
      rombel: '<h1> PPLG XI-6 </h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      typeinput: 'password',
      isActive: true
    }
  },
  methods: {
    counternumber(){
      this.counterbutton += 1;
    },
    showpassword(){
      if(this.typeinput == 'password'){
        this.typeinput = 'text'
      }else{
        this.typeinput = 'password'
      }
    },
    ubahwarna(){
      if(this.isActive){
        this.isActive = false;
      }else{
        this.isActive = true;
      }
    }
  },
   computed: {
    countcomputed(){

    }
  }
}

</script>

<style>
.color{
  color: #7743DB;
  font-family: Arial, Helvetica, sans-serif;
}

.fs40px{
  font-size: 40px;
}

.active{
  color: #8E8FFA;
}
</style>