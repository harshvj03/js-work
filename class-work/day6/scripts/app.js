
var registerUser = function(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if(email != '' && password != ''){
        var credential = {
            name : email,
            password : password
        }
    
        alert(credential);
    
        localStorage.setItem("credential",JSON.stringify(credential));
    
        window.location.href = "./locallogin.html"
    }else{
        alert('Field can\'t be empty');
    }

    
}


var validateUser = function(){
    // console.log(localStorage.getItem("credential")); 
    var x = JSON.parse(localStorage.getItem("credential"));
    console.log(x);
    console.log(x.name,x.password);
    // localStorage.getItem(credential.password);
    var email = document.getElementById('user').value;
    var password = document.getElementById('password').value; 


    if(x.name == email && x.password == password){
        alert("login successful");
        window.location.href = "./index.html"
    }else{
        alert('Invalid User');
    }

    console.log(email,password);
}