glass = document.querySelector(".loupe");
navlink = document.querySelector("#navlink");
search = document.querySelector("#search");
show = false;

console.log(show);
glass.addEventListener("click", showSearch => {
    if (show == false) {
        navlink.classList.remove("navlink"); 
        navlink.classList.add("dnone");
        search.classList.remove("dnone");
        search.classList.add("search");
        show = true;
        console.log("ok");
        console.log(show);
    }else if (show == true) {    
        search.classList.remove("search");
        search.classList.add("dnone");
        navlink.classList.remove("dnone"); 
        navlink.classList.add("navlink");
        show = false;
        console.log("pas ok");
        console.log(show);
    }
    console.log(show);
})
