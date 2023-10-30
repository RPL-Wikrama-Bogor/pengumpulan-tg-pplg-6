<template>
  <p>----------------templating----------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>----------------data binding----------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">Muhammad Riesky Fabiansyah</h1>
  <input :type="type">
  <p>----------------data binding----------------</p>
  {{ count == 0 ? count = 1 : count + 2 }}
  <p>----------------v-if----------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>
  <div v-if="count == 1">
    number 1
  </div>
  <div v-else-if="count == 2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>
  <p>----------------computed dan methods----------------</p>
  <button @click="counterNumber">{{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  <input :type="type">
  <button @click="showPassword">show password</button>
  <p>----------------class dan style----------------</p>
  <ul>
    <li :class="{
      active: isActive,
      fs40px: isActive
    }">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <p>----------------list rendering----------------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">{{ index + 1 }} {{ item }}</li>
  </ul>
  <p>----------------v-model----------------</p>
  <input type="text" v-model="inputKelas">{{ inputKelas }}
</template>

<script>
export default {
  data() {
    return {
      inputKelas: '',
      daftarKelas: ['RPL 1', 'RPL 2', 'RPL 3'],
      counterButton: 0,
      numberComputed: 0,
      show: true,
      count: 1,
      nama: 'Manca',
      number: '1',
      kelas: '<h1>kelas</h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      type: 'password',
      isActive: true
    }
  },
  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword() {
      if (this.type == 'password') {
        this.type = 'text';
      } else {
        this.type = 'password';
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
  color: red;
}

.fs40px {
  font-size: 30px;
}

.active {
  color: blue;
}
</style>