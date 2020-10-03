let button = document.querySelector('button');
let input = document.querySelector('input');
let ulist = document.querySelector('ul');

button.addEventListener('click', function () {
    let listitem = document.createElement('li');
    let buttonForList = document.createElement('button');

    let spantag = document.createElement('span');
    let item = document.getElementById('item');

    let inputVal = item.value;

    spantag.innerHTML = inputVal;


    item.value = '';
    buttonForList.textContent = "delete";
    listitem.appendChild(spantag);
    listitem.appendChild(buttonForList);



    ulist.appendChild(listitem);

    buttonForList.onclick = function (e) {
        ulist.removeChild(listitem);
        input.focus();

    }

    input.focus();
});