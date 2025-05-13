
// header

let navbar = document.querySelector(".navbar");  // < 1080
let id = document.getElementById("kijh")
if(window.innerWidth > 1080){
    window.addEventListener('scroll', () => {
        if(window.scrollY > 300){
            navbar.style.backgroundColor = "white";
        }
        else{
            navbar.style.backgroundColor = "transparent";
        }
    })
}

let read_plus = document.getElementById("read-plus");
let read_moins = document.getElementById("read-moins");
let text = document.getElementById("text");

read_plus.addEventListener('click', () => {
    text.style.height = "100%";
    read_plus.style.display = "none";
    read_moins.style.display = "block";
})

read_moins.addEventListener('click', () => {
    text.style.height = "100px";
    read_moins.style.display = "none";
    read_plus.style.display = "block"
})

// card

let card_reservations = document.querySelectorAll(".card-reservation");
let numero_reservations = document.querySelectorAll("#numeros")

card_reservations.forEach((card_reservation, index) => {
    card_reservation.addEventListener('click', () => {
        let url = window.location.href;
        let new_url = url.split('?')[0] + "?action=reservation_infos&numero=" + encodeURIComponent(numero_reservations[index].innerHTML);
        window.location.href = new_url;
    })
})