import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


Echo.channel('products')
    .listen('ProductQuantityUpdated', (e) => {
        console.log(e.product);
        // Update the DOM or perform other actions here
        // For example, update the product quantity on the page
        const productElement = document.getElementById(`product-${e.product.id}`);
        if (productElement) {
            productElement.querySelector('.quantity').textContent = e.product.qty;
        }
    });