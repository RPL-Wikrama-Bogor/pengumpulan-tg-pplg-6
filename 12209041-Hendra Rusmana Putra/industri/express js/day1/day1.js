const nilai = 60;
const nilaiString = 'A';
const user = {
    name: 'Asep',
    userType: 'Admin',
}

const siswa =[
    {
        nama: 'Agus',
        rombel: 'PPLG X-3',
        nilai: 74
    },
    {
        nama: 'Orlando',
        rombel: 'PPLG X-6',
        nilai: 50
    },
    {
        nama: 'Komat',
        rombel: 'PPLG X-1',
        nilai: 90
    }
];


const studentsWithGrade = siswa.map(
    siswa => {
      let grade;
      
      if(siswa.nilai >= 90){
          grade = 'A';
      } else if (siswa.nilai >=75){
          grade = 'B';
      } else {
          grade = 'C';
      }
      return {
      ...siswa,
      grade,
};

    });
    
    console.log(studentsWithGrade);

// const underperformingStudents = siswa.filter (siswa => siswa.nama == 'Orlando');
    
// console.log(underperformingStudents);

// const array = [1, 2, 3, 4, 9];


// let i = 0;
// while (i < array.length){
//     console.log(array[i]);
//     i++;
// }

// array.forEach(val => console.log(val));

// array.forEach(val => {
//     // 
//     // 
//     // 
    
//     console.log(val);
// });



// for (let i = 0; i < array.length; i++){
//     console.log(array[i])
// }


// let n = 0;
// for (let i = 0;i<10;i++){
//     console.log(++n);
// }

// console.log('-----------------------');

// n = 0
// for (let i = 0;i<10;++i){
//     console.log(n++);
// }


// switch (user.userType){
//     case 'Admin':
//         console.log('Anda admin');
//         break;
//     case 'Student':
//         console.log('Anda murid');
//         break;
//     default:
//         throw Exception('ok');
//         break;
// }

// switch (nilaiString){
//     case 'A':
//         console.log('Nilai anda Sangat Baik');
//         break;
//     case 'B':
//         console.log('Nilai anda Baik');
//         break;
//     case 'C':
//         console.log('Nilai Anda kurang');
//         break;
//     default:
//         console.log('Anda Beban');
//     break;
        

// }




// const nilai = 90;

// if(nilai ==90){
//     console.log('A');
// } else if (nilai == 75){
//     console.log('B');
// } else{
//     console.log('C');
// }

students.map(function(student){
    return{
        ...student,
    }
})

const map = students.map(student =>{
    const totalNilai = student.nilai.reduce((total, nilai)=> total + nilai, 0)
    const rataRata = totalNilai / student.nilai.length
    return{
        ...student,
        rataRata: rataRata
    }
});

const res = student.nilai.sum()
const students = [
    {
        nama: 'John',
        umur: 20,
        nilai: [90,85,88]
    },
    {
        nama: 'Alice',
        umur: 22,
        nilai: [75,80,92]
    },
    {
        nama: 'Bob',
        umur: 21,
        nilai: [88,91,78]
    }
] 

function rataRataNilai(students) {
    return students.map(student =>{
        const rata = student.nilai.reduce((total,nilai) => total + nilai, 0) /
        student.nilai.length;
        return{
            ...student, 
            nilairatarata: rata
        }
    })
}

const result = rataRataNilai(students)
console.log(result)