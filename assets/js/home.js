let navigation = document.querySelector(".navigation");
let close_nav = document.querySelector("#close-navigation");
let show_nav = document.querySelector("#show-navigation");


close_nav.addEventListener('click', () => {
    navigation.style.transform = "translateX(100%)";
})
show_nav.addEventListener('click', () => {
    navigation.style.transform = "translateX(0)";
})