var product = [
    { 
        product_id : 1,
        name : "One",
        cost : 900,
        location : "Japan"
        },
    {
        product_id : 2,
        name : "Two",
        cost : 1000,
        location : "USA"

    },
    {
        product_id : 3,
        name : "Three",
        cost : 12000,
        location : "UK"

    },
    {
        product_id : 4,
        name : "four",
        cost : 9000,
        location : "India"

    }
]

// console.log(product);

var addData = function(){
    
    var output = '<ol>';
    for(var j = 0; j < product.length;j++){
        output += '<li>' + product[j].name   + ' ' + product[j].cost+ '</li>';
    }
    output += '</ol>'
    document.write(output);
}

// const buttons = document.querySelectorAll('button');

// buttons[i].addEventListener('click',addData);