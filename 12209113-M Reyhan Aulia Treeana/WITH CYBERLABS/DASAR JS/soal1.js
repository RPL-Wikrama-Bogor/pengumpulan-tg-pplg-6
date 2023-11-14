// buatlah sebuah fungsi js yang menggunakan map untuk mengembalikan 
// rata rata nilai siswa

let student = [
    {
        nama: 'Hansen',
        umur: 20,
        nilai: [80, 90, 70, 60]
    },
    {
        nama: 'Tobi',
        umur: 21,
        nilai: [76, 67, 88, 90]
    },
    {
        nama: 'Giga',
        umur: 22,
        nilai: [76, 67, 88, 98]
    },
]

const studentWithGrade = student.map(student => {
    let sum = 0
    for (let i = 0; i < student.nilai.length; i++) {
        sum += student.nilai[i]
    }
    const avr = sum / student.nilai.length
    
    return{
        ...student,
        average: avr
    }
})

console.log(studentWithGrade);

// function calculateAverageScores(students) {
//     const averages = students.map((student) => {
//       const totalScores = student.scores.reduce((total, score) => total + score, 0);
//       const average = totalScores / student.scores.length;
//       return {
//         name: student.name,
//         average: average,
//       };
//     });
//     return averages;
//   }
  
//   const students = [
//     { name: 'Alice', scores: [85, 90, 78] },
//     { name: 'Bob', scores: [92, 88, 95] },
//     { name: 'Charlie', scores: [76, 84, 89] },
//   ];
  
//   const averageScores = calculateAverageScores(students);
//   console.log(averageScores);
  