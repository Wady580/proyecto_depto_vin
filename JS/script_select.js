const optionMenu = document.querySelector(".select-menuJS"),
 selectBtn = document.querySelector(".select-btnJS"),
 pais = document.querySelector(".pais"),
 options = document.querySelectorAll(".optionJS"),
 sBtn_text = document.querySelector(".sbnJS"),
hol = document.querySelector(".hol");
 selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));
 selectBtn.addEventListener("click", () => hol.classList.toggle("active1"));
options.forEach(option => {
option.addEventListener("click", () => {
   let selectedOption = option.querySelector(".option-txtJS").innerText;
   sBtn_text.innerText = selectedOption;
   document.querySelector(".pais").setAttribute('value', selectedOption);
   console.log(selectedOption)
   optionMenu.classList.add("active")
   hol.classList.add("active1")

 })
})

const optionMenu2 = document.querySelector(".select-menuJS2"),
 selectBtn2 = document.querySelector(".select-btnJS2"),
 pais2 = document.querySelector(".pais2"),
 options2 = document.querySelectorAll(".optionJS2"),
 sBtn_text2 = document.querySelector(".sbnJS2"),
hol2 = document.querySelector(".hol2");
 selectBtn2.addEventListener("click", () => optionMenu2.classList.toggle("active"));
 selectBtn2.addEventListener("click", () => hol2.classList.toggle("active1"));
options2.forEach(option => {
option.addEventListener("click", () => {
   let selectedOption2 = option.querySelector(".option-txtJS2").innerText;
   sBtn_text2.innerText = selectedOption2;
   document.querySelector(".pais2").setAttribute('value', selectedOption2);
   console.log(selectedOption2)
   optionMenu2.classList.add("active")
   hol2.classList.add("active1")

 })
})


const optionMenu1 = document.querySelector(".select-menuJS1"),
 pais3 = document.querySelector(".pais3"),
 selectBtn1 = document.querySelector(".select-btnJS1"),
 options1 = document.querySelectorAll(".optionJS1"),
 sBtn_text1 = document.querySelector(".sBtn-textJS1"),
 hol1 = document.querySelector(".holJS1");
 selectBtn1.addEventListener("click", () => optionMenu1.classList.toggle("active"));
 selectBtn1.addEventListener("click", () => hol1.classList.toggle("active1"));
options1.forEach(option => {
option.addEventListener("click", () => {
   let selectedOption1 = option.querySelector(".option-txtJS1").innerText;
   sBtn_text1.innerText = selectedOption1;
   document.querySelector(".pais3").setAttribute('value', selectedOption1);
   console.log(selectedOption1)
   optionMenu1.classList.add("active")
   hol1.classList.add("active1")
  

 })
})