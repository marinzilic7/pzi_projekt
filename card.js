let brojac = document.getElementById('counter'); 
let brojac_plus = document.getElementById('count_plus'); 
let price = document.getElementById('price'); 
let brojac_minus = document.getElementById('count_minus'); 
let total = document.getElementById('total');

price_1 = parseFloat(price.innerHTML).toFixed(2);

let rez;


counter = 0; 
let cijena = 1; 

brojac_plus.addEventListener('click',(event) =>{
    event.preventDefault(); 
    counter++; 
    brojac.innerHTML = counter; 
    cijena++; 
    price.innerHTML = (price_1 * cijena).toFixed(2);
    total.innerHTML = price.innerHTML;
 

})
 




    brojac_minus.addEventListener('click',(event) =>{
        if(brojac.innerHTML > 0){
        event.preventDefault(); 
        counter--; 
        brojac.innerHTML = counter; 
        cijena--;
        price.innerHTML = (price.innerHTML- price_1).toFixed(2);
        total.innerHTML = price.innerHTML;
       
    };
    })


