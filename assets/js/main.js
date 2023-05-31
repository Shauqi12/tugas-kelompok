const Bar = document.getElementById("menu");
const main = document.getElementById("main");
const logout = document.getElementById("logout");

function collapse() {
    logout.classList.toggle("d-none");
    main.classList.toggle("close");    
}
Bar.addEventListener("click", () => {
    collapse();
});
