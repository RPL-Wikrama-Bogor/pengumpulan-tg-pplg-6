// buatlah sebuah fungsi js yang menggunakan map untuk emngembalikan daftar barang dengan harga diskon 10%

const product = [
    {
        name: 'Sepatu Kulit Ular Sanca',
        price: 2000000
    },
    {
        name: 'Baju Bahan Wol Hangat',
        price: 1500000
    },
    {
        name: 'Topi Jerami Khas Finlandia',
        price: 1900000
    },
]

const productWithDiscount = product.map(product => {
    const discountedPrc = product.price * 0.1;
    return {
        ...product,
        afterDiscount : product.price - discountedPrc
    }
})

console.log(productWithDiscount);