async function getService() {


    let id = window.location.search.substring(4);
    let service = await fetch(`http://api.loot.ua/service/${id}`);
    let results = await service.json();

    
    

    
    results.forEach(item => {

        //const image__block = document.querySelector('.image__upload-new').setAttribute("src", "assets/img/" + item.image);
        
        
        document.querySelector('.block__of_item').innerHTML += `


            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="title-heading mb-4">
                    <h2 class="headingWh ">Preview of service</h2>
                </div>
                <div class="aboutitem">
                    <div class="aboutitemImg"><img class="img-fluid" src="assets/img/service/${item.image}" alt="img"></div>
                    <div class="bgdarkbluecolor aboutitemcnt">
                        <div class="itemtitlecode">
                            <h2 class="textgraycolor">Category</h2> 
                            <h3 class="textwhitecolor">${item.item_name}</h3>
                        </div>
                        <div class="itemtitlePrice">
                            <h2 class="textgraycolor">Price</h2>
                            <h3 class="textwhitecolor"><strong>${item.price}</strong></h3>
                            <p class="textwhitecolor">${item.description}</p>
                            <h3 class="textwhitecolor mt-4 creator"><strong>${item.creator}</strong></h3>
                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-1 mb-2 ">
                    <button class="btn btnlightblue savebtn d-block m-auto d-lg-none">Save</button>
                </div>


            </div>
        `;

        const item_name = document.querySelector(".item__name").value = item.item_name;
        const description = document.querySelector(".description").value = item.description;
        const price = document.querySelector(".price").value = item.price;
    });
}


async function editService() {

    let id = window.location.search.substring(4);
    const item_name = document.querySelector(".item__name").value;
    const description = document.querySelector(".description").value;
    const price = document.querySelector(".price").value;
    const img = document.getElementById('image').value;
    const username = document.querySelector('.creator').textContent;

    const day = time.getDay();
    const year = time.getFullYear();
    const text = username + String(day) + String(year); // day - day of week in number
    
    const date = String(time.getDate()) + "-" + Number(time.getMonth() + 1) + '-' + String(time.getFullYear());

    let full__name = text + img.slice(12);

    //category......
    //subcategory......

    const data = {
        item_name: item_name,
        description: description,
        price: price,
        image: full__name,
        date: date,
    }


    const res = await fetch(`http://api.loot.ua/posts/${id}`,{
        method: 'PATCH',
        body: JSON.stringify(data),
    });
}

getService();