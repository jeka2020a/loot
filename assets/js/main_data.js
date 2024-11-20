
const letters_en = ["A","B","C","D","E","F","G","H","I","K","L","M","N","O","P","R","S","T","U","V","W","X","Y","Z","2","8"];


for (i = 0; i <= letters_en.length; i++)
{
    if (letters_en[i] != undefined)
    {
      const letter__box = document.querySelector('.letter__box').innerHTML += 
      `
        <button class='letter__button' data-l='${letters_en[i]}'>${letters_en[i]}</button>
      `;
    }

    

}



document.querySelectorAll(".letter__box").forEach(e => e.addEventListener('click', (event) => {
    let letter_from_button = event.target.dataset.l;
    document.querySelector('.topSellers').innerHTML = '';

    let pagination_block = document.querySelector('.pagination');


    async function getLetter()
    {

        let result = await fetch(`http://api.loot.ua/letter/`);
        let categories = await result.json();


        categories.forEach(cat => {
            
          
            let letter = cat.category_en.split("",1);
            
            if (letter_from_button == letter)
            {
              /*
                console.log(cat.id);
                console.log(cat.category_en);
                console.log(cat.subcategories_en);
                console.log(cat.subcategories_ru);
                console.log(cat.subcategories_ua);
              */
                

                document.querySelector('.topSellers').innerHTML += 
                  `
                      <div class=seller data-letter=${letter}>
                        <div class=sellerLeft>
                          <div class=sellertitlepr>
                            <a href='/services?id=${cat.id}' class=seller__link>
                                <h2 style='color: #bbb; padding-bottom: 1px;'>
                                  ${cat.category_en}
                                </h2>
                            </a>
                            <div class='sellerPrice textbluecolor' style='letter-spacing: 2px;'>
                              ${cat.subcategories_en}
                            </div>
                          </div>
                        </div>
                      </div>
                  `;
            }
            

        });


    }
    getLetter();
}));








async function getSellers() {
    let data = await fetch('http://api.loot.ua/topsellers/');
    let results = await data.json();

    document.querySelector('.popular').innerHTML ='';

    results.forEach(seller => {

      
        document.querySelector('.popular').innerHTML += `
    
        <div class="creators">
          <div class="creatorImg"><img class="img-fluid" src="assets/img/popularcolimg01.png" alt="img"></div>
          <div class="creatorIcon">
            <img class="img-fluid" src="assets/img/popularcolicon01.png" alt="imig">
            <div class="creatorcheck"><img src="assets/img/checkicon.svg" alt="img"></div>
          </div>
          <div class="creatorsText text-center">
            <h2 class="textwhitecolor">${seller.firstname}</h2>
            <h3 class="textbluecolor">by RTFKT</h3>
            <p class="textgraycolor">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
    
        `;
      
        
      
        
    });
}





/*EN

  A, B, C, D, E, F, G, H, I, K, L, M, N, O, P, R, S, T, U, V, W, X, Y, Z, 2, 7, 8


*/








getSellers();   


let currentPage = 1; // Текущая страница
let postsPerPage = 24; // Количество постов на одной странице
let totalPosts = 516; // Общее количество постов (можно получать из API)
let totalPages = Math.ceil(totalPosts / postsPerPage); // Общее количество страниц
let maxVisiblePages = 5; // Максимальное количество видимых страниц за раз

async function getPosts(page = 1) {

    let result = await fetch(`http://api.loot.ua/category/${page}`);
    let posts = await result.json();
    
    // Очищаем предыдущие записи
    document.querySelector('.topSellers').innerHTML = '';
    
    posts.forEach((category) => {

        const letter = category.category_en.split("",1);

        document.querySelector('.topSellers').innerHTML += 
        `
            <div class=seller data-letter=${letter}>
              <div class=sellerLeft>
                <div class=sellertitlepr>
                  <a href='/services?id=${category.id}' class=seller__link>
                      <h2 style='color: #bbb; padding-bottom: 1px;'>
                        ${category.category_en}
                      </h2>
                  </a>
                  <div class='sellerPrice textbluecolor' style='letter-spacing: 2px;'>
                    ${category.subcategories_en}
                  </div>
                </div>
              </div>
            </div>
        `;
        
        
    });


   

    updatePaginationControls(); // Обновляем кнопки пагинации
}

function updatePaginationControls() {
    let paginationControls = document.querySelector('.pagination');
    paginationControls.innerHTML = '';

    // Добавляем кнопку "Назад", если не на первой странице
    if (currentPage > 1) {
        paginationControls.innerHTML += `<button class="prev-button" onclick="changePage(${currentPage - 1})">Назад</button>`;
    }

    // Логика отображения страниц:
    let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
    let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

    if (startPage > 1) {
        paginationControls.innerHTML += `<button class="page-button" onclick="changePage(1)">1</button>`;
        if (startPage > 2) {
            paginationControls.innerHTML += `<span>...</span>`; // Кнопка с многоточием перед основными кнопками
        }
    }

    for (let i = startPage; i <= endPage; i++) {
        paginationControls.innerHTML += `
            <button class="page-button ${i === currentPage ? 'active' : ''}" 
                    onclick="changePage(${i})">${i}</button>`;
    }

    if (endPage < totalPages) {
        if (endPage < totalPages - 1) {
            paginationControls.innerHTML += `<span>...</span>`; // Кнопка с многоточием после основных кнопок
        }
        paginationControls.innerHTML += `<button class="page-button" onclick="changePage(${totalPages})">${totalPages}</button>`;
    }

    // Добавляем кнопку "Вперед", если не на последней странице
    if (currentPage < totalPages) {
        paginationControls.innerHTML += `<button class="next-button" onclick="changePage(${currentPage + 1})">Вперед</button>`;
    }
}

function changePage(page) {
    currentPage = page;
    getPosts(currentPage);
}

// Инициализация получения постов
getPosts(currentPage);




/*
let currentPage = 1; // Текущая страница
let postsPerPage = 24; // Количество постов на одной странице

async function getPosts(page = 1) {
    let result = await fetch(`http://api.loot.ua/category/${page}`);
    let posts = await result.json();
    
    // Очищаем предыдущие записи
    document.querySelector('.topSellers').innerHTML = '';
    
    posts.forEach((category) => {

      
        document.querySelector('.topSellers').innerHTML += 
        `
            <div class=seller>
              <div class=sellerLeft>
                <div class=sellertitlepr>
                  <a href='/services' class=seller__link>
                      <h2 style='color: #bbb; padding-bottom: 1px;'>
                        ${category.category_en}
                      </h2>
                  </a>
                  <div class='sellerPrice textbluecolor' style='letter-spacing: 2px;'>
                    ${category.subcategories_en}
                  </div>
                </div>
              </div>
              
            </div>
        `;
      
    });

    updatePaginationControls();
}




function updatePaginationControls() {
    let paginationControls = document.querySelector('.pagination');
    paginationControls.innerHTML = '';

    // Добавляем кнопку "Назад"
    if (currentPage > 1) {
        paginationControls.innerHTML += `<button class="prev-button" onclick="changePage(${currentPage - 1})">Назад</button>`;
    }

    // Добавляем кнопку "Вперед"
    paginationControls.innerHTML += `<button class="next-button" onclick="changePage(${currentPage + 1})">Вперед</button>`;
}

function changePage(page) {
    currentPage = page;
    getPosts(currentPage);
}

// Инициализация получения постов
getPosts(currentPage);
*/