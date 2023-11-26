function sapa(nama) {
    return new Promise((resolve, rejected) => {
        setTimeout(() => {
            if(nama){
                resolve(`Halo ${nama}`)    
            } else {
                rejected("Ups, sepertinya ada yang salah (nama yang km kirimkan kosong)")
            }
        } , 2000);
    });
}

sapa("")
    .then((message) =>{
        console.log(message);
    })
    .catch((error) =>{
        console.log(error);
    })