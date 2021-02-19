document.onreadystatechange = () => {
  let word = "TheQuickBrownFoxJumpsOverTheLazyDog.";
  let toArr = Array.from(word);
  let arrayIndexUpperCase = [];
  let separatedWord = [];
  toArr.forEach((element, index) => {
    if (element == element.toUpperCase()) {
      console.log(element);
      //if uppercase new array if lower case push to the last array
      separatedWord.push(element);
    } else {
      let arrLength = separatedWord.length;
      separatedWord[arrLength - 1] += element;
    }
  });
  alert(separatedWord.join(" "));
  onView();
};

function onView() {
  let JSONData = {
    success: true,
    employees: [
      {
        id: "1",
        firstName: "John",
        lastName: "Doe",
        birthday: "1990-05-07",
        gender: {
          male: true,
          female: false,
        },
        knownLanguage: ["English", "Japanese", "Chinese"],
      },
      {
        id: "2",
        firstName: "Lina",
        lastName: "Art",
        birthday: "1994-08-05",
        gender: {
          male: false,
          female: true,
        },
        knownLanguage: ["English", "Japanese"],
      },
    ],
  };

  // Unable to Load Data from URL so pin point json data index 1
  const fnamebox = document.getElementById("firstname") ;
  const lnamebox = document.getElementById("lastname") ;
  const bdate = document.getElementById("bdate");
  const malebox = document.getElementById("male");
  const femalebox = document.getElementById("female");
  const englishbox = document.getElementById("english");
  const chinesebox = document.getElementById("Chinese");
  const japanesebox = document.getElementById("Japanse");
  fnamebox.value=(JSONData.employees[1].firstName);
  lnamebox.value=(JSONData.employees[1].lastName);
  bdate.value=(JSONData.employees[1].birthday);
  malebox.checked=JSONData.employees[1].gender.male;
  femalebox.checked=JSONData.employees[1].gender.female;
  JSONData.employees[1].knownLanguage.map((element,index)=>{
      console.log(element); 
      if(element==="English"){
        englishbox.checked=true;
      }
      if(element==="Japanese"){  japanesebox.checked=true;}
      if(element==="Chinese"){  chinesebox.checked=true;}
      
  })

}
