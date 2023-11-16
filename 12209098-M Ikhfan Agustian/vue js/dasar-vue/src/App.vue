<template>
    {{ nama }}
    {{ number }}

    <div  v-html="kelas"></div>
    <p>------------------------data------------------------</p>
    <button :disabled="nonaktif">button</button>
    <h1 v-bind="property">APONG15JUNI</h1>
    <p>--------------------------data--------------------</p>
    <input :type="typeinput">
    {{ count + 3  }}
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
    
   <button @click="counterNumber">{{ counterNumber }}</button>
    {{ counterButton }}
    <button @click="countComputed">computed{{ numberComputed }}</button>
    <p>--------------------------data--------------------</p>
    <input :type="typeinput">
    <button @click="showPassword"> show password</button>
   
    
    <ul>
        <li :class="{active:isActive, fs40px:isActive}">
            test
        </li>
    </ul>
    <ul>
        <button @click= "ubahWarna" >ubahWarna</button>
        
   </ul>
   <li v-for="(item,index) in daftarKelas">{{ index +1 }} {{ item }} </li>
   <p>---------------------v model------------------</p>
   <input type="text" v-model="inputKelas">{{ inputKelas }}
   
</template>
<script>
export default{
    data(){
        return{
            inputKelas: '' ,
            daftarKelas:['RPL 1', 'RPL 2','RPL 3'],
            counterButton:0,
            numberComputed:0,
            show:false,
            count:2,
            nama:'asep',    
            number: 1,
            kelas: '<h1> kelas xi</h1>',
            nonaktif:false,
            property: {
                id:1,
                class:'color'
            },
            typeinput:'pasword',
            isActive:true
        }
    },
    methods:{
        counterNumber(){
        this.counterButton += 1;
        },
        showpassword(){
        if(this.typeinput == 'password'){
            this.typeinput = 'text'
         }else{
            this.typeinput = 'password'
         }
        
    },
    ubahWarna(){
        if(this.isActive){
            this.isActive = false;
        }else{
            this.isActive = true;
        }
        
    },
   
    },

    
    computed:{
        countComputed(){
            this.numberComputed +=6

        }
    }
}
</script>
<style>
.color{
    color:aqua;
    font-family: Arial,Helvetica,sans-serif;
}
.fs40px{
    font-size: 40px;
}
.active{
    color:antiquewhite;
}
</style>