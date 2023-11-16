//untuk run
//https://www.programiz.com/javascript/online-compiler/

//1
const nilai = 90;

if (nilai >= 90) {
    console.log('A');
} else if (nilai >= 75) {
    console.log('B');
} else {
    console.log('C');
}


//2
const nilaiString = 'A';

switch (nilaiString) {
    case 'A' :
        console.log('Nilai anda Sangat Baik');
        break;
    case 'B' :
        console.log('Nilai anda Baik');
        break;
    case 'C' :
        console.log('Nilai anda Cukup');
        break;
    case 'D' :
        console.log('Nilai anda Sangat kurang');
        break;
}


//3
const user = {
    name: 'Farhan',
    userType: 'Admin',
}

switch (user.userType) {
    case 'Admin' :
        console.log('Nilai anda Sangat Baik');
        break;
    case 'Student' :
        console.log('Nilai anda Baik');
        break;
    default: 
        throw Expection('Tipe user tidak di temukan');
        break;
}


//4
for (let i = 10; i > 0;i--) {
    console.log(i);
}


//5
for (let i = 10; i > 0;++i) {
    console.log(i);
}


//6
for (let i = 10; i > 0;++i) {
    console.log(--i);
}


//7
let n = 0;
for (let i = 0;i < 10;++ i) {
    console.log(++n);
}


//8
n = 0;
for (let i = 0;i < 10;++ i){
    console.log(n++);
}


//9
const array = [ 1, 5, 9, 11];

for ( let i = 0; i < array.length; i++ ) {
    console.log(array[i]);
}


//10
const array = [ 1, 5, 9, 11];

array.forEach(val => console.log(val));


//11
const array = [ 1, 5, 9, 11];
 
array.forEach(val => {
    console.log(val);
})


//12
const array = [ 1, 5, 9, 11];
let i = 0;
while(i < array.length){
    console.log(array[i]);
    i++;
}


//13
const array = [ 1, 5, 9, 11];
let i = 0;
do {
    console.log(array[i]);
    i++;
} while(i < array.length)


//14
const students = [
    {
        nama: 'Kuromi',
        nilai: 75
    },
    {
        nama: 'Irsyad',
        nilai: 100
    },
    {
        nama: 'Feitan',
        nilai: 50
    },
];

const underperfomingStudents = students.filter
    (student => student.nilai <= 75);

console.log(underperfomingStudents);


//15
//untuk menampilkan nama feitan doang
const students = [
    {
        nama: 'Kuromi',
        nilai: 75
    },
    {
        nama: 'Irsyad',
        nilai: 100
    },
    {
        nama: 'Feitan',
        nilai: 50
    },
    {
        nama: 'Asep',
        nilai: 10
    },
];

const underperfomingStudents = students.filter
    (student => student.nama == 'Feitan');

console.log(underperfomingStudents);


//16
//menambahkan grade
const students = [
    {
        nama: 'Kuromi',
        nilai: 75
    },
    {
        nama: 'Irsyad',
        nilai: 100
    },
    {
        nama: 'Feitan',
        nilai: 50
    },
    {
        nama: 'Asep',
        nilai: 10
    },
];

const studentsWithGrade = students.map(student => {
    return {
        ...student,
        grade: 'Test',
    };
});

console.log (studentsWithGrade);


//17
// grade sesuai nilai
const students = [
    {
        nama: 'Kuromi',
        nilai: 75
    },
    {
        nama: 'Irsyad',
        nilai: 100
    },
    {
        nama: 'Feitan',
        nilai: 50
    },
    {
        nama: 'Asep',
        nilai: 10
    },
];

const studentsWithGrade = students.map(student => {
    return {
        ...student,
        grade: student.nilai >= 75 ? "Memuaskan" : "Tidak memuaskan",
    };
});

console.log (studentsWithGrade);


//18
// grade sesuai nilai ( A, B, F)
const students = [
    {
        nama: 'Kuromi',
        nilai: 75
    },
    {
        nama: 'Irsyad',
        nilai: 100
    },
    {
        nama: 'Feitan',
        nilai: 50
    },
    {
        nama: 'Asep',
        nilai: 10
    },
];
const studentsWithGrade = students.map(student => {
    let grade = '';
    if (student.nilai >= 90) {
        grade = 'A';
    } else if (student.nilai >= 75) {
        grade = 'B';
    } else {
        grade = 'F';
    }
    
    return {
        ...student,
        grade: grade,
    };
});

console.log(studentsWithGrade);


//19
const students = [
    {
        nama: 'Kuromi',
        nilai: 75
    },
    {
        nama: 'Irsyad',
        nilai: 100
    },
    {
        nama: 'Feitan',
        nilai: 50
    },
    {
        nama: 'Asep',
        nilai: 10
    },
];

if (student.nama == 'Irsyad') {
    //belom selesai
}


//20
const students = [
    {
        nama: 'Kuromi',
        nilai: 75
    },
    {
        nama: 'Irsyad',
        nilai: 100
    },
    {
        nama: 'Feitan',
        nilai: 50
    },
    {
        nama: 'Asep',
        nilai: 10
    },
];

const totalNilai = students.reduce((total, student) => total + student.nilai, 0);
console.log('Total nilai :', totalNilai);
console.log('Rata - rata nilai :', totalNilai / students.length);


//21
const cart = [
    {
        namaProduk: 'Kaos Kaki',
        harga: 10000,
        checked: true,
    },
    {
        namaProduk: 'Sepatu',
        harga: 30000,
        checked: true,
    },
    {
        namaProduk: 'Sabun',
        harga: 50000,
        checked: true,
    },
];
const totalHarga = cart.reduce((total, produk) => produk.checked ?
total + produk.harga : total ,0);
console.log('Total harga :', totalHarga);


//22
const nilai = [10000, 50, 78, 11, 89, 500];
nilai.sort((a, b) => a > b ? 1 : -1)
console.log(nilai);


//23
const cart = [
    {
        namaProduk: 'Kaos Kaki',
        harga: 10000,
        checked: true,
    },
    {
        namaProduk: 'Sepatu',
        harga: 30000,
        checked: true,
    },
    {
        namaProduk: 'Sabun',
        harga: 50000,
        checked: true,
    },
];
// cart.sort((a, b) => a.harga < b.harga ? 1 : -1);

const product = cart.find(produk => produk.namaProduk = 'Sabun');
console.log('Product :', product);


//23
const variableFungsi = () => {
    console.log('Iam a function');
}

const fungsi2 = (message) => {
    console.log(message);
}

function callFunction (aFunction) {
    aFunction('Ini message');
}

callFunction(variableFungsi);
//or
callFunction(fungsi2);


//24
const multiply = 2;
const multiplyByTwo = (number) => {
    console.log(number * multiply);
}
multiplyByTwo(50);

//atau
const multiplyByTwo = (number) => {
    console.log(number * 2);
}
multiplyByTwo(50);
