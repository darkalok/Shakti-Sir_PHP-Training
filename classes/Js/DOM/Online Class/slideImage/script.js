let sliderImg = document.querySelectorAll("#sllider img")
let no = 0;
setInterval(function(){
   for(let i=0;i<sliderImg.length;i++){
      sliderImg[i].style.display = "none";
   }
   sliderImg[no].style.display = "block";
   no++;
   if(no==sliderImg.length)
    no=0;
},1000)