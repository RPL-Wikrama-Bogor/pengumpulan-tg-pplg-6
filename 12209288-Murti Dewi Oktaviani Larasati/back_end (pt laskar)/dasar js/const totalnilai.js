const cart = [
    {
        namaProduk: 'kaos kaki',
        harga: 10000,
        checked: true,
    },
    {
        namaProduk: 'sepatu',
        harga: 100000,
        checked: false,
    },
    {
        namaProduk: 'sabun',
        harga: 500000,
        checked: true,
    }
    ];
const totalHarga = cart.reduce((total, produk) => produk.checked ? total + produk.harga : total,0);
console.log('totalHarga', totalHarga)

const nilai = [100, 50, 78, 11, 89, 500];
nilai.sort();
console.log(nilai);

