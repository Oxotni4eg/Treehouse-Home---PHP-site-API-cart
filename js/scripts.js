let btn_cart = document.getElementsByClassName('btn_cart');
let sizeProducts = Object.keys(btn_cart).length;
let sumInCart = document.getElementsByClassName('sumInCart')[0];
let sumIndex = 0;
let CountProduct = 1;
let reload = document.getElementsByClassName('reload');
let countMinus = document.getElementsByClassName('minus');
let countPlus = document.getElementsByClassName('plus');
let deleteProduct = document.getElementsByClassName('delete');

if ((sessionStorage.length) !== 0) {

    for (let i = 0; i < sessionStorage.length; i++) {
        let key = sessionStorage.key(i);
        sumIndex += +sessionStorage.getItem(key);
    }
}

sumInCart.innerHTML= sumIndex;

for (let i = 0; i < sizeProducts; i++) {
    btn_cart[i].addEventListener("click", addToCart);
}

for (let i = 0; i < Object.keys(countMinus).length; i++) {
    countMinus[i].addEventListener("click", ChangeCountMinus);
}

for (let i = 0; i < Object.keys(countPlus).length; i++) {
    countPlus[i].addEventListener("click", ChangeCountPlus);
}

for (let i = 0; i < Object.keys(deleteProduct).length; i++) {
    deleteProduct[i].addEventListener("click", AdddeleteProduct);
}

function addToCart() {
        sumIndex++;
        sumInCart.innerHTML= sumIndex;

        if (sessionStorage.getItem(this.id)) {
            CountProduct = sessionStorage.getItem(this.id);
            CountProduct++;
            sessionStorage.setItem(this.id,CountProduct);
            setCookie(this.id,CountProduct);
        } else {
            sessionStorage.setItem(this.id,1);
            setCookie(this.id,1);
        }
}

reload[0].addEventListener("click", () => location.reload());

function ChangeCountMinus() {
    let product = this.closest(".product");
    if (sumIndex === 0) {
        return;
    }
    sumIndex--;
    sumInCart.innerHTML= sumIndex;
    CountProduct = sessionStorage.getItem(product.id);
    CountProduct--;
    sessionStorage.setItem(product.id,CountProduct);
    setCookie(product.id,CountProduct);
    location.reload();
}

function ChangeCountPlus() {
    let product = this.closest(".product");
    sumIndex++;
    sumInCart.innerHTML= sumIndex;
    CountProduct = sessionStorage.getItem(product.id);
    CountProduct++;
    sessionStorage.setItem(product.id,CountProduct);
    setCookie(product.id,CountProduct);
    location.reload();
}

function AdddeleteProduct() {
    let product = this.closest(".product");
    console.log(product);
    CountProduct = sessionStorage.getItem(product.id);
    sumIndex -= CountProduct;
    sumInCart.innerHTML= sumIndex;
    sessionStorage.removeItem(product.id);
    deleteCookie(product.id);
    product.remove();
    location.reload();
}


