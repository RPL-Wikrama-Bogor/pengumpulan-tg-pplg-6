// // Online Javascript Editor for free
// // Write, Edit and Run your Javascript code using JS Online Compiler

// // const nilai = 90;
// // const nilaiString = "A";
// // const user = {
// //   user: "Manca",
// //   userType: "Admin",
// // }

// const students = [
//     {
//         nama: 'Agus',
//         nilai: 74
//     },
//     {
//         nama: 'Irsyad',
//         nilai: 100
//     },
//     {
//         nama: 'Aip',
//         nilai: 50
//     },
//     {
//         nama: 'Asep',
//         nilai: 10
//     }
// ];

// const totalNilai = students.reduce((total, student) => total + student.nilai, 0);
// console.log('Total Nilai ', totalNilai)

// const studentWithGrade = students.map( student => {
//     return {
//         ... student,
//         grade: student.nilai >= 90 ? "A" : student.nilai >= 75 ? "B" : "C"
//     };
// });

// console.log(studentWithGrade);

// // const underperformingStudents = students.filter(student => student.nama == 'Aip' );
// // console.log(underperformingStudents);

// // switch (user.userType) {
// //   case "Admin":
// //     console.log("Nilai Anda Baik");
// //     break;
// //   case "Student":
// //     console.log("Nilai Anda Bagus");
// //     break;
// //   default: 
// //     throw exception("Invalid user type");
// //   break;
// // }


// // // If Else
// // if (nilai >= 90) {
// //   console.log("A");
// // } else if (nilai >= 75) {
// //   console.log("B");
// // } else {
// //   console.log("C");
// // }

// // // Switch Case
// // switch (nilaiString) {
// //   case "A":
// //     console.log("Nilai Anda Baik");
// //     break;
// //   case "B":
// //     console.log("Nilai Anda Bagus");
// //     break;
// //   case "C":
// //     console.log("Nilai Anda Kurang");
// //     break;
// //   case "D":
// //     console.log("Nilai Anda Sangat Kurang");
// //     break;
// //   default:
// //     console.log("Anda Bukan Keluarga");
// //   break;
// // }

// // let n = 0;
// // for (let i = 0; i < 10; i++) {
// //     console.log(++n);
// // }

// // console.log('----- PEMBATAS -----')

// // n = 0;
// // for (let i =0; i < 10; ++i) {
// //     console.log(n++)
// // }


// // const array = [1, 5, 6, 7 , 9];
 
// //  let i = 0;
// //  while (i < array.length) {
// //      console.log(array[i]);
// //      i++;
// //  }
 
// //  i =  0;
// //  do {
// //     console.log(array[i]);  
// //     i++
// //  }
// //  while (i < array.length);
 
// //  for (let i = 0; i < array.length; i++){
// //     console.log(array[i]);
// //  }

// // array.forEach(val => console.log(val));


// // array.forEach(val => {
// //   //
// //   //
// //   //
// //   console.log(val);
// // });


// // const students = [
// //     {
// //         nama: 'Agus',
// //         nilai: 74,
// //         kelas: 11
// //     },
// //     {
// //         nama: 'Irsyad',
// //         nilai: '100',
// //         kelas: 11
// //     },
// //     {
// //         nama: 'Aip',
// //         nilai: 50,
// //         kelas: 11
// //     },
// //     {
// //         nama: 'Asep',
// //         nilai: 10,
// //         kelas: 11
// //     }
// // ];
// // const studentsWithGrage = students.map(student => {
// //     let grade;
// //     if (student.nilai >= 90) {
// //         grade = 'A';
// //     } else if (student.nilai >= 75) {
// //         grade = "B";
// //     } else {
// //         grade = "F";
// //     }
// //     return {
// //         ...student,
// //         grade,
// //     }
// // });
// // console.log(studentsWithGrage);

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


// //     const nilai = [100, 50, 78, 11, 89, 500];
// // //     nilai.sort((a, b) => {
// // //         if (a < b) {
// // //             return -1
// // //         }
        
// // //         if (a >b ) {
// // //             return 1
// // //         }
// // //     })
// // //     console.log(nilai);
    
    
//      const nilai = [100, 50, 78, 11, 89, 500];
//      nilai.sort((a, b) => a > b ? 1 : -1)
//      cart.sort((a, b) => a.harga < b.harga ? 1 : -1);
     
//      const product = cart.find(produk => produk.namaProduk === 'kaos kaki');
     
//      console.log('produk', product ?? 'product tidak ditemukan');