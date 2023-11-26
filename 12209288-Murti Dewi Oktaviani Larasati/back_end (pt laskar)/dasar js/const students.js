console.log('-----------------------------------');
const students = [
     {
         nama: 'Murti',
         nilai: 75
     },
     
     {
         nama: 'Wanda',
         nilai: 100
     },
     
     {
         nama: 'Nda',
         nilai: 50
     },
     
     
     ];
     
const studentsWithGrade = students.map(student => {
    return {
        ...student,
        grade: 'Test',
    }
})
