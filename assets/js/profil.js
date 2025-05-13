let links = document.querySelectorAll(".link");
let title = document.querySelector("#title");
let description = document.querySelector("#description");

let favoris = document.getElementById("favoris");
let cart = document.getElementById("cart");
let reservation = document.getElementById("reservation");
let attente = document.getElementById("attente");
let messages = document.getElementById("messages");
let profil = document.getElementById("profil");

let sections = [reservation, attente, cart, messages, favoris, profil]

let descriptions = [
    "Explorez toutes les activites que vous avez a faire!",
    "Vous y etes! Payer vos reservations validees pour des moments inoubliables !",
    "Toute les activites qui vous ont attirees!",
    "Restez informer sur l'evolution et la validation de vos reservations",
    "Tous vos coup coeurs",
    "Modifier vos informations pour un profil unique"
]
let titles = ["Mes reservations", "Mes reservations en attente",  "Mon panier", "Mes messages", "Mes favoris", "Mon profil"]

links.forEach((link, index) => {
    link.addEventListener('click', () => {
        for (let i = 0; i < links.length; i++) {
            if(i != index){
                if(links[i].classList.contains("active")){
                    links[i].classList.remove("active");
                    link.classList.add("active")
                    
                    title.innerHTML = titles[index];
                    description.innerHTML = descriptions[index];

                    sections[i].style.display = "none";
                    sections[index].style.display = "block";
                }
            }
        }
    })
})



// 
// 
//  increment

let Btnplus = document.querySelectorAll("#plus");
let Btnmoins = document.querySelectorAll("#moins");
let qtes = document.querySelectorAll("#qte");
let pt = document.getElementById("pt");
let qteT = document.getElementById("qteT");

let prixTotal = parseInt(pt.innerHTML);

for (let i = 0; i < qtes.length; i++) {
    qtes[i].innerHTML = 1;
    
}

Btnmoins.forEach((btnmoins, index) =>{
    btnmoins.addEventListener('click', () => {
        let qte = qtes[index].innerHTML;
        if(qte > 1){
            qte--;
            qtes[index].innerHTML = qte;
            qteT.innerHTML = qte;
            pt.innerHTML =  prixTotal * qte;
        }
    })
})

Btnplus.forEach((btnplus, index) =>{
    btnplus.addEventListener('click', () => {
        let qte = qtes[index].innerHTML;
        qte++;
        qtes[index].innerHTML = qte;
        qteT.innerHTML = qte;
        pt.innerHTML =  prixTotal * qte;
    })
})

// deplacement des liens

let pregPrecedent = document.getElementById("pregPrecedent");
let pregSuivant = document.getElementById("pregSuivant");

if(window.innerWidth < 1080){
    pregPrecedent.addEventListener('click', () => {
        links.forEach((link) =>{
            link.style.transform = "translateX(-100px)";
        })
    })
    pregSuivant.addEventListener('click', () => {
        links.forEach((link) =>{
            link.style.transform = "translateX(100px)";
        })
    })
}


// payement
let payement = document.getElementById("payement");
let exit_payement = document.querySelector("#exit_payement");
let cancel_payement = document.getElementById("cancel_payement");

let num_reservation_validee = document.querySelectorAll("#num_reservation_validee");
let pay_individuals = document.querySelectorAll("#pay_individuals");
let pay_alls = document.querySelector("#pay_all");

exit_payement.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url.split('&')[0];
})


pay_individuals.forEach((pay_individual, index) => {
    pay_individual.addEventListener('click', () => {
        let url = window.location.href;

        let new_url = url + "&num_reservation=" + encodeURIComponent(num_reservation_validee[index].innerHTML) + "&payement=true&type=individual";
        window.location.href = new_url;
    })
})

pay_alls.addEventListener('click', () => {
    let url = window.location.href;

    let new_url = url + "&payement=true&type=all";
    window.location.href = new_url;
})
