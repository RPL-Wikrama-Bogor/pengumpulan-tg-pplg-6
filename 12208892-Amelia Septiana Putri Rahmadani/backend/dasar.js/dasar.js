// // Online Javascript Editor for free
// // Write, Edit and Run your Javascript code using JS Online Compiler
// // Online Javascript Editor for free
// // Write, Edit and Run your Javascript code using JS Online Compiler

// // const user = {
// //     nama:'Amel',
// //     userType:'Admin',
// // }

// // for (let i = 10;i > 0;i--){
// //     console.log(i);
// // }

// // let n = 0
// // for (let i = 0;i < 10;++i){
// //     console.log(n++);
// // }
// // console.log('---------------------------')
// // n = 0
// // for (let i = 0;i < 10;++i){
// //     console.log(++n);
// // }

// const students =[
//     {
//         nama: 'Agus',
//         nilai: 74
//     },
//     {
//         nama: 'Irsyad',
//         nilai: 100
//     },
//     {
//       nama: 'Aip',
//       nilai: 50
//     },
//     {
//         nama: 'Asep',
//         nilai: 10
//     },
//     ];
//     const studentsWithGrade = students.map(student => 
//     {
//       return{
//           ...student, //...(spreadoperator)
//           grade: 'Test',
//       };
//     });
//     console.log(studentsWithGrade);
    // const underperformingStudents = students.filter
    // (student => student.nama == 'Irsyad');
    
    // console.log(underperformingStudents);

// const array = (1,5,9,11);
// let i = 0;
// while (i < array.length){
//     console.log(array[i]);
//     i++;
// }
// do{
//     console.log(array[i]);
//     i++;
// } while (i < array.length);

// const array = (1, 3, 8, 11)
// array.forEach(val => {
//     //
//     //
//     //
//     console.log(val);
// });

// array.foreach(val =>console.log(val));
// for ()

// const nilai = 90,
// const nilaiString = 'A';

// switch(nilaiString){
//     case 'A' :
//         console.log('Nilai Anda Sangat Baik');
//         break;
//     case 'B' :
//         console.log('Nilai Anda Baik');
//         break;
//     case 'C' :
//         console.log ('Nilai Anda Kurang');
//         break;
//     default
//         console.log ('Anda Beban Keluarga');
//         break;
// };
// const nilai = 90,

// if (nilai == 90){
//     console.log('A');
// } else if(nilai == 75){
//     console.log('B');
// } else {
//     console.log('C');
// }

// console.log("Welcome to Programiz!");;
// Online Javascript Editor for free
// Write, Edit and Run your Javascript code using JS Online Compiler
// 

// const students = [
//     {
//         nama : 'John',
//         umur: 20,
//         nilai: [90, 85, 88]
//     },
//     {
//         nama : 'alice',
//         umur: 22,
//         nilai: [75, 80, 92]
//     },
//     {
//         nama : 'Bob',
//         umur: 21,
//         nilai: [88, 91, 78]
//     },
//     ];
    
const students = [
    {
        nama: 'John',
        umur: 20,
        nilai: [90, 85, 88],
    },
    {
        nama: 'Alice',
        umur: 22,
        nilai: [75, 80, 92],
    },
    {
        nama: 'Bob',
        umur: 21,
        nilai: [88, 91, 78],
    },
];


function hitungRataRataNilai(students) {
  const rataRataNilai = students.map((student) => {
    const totalNilai = student.nilai.reduce((total, nilai) => total + nilai, 0);
    const rataRata = totalNilai / student.nilai.length;

    return {
      ...student,
      rataRataNilai: rataRata,
    };
  });

  return rataRataNilai;
}

const rataRataNilaiSiswa = hitungRataRataNilai(students);
console.log(rataRataNilaiSiswa);

    
// buatlah sebuah fungsi javascript yang menggunakan map untuk mengembalikan rata-rata nilai siswa.
// console.log("Welcome to Programiz!");
console.log("Welcome to Programiz!");