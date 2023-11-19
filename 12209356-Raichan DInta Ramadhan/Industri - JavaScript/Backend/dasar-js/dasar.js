// const multipy = 2;
// const multiplyByTwo = (number) => {
//     console.log(number * 2);
// }

// multiplyByTwo(50);


// const variabelFungsi = () => {
//     console.log('I am a function');
// }
// const fungsi2 = (message) => {
//     console.log(message);
// }

// function callFunction(aFunction) {
//     aFunction('Ini message');
// }

// callFunction(fungsi2);
 
// const cart = [
//   {
//     namaProduk: 'Kaos kaki',
//     harga: 10000,
//     checked: 'true',
//   },
//   {
//     namaProduk: 'Sepatu',
//     harga: 10000,
//     checked: 'false',
//   },
//   {
//     namaProduk: 'Sabun',
//     harga: 300000,
//     checked: 'true',
//   },
// ];

// const totalHarga = cart.reduce((total, produk) => produk.checked === 'true' ? total + produk.harga : total, 0);

// console.log('totalHarga', totalHarga);

// const nilai = [100, 50, 78, 11, 89, 500];

// nilai.sort((a, b) => a > b ? 1 : -1);
// cart.sort((a, b) => a.harga < b.harga ? 1 : -1);

// const product = cart.find(produk => produk.namaProduk === 'Kaos kaki');

// console.log('product', product ?? 'Produk tidak ditemukan');

// const nilai = 60;
// const nilaiString = 'A';
// const students = [
//     {
//         nama: 'Agus',
//         nilai: 75,
//         kelas: 11
//     },
//     {
//         nama: 'Khairul',
//         nilai: 95,
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

// const studentsWithGrade = students.map(student => {
//     let grade;
//     if (student.nilai >= 90) {
//         grade = 'A';
//     } else if (student.nilai >= 75) {
//         grade = 'B';
//     } else {
//         grade = 'C'; 
//     }

//     return {
//         ...student,
//         grade,
//     };
// });

// console.log(studentsWithGrade);

// const total = students.reduce((total, students) => total + students.nilai ,0);
 
//  console.log('total ', total);
//  console.log('Rata-rata ' ,total / students.length);

// const underperformingStudents = students.filter
//     (student => student.nilai <= 75);
    
// console.log(underperformingStudents);

// const underperformingStudents = students.filter
//     (student => student.nama == 'Khairul');
    
// console.log(underperformingStudents);

// const array = [1, 5, 9, 11];

// let i = 0;
// do {
//     console.log(array[i]);
//     i++;
// } while (i < array.length)

// while (i < array.length) {
//     console.log(array[i]);
//     i++;
// }

// array.forEach(val => {
//     // 
//     // 
//     // 
//     console.log(val);
// });

// console.log('------------------------');

// array.forEach(val => console.log(val));

// console.log('------------------------');

// let n = 0;
// for (let i = 0; i < array.length; i++) {
//     console.log(array[i])
// }

// for (let i = 0; i < 10; ++i) {
//     console.log(i);
// }

// console.log('------------------------');

// n = 0;
// for (let i = 0; i < 10; ++i){
//     console.log(++n);
// }

// switch (nilaiString) {
//     case 'A':
//         console.log('Nilai anda Sangat Baik');
//         break;
//     case 'B':
//         console.log('Nilai anda Baik');
//         break;
//     case 'C':
//         console.log('Nilai anda Kurang');
//         break;
//     default:
//         console.log('Anda beban Keluarga');
//     break;
// }

// if (nilai >= 90 ) {
//     console.log('A');
// } else if (nilai >= 75 ) {
//     console.log('B');
// } else {
//     console.log('C');
// }

// const students = [
//     {
//       nama: "John",
//       umur: 20,
//       nilai: [90, 85, 88]
//     },
//     {
//       nama: "Alice",
//       umur: 22,
//       nilai: [75, 80, 92]
//     },
//     {
//       nama: "Bob",
//       umur: 21,
//       nilai: [88, 91, 78]
//     },
// ];

// function hitungRataRataNilai(students) {
//   const rataRataNilai = students.map((student) => {
//     const totalNilai = student.nilai.reduce((total, nilai) => total + nilai, 0);
//     const rataRata = totalNilai / student.nilai.length;

//     return {
//       nama: student.nama,
//       rataRataNilai: rataRata,
//     };
//   });

//   return rataRataNilai;
// }

// const rataRataNilaiSiswa = hitungRataRataNilai(students);
// console.log(rataRataNilaiSiswa);

// buatkan sebuah fungsi Javascript yang menggunakan map untuk mengembalikan rata-rata nilai siswa
const students = [
    {
      nama: "John",
      umur: 20,
      nilai: [90, 85, 88]
    },
    {
      nama: "Alice",
      umur: 22,
      nilai: [75, 80, 92]
    },
    {
      nama: "Bob",
      umur: 21,
      nilai: [88, 91, 78]
    },
  ];
  
  const map = students.map(student => {
    const totalNilai = student.nilai.reduce((total, nilai) => total + nilai, 0);
    const rataRata = totalNilai / student.nilai.length;
    return {
      ...student, 
      rataRata
    };
  });
  
  console.log(map);
  
  function hitungRataRataNilai(students) {
    const rataRataNilai = students.map((student) => {
      const totalNilai = student.nilai.reduce((total, nilai) => total + nilai, 0);
      const rataRata = totalNilai / student.nilai.length;
  
      return {
        nama: student.nama,
        rataRataNilai: rataRata,
      };
    });
  
    return rataRataNilai;
  }
  
  const rataRataNilaiSiswa = hitungRataRataNilai(students);
  console.log(rataRataNilaiSiswa);