async function Get(url) {
    return await fetch(ur).then((res) => res.json);
}

export { Get };

