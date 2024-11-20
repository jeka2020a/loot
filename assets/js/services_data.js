async function getServices() {
    let id = window.location.search.substring(4);
    let subcategory = await fetch(`http://api.loot.ua/subcategory/${id}`);
    let services = await fetch(`http://api.loot.ua/services/${id}`);
    let results = await services.json();
    let res_sub = await subcategory.json();


    //document.querySelector('.main__block').innerHTML ='';
    //document.querySelector('.subcategory').innerHTML ='';


    
    results.forEach(service => {

      
        document.querySelector('.main__block').innerHTML += `
    
            <div class="col-xl-4 col-md-6 box__filter all ${service.subcategory}">
                <div class="post-wrap mb-4">
                    <div class="post-img">
                        <div class="aboutitemImg relative__block" style="border-radius: 12px;background-image: url(assets/img/service/${service.image}); background-position: center; background-size: cover; background-repeat: no-repeat; height: 200px;">
                    </div>
                    <div class="postcnt">
                        <div class="tagbox mb-3 d-flex align-items-center justify-content-between">
                        <a href="#" class="catbtn blue-cate">${service.category}</a>
                        <div class="blogdate"><a href="#">${service.creator}</a></div>
                        </div>
                        <a href="/service?id=${service._id.$oid}">
                            <h4>${service.item_name}</h4>
                        </a>
                        <p>${service.description}</p>
                    </div>
                </div>
            </div>
    
        `;
      
        
      
        
    });
    

            

    
    res_sub.forEach(subcat => {

        id = 0;
        let count = subcat.subcategories_en.length;

        
        for (let id = 0; id < count; id++) {
            document.querySelector('.subcategory').innerHTML += `
                <li class='li__filter' ><a data-f='${subcat.subcategories_en[id]}' class="dropdown-item" href="javascript:void(0)">${subcat.subcategories_en[id]}</a></li>
            `;
        }
        
    });
    
        

    const list = document.querySelector('.subcategory');
    const block = document.querySelectorAll('.box__filter');
            

    list.addEventListener('click', event => {


        
        

        let filter__class = event.target.dataset['f'];
        
        
        block.forEach( element => {

            element.classList.remove('hide');

            if (!element.classList.contains(filter__class)) {

                element.classList.add('hide');
            }
            else if (filter__class === 'all')
            {
                console.log(filter__class);
                element.classList.remove('hide');
            }
        });
        
    });
}

getServices();   



