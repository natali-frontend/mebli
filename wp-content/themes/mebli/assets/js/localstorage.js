document.addEventListener('DOMContentLoaded', function () {
    const ordering = document.getElementById('ordering');
    const product = {name: '', description: ''};

    if (ordering) {
        ordering.addEventListener('click', function (e) {
            product.name = this.getAttribute('data-name');
            product.description = this.getAttribute('data-description');
            localStorage.setItem('product', JSON.stringify(product));
        });
    }

    if (JSON.parse(localStorage.getItem('product'))) {
        const name = document.getElementById('name');
        const description = document.getElementById('description');
        if (name) {
            name.innerHTML = JSON.parse(localStorage.getItem('product'))['name'];
            description.innerHTML = `${JSON.parse(localStorage.getItem('product'))['description'].slice(0, 166)}...`;
        }
    }


});