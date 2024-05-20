// Define the KoPay object
const KoPay = {};

// Define the product catalog
KoPay.catalog = [
    { id: 1, name: "Arabica Coffee", price: 10.99 },
    { id: 2, name: "Robusta Coffee", price: 8.99 },
    { id: 3, name: "Espresso Coffee", price: 12.99 },
    // Add more products here
];

// Define a function to display the product catalog
KoPay.displayCatalog = function() {
    console.log("Welcome to KoPay - Your one-stop shop for coffee!");
    console.log("Product Catalog:");
    KoPay.catalog.forEach(product => {
        console.log(`ID: ${product.id}, Name: ${product.name}, Price: $${product.price}`);
    });
};

// Call the displayCatalog function to show the product catalog
KoPay.displayCatalog();
// Define a function to add a product to the cart
KoPay.addToCart = function(productId) {
    // Find the product in the catalog
    const product = KoPay.catalog.find(item => item.id === productId);

    // Check if the product exists
    if (product) {
        // Add the product to the cart
        KoPay.cart.push(product);
        console.log(`Added ${product.name} to the cart.`);
    } else {
        console.log("Product not found.");
    }
};

// Define a function to display the cart
KoPay.displayCart = function() {
    console.log("Your Cart:");
    KoPay.cart.forEach(product => {
        console.log(`ID: ${product.id}, Name: ${product.name}, Price: $${product.price}`);
    });
};

// Call the addToCart function to add a product to the cart
KoPay.addToCart(1);

// Call the displayCart function to show the cart
KoPay.displayCart();