let btn_cart = document.getElementsByClassName('btn_cart');
let sizeProducts = Object.keys(btn_cart).length;
let sumInCart = document.getElementsByClassName('sumInCart')[0];
let sumIndex = 0;
let CountProduct = 1;

for (let i = 0; i <= sessionStorage.length; i++) {
    sumIndex += +sessionStorage.getItem(i);
}
sumInCart.innerHTML= sumIndex;

for (let i = 0; i < sizeProducts; i++) {
    btn_cart[i].addEventListener("click", addToCart);
}

function addToCart() {
        sumIndex++;
        sumInCart.innerHTML= sumIndex;
        if (sessionStorage.getItem(this.id)) {
            CountProduct = sessionStorage.getItem(this.id);
            CountProduct++;
            sessionStorage.setItem(this.id,CountProduct);
            setCookie(this.id,CountProduct);
            console.log(getCookie.length);
        } else {
            sessionStorage.setItem(this.id,1);
            setCookie(this.id,1);
        }
}


