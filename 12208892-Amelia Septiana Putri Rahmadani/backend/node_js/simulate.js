function simulateFileUpload(file, delay){
    return new Promise((resolve, reject) => {
        const interval = setInterval(() => {
            file.uploadedBytes = file.uploadedBytes || 0;
            file.uploadedBytes += 10;

            const progress = (file.uploadedBytes / file.totalBytes) * 100;

            console.log(`Uploading ${file.name} - Progress: ${progress.toFixed(2)} % `);

            if(file.uploadedBytes >= file.totalBytes){
                clearInterval(interval);
                resolve(file);
            }
        }, 100);
    });
}

 function

const filestoUpload = [
    {nama: 'file1.tst', totalBytes: 100},
    {nama: 'file2.tst', totalBytes: 150},
    {nama: 'file3.tst', totalBytes: 200},
];

simulateMultipleFileUploads(filestoUpload)
.then((uploadedFiles) => {
    console.log('Allfiles uploaded successfully:',
    uploadedFiles);
}).catch((error) =>
console.error('Error occurred during file uploade', Error);
)