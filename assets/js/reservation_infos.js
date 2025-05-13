// Fonction pour obtenir le panier depuis le localStorage
function getCart() {
    const cart = localStorage.getItem('cart');
    return cart ? JSON.parse(cart) : [];
  }
  
  // Fonction pour sauvegarder le panier dans le localStorage
  function saveCart(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
  }
  
  // Fonction pour ajouter un produit au panier
  function addToCart(product) {
    const cart = getCart();
    cart.push(product);
    saveCart(cart);
    updateCartDisplay();
  }
  
  // Fonction pour mettre à jour l'affichage du panier
  function updateCartDisplay() {
    const cart = getCart();
    document.getElementById('nbr_cart').textContent = cart.length;
  }
  
  // Ajout d'un écouteur d'événement pour chaque bouton "Ajouter au panier"
  document.querySelector('#addCart').addEventListener('click', (event) => {
      const productElement = event.target.closest('.reservation-section');
      const product = {
        numero: productElement.dataset.numero,
        nom: productElement.dataset.nom,
        prix: productElement.dataset.prix,
        image: productElement.dataset.image
      };
      addToCart(product);
    });
  
  // Initialisation de l'affichage du panier au chargement de la page
  document.addEventListener('DOMContentLoaded', updateCartDisplay);
  