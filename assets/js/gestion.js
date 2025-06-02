
// sidebar
let clients = document.querySelector(".client-presentation");
let commandes = document.querySelector(".commande-presentation");
let produits = document.querySelector(".produit-presentation");
let localisation = document.querySelector(".localisation-presentation");
let profil = document.querySelector(".profil-sections");

let links = document.querySelectorAll("#link");
let title = document.getElementById("title");
let titles = ["Clients", "Commandes", "Menu - Recettes", "Representations", "Mon profil"];
const sections = [clients, commandes, produits, localisation, profil];


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


exit_btns.addEventListener('click', () => {
  let url = window.location.href;
  let new_url = url.split('&')[0];
  history.replaceState({}, "", new_url);
  addProject.style.transform = "translateY(-100%)";
})

// exit modify user
let exit_modify = document.getElementById("exit_modify");
let exit_delete_user = document.getElementById("exit_delete_user");
let modify_users = document.getElementById("modify_users");
let user_delete = document.getElementById("user_delete");

let view_menus = document.querySelectorAll("#view_menus");
let ids_produits = document.querySelectorAll("#ids_produits");

// exit deleting division

let add_product = document.getElementById("add_product");
let btnAddProduct = document.getElementById("btnAddProduct");



btnAddProduct.addEventListener('click', () => {
  let url = window.location.href;
  window.location.href = url + "&choice=add";
})

let exit_add_produit = document.getElementById("exit_add_produit");
exit_add_produit.addEventListener('click', () => {
  add_product.style.transform = "translateY(-100%)";
  let url = window.location.href;
  history.replaceState({}, "", url.split("&")[0])
})

view_menus.forEach((view_menu, index) =>{
  view_menu.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&choice=modif&id_produit=" + encodeURIComponent(ids_produits[index].innerHTML);
  })
})


// 
// representations
// 


let add_representation = document.getElementById("add_representation");
let btnAddRepresenatation = document.getElementById("btnAddRepresenatation");
let exit_add_representation = document.getElementById("exit_add_representation");

btnAddRepresenatation.addEventListener('click', () => {
  let url = window.location.href;
  window.location.href = url + "&choice_rep=add";
})

exit_add_representation.addEventListener('click', () => {
  add_representation.style.transform = "translateY(-100%)";
  let url = window.location.href;
  history.replaceState({}, "", url.split("&")[0])
})

let id_representations = document.querySelectorAll("#id_representations");
let views_btn_representations = document.querySelectorAll("#views_btn_representations");

views_btn_representations.forEach((views_btn_representation, index) =>{
  views_btn_representation.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&id_representation=" + encodeURIComponent(id_representations[index].innerHTML) + "&choice_rep=modif";
  })
})

//
// commande
//
//

let views_btn_commandes = document.querySelectorAll("#views_btn_commandes");
let ids_commande = document.querySelectorAll("#ids_commande");
let exit_view_commande = document.getElementById("exit_view_commande");
let view_commande = document.getElementById("view_commande");

views_btn_commandes.forEach((views_btn_commande, index) =>{
  views_btn_commande.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&numero_commande=" + encodeURIComponent(ids_commande[index].innerHTML);
  })
})

exit_view_commande.addEventListener('click', () => {
  view_commande.style.transform = "translateY(-100%)";
  let url = window.location.href;
  history.replaceState({}, "", url.split("&")[0])
})

//
//
// messages
//
//

