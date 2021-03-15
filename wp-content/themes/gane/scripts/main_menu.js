const elem = document.createElement('li');
const text = document.title.split('-').pop().substr(1);
elem.innerText = text;
var firstElem = document.querySelector('.header__menu__links ul').firstChild;
document.querySelector('.header__menu__links ul').insertBefore(elem, firstElem.nextSibling);

document.querySelector('.header__menu__links ul li:first-child').addEventListener('mouseover', function () {
    const elList = document.querySelectorAll(".header__menu__links ul li:not(:first-child) a");
    elList.forEach(function (el) {
        if (el.innerText.toLowerCase().indexOf(text.toLowerCase()) !== -1) {
            el.remove();
        }
    });
});