// implement your code here
if(window.location.pathname == '/plebboi') {
    const selection = document.querySelector('#color');
    const image = document.querySelector('#pc-image')

    selection.onchange = (ev) => {
        const index = selection.selectedIndex;
        const countryCode = selection.value.pcCode;
        image.src = window.location.origin + `${selection.value}.png`
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