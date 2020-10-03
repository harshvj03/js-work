
// var login = document.getElementById("login-submit");
var validate = function () {
    var login = document.getElementById("login-submit");
    var uname = document.getElementById("user");

    var pass = document.getElementById("passwd");

    if (uname.value === "abc" && pass.value === "abc") {
        console.log(uname.value, pass.value);
        alert("login successful");
        window.location.href = "./shape.html"
    } else {
        alert("Invalid username or password");
    }


}

// login.addEventListener('click',validate);


var getForm = function () {
    var firstname = document.getElementById("first");
    // document.getElementById('myrect').style.height = '500px';

    if (firstname.value === "") {
        document.getElementById("error_first").innerHTML = "Can't be empty";
    } else {
        document.getElementById("error_first").innerHTML = "";
        console.log(firstname.value);
    }
    var lastname = document.getElementById("last");

    var email = document.getElementById("email");

    var account = document.getElementById("account");

    var gender = document.getElementsByName("gender");

    for (var i = 0; i < gender.length; i++) {
        if (gender[i].checked) {
            console.log(gender[i].value);
        }
    }

    console.log(firstname.value, lastname.value, email.value, account.value);
}


var rect = function () {
    var x = document.getElementById("myrect");
    document.getElementById('myrect').style.height = '500px';
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    console.log(x);
}

var getCircle = function () {
     var c = document.getElementById("myCircle");
    // var c = document.getElementById("myrect")
    var ctx = c.getContext("2d");
    ctx.beginPath();
    ctx.arc(95, 50, 40, 0, 2 * Math.PI);
    ctx.stroke();

    if (c.style.display === "none") {
        c.style.display = "block";
    } else {
        c.style.display = "none";
    }
}

var getLine = function () {
     x = document.getElementById("myLine");
    // x = document.getElementById("myrect")
    var ctx = x.getContext("2d");
    ctx.moveTo(0, 0);
    ctx.lineTo(200, 100);
    ctx.stroke();
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    console.log(x);
}

