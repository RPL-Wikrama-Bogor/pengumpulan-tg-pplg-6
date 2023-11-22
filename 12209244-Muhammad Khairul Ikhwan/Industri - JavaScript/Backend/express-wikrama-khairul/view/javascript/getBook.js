const elmGetBooks  = document.getElementById("getBooks")

async function getBook(){
    const api = await fetch(`${url}/book`)
    const { data } = await api.json()

    data.forEach(data => {
        const newElement = document.createElement("div")
        newElement.innerHTML = `id: ${data.id},
                                Nama Buku: ${data.name},
                                Publisher: ${data.Publisher},
                                Year: ${data.year},
                                page count: ${data.page_count},`

    elmGetBooks.appendChild(newElement)
    });
}

getBook();