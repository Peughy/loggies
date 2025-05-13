
// sidebar
let utilisateurs = document.querySelector(".project-presentation");
let reservations = document.querySelector(".task-project");
let activites = document.querySelector(".team-project");
let messages = document.querySelector(".statistics");
let profil = document.querySelector(".profil-sections");
let disponibilite = document.querySelector(".disponibilite");

let links = document.querySelectorAll("#link");
let title = document.getElementById("title");
let titles = ["Utilisateurs", "Reservations", "Activites", "Messages", "Disponibilite des activites", "Mon profil"];
const sections = [utilisateurs, reservations, activites, messages, disponibilite, profil];


links.forEach((link, index) => {

  // when we click on one link
  link.addEventListener('click', () => {
    for (let i = 0; i < sections.length; i++) { 

      // compare the index
      if(i != index){

        // when the index is find
        if(links[i].classList.contains("active")){

          // change link's state
          links[i].classList.remove("active")
          links[index].classList.add("active");
          
          // displaying the new section
          sections[i].style.display = "none";
          sections[index].style.display = "block";

          // displaying the good text;
          title.innerHTML = titles[index];
        }
      }    
    }
  })
})

let exit_btns = document.querySelector("#exit");
let addProject = document.getElementById("add-project");
let btn_create_project = document.getElementById("btn-create-project")


exit_btns.addEventListener('click', () => {
    addProject.style.transform = "translateY(-100%)"
})

btn_create_project.addEventListener('click', () => {
  addProject.style.transform = "translateY(0)"
})

// exit modify user
let exit_modify = document.getElementById("exit_modify");
let exit_delete_user = document.getElementById("exit_delete_user");
let modify_users = document.getElementById("modify_users");
let user_delete = document.getElementById("user_delete");

exit_modify.addEventListener('click', () => {
  let url = window.location.href;
  let new_url = url.split('&')[0];
  history.replaceState({}, "", new_url);
  modify_users.style.transform = "translateY(-100%)";
})

// exit deleting division
exit_delete_user.addEventListener('click', () => {
  let url = window.location.href;
  let new_url = url.split('&')[0];
  history.replaceState({}, "", new_url);
  user_delete.style.transform = "translateY(-100%)";
})

//
// edit modify user
//
//
let edit_users = document.querySelectorAll("#edit_users");
let delete_users = document.querySelectorAll("#delete_users");
let registrations = document.querySelectorAll("#registrations");

edit_users.forEach((edit_user, index) =>{
  edit_user.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&registration=" + encodeURIComponent(registrations[index].innerHTML) + "&modifyUser=true";
  })
})

delete_users.forEach((delete_user, index) => {
  delete_user.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&registration=" + encodeURIComponent(registrations[index].innerHTML) + "&deleteUser=true";
  })
})


//
// edit modify activity
//
//
let edit_activites = document.querySelectorAll("#edit_activites");
let delete_activites = document.querySelectorAll("#delete_activites");
let numero_activites = document.querySelectorAll("#numero_activites");
let exit_edit_activity = document.getElementById("exit_edit_activity");
let edit_activity = document.getElementById("edit_activity");

edit_activites.forEach((edit_activite, index) =>{
  edit_activite.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&numero=" + encodeURIComponent(numero_activites[index].innerHTML) + "&modifyActivity=true";
  })
})

delete_activites.forEach((delete_activite, index) => {
  delete_activite.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&numero=" + encodeURIComponent(numero_activites[index].innerHTML) + "&deleteActivity=true";
  })
})

exit_edit_activity.addEventListener('click', () => {
  edit_activity.style.transform = "translateY(-100%)";
  let url = window.location.href;
  history.replaceState({}, "", url.split("&")[0])
})

//
// resservation
//
//

let edit_reservations = document.querySelectorAll("#edit_reservations");
let numeros_reservations = document.querySelectorAll("#numeros_reservations");
let exit_modify_reservation = document.getElementById("exit_modify_reservation");
let modify_reservation = document.getElementById("modify_reservation");

edit_reservations.forEach((edit_reservation, index) =>{
  edit_reservation.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&numero=" + encodeURIComponent(numeros_reservations[index].innerHTML) + "&modifyReservation=true";
  })
})

exit_modify_reservation.addEventListener('click', () => {
  modify_reservation.style.transform = "translateY(-100%)";
  let url = window.location.href;
  history.replaceState({}, "", url.split("&")[0])
})

//
//
// messages
//
//

let btnAddMessage = document.getElementById("btnAddMessage");
let exit_add_message = document.getElementById("exit_add_message");

btnAddMessage.addEventListener('click', () => {
  let url = window.location.href;
  window.location.href = url + "&newMessage=true";
})

exit_add_message.addEventListener('click', () => {
  modify_reservation.style.transform = "translateY(-100%)";
  let url = window.location.href;
  history.replaceState({}, "", url.split("&")[0])
})

let messagesSection = document.querySelectorAll(".messages");
let registration_recois = document.querySelectorAll("#registration_recois");

messagesSection.forEach((messageSection, index) => {
  messageSection.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&registration=" + encodeURIComponent(registration_recois[index].innerHTML) + "&discussion=true";
  })
})