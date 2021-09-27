const setStudentName = (name) =>{
   console.log("Student Name", name);
};
const getMarksAvg = () =>{
   return new Promise((resolve, reject) => {
      setTimeout(() =>{
         let s1 = 80;
         let s2 = 80;
         let s3 = 80;
         let avg = s1+s2+s3/3;
         console.log("getMarksAvg()");
         resolve(avg);
      },2000);
   });
};

const getStudentDiv = (avg) => {
   if(avg >= 60){
      console.log("First");
   }else if(avg >=45){
    console.log("Second");  
   }else if(avg >= 33){
      console.log("Third");
   }else{
      console.log("Fail");
   }
};

const finalResult = () =>{
  setStudentName("Sameer");
  getMarksAvg()
  .then((avg) =>{
     getStudentDiv(avg);
  })
  .catch((err) =>{
     console.log(err);
  });
};

finalResult();