<<<<<<< HEAD
function simulateFileUpload(file, delay){
    return new Promies((resolve, reject) => {
        const interval = setInterval(() => {
            file.uploadedBytes = file.uploadedBytes || 0;
            file.uploadedBytes += 10;

            const progress = (file.uploadedBytes / file.totalByTes) * 100;

            console.log(`uploading ${file.name} = Progress: ${progress.toFixed(2)}%`);

            if (file.uploadedBytes >= file.totalByTes){
                clearInterval(interval);
                resolve(file);
            }
        }, 100)
    });
}

function simulateMultipleFileUploads(files){
    const uploadPromises = files.map((file, index) => {
        const delay = (index + 1)* 1000;

        return simulateFileUpload(file, delay);
    });
    return Promise.all(uploadPromises);
}
const filesToUpload = [
    {name: 'file1.txt', totalByTes: 100},
    {name: 'file2.txt', totalByTes: 150},
    {name: 'file3.txt', totalByTes: 200},
];
simulateMultipleFileUploads(filesToUpload)
.then((uploadFiles) => {
    console.log('All files upload succesly: ',
    uploadedFiles);
})
.cath((error) => {
    console.error('error occurred during file uploads: ', error);
=======
function simulateFileUpload(file, delay){
    return new Promies((resolve, reject) => {
        const interval = setInterval(() => {
            file.uploadedBytes = file.uploadedBytes || 0;
            file.uploadedBytes += 10;

            const progress = (file.uploadedBytes / file.totalByTes) * 100;

            console.log(`uploading ${file.name} = Progress: ${progress.toFixed(2)}%`);

            if (file.uploadedBytes >= file.totalByTes){
                clearInterval(interval);
                resolve(file);
            }
        }, 100)
    });
}

function simulateMultipleFileUploads(files){
    const uploadPromises = files.map((file, index) => {
        const delay = (index + 1)* 1000;

        return simulateFileUpload(file, delay);
    });
    return Promise.all(uploadPromises);
}
const filesToUpload = [
    {name: 'file1.txt', totalByTes: 100},
    {name: 'file2.txt', totalByTes: 150},
    {name: 'file3.txt', totalByTes: 200},
];
simulateMultipleFileUploads(filesToUpload)
.then((uploadFiles) => {
    console.log('All files upload succesly: ',
    uploadedFiles);
})
.cath((error) => {
    console.error('error occurred during file uploads: ', error);
>>>>>>> bdde0b02df05d1389d7945c78e501d2f46604574
});