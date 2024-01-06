function simulateFileUpload(file,delay){
    return new Promise((resole,reject) =>{
        const interval = setInterval (() => {
            file.uploadedBytes = file.uploadBytes || 0;
            file.uploadedBytes += 10;

            const progress = (file.uploadedBytes / file,totalBytes) * 100;

            console.log('Uploading ${file.name} - Progress: ${progress.toFixed(2)}%');

            if(file.uploaddeBytes >= file.totalBytes){
                clearInterval(interval);
                resolve(file);
            }
        }, 100);
    });
}

function simulateMultipleFileUploads(files){
    const uploadPromises = files.map((file,index) => {
        const delay =(index + 1) * 1000;  //Simulate 1-second delay for each file
        
        return simulateFileUpload(file,delay);
    });
    
    return Promise.all(uploadPromises);
}

const filesToUpload = [
    {name:'file1.txt',totalBytes: 100},
    {name:'file1.jpg',totalBytes: 150},
    {name:'file1.pdf',totalBytes: 200},
];
simulateMultipleFileUploads(fileToUpload)
.then((uploadedFiles) => {
    console.log('All files uploaded succesfully:',uploadedFiles);
})
.catch((error) => {
    console.error('Error occurred during file uploads:', error);
});
