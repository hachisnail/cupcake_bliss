let cart = [];
let subtotal = 0;

function addToCart(name, price) {
    const item = cart.find(item => item.name === name);
    if (item) {
        item.quantity += 1;
    } else {
        cart.push({ name, price, quantity: 1 });
    }
    subtotal += price;
    updateCartDisplay();
}

function updateCartDisplay() {
    const cartItemsContainer = document.getElementById('cart-items');
    cartItemsContainer.innerHTML = '';

    cart.forEach(item => {
        cartItemsContainer.innerHTML += `
            <div>
                ${item.name} - $${item.price} x ${item.quantity} = $${(item.price * item.quantity).toFixed(2)}
                <button onclick="removeFromCart('${item.name}')">Remove</button>
            </div>
        `;
    });

    document.getElementById('subtotal').innerText = subtotal.toFixed(2);
    document.querySelector('.cart-icon').innerText = `Cart (${cart.length} items)`;
}

function removeFromCart(name) {
    const item = cart.find(item => item.name === name);
    if (item) {
        subtotal -= item.price * item.quantity;
        cart = cart.filter(item => item.name !== name);
        updateCartDisplay();
    }
}

function toggleCart() {
    const cartElement = document.getElementById('cart');
    cartElement.style.display = cartElement.style.display === 'none' ? 'block' : 'none';
}

function viewCart() {
    alert("Viewing cart functionality not implemented yet.");
}