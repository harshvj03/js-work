let a = document.getElementById('container');

let buttons = document.querySelectorAll('a');

// let cartButton;  
let getData = function(){
    var request = new XMLHttpRequest();
    request.open('POST','listProducts.php',true);
    let maindiv = document.getElementById('container-home')

    request.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
         


            let products = JSON.parse(this.responseText);

            // console.log(b);

            console.log(products);

            products.forEach(product => {
                // console.log(abc);
                
                console.log(product.productname);
                console.log(product.price);
                console.log(product.description);
                // for(let i = 0; i < abc.length;i++){
                //     console.log(abc[i]);
                // }
                
                let card = document.createElement('div');

                card.setAttribute("class","card col-4 col");

                
                let cardBody = document.createElement('div');

                cardBody.setAttribute("class","card-body");

                let heading = document.createElement('h5');
                heading.innerHTML = product.productname;

                let pblock1 = document.createElement('p');

                pblock1.innerHTML = 'Price : ' + product.price;

                let pblock2 = document.createElement('p');

                pblock2.innerHTML = 'Description : ' + product.description;

                let img = document.createElement("img");

                img.setAttribute("src","./images/1.jpg");

                img.style.width = 400;
                img.style.height = 400;

                
                card.appendChild(img);
                cardBody.appendChild(heading);

                
                cardBody.appendChild(pblock1);
                cardBody.appendChild(pblock2);

                card.appendChild(cardBody);

                let buttonDiv = document.createElement('div');

                let a1 = document.createElement('a');
                let a2 = document.createElement('a');

                a1.setAttribute("class","btn btn-primary");

                a1.setAttribute("id","cart-button");
                a1.innerHTML = "Add to Cart";

                a2.setAttribute("class","btn btn-default");

                a2.innerHTML = "Add to Wishlist";

                buttonDiv.setAttribute("class","card-body");


                buttonDiv.appendChild(a1);
                buttonDiv.appendChild(a2);

                card.appendChild(buttonDiv);

                maindiv.appendChild(card);
                
                let cartButton = document.querySelectorAll('#cart-button');

                let abc = function(){
                   alert('Product added to cart');
                }
               
                cartButton.forEach(b =>b.addEventListener('click',abc));
                // console.log(cartButton);

                

               
            });
        }
    }

    request.send();
}


console.log(buttons);
buttons.forEach(button => {
    button.addEventListener('click',getData);
});


// let fetchData = function(){
//     var request = new XMLHttpRequest();
//     request.open('POST','')
// }





// console.log(cartButton);

   // let b = document.createElement('div');
            // b.innerHTML = this.responseText;
            // a.appendChild(b);

            // console.log(this.responseText);
            // for(let i =0;i < this.responseText.length;i++){
            //     console.log(this.responseText[i]);
            // }
           
            // let card = document.getElementById('card-container');

            // let cardBody = document.getElementById('card-body');