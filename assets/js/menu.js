let add_paniers = document.querySelectorAll("#add_panier");
let numeros = document.querySelectorAll("#numeros");

add_paniers.forEach((add_panier, index) => {
    add_panier.addEventListener('click', () =>{
        let url = window.location.href;
        window.location.href = url + "&id_produit=" + numeros[index].innerHTML;
    })
})


let close_more_product = document.getElementById("close_more_product")
let more_product = document.getElementById("more_product")

close_more_product.addEventListener('click', () => {
    more_product.style.transform = "translate(100%)";
    let url = window.location.href;
    history.replaceState({}, "", url.split("&")[0])
})