let btn_connexion  = document.getElementById("btn_connexion")
let btn_inscription  = document.getElementById("btn_inscription")
let inscription  = document.getElementById("inscription")
let connexion  = document.getElementById("connexion")

btn_inscription.addEventListener('click', () => {
    inscription.style.display = "none"
    connexion.style.display = "block"
})
btn_connexion.addEventListener('click', () => {
    connexion.style.display = "none"
    inscription.style.display = "block"
})