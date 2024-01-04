<template>
  <div>
    <input type="text" placeholder="Nama" v-model="formDataKelas.name">
    <br>
    <input type="text" placeholder="Kelas" v-model="formDataKelas.kelas">
    <br>
    <button @click="tambahMurid">Tambah</button>

    <table>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
          <td>{{index+1}}</td>
          <td>{{murid.name}}</td>
          <td>{{murid.kelas}}</td>
          <td @click="hapusData(murid.id)"><button>Hapus</button></td>
      </tr>
    </table>
  </div>
</template>
<!-- kode template diatas -->




<!-- buat script -->

<script>
  export default {
    data(){
      return{
        dataKelas: [
          {
            id: Date.now(),
            name: "Rehan",
            kelas: "PPLG 1"
          },
          {
            id: Date.now(),
            name: "Irsyad",
            kelas: "PPLG 6"
          }
        ],

        formDataKelas: {
          name: "",
          kelas: ""
        }
      }
    },
    
    methods: {
      tambahMurid(){
        this.formDataKelas.id = Date.now();
        this.dataKelas.push(this.formDataKelas);
        this.formDataKelas = {
          name: "",
          kelas: ""
        }
      },

      hapusData(id){
        this.dataKelas = this.dataKelas.filter((murid) => murid.id != id);
      }
    }
  }
</script>

<!-- akhir script -->


<!-- styling cuy -->

<style lang="scss" scoped>

</style>