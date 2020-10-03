 var getData = function(){
    var xmlhttprequest = new XMLHttpRequest();
    xmlhttprequest.open('POST','listProducts.php',true);

    xmlhttprequest.onreadystatechange = function(){
        // if(this.readyState == 1){
        //     console.log("Connected to server");
        // }
        // if(this.readyState == 2){
        //     console.log("send Request");
        // }
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("productContainer").innerHTML = this.responseText;
        }

    
    }

    xmlhttprequest.send();
}


 setInterval(getData,5000);

function sendData(){

    var productname = document.getElementById('productname').value;

    var price = document.getElementById('price').value;

    var description = document.getElementById('description').value;

    var product = {
        productname : productname,
        price : price,
        description : description
    };



    let request = new XMLHttpRequest();

    request.open('POST','submitProd.php',true);
    request.setRequestHeader('Content-Type','application/json');
    request.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("msg").innerHTML = this.responseText;
        }
    }

    request.send(JSON.stringify(product));

}


let sendButton = document.getElementById('sendButton');

sendButton.addEventListener('click',sendData);