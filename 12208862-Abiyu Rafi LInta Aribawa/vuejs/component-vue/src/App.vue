<template>
  <div class="row-service">
    <Card v-for="item in data" :key="item" :title="item.title" :description="item.description">
      <p>{{ item.date }}</p>
    </Card>
  </div>
  <button class="btn-service">detail</button>
  <MyBtn id="btn1" name="btn"></MyBtn>
  <MyBtn id="btn2" name="btn2"></MyBtn>

</template>
<script>
import Card from '@/components/my components/Card.vue';

export default {
  components: {
    Card,
    'card-service': Card
  },
  data() {
    return {
      data: [
        {
          title: "ini title",
          description: "ini deskripsi",
          date: "12 Juni 2023"
        },
        {
          title: "ini title2",
          description: "ini deskripsi2",
          date: "12 Juni 2023"
        }
      ]
    }
  }
}

</script>

<style >
.row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.btn-service-global {
  margin-top: 10px;
  font-size: 15px;
  font-weight: 400;
  color: white;
  background-color: #1adb4a;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
}
</style>
