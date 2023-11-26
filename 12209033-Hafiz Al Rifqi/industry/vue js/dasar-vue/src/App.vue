<template>
  {{ nama }}
  {{ number }}

  <div v-html="kelas"></div>
  <p>-----------data bidang-----------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">Roheng penguasa bumi</h1>
  <input :type="typeinput">
  <p>-----------data-----------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
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
  <p>-----------computed and mathod-----------</p>
  <input :type="typeinput">
  <button @click="showpassword">show password</button>
  <!--button @click="counternumber">{{  counterbutton }}</button>
  <button @click="counternumber">computed {{  counterbutton }}</button>-->
  <p>-----------computed and mathod-----------</p>
  <ul>
    <li class="fs" :class="{
    active:isActive,
    fs40px: isActive
    }">
      test
    </li>
  </ul>
  <button @click="ubahwarna">ubah</button>
  <p>--------list rendering-------</p>
  <ul>
    <li v-for="(item,index) in daftarkelas">
   {{ index+1 }}{{ item }}</li>
  </ul>
  <p>------v-model-------</p>
  <input type="text" v-model="inputkelas">
  {{ inputkelas }}


</template>


<script>
export default{
  data(){

    return{
      inputkelas:'',
      daftarkelas:['RPL 1,','RPL 2','RPL 3'],
      typeinput: 'password',
      show: false,
      count:2,
      nama:'roheng',
      number: '11',
      kelas:'<h1>kelas 12</h1>',
      nonaktif:false,
      property:{
        id:1,
        class: 'color',
      },
      typeinput:'password',
      isActive:true
    }
  },
  methods: {
    counternumber(){
      this.counterbutton += 1;
    },
    showpassword(){
      if (this.typeinput == 'password'){
        this.typeinput = 'text'
      }else{
        this.typeinput = 'password'
      }
    },
    ubahwarna() {
      if (this.isActive){
        this.isActive = false
      }else{
        this.isActive = true
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
    color: blue;
    font-family: Arial, Helvetica, Sans-serif;
  }
  .fs40px{
    font-size: 40px;
  }
  .active{
    color:rgb(255, 0, 170);
  }

</style>