let menu= document.querySelector(".menu");

let mobNav= document.querySelector(".mob-nav");

let close= document.querySelector(".close");

menu.addEventListener("click", function(){
    mobNav.style.transform="translateX(0px)";
});

close.addEventListener("click", function(){
    mobNav.style.transform = "translateX(-200px)";
});