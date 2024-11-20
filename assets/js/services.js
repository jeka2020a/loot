

async function data() {
    let data = await fetch(`http://api.loot.ua/services/`);
    let results = await data.json();

    document.querySelector('.row').innerHTML =''; // select other block or create ussually element

    results.forEach(service => {
        
        console.log(service.category);

        
        document.querySelector('.row').innerHTML += `
        
            <div class="col-xl-4 col-md-6">
                <div class="post-wrap mb-4">
                <div class="post-img">
                    <img src="assets/img/post-img1.png" alt="img" class="img-fluid">
                </div>
                <div class="postcnt">
                    <div class="tagbox mb-3 d-flex align-items-center justify-content-between">
                    <a href="#" class="catbtn">Spotlight</a>
                    <div class="blogdate"><a href="#">October 10 , 2021</a></div>
                    </div>
                    <h4>${service.company}</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been </p>
                </div>
                </div>
            </div>
        
        `;

    });
}

data();