function simulateFileUpload(file,delay) {
    return new Promise((resolve, reject)=>{
        const interval = setInterval(()=> {
            file.uploadeBytes = file.uploadeBytes || 0;;
            file.uploadeBytes += 10;

            const progress = (file.uploadeBytes / file.totalBytes) * 100;

            console.log(`Uploading ${file.name} - progress: ${progress.toFixed(2)}%`)

            if (file.uploadeBytes >= file.totalBytes) {
                clearInterval(interval);
                resolve(file);
            }
        },100);
    });
}

function simulateMultipleFileUpload(files) {
    const uploadPromises = files.map((file, index)=>{
        const delay = (index + 1) * 100; //Simulate 1- second delay foreach file

        return simulateFileUpload(file, delay);
    });
    return Promise.all(uploadPromises);
}
const filesToUpload = [
    {
        nama: 'file1.txt',
        totalBytes: 100
    },
    {
        nama: 'file2.jpg',
        totalBytes: 150
    },
    {
        nama: 'file3.pdf',
        totalBytes: 200
    }
];
simulateMultipleFileUpload(filesToUpload)
.then((uploadedFiles)=>{
    console.log('All files uploaded succesfully:',uploadedFiles);
})
.catch((error)=>{
    console.error('Error occured during file uploads:', error);
});