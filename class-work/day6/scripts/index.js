
var buttons = document.querySelectorAll('a');
console.log(buttons[0]);

var sessionCount = JSON.parse(sessionStorage.getItem("newvisit"));

console.log(sessionCount);
var count;

if(sessionCount == null){
    count = 0;
    }else{
        count = sessionCount.visit;
    }

buttons[0].addEventListener('click',function(){
    count++;
    console.log(count);
    var newvisit = {
        visit : count 
    }

    sessionStorage.setItem("newvisit",JSON.stringify(newvisit));

});