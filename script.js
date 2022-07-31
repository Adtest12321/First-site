const nav = document.querySelector(".nav");
const grey = document.querySelector(".close-menu-mobile-hidden");
let lastScrollY = window.scrollY;
let out = false;
let iloscStron = 1;
if(window.innerWidth <= 560){
    nav.classList.add("nav-hidden");
    grey.classList.remove("close-menu-mobile");
}

window.addEventListener("resize", () => {
    if(window.innerWidth <= 560){
        nav.classList.add("nav-hidden");
        grey.classList.remove("close-menu-mobile");
    }
    else{
        nav.classList.remove("nav-hidden");
    }
})

window.addEventListener("scroll", () => {
    if (window.innerWidth > 560){
        if(lastScrollY < window.scrollY) {
            nav.classList.add("nav-hidden");
        } else {
            nav.classList.remove("nav-hidden");
        }
        lastScrollY = window.scrollY;
    }
});




function openMenu(){
    if(out){
        nav.classList.add("nav-hidden");
        grey.classList.remove("close-menu-mobile");
        out = false;
    }
    else{
    nav.classList.remove("nav-hidden");
    grey.classList.add("close-menu-mobile");
    out = true;
    }
}

function dodajStrone(){
    iloscStron++;
    const pages = document.getElementById("pages");
    pages.innerHTML += '<br><span class="pytanie">Page '+iloscStron+':</span><br> <textarea  name="strona'+iloscStron+'" id="" cols="30" rows="10" maxlength="400" spellcheck="false"></textarea>';
    document.getElementById("iloscStron").value = iloscStron; 
    console.log(iloscStron);
    scrollBy(0, 280);
    if(iloscStron==20){
        document.getElementById("addpage-button").disabled = true;
    }
}

function orderHandler(){
            window.location = "orderSuccess.html";
}

function contactHandler(){
    console.log('fds');
        setTimeout(function () {
            window.location = "contactSuccess.html";
        }, 3000);
    
}