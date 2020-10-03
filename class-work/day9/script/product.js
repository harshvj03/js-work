product = [

    {
        name: "Iphone",
        price: "1000$",
        dimension: [10, 20, 30],
        weight: "200g",
        image: "./images/1.png"

    },
    {
        name: "Oppo",
        price: "99$",
        dimension: [10, 20, 30],
        weight: "200g",
        image: "./images/1.png"
    },
    {
        name: "Vivo",
        price: "109$",
        dimension: [10, 20, 30],
        weight: "200g",
        image: "./images/1.png"
    }
];



var showData = function () {
    for (var i = 0; i < product.length; i++) {

        var one = document.getElementById('One');

        var div1 = document.createElement('div');
        var p1 = document.createElement('p');

        p1.innerHTML = product[i].name;
        div1.appendChild(p1);
        var p2 = document.createElement('p');
        // console.log(product[i].name);
        // console.log(product[i].price);

        p2.innerHTML = product[i].price;
        div1.appendChild(p2);

        var p3 = document.createElement('p');
        console.log(product[i].dimension[0], product[i].dimension[1], product[i].dimension[2]);

        p3.innerHTML = (product[i].dimension[0] + ' ' +  product[i].dimension[1] + ' ' +  product[i].dimension[2]);
        div1.appendChild(p3);


        console.log(product[i].weight);
        var p4 = document.createElement('p');

        p4.innerHTML = product[i].weight;

        var img1 = document.createElement('img');
        img1.src = product[i].image
        console.log(product[i].image);
        div1.style.display = 'inline-block';
         div1.style.backgroundColor = '#1aa6b7';
        div1.appendChild(p4);
        div1.appendChild(img1);
        // window.createElement('div').appendChild(div1);
        one.appendChild(div1);
    //     var divElement = document.getElementById("productlist");
    //     divElement.innerHTML = "";
    //     for (let index = 0; index < product.length; index++) {
    //         var productdiv = `div>
    // <p>${product[index].id}</p>
    // <p>${product[index].id}</p>
    // <p>${product[index].id}</p>
    // </div>`
    //         divElement.innerHTML += productdiv;
    //     }
        document.querySelector('body').style.backgroundColor = '#1aa6b7'

    }
};

var button = document.querySelector('button');

button.addEventListener('click', showData);
