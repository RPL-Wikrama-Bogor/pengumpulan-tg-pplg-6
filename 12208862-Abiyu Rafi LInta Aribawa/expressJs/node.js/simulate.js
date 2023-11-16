function simulateFileUpload(file, delay) {
    return new Promise((resolve, reject) => {
        const interval = setInterval(() => {
            file.uploadedBytes = file.uploadedBytes || 0;
            file.uploadedBytes += 10;

            const progress = (file.uploadedBytes / file.totalBytes) * 100;

            console.log(`Uploading ${file.name} - Progress: ${progress.toFixed(2)}%`);

            if (file.uploadedBytes >= file.totalBytes) {
                clearInterval(interval);
                resolve(file);
            }
        }, 100);
    });
}

function simulateMultipleFileUploads(files) {
    const uploadPromises = files.map((file, index) => {
        const delay = (index + 1) * 1000;

        return simulateFileUpload(file, delay);
    });
    return Promise.all(uploadPromises);
}

const filesToUpload = [
    { name: "file1.txt", totalBytes: 100 },
    { name: "file2.txt", totalBytes: 200 },
    { name: "file3.txt", totalBytes: 300 },
];

simulateMultipleFileUploads(filesToUpload)
    .then((uploadedFiles) => {
        console.log("berhasil mengupload:", uploadedFiles);
    })
    .catch((error) => {
        console.error("terjadi kesalahan:", error);
    });
