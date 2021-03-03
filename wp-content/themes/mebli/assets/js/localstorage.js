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
        const name = document.getElementsByClassName('name-js');
        const description = document.getElementById('description');
        for (let i = 0; i < name.length; i++) {
            if (name[i]) {
                name[1].innerHTML = JSON.parse(localStorage.getItem('product'))['name'];
                name[0].value = JSON.parse(localStorage.getItem('product'))['name'];
                description.innerHTML = `${JSON.parse(localStorage.getItem('product'))['description'].slice(0, 166)}...`;
            }
        }
    }


});