function getData(){
    console.log("In get Data function");
    let request = new XMLHttpRequest();
    request.open('POST','userdetails.php',true);

    let maindiv = document.querySelector('.user-table');

    let table = document.createElement('table');

    table.setAttribute('class','table table-dark table-striped');

    request.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
            let users = JSON.parse(this.responseText);

            users.forEach(element => {
                let firstname = element.firstname;
                let email = element.email;
                let gender = element.gender;

                let row = document.createElement('tr');
                let col1 = document.createElement('td');
                let col2 = document.createElement('td');
                let col3 = document.createElement('td');

                col1.innerHTML = firstname;
                col2.innerHTML = email;
                col3.innerHTML = gender;

                row.appendChild(col1);
                row.appendChild(col2);
                row.appendChild(col3);
                table.appendChild(row);
                maindiv.appendChild(table);
            });
        }
    }

    request.send();


}

let button = document.querySelector('#getdata');
console.log(button);
console.log("hello");

button.addEventListener('click',function(){
    getData();
    button.disabled = true;
});
