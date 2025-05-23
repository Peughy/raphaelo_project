
// sidebar
let utilisateurs = document.querySelector(".project-presentation");
let reservations = document.querySelector(".task-project");
let activites = document.querySelector(".team-project");
let produits = document.querySelector(".statistics");
let profil = document.querySelector(".profil-sections");
let disponibilite = document.querySelector(".disponibilite");

let links = document.querySelectorAll("#link");
let title = document.getElementById("title");
let titles = ["Clients", "Livreur", "Commandes", "Produits", "Disponibilite des activites", "Mon profil"];
const sections = [utilisateurs, reservations, activites, produits, disponibilite, profil];


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
  let url = window.location.href;
  let new_url = url.split('&')[0];
  history.replaceState({}, "", new_url);
  addProject.style.transform = "translateY(-100%)";
})

btn_create_project.addEventListener('click', () => {
  addProject.style.transform = "translateY(0)"
})

// exit modify user
let exit_modify = document.getElementById("exit_modify");
let exit_delete_user = document.getElementById("exit_delete_user");
let modify_users = document.getElementById("modify_users");
let user_delete = document.getElementById("user_delete");

// exit_modify.addEventListener('click', () => {
//   let url = window.location.href;
//   let new_url = url.split('&')[0];
//   history.replaceState({}, "", new_url);
//   modify_users.style.transform = "translateY(-100%)";
// })

// exit deleting division

let add_product = document.getElementById("add_product");
let btnAddMessage = document.getElementById("btnAddMessage");
let exit_add_message = document.getElementById("exit_add_message");

btnAddMessage.addEventListener('click', () => {
  let url = window.location.href;
  window.location.href = url + "&newProduct=true";
})

exit_add_message.addEventListener('click', () => {
  add_product.style.transform = "translateY(-100%)";
  let url = window.location.href;
  history.replaceState({}, "", url.split("&")[0])
})
//
// edit modify user
//
//


//
// edit modify activity
//
//


//
// resservation
//
//

// let edit_reservations = document.querySelectorAll("#edit_reservations");
// let numeros_reservations = document.querySelectorAll("#numeros_reservations");
// let exit_modify_reservation = document.getElementById("exit_modify_reservation");
// let modify_reservation = document.getElementById("modify_reservation");

// edit_reservations.forEach((edit_reservation, index) =>{
//   edit_reservation.addEventListener('click', () => {
//     let url = window.location.href;
//     window.location.href = url + "&numero=" + encodeURIComponent(numeros_reservations[index].innerHTML) + "&modifyReservation=true";
//   })
// })

// exit_modify_reservation.addEventListener('click', () => {
//   modify_reservation.style.transform = "translateY(-100%)";
//   let url = window.location.href;
//   history.replaceState({}, "", url.split("&")[0])
// })

//
//
// messages
//
//
