//---number
let bilanganBulat = 42;
let bilanganPecahan = 3.14;

//string
let text1 = 'wanda';
let text2= 'nda';

//bolean
let benar = true;
let salah = false;

//null
let tidakAdaNilai = null;

//undefined
let variabelBelumdiisi;
console.log(variabelBelumdiisi);

//symbol
const simboUnik = Symbol('descripsi');

//array
let angka = [1, 2, 3, 4, 5 ];

//function 
function tambah(a, b) {
    return a + b;
}

//object
let mahasiswa = {
    nama: 'wanda',
    usia:16,
    jurusan: 'pplg'
};

//operator
let hasil = 5 + 3;
let hasill = 5 - 2;
let total = 5 * 2;
let jumlah = 5 / 2;
let hasi = 5 % 2;
let hasilp = 5 == 5; //hasilnya true
let juml = 10 != 5; // hasilnya true
let jml = 5 < 2;
let hasii = 5 > 2;
let hsil = 5 >= 5; //hasilnya true
let hsl = true && false;
let hsll = true || false;
let hasir = !true;

let angla = 5;
angla +=3;

//?
 let objek = null;
 let nilai = objek?.properti;
 console.log(nilai);


//operator kondisional
 let umur = 18;
 let status = (umur >= 18) ? "dewasa" : "anak anak";
 console.log(status);

 // Switch Case
switch (nilaiString) {
  case "A":
    console.log("Nilai Anda Baik");
    break;
  case "B":
    console.log("Nilai Anda Bagus");
    break;
  case "C":
    console.log("Nilai Anda Kurang");
    break;
  case "D":
    console.log("Nilai Anda Sangat Kurang");
    break;
  default:
    console.log("Anda Bukan Keluarga");
  break;
}

//arrow function
let sum = (a, b) => {
    let result = a + b;
    return result;
};
alert( sum(1, 2) );

//class function
const greet = function(nama) {
    console.log('hello, ${nama} !');
};

const sayHello = greet;
sayHello('wanda');

//penggunaan defaul value
// defaul parameter dalam function
function sapa(nama = "pengunjung") {
    console.log('hai, ${nama}!');
}

sapa();
sapa("wanda");

//mengatasi variabel yg tidak terdefinisi
let jumlahh = 10;
let totall = jumlahh + (hargaSatuan || 0);


//operator ternary
let harga = hargasatuan !== undefined ? hargaSatuan: 0;

//nullisg coakescing operator
let hrga = hrgaSatuan ?? 0;

//map
const studentsWithGrage = students.map(student => {
        let grade;
        if (student.nilai >= 90) {
            grade = 'A';
        } else if (student.nilai >= 75) {
            grade = "B";
        } else {
            grade = "F";
        }
        return {
            ...student,
            grade,
        }
    });
    console.log(studentsWithGrage);

//filter
const underperformingStudents = students.filter(student => student.nama == 'Aip' );
console.log(underperformingStudents);

//reduce
const _numberReduce = [1, 2, 3, 4, 5];
const _sumReduce = numbers.reduce((accumulator, currentValue) => accumulator + currentValue,);

//forEach
const fruits = ['aple', 'banana', 'cerry'];
fruits.forEach((fruit) => console.log(fruit));

//sort
const fruitst = ['banana', 'apple', 'strawberry'];
fruitst.sort();

const nilaii = [100, 50, 78, 11, 89, 500];
nilai.sort((a, b) => {
    if (a < b) {
        return -1
    }
    
    if (a >b ) {
        return 1
    }
})
console.log(nilai);


//find
const numberss = [1, 2, 3, 4, 5];
const result = numberss.find((numberss) => numbers > 3);
console.log(result);

//splice bisa mengubah, menambahkan dan menghapus
let angkaa = [1, 2, 3, 4];
angkaa.splice(2, 2);
angkaa.shift(); //untuk menghapus yang pertama
angkaa.push();//mengembalikan yng pertama


//slice menciptakan arrya yang baru
//splice tidak menciptakan array yang baru


 //  const nilai = [100, 50, 78, 11, 89, 500];
    //  nilai.sort((a, b) => a > b ? 1 : -1)
    //  cart.sort((a, b) => a.harga < b.harga ? 1 : -1);
     
    //  const product = cart.find(produk => produk.namaProduk === 'kaos kaki');
     
    //  console.log('produk', product ?? 'product tidak ditemukan');

//if else
// if (nilai >= 90) {
//   console.log("A");
// } else if (nilai >= 75) {
//   console.log("B");
// } else {
//   console.log("C");
// }



// const multiplyByTwo = (number) => {
//     console.log(number * 2);
    
// }
// multiplyByTwo(50);


// let n = 0;
// for (let i = 0; i < 10; i++) {
//     console.log(++n);
// }

// console.log('----- PEMBATAS -----')

// n = 0;
// for (let i =0; i < 10; ++i) {
//     console.log(n++)
// }


// const array = [1, 5, 6, 7 , 9];
 
//  let i = 0;
//  while (i < array.length) {
//      console.log(array[i]);
//      i++;
//  }
 
//  i =  0;
//  do {
//     console.log(array[i]);  
//     i++
//  }
//  while (i < array.length);
 
//  for (let i = 0; i < array.length; i++){
//     console.log(array[i]);
//  }

// array.forEach(val => console.log(val));

// const variabelFungsi = () => {
//     console.log('I am a function');
// }

// const fungsi2 = (message) => {
//     console.log('message');
// }

// function callFunction(aFunction) {
//     aFunction('ini message');
// }

// callFunction()


