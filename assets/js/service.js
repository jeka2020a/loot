async function data() {

    let id = window.location.search.substring(4);
    let data = await fetch(`http://api.loot.ua/service/${id}`);
    let results = await data.json();



    results.forEach(service => {
        
        
        document.querySelector('.mobile__title').innerHTML += `
            ${service.item_name}
        `;

        document.querySelector('.desktop__title').innerHTML += `
            ${service.item_name}
        `;

    });
}

data();