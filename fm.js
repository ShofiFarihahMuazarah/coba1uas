const firstElement = ['Shofi Farihah Muazarah'];
let count = 0;
let firstIndex = 0;
let currentText = '';
let words = '';

(function ketik(){
    
    if(count == firstElement.length){
        count = 0;
    }

    currentText = firstElement[count];

    words=currentText.slice(0, ++firstIndex);
    document.querySelector('.efek').textContent = words;

    setTimeout(ketik, 400);
})()
function myFunction() {
    alert("Hello....\nYou will know who I am, I wish I could know you too.\nThank you for visiting my website:-)");
}