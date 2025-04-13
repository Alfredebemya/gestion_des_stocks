document.addEventListener('DOMContentLoaded', () => {
    const productForm = document.getElementById('product-form');
    const productList = document.getElementById('product-list');

    productForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const productName = document.getElementById('product-name').value;
        const productPrice = document.getElementById('product-price').value;

        if (productName && productPrice) {
            const li = document.createElement('li');
            li.textContent = `${productName} - ${productPrice} FCFA`;
            productList.appendChild(li);

            productForm.reset();
        }
    });
});
