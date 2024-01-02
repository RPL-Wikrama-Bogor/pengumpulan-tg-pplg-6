const student = [
    {
    nama: 'Agus',
    nilai: 75,
    kelas: 11
    },
    {
    nama: 'Asep',
    nilai: 10,
    kelas: 11
    },
    {
    nama: 'Restu',
    nilai: 100,
    kelas: 11
    },
    {
    nama: 'alip',
    nilai: 50,
    kelas: 11
    },
];
const totalNilai = student.reduce((total, student) => total + student.nilai, 0);

const multiply = 10;
const multiplyByTwo = (number) => {
    console.log(number * 2);
}
multiplyByTwo(50);

const variableFungsi = () => {
    console.log('I am a function');
}
const fungsi2 = () => {
    console.log('hsgxdughud');
}
function callFunction (aFunction) {
    aFunction('ini massage');
}
callFunction(fungsi2);

const cart = [
    {

        namaProduk: 'Kaos kaki',
        harga: 10000,
        checked: true,
    },
    {
        namaProduk: 'sepatu',
        harga: 1000000,
        checked: true,
    },
    {
        namaProduk: 'baju',
        harga: 100000,
        checked: true,
    },
];
const totalHarga = cart.reduce((total, produk) => produk.checked ? total + produk.harga : total, 0);
console.log('total harga', totalHarga);

const nilai = [100, 50, 78, 11, 89,500];
nilai.sort((a,b) => a > b ? 1 : -1);
console.log(nilai);

console.log('totalNilai', totalNilai);
console.log('rata-rata nilai', totalNilai / student.nilai);

//spread operator
const studentWithGrade = student.map(student => {
    let grade;
    if(student.nilai >= 90){
        grade = 'A';
    } else if (student.nilai >= 75){
        grade = 'B';
    } else {
        grade = 'F';
    }

    return {
        ...student,
        grade, 
    };
});
console.log(studentWithGrade);
// const underperformingStudent = student.filter(student => student.nilai <= 70);
// console.log(underperformingStudent);

// const nilai = 60;
// const user = {
//     nama: 'Restu',
//     userType: 'Admin',
// }
// let n = 0;
// for(let i = 0;i < 10;++i) {
//     console.log(++n);
// }
// n = 0;
// for(let i = 0;i < 10;++i) {
//     console.log(++n);
// }

// switch (user.userType) {
//     case 'A':
//         console.log('nilai anda sangat baik');
//         break;
//     case 'B':
//         console.log('nilai anda baik');
//         break;
//     case 'C':
//         console.log('nilai anda kurang');
//         break;
//     default:
//         console.log('anda beban keluarga');
//         break;    
// }

// if(nilai >= 90){
//     console.log('A');
// } else if

// const array = [1, 5, 9 , 11];

// let i = 0;
// do {
//     console.log(array[i]);
//     i++;
// }while (i < array.length) 
     
// while (i < array.length){
//     console.log(array[i]);
//     i++;
// }

// array.forEach(val => {
//     // 
//     // 
//     // 
// })
// array.forEach(val => console.log(val));

// for (let i = 0; i < array.length;i++){
//     console.log(array[i]);
// }

// function rataratanilaisiswa(dataSiswa) {
//     const nilaiRataRata = dataSiswa.map(siswa => {
//         const totalNilai = siswa.nilai.reduce((total, current) => total + current, 0);
//         const rataRata = totalNilai / siswa.nilai.length;
//         return {
//             nama: siswa.nama,
//             rataRataNilai: rataRata
//         };
//     });

//     return nilaiRataRata;
// }
// const nilaiRataRataSiswa = rataratanilaisiswa(student);
// console.log(nilaiRataRataSiswa);