function simulateFileUpload(file, delay){
    return new Promise((resolve, reject) => {
        const interval = setInterval(() => {
            file.uploadBytes = file.uploadBytes || 0;
            file.uploadBytes += 10;


            const progres = (file.uploadBytes/file.totalBytes) * 100;

            console.log(`Uploading ${file.name} - progress: ${progres.toFixed(2)}%`);

            if(file.uploadBytes >= file.totalBytes){
                clearInterval(interval);
                resolve(file);
            }
        },100)
    })
}

function simulateMultipleFileUploads(files){
    const uploadPromises = files.map((file, index) => {
        const delay = (index + 1) * 1000;

        return simulateFileUpload(file, delay);
    });

    return Promise.all(uploadPromises);
}


const fileToUpload = [
    { name: 'file1.txt', totalBytes: 100 },
    { name: 'file2.jpg', totalBytes: 150 },
    { name: 'file3.pdf', totalBytes: 200 },
];

simulateMultipleFileUploads(fileToUpload)
    .then((uploadedFiles) => {
        console.log('All files uploaded successfully:', uploadedFiles);
    })
    .catch((error) => {
        console.log('Error occurred during file uploads:', error)
    })