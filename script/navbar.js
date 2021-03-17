function changeClassActiveNavBar(){
    const elementsNavBar = document.getElementsByClassName("nav-link");
    for (let i = 0; i < elementsNavBar.length; i++) {
        let elementNavlink = elementsNavBar[i];
        elementNavlink.onclick = function () {
            console.log(elementNavlink);
            elementNavlink.classList.remove("active");
            elementNavlink.classList.add("active");
        }
    }
}

changeClassActiveNavBar();