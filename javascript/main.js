//  //variabler
// const hamburger = document.getElementById("hamburger");
// const menu = document.getElementById("main-menu");

// //lyssnar efter användarens klick för att öppna/stänga hambrugemenyn
// hamburger.addEventListener("click", () => {
//     menu.classList.toggle("open");
// });

console.log("main.js har laddats");

const hamburger = document.getElementById("hamburger");
const menu = document.getElementById("main-menu");

console.log("Hamburger:", hamburger);
console.log("Meny:", menu);

if (hamburger && menu) {
hamburger.addEventListener("click", () => {
console.log("Hamburger klickad");
menu.classList.toggle("open");
console.log("Menyns klasser:", menu.className);
});
}