async function getAccount() {

    const text =  document.querySelector('.div__content').textContent;
    const username = text.substring(3);

    let data = await fetch(`http://api.loot.ua/myaccount/${username}`);
    let results = await data.json();

    //document.querySelector('.username').innerHTML =''; 

    results.forEach(user => {
        
        document.querySelector('.username').innerHTML += `
            ${user.username}
        `;

        document.querySelector('.role__user').innerHTML += `
            ${user.role}
        `;

        document.querySelector('.authoreproicon').innerHTML += `
            <img style="border-radius: 15px; width: 140px; height: 140px;" class="img-fluid" src="assets/img/users/${user.image}" alt="img">
        `;

    });
}

async function getMyServices()
{
    const text =  document.querySelector('.div__content').textContent;
    const username = text.substring(3);

    let data = await fetch(`http://api.loot.ua/myservices/${username}`);
    let results = await data.json();


    results.forEach(service => {
        

        //console.log(service._id.$oid);   <img class="img-fluid" style='display: block; height: auto; width: auto;' src="assets/img/service/${service.image}" alt="img">

        document.querySelector('.service__block').innerHTML += `

            <div style='' class="col-md-6 col-xl-3 mb-4">
                <div class="aboutitem">
                <div class="aboutitemImg relative__block" style="background-image: url(assets/img/service/${service.image}); background-position: center; background-size: cover; background-repeat: no-repeat; height: 200px;">
                    
                    <div class="joincommunity auSocial absolute">
                        <ul>
                            <li><a href="/edit?id=${service._id.$oid}"><img class="img-fluid" src="assets/img/pencil.png" style="width: 20px;" alt="img"></a></li>
                            <li><button type='submit' class='button__delete' onclick="removePost('${service._id.$oid}')"><img class="img-fluid" src="assets/img/trash.png" style="width: 20px;" alt="img"></button></li>
                        </ul>
                    </div>
                </div>
                <div class="bgdarkbluecolor aboutitemcnt">
                    <div class="itemtitlecode">
                    <h2 class="textgraycolor">${service.category}</h2>
                    <h3 class="textwhitecolor">
                        <a href="/service?id=${service._id.$oid}">${service.item_name}</a>
                    </h3>
                    </div>
                    <div class="itemtitlePrice">
                    <h2 class="textgraycolor">Price</h2>
                    <h3 class="textwhitecolor"><strong>${service.price}</strong></h3>
                    <h4 class="textgraycolor"><span><img src="assets/img/hearticon.svg"></span> 56</h4>
                    </div>
                </div>
                </div>
            </div>
        `;


    });
}

async function removePost(id) {

    
    const res = await fetch(`http://api.loot.ua/myservice/${id}`,{
        method: 'DELETE'
    });

    const data = await res.json();

    await getMyServices();
    
        
}

getMyServices();
getAccount();