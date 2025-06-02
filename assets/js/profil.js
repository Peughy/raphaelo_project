let navLinks = document.querySelectorAll(".navLinks");
let title = document.querySelector(".title");

let dashboard = document.getElementById("dashboard");
let commandes = document.getElementById("commandes");
let paniers = document.getElementById("paniers");
let profil = document.getElementById("profil");

let titles = ["Dashboard", "Mes commandes", "Profils"];
let divs = [dashboard, commandes, profil];

navLinks.forEach((navLink, index) => {
    navLink.addEventListener('click', () => {
        for (let i = 0; i < navLinks.length; i++) {
            if (navLinks[i].classList.contains("active")) {
                navLinks[i].classList.remove("active");
                divs[i].style.display = "none";

                navLink.classList.add("active");
                divs[index].style.display = "block";

                title.innerHTML = titles[index];
            }
        }
    });
});


let commande_view = document.getElementById("commande-view");
let exit_view_commande = document.getElementById("exit_view_commande");
let views_btn_commandes = document.querySelectorAll("#views_btn_commandes");
let nums_commande = document.querySelectorAll("#nums_commande");

exit_view_commande.addEventListener('click', () => {
    let url = window.location.href;
    let new_url = url.split('&')[0];
    history.replaceState({}, "", new_url);
    commande_view.style.transform = "translateY(-100%)";
})

views_btn_commandes.forEach((views_btn_commande, index) =>{
  views_btn_commande.addEventListener('click', () => {
    let url = window.location.href;
    window.location.href = url + "&num_commande=" + encodeURIComponent(nums_commande[index].innerHTML);
  })
})