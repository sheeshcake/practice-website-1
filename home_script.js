function myFunction(sticky,navbar) {
    if (window.pageYOffset >= 200) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}