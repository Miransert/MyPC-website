// implement your code here
/*console.log(document.getElementById("color").textContent)

const img = document.querySelector('#imgChange');
const select = document.querySelector('#color');

select.addEventListener('change', function() {
    img.src = `http://localhost:8000/img/${this.selectedOption[0].data.pcCode.toLowerCase()}.png`
})*/
if(window.location.pathname == '/plebboi') {
    const selection = document.querySelector('#color');
    const image = document.querySelector('#pc-image')

    selection.onchange = (ev) => {
        const index = selection.selectedIndex;
        const countryCode = selection.value.pcCode;
        image.src = `http://localhost:8000/img/plebboi/${selection.value}.png`
    };

    function increment(){
        if(selection.selectedIndex == 0){
            alert("Choose a color please")
        }
        else{
            document.getElementById("cart-count").textContent++
        }
    }
}
else if(window.location.pathname == '/gigachad') {
    function increment(){
        document.getElementById("cart-count").textContent++
    }
}
// Select Events