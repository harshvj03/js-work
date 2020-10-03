var button1 = document.querySelector('button');

var y = Math.round(Math.random() * 10);
var p1 = '';
console.log(y);
var myFunction = function(){
    var message = document.getElementById('demo-error');
    var x = document.getElementById('input-data').value;
    var p = document.getElementById('previous-value');
    message.innerHTML = "";
    

    // if(x >= 5 && x <= 10){
    //     message.innerHTML = 'Correct Input';
    //     message.style.cssText = "background-color : green";
    // }else{
    //     message.innerHTML = 'Number must be > 5 or <10';
    //     message.style.cssText = "background-color : red; display : 'inline-block'";
    // }

    if(y > x){
        p1 +=  x + ' ';
        p.innerHTML = 'previous value ' + p1;

        message.innerHTML ="Number too low";
        
    }else if(y < x){
        p1 += x + ' ';
        p.innerHTML = 'previous value ' + p1 ;
        message.innerHTML ="Number too high";
    }else{
        p1 +=  x + ' ';
        p.innerHTML ='previous value ' +  p1;
        message.innerHTML = "Congratulations";
        message.style.cssText = "background-color : green; display : 'inline-block'";
    }

}


button1.addEventListener('click', myFunction);

