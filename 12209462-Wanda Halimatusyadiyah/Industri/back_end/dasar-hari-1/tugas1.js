//tugas 1

const cart = [
    {
        namaProduk:'kaos kaki',
        harga: 10000,
        checked: true,
    },
    {
        namaProduk:'baju',
        harga: 20000,
        checked: false,
    },
    {
        namaProduk:'sabun',
        harga: 50000,
        checked: true,
    },
    
    ];
    const totalHarga = cart.reduce((total, produk) => 
    produk.checked ? total + produk.harga : total, 0);
    
    console.log('total harga', totalHarga);


const siswa = [
  {
    nama: 'wanda',
    umur: 16,
    nilai: [90, 80, 79]
  },
  {
    nama: 'nda',
    umur: 17,
    nilai: [99, 86, 77]
  },
  {
    nama: 'halima',
    umur: 19,
    nilai: [96, 89, 89]
  }
];

function rataRataNilaiSiswa(siswa) {
const rataRata = siswa.map(siswa => {
const totalNilai = siswa.nilai.reduce((total, nilai) => total+ nilai, 0);
const rataRata = totalNilai / siswa.nilai.length;
    return { ...siswa, rataRata };
  });

  return rataRata;
}

const rataRataSiswa = rataRataNilaiSiswa(siswa);
console.log(rataRataSiswa);