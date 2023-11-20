/*

Add 'current' CSS class to the current page

*/

const urlObject = new URL(window.location.href);
const pageParameter = urlObject.searchParams.get('page');
const pageNumbers = document.querySelectorAll('a.page-numbers');

pageNumbers.forEach((element) => {

    const hrefAttribute = new URLSearchParams(element.getAttribute('href'));
    const hrefAttributeValue = hrefAttribute.get('page');
    if (hrefAttributeValue === pageParameter || pageParameter === null && hrefAttributeValue === '1'){
        element.classList.add('current');
    }

});