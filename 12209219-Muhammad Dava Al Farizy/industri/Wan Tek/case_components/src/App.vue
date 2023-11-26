<template>
  <!-- jumlah card sama dengan jumlah data CardContents -->
  <Card v-for="(item, index) in CardContents" :key="index" :judul="item.title" :text="item.text" :image="item.image">
  <!-- kodingan yang ada di tengah component bakal masuk ke slot -->
  <small>Created by: Me!</small>
  </Card>
</template>

<script> 
// panggil file
import Card from '@/components/Card.vue';
export default {
  // components apa saja yanf akan ditampilkan
  components: {
    // definisi componen agar bisa digunakan di template
    Card, 
  },
  // penyimpanan variable
  data() {
    return {
    CardContents: [{
      title: 'Name :',
      text: `<ul>
                <li>Gojo Satorou</li>
              </ul>
                <p>“You're Basically Half A Curse Already.”<p>`,
      image: 'gojo.jpeg',
    },
    {
      title: 'Tanggal Lahir :',
      text: ` <ul>
                <li>04 Oktober 1995</li>
                <li>The Libra boy</li>
                
            </ul>`,
            image: 'BMW F82 M4.jpeg'
    }
  ]
  }
} 
}
</script>

<style>

</style>