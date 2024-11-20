async function addPost() {
    
    const textuser =  document.querySelector('.div__content').textContent;
    const username = textuser.substring(3);
    const service = document.getElementById('service').value;
    //game name - category and subcat
    const price = document.getElementById('price').value;
    const img = document.getElementById('image').value;
    const desc = document.getElementById('desc').value;   

    const time = new Date;

    /*
    const milliseconds = time.getMilliseconds();
    const minute = time.getMinutes();
    const hour = time.getHours();
    */


    const day = time.getDay();
    const year = time.getFullYear();
    const hour = time.getHours();
    const text = username + String(day) + String(hour) + String(year); // day - day of week in number
    
    const date = String(time.getDate()) + "-" + Number(time.getMonth() + 1) + '-' + String(time.getFullYear());

    let full__name = text + img.slice(12);

    let formdata = new FormData;

    formdata.append('creator', username);
    formdata.append('description', desc);
    formdata.append('item_name', service);
    formdata.append('price', price);
    formdata.append('date', date)
    formdata.append('image', full__name);
    formdata.append('category_id', '1');    // TODO ...........................................................................  
    formdata.append('subcategory', '3');    // TODO ...........................................................................


    
    const res = await fetch(`http://api.loot.ua/myservice/`,
        {
            method: 'POST',
            body: formdata,
        }
    );
}