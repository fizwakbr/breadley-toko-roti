
console.log('*@@*')


document.addEventListener("DOMContentLoaded", function () {
  const cartDropdown = document.getElementById("cart-dropdown-list");
  const cartCount = document.getElementById("cart-count");

  function getCart() {
    return JSON.parse(localStorage.getItem("cart") || "[]");
  }

  function saveCart(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
  }

  function updateCartUI() {
    const cart = getCart();
    cartCount.textContent = cart.length;
    cartDropdown.innerHTML = "";

    if (cart.length === 0) {
      cartDropdown.innerHTML = `<li class="text-center text-muted">Cart is empty</li>`;
      return;
    }

    cart.forEach(item => {
      const li = document.createElement("li");
      li.className = "d-flex justify-content-between mb-2";
      li.innerHTML = `
        <span>${item}</span>
        <button class="btn btn-sm btn-danger btn-remove" data-name="${item}">&times;</button>
      `;
      cartDropdown.appendChild(li);
    });

    cartDropdown.querySelectorAll(".btn-remove").forEach(btn => {
      btn.addEventListener("click", () => {
        const name = btn.dataset.name;
        const updatedCart = getCart().filter(item => item !== name);
        saveCart(updatedCart);
        updateCartUI();
      });
    });
  }

  document.querySelectorAll(".add-to-cart").forEach(button => {
    button.addEventListener("click", function () {
      const name = this.dataset.name;
      const cart = getCart();
      cart.push(name);
      saveCart(cart);
      updateCartUI();
    });
  });

  updateCartUI();
});
