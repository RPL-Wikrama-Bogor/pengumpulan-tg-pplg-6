const students = [
    {
        nama: 'Nia',
        nilai: 100
    },
    {
        nama: 'Aulia',
        nilai: 75
    },
];
const studentsWithGrade = students.map(students => {
    let grade;
    if(students.nilai >= 90){
        grade = "A";
    }else if(students.nilai >= 75){
        grade = "B";
    }else{
        grade = "F";
    }
    return{
        ... students,
        grade,
    };
});
console.log(studentsWithGrade);
