
console.log('calling app js from index.php');

function myFunction() {
    var element = document.getElementById("myDIV");
    var c1 = document.getElementById('c1');
    console.log(c1.getAttribute('data-arg1'))
    element.classList.toggle("mystyle");
 }