// Online Javascript Editor for free
// Write, Edit and Run your Javascript code using JS Online Compiler

// contoh menggunakan if else

// const nilai = 90;

// if (nilai >=90) {
//     console.log('A');
// } else if (nilai >=75) {
//     console.log('B');
// } else {
//     console.log('C');
// }


// contoh menggunakan switch case (kondisional)
// const nilai =60;
// const nilaiString ='A';

// switch (nilaiString) {
//     case 'A':
//         console.log('Nilai anda sangat baik');
//         break;
//     case 'B':
//         console.log('Nilai anda baik');
//         break;
//     case 'c':
//         console.log('Nilai anda kurang');
//         break;
//     default:
//         console.log('Anda beban keluarga');
//         break;
// }


// const nilai = 60;
// const user = {
//     name: 'Farhan',
//     userType: 'Admin', //admin, student
// }

// let n = 0;
// for (let i = 0;i < 10;++i) {
//     console.log(++n);

// }

// console.log('---------------------------------');

// n = 0;
// for (let i = 0;i < 10;++i) {
//     console.log(n++);
// }

// console.log('----------------------------------');

// const array = [1, 5, 9, 11];

// array.forEach(val => {
//     console.log(val);
// })
// array.forEach(val => console.log(val));
// for ( let i = 0; i <array.length; i++) {
//     console.log(array[i])
// }

// console.log('-----------------------------------');

// const array = [1, 5, 9, 11];

// let i = 0;
// do {
//     console.log(array[i]);
//     i++;
// }
// while (i < array.length) {
//     console.log(array[i]);
//     i++;
// }

// const students = [
//     {
//         nama: 'Agus',
//         nilai: 74,
//         kelas: 11
//     },
//     {
//         nama: 'Irsyad',
//         nilai: '100',
//         kelas: 11
//     },
//     {
//         nama: 'Aip',
//         nilai: 50,
//         kelas: 11
//     },
//     {
//         nama: 'Asep',
//         nilai: 10,
//         kelas: 11
//     }
// ];
// const studentsWithGrage = students.map(student => {
//     let grade;
//     if (student.nilai >= 90) {
//         grade = 'A';
//     } else if (student.nilai >= 75) {
//         grade = "B";
//     } else {
//         grade = "F";
//     }
//     return {
//         ...student,
//         grade,
//     }
// });
// console.log(studentsWithGrage);

// const variabelFungsi = () => {
//     console.log('I am a function');
// }

// const fungsi2 = (message) => {
//     console.log('message');
// }

// function callFunction(aFunction) {
//     aFunction('ini message');
// }

// callFunction(fungsi2)

// const cart = [
//     {
//         namaProduk:'kaos kaki',
//         harga: 10000,
//         checked: true,
//     },
//     {
//         namaProduk:'baju',
//         harga: 20000,
//         checked: false,
//     },
//     {
//         namaProduk:'sabun',
//         harga: 50000,
//         checked: true,
//     },

//     ];
//     const totalHarga = cart.reduce((total, produk) => 
//     produk.checked ? total + produk.harga : total, 0);

//     console.log('total harga', totalHarga);


// function Siswa(dataSiswa) {
//     if (dataSiswa.length === 0) {
//         return 0;
//     }

//     const nilaiSiswa = dataSiswa.map(siswa => siswa.nilai);
//     const totalNilai = nilaiSiswa.reduce((total, nilai) => total + nilai, 0);
//     const rataRata = totalNilai / dataSiswa.length;

//     return rataRata;
// }
// const dataSiswa = [
//     {
//         nama: 'abi',
//         nilai: 80
//     },
//     {
//         nama: 'rafi',
//         nilai: 100
//     },
//     {
//         nama: 'linta',
//         nilai: 70
//     },
//     {
//         nama: 'aribawa',
//         nilai: 85
//     },
// ];

// const rataRataNilai = hitungRataRataNilaiSiswa(dataSiswa);
// console.log('Rata-rata nilai siswa:', rataRataNilai);

const students = [
    {
        nama: "abi",
        umur: 17,
        nilai: [90, 90, 90]
    },
    {
        nama: "rafi",
        umur: 20, 
        nilai: [80, 78, 60]
    },
    {
        nama: "linta",
        umur: 15,
        nilai: [50, 60, 90]
    }
]

const hasil = students.map(student => {
    const total = student.nilai.reduce((tambah, nilai) => tambah + nilai, 0);
    const rata = total / student.nilai.length;
    return {
        ...student,
        rata,
    };
});

console.log(hasil);
