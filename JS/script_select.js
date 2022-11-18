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

 })
})

const optionMenu1 = document.querySelector(".select-menuJS1"),
 actividad = document.querySelector(".actividad"),
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
   document.querySelector(".actividad").setAttribute('value', selectedOption1);
   console.log(selectedOption1)

 })
})