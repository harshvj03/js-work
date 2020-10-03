window.ecommerce = window.ecommerce || {};

ecommerce.products = [
    { id: 12, title: "Gerbera", description: "wedding flower", unitprice: 5, quantity: 56000, likes: 5600 },
    { id: 13, title: "Rose", description: "valientine flower", unitprice: 25, quantity: 6000, likes: 5000 },
    { id: 14, title: "Lotus", description: "worship flower", unitprice: 45, quantity: 56000, likes: 5000 },
    { id: 15, title: "Carnation", description: "smelling flower", unitprice: 15, quantity: 56000, likes: 5000 },
    { id: 16, title: "Marigold", description: "festival flower", unitprice: 3, quantity: 56000, likes: 5000 },
    { id: 17, title: "Lily", description: "decorating flower", unitprice: 2, quantity: 56000, likes: 5000 },
    { id: 18, title: "Tulip", description: "garden flower", unitprice: 25, quantity: 56000, likes: 5000 }
];



var showAllProducts = function(){
    var productOfArray = window.ecommerce.products;

    var output = '<ol>';

    for(var i = 0; i < productOfArray.length; i++){
        output += '<li>' + productOfArray[i].id + ' ' + productOfArray[i].title + ' ' + productOfArray[i].description + ' ' + productOfArray[i].unitprice + ' ' + productOfArray[i].quantity + ' ' + productOfArray[i].likes + '</li>';
    }

    output += '</ol>';
    

    document.write(output);
}

//showAllProducts();

var showProductTable = function(){
    var productArray = ecommerce.products;

    var output = '<table>';

    for(var i =0; i < productArray.length;i++){
        output += '<tr>';

        var line = '<td>' + productArray[i].id + '</td>' +
        '<td>' + productArray[i].title + '</td>' + 
        '<td>' + productArray[i].description + '</td>' + 
        '<td>' + productArray[i].unitprice + '</td>' + 
        '<td>' + productArray[i].quantity + '</td>' + 
        '<td>' + productArray[i].likes + '</td>' + '</tr>';

        output += line;
    }
    document.write(output);
}

// showProductTable();
// ecommerce.Accounting = ecommerce.Accounting || {};
// ecommerce.Accounting.Account = function(){

// }
ecommerce.Accounting =   {
     Account : function(){
         
        var balance = 6000;

        var deposit = function(amount){
            console.log("In deposit");
            balance = balance + amount;
            console.log(balance);
        };

        var withdraw = function(){console.log("In Withdraw");};

        var showBalance = function(){console.log("In show balance");};

        return {
            dep : deposit,
            with : withdraw,
            show : showBalance
        }
    }
}

var getAccountDetails = function(){
    var acc123 = new ecommerce.Accounting.Account();
    acc123.dep(1100);


}

getAccountDetails();