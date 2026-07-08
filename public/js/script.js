// ==========================================
// PORTFOLIO SCRIPT
// Bhanu Arganto
// ==========================================

//=========================
// HEADER SCROLL
//=========================

const header = document.querySelector("header");

window.addEventListener("scroll", () => {

    if(window.scrollY > 50){

        header.style.background = "rgba(15,23,42,.95)";
        header.style.boxShadow = "0 10px 30px rgba(0,0,0,.25)";

    }

    else{

        header.style.background = "rgba(15,23,42,.8)";
        header.style.boxShadow = "none";

    }

});

//=========================
// ACTIVE NAVIGATION
//=========================

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav a");

window.addEventListener("scroll",()=>{

    let current = "";

    sections.forEach(section=>{

        const sectionTop = section.offsetTop-150;

        if(pageYOffset >= sectionTop){

            current = section.getAttribute("id");

        }

    });

    navLinks.forEach(link=>{

        link.classList.remove("active");

        if(link.getAttribute("href")=="#"+current){

            link.classList.add("active");

        }

    });

});

//=========================
// SCROLL ANIMATION
//=========================

const observer = new IntersectionObserver(entries=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){

            entry.target.classList.add("show");

        }

    });

},{
    threshold:.2
});

document.querySelectorAll(".skill-card").forEach(el=>{

    el.classList.add("zoom");

    observer.observe(el);

});

document.querySelectorAll(".project-card").forEach(el=>{

    el.classList.add("fade-up");

    observer.observe(el);

});

document.querySelectorAll(".about-content").forEach(el=>{

    el.classList.add("fade-up");

    observer.observe(el);

});

//=========================
// HERO TYPING EFFECT
//=========================

const text = "Data Analyst & Machine Learning Enthusiast";

const target = document.querySelector(".hero-text h2");

let index = 0;

target.innerHTML="";

function typing(){

    if(index < text.length){

        target.innerHTML += text.charAt(index);

        index++;

        setTimeout(typing,60);

    }

}

typing();

//=========================
// BACK TO TOP
//=========================

const topBtn = document.createElement("button");

topBtn.id="topBtn";

topBtn.innerHTML='<i class="fas fa-arrow-up"></i>';

document.body.appendChild(topBtn);

window.addEventListener("scroll",()=>{

    if(window.scrollY>500){

        topBtn.style.display="block";

    }

    else{

        topBtn.style.display="none";

    }

});

topBtn.onclick=()=>{

    window.scrollTo({

        top:0,

        behavior:"smooth"

    });

};

//=========================
// PROJECT CARD EFFECT
//=========================

document.querySelectorAll(".project-card").forEach(card=>{

    card.addEventListener("mouseenter",()=>{

        card.style.transform="translateY(-12px)";

    });

    card.addEventListener("mouseleave",()=>{

        card.style.transform="translateY(0)";

    });

});

//=========================
// SKILL CARD EFFECT
//=========================

document.querySelectorAll(".skill-card").forEach(card=>{

    card.addEventListener("mouseenter",()=>{

        card.style.transform="translateY(-10px) scale(1.03)";

    });

    card.addEventListener("mouseleave",()=>{

        card.style.transform="translateY(0) scale(1)";

    });

});

//=========================
// BUTTON RIPPLE EFFECT
//=========================

document.querySelectorAll(".btn,.btn-nav").forEach(button=>{

    button.addEventListener("click",function(e){

        const x = e.clientX - e.target.offsetLeft;

        const y = e.clientY - e.target.offsetTop;

        const ripple = document.createElement("span");

        ripple.style.left=x+"px";

        ripple.style.top=y+"px";

        ripple.className="ripple";

        this.appendChild(ripple);

        setTimeout(()=>{

            ripple.remove();

        },600);

    });

});

//=========================
// PARALLAX HERO IMAGE
//=========================

window.addEventListener("mousemove",(e)=>{

    const img = document.querySelector(".hero-image img");

    const x = (window.innerWidth/2-e.pageX)/40;

    const y = (window.innerHeight/2-e.pageY)/40;

    img.style.transform=`translate(${x}px,${y}px)`;

});

//=========================
// FADE PAGE
//=========================

window.addEventListener("load",()=>{

    document.body.style.opacity="1";

});

document.body.style.opacity="0";

document.body.style.transition="opacity .8s";

//=========================
// CONSOLE MESSAGE
//=========================

console.log("Portfolio Created by Bhanu Arganto");