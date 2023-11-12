// contoh fungsi asinkron
function wait(ms) {
    return new Promise((resolve) => {
        setTimeout(resolve, ms);
    })
}

// fungsi asinkron dengan async dan await
async function main() {
    console.log("Mulai...");

    // tunggu 15 detik
    await wait(15000);

    console.log("setelah menunggu 15 detik");
}

main();