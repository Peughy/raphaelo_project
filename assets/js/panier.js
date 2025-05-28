document.addEventListener('DOMContentLoaded', function () {
    let show_panier = document.getElementById("show_panier");
    let exit_panier = document.getElementById("exit_panier");
    let paniers = document.getElementById("paniers");

    exit_panier.addEventListener('click', () => {
        paniers.style.transform = "translateY(-200%)"
    })

    show_panier.addEventListener('click', () => {
        paniers.style.transform = "translateY(0)"
    })


    // Initialiser le panier s'il n'existe pas dans le localStorage
    let panier = JSON.parse(localStorage.getItem('panier')) || [];

    // Fonction pour afficher le contenu du panier
    function afficherPanier() {
        const contenuPanier = document.getElementById('panier-content');
        const totalElement = document.getElementById('total-panier');

        // Vider le contenu actuel
        contenuPanier.innerHTML = '';

        let total = 0;

        // Parcourir tous les produits du panier
        panier.forEach(produit => {
            const produitElement = document.createElement('div');
            const sousTotal = produit.prix * produit.quantite;
            total += sousTotal;

            produitElement.innerHTML = `
                <div class="panier-div">
                    <p class="panier-nom">${produit.nom}</p>
                    <p class="panier-type">${produit.type_produit} - ${produit.prix} FCFA
                    <p class="panier-type">${produit.qte} </p>
                    <p class="panier-nom">${sousTotal}
                    <button class="panier-supprimer" data-id="${produit.id}">Supprimer</button>
                </div>
            `;

            contenuPanier.appendChild(produitElement);
        });

        // Mettre à jour le total
        totalElement.textContent = total.toFixed(2);

        // Ajouter des écouteurs d'événements aux boutons de suppression
        document.querySelectorAll('.supprimer').forEach(bouton => {
            bouton.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                supprimerDuPanier(id);
            });
        });
    }

    // Fonction pour supprimer un produit du panier
    function supprimerDuPanier(id) {
        panier = panier.filter(produit => produit.id !== id);
        sauvegarderPanier();
        afficherPanier();
    }

    // Sélectionner tous les boutons "Ajouter au panier"
    const boutonsAjouter = document.querySelector('.ajouterPanier');

    // Ajouter un écouteur d'événement à chaque bouton
    boutonsAjouter.addEventListener('click', function () {
        const productInfo = document.getElementById("more_product");
        const id = productInfo.getAttribute('data-id');
        const nuom_produit = productInfo.getAttribute('data-nom_produit');
        const prix_produit = parseFloat(productInfo.getAttribute('data-prix_produit'));
        const type_produit = productInfo.getAttribute('data-type_produit');

        ajouterAuPanier(id, nuom_produit, prix_produit, type_produit);
    });

    // Fonction pour ajouter un produit au panier
    function ajouterAuPanier(id, nom, prix, type_produit) {
        // Vérifier si le produit est déjà dans le panier
        const produitExistant = panier.find(item => item.id === id);

        if (produitExistant) {
            // Si oui, augmenter la quantité
            produitExistant.quantite++;
        } else {
            // Sinon, ajouter le nouveau produit
            panier.push({ id, nom, prix, quantite: 1, type_produit });
        }

        // Mettre à jour le localStorage et l'affichage
        sauvegarderPanier();
        afficherPanier();
    }

    // Fonction pour sauvegarder le panier dans le localStorage
    function sauvegarderPanier() {
        localStorage.setItem('panier', JSON.stringify(panier));
    }

    // Afficher le panier au chargement de la page
    afficherPanier();
});
