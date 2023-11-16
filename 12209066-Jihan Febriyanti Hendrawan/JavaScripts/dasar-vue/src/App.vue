<template>
  <p>---------------templating-------------</p>
  {{ nama }}
  {{ number }}
    <div v-html="kelas"></div>

  <p>---------------data binding-----------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">jihan</h1>
  <input :type="type">

  <p>---------------data binding-----------</p>
  {{ count + 1 }}
  {{ count == 0 ? count + 1 : count + 2 }}

  <p>----------------  v-if  ----------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">simpan</button><br>

  <div v-if="count ==1">
    number 1
  </div>
  <div v-else-if="count ==2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>

  <p>---------------computed dan method-----------</p>
  <button @click="counterNumber">method {{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>

  <input :type="typeInput">
  <button @click="showPassword">Show Password</button><br><br>
  
  <p>---------------class and style-----------</p>
  <ul>
    <!-- <li class="fs" :class="{active:isActive}"> -->
      <li :class="{
        active : isActive,
        fs40px : isActive
      }">
      test
    </li>
  </ul>
<button @click="ubahWarna" >Ubah Warna</button>

<p>---------------list rendering-----------</p>
<ul>
  <li v-for="(item, index) in daftarKelas"> {{ index+1 }}{{ item }} </li>
</ul>

<p>--------------- v-model -----------</p>
<input type="text" v-model="inputKelas"> {{ inputKelas }}

</template>

<script>
export default{
  data(){
    return {
      inputKelas: '',
      daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
      typeInput : 'password',
      counterButton :0,
      numberComputed : 0,
      show:false,
      count: 3,
      nama: 'zilly',
      number: 1,
      kelas: '<h1>kelas 11<h1>',
      nonaktif: true,
      property: {
        id: 1 ,
        class: 'color'
      },
      type: 'password',
      isActive: true
    }
  },
  methods:{
    counterNumber(){
      this.counterButton +=1;
    },
    showPassword(){
      if(this.typeInput == 'password'){
        this.typeInput ='text';
      } else {
        this.typeInput ='password';
      }
    },
    ubahWarna(){
      if(this.isActive){
        this.isActive = false;
      }else{
        this.isActive = true;
      }
    }
  },
  computed:{
    countComputed(){
      this.numberComputed +=6;
    }
  }
}
</script>

<style>
.color {
  color:pink ;
}
.active{
  color:palevioletred ;
}
.fs40px{
  font-size: 40px;
}

</style>