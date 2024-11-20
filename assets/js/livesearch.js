document.querySelector('.category').oninput = function getcat() {

    const val = this.value;
    const elasticItems = document.querySelectorAll('.dropdown-menu li');

    if (val != "")
    {
        elasticItems.forEach(function(elem){
            if (elem.innerText.search(val) == -1)
            {
                elem.classList.add('hide');

                
            }
            else {

                
                elem.classList.remove('hide');
            }
        });
    }
}


async function name() {

    let data = await fetch(`http://api.loot.ua/letter/`);
    let result = await data.json();

    result.forEach((res) => {

        document.querySelector('.category-menu').innerHTML += `
            <li><a data-cat='${res.category_en}' class="dropdown-item" href="#">${res.category_en}</a></li>
        `;
    });

    document.querySelectorAll(".dropdown-menu li").forEach(e => e.addEventListener('click', (event) => {

        document.querySelector('.subcategory-menu').innerHTML = '';

        const cat = event.target.dataset.cat;
        let input_category = document.querySelector('.category');
        
        input_category.value = cat;

        if (cat != null)
        {
        
            result.forEach((res) => {

                for (id = 0; id <= res.subcategories_en.length; id++)
                {
                    if (res.category_en === cat)
                    {
                        let subcats = res.subcategories_en;
                        

                        if (res.subcategories_en[id] != undefined)
                        {
                            document.querySelector('.subcategory-menu').innerHTML += `
                                <li><a data-subcat='${res.subcategories_en[id]}' data-idsubcat='${id}' class="dropdown-item" href="#">${res.subcategories_en[id]}</a></li>
                            `;

                            document.querySelectorAll(".subcategory-menu li").forEach(e => e.addEventListener('click', (event) => {
                                const subcat = event.target.dataset.subcat;
                                const id_subcat = event.target.dataset.idsubcat;
                                let input_subcategory = document.querySelector('.subcategory');
                                
                                input_subcategory.value = subcat;

                                let category_id = document.querySelector('.category_id');
                                let subcategory_id = document.querySelector('.subcategory_id');
                                
                                category_id.value = res.id;
                                subcategory_id.value = id_subcat;
                            }));
                        }
                    }
                }
            });
        }
    }));
} 

name();

