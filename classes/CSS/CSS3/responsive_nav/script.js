let menu= document.querySelector(".menu");
let mobNav= document.querySelector(".mob-nav");
let close= document.querySelector(".close");

menu.addEventListener("click", function(){
    mobNav.style.transform="translate(0px)"
});

close.addEventListener("click", function(){
    mobNav.style.transform="translate(-200px)"
});