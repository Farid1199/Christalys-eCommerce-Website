document.addEventListener("DOMContentLoaded", function () {
    // Sample data, replace with your product data
    const products = [
        { id: 1, name: "Product 1", price: 20.00 },
        { id: 2, name: "Product 2", price: 30.00 },
        { id: 3, name: "Product 3", price: 30.00 },
        { id: 4, name: "Product 4", price: 30.00 },
        { id: 5, name: "Product 5", price: 30.00 },
        { id: 6, name: "Product 6", price: 30.00 },
        { id: 7, name: "Product 7", price: 30.00 },
        { id: 8, name: "Product 8", price: 30.00 },
        // Add more products as needed
    ];

    const basketContainer = document.getElementById("basket-container");
    const totalContainer = document.getElementById("total");

    // Function to render the basket items
    function renderBasket() {
        basketContainer.innerHTML = "";
        let total = 0;

        for (const product of products) {
            if (product.quantity && product.quantity > 0) {
                const itemTotal = product.quantity * product.price;
                total += itemTotal;

                const itemElement = document.createElement("div");
                itemElement.classList.add("basket-item");
                itemElement.innerHTML = `
                    <span>${product.name} x ${product.quantity}</span>
                    <span>$${itemTotal.toFixed(2)}</span>
                `;
                basketContainer.appendChild(itemElement);
            }
        }

        totalContainer.textContent = total.toFixed(2);
    }

    // Initialize the basket with quantities set to 0
    for (const product of products) {
        product.quantity = 0;
    }

    // Example: Increase quantity for Product 1
    products[0].quantity += 1;

    // Example: Decrease quantity for Product 2
    products[1].quantity -= 1;

    // Render the basket
    renderBasket();
});
