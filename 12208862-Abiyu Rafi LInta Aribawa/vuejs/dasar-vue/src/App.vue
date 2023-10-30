<template>
    <h1>---------templating--------</h1>
    {{ nama }}
    <br>
    {{ nis }}
    <div v-html="kelas"></div>
    <h1>------------data binding-----------</h1>
    <button :disabled="nonaktif">button</button>
    <h2 v-bind="property">abi</h2>
    <input :type="type">
    {{ count == 0 ? count + 1 : count + 2 }}
    <br>
    <br>
    <br>
    <button v-if="show">submit</button>
    <div v-if="count == 1">
        number 1
    </div>
    <div v-else-if="count == 2">
        number 2
    </div>
    <div v-else>
        lebih dari 2
    </div>
    <h1>-------Computed dan methods---------</h1>
    <input :type="typeInput">
    <button @click="showPassword">show Password</button>
    <br>
    <button @click="counterNumber">{{ counterButton }}</button>
    <button @click="countComputed"> Computed {{ numberComputed }}</button>
    <h1>-----Class dan Style------</h1>
    <ul>
        <li class="fs" :class="{
            active: isActive,
            fs40px: isActive
        }">
            test
        </li>
    </ul>
    <button @click="ubahWarna">ganti warnanya ga mas</button>
    <h1>------List Rendering------</h1>
    <ul>
        <li v-for="(item, index)
            in daftarKelas" :key="index"> {{ index + 1 }} {{ item }}</li>
    </ul>

    <h1>-------v-model---------</h1>
    <input type="text" v-model="inputKelas">
    {{ inputKelas }}
</template>

<script>
export default {
    data() {
        return {
            inputKelas: '',
            daftarKelas: ['Rpl 4', 'Rpl 5', 'Rpl 6'],
            typeInput: 'password',
            counterButton: 0,
            numberComputed: 0,
            show: false,
            count: 0,
            nama: 'abi',
            nis: 12208862,
            kelas: '<h2>XI - 6</h2>',
            nonaktif: true,
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
            if (this.typeInput == 'password') {
                this.typeInput = 'text'
            } else {
                this.typeInput = 'password'
            }
        },
        ubahWarna() {
            if (this.isActive) {
                this.isActive = false
            } else {
                this.isActive = true
            }
        }
    },
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
    color: purple;
}
</style>