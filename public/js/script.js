// ==========================================
// PORTFOLIO REDESIGN SCRIPT
// Bhanu Almer Arganto
// ==========================================

//=========================
// HEADER SCROLL & GLOW
//=========================
const header = document.querySelector("header");

window.addEventListener("scroll", () => {
    if (window.scrollY > 20) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

//=========================
// ACTIVE NAVIGATION LINK (SCROLL SPY)
//=========================
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav a");

window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 180;
        if (window.scrollY >= sectionTop) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
        }
    });
});

//=========================
// INTERSECTION OBSERVER FOR SCROLL REVEALS
//=========================
const revealElements = document.querySelectorAll(".reveal-element");

const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
            
            // Animate progress bars if the skills container is revealed
            const fills = entry.target.querySelectorAll(".progress-bar-fill");
            fills.forEach(fill => {
                const widthValue = fill.style.getPropertyValue("--width") || "80%";
                fill.style.width = widthValue;
            });
        }
    });
}, { threshold: 0.15 });

revealElements.forEach(el => revealObserver.observe(el));

//=========================
// HERO TYPING EFFECT
//=========================
const text = "Data Analyst & Machine Learning Enthusiast";
const target = document.querySelector(".hero-tagline");
let index = 0;

if (target) {
    target.innerHTML = "";
    function typing() {
        if (index < text.length) {
            target.innerHTML += text.charAt(index);
            index++;
            setTimeout(typing, 50);
        }
    }
    // Start typing after initial load fade-in
    setTimeout(typing, 800);
}

//=========================
// MOUSE PARALLAX ON HERO PROFILE CARD
//=========================
const heroCard = document.querySelector(".hero-image-card");
const heroImg = document.querySelector(".hero-img-parallax");

if (heroCard && heroImg) {
    heroCard.addEventListener("mousemove", (e) => {
        const rect = heroCard.getBoundingClientRect();
        const x = e.clientX - rect.left; // x position within element
        const y = e.clientY - rect.top;  // y position within element
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = -(y - centerY) / 12; // tilt amount
        const rotateY = (x - centerX) / 12;
        
        heroCard.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
        heroImg.style.transform = `scale(1.06) translate(${-rotateY * 0.8}px, ${rotateX * 0.8}px)`;
    });
    
    heroCard.addEventListener("mouseleave", () => {
        heroCard.style.transform = "perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)";
        heroImg.style.transform = "scale(1) translate(0px, 0px)";
    });
}

//=========================
// SKILLS FILTER LOGIC
//=========================
window.filterSkills = function(category) {
    const cards = document.querySelectorAll(".skills-container .skill-card");
    const buttons = document.querySelectorAll(".skills-tabs .tab-btn");
    
    // Update active tab button style
    buttons.forEach(btn => {
        btn.classList.remove("active");
    });
    
    // Set active button
    event.currentTarget.classList.add("active");

    cards.forEach(card => {
        const cardCategories = card.getAttribute("data-category") || "";
        if (category === "all" || cardCategories.includes(category)) {
            card.style.display = "block";
            setTimeout(() => {
                card.style.opacity = "1";
                card.style.transform = "translateY(0) scale(1)";
            }, 50);
        } else {
            card.style.opacity = "0";
            card.style.transform = "translateY(15px) scale(0.95)";
            setTimeout(() => {
                card.style.display = "none";
            }, 300);
        }
    });
};

//=========================
// BACK TO TOP BUTTON
//=========================
const topBtn = document.createElement("button");
topBtn.id = "topBtn";
topBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
topBtn.style.position = "fixed";
topBtn.style.bottom = "30px";
topBtn.style.right = "30px";
topBtn.style.width = "48px";
topBtn.style.height = "48px";
topBtn.style.borderRadius = "50%";
topBtn.style.background = "var(--primary)";
topBtn.style.color = "white";
topBtn.style.border = "none";
topBtn.style.cursor = "pointer";
topBtn.style.display = "none";
topBtn.style.justifyContent = "center";
topBtn.style.alignItems = "center";
topBtn.style.fontSize = "16px";
topBtn.style.boxShadow = "0 10px 20px var(--primary-glow)";
topBtn.style.zIndex = "99";
topBtn.style.transition = "all 0.3s ease";

document.body.appendChild(topBtn);

window.addEventListener("scroll", () => {
    if (window.scrollY > 500) {
        topBtn.style.display = "flex";
    } else {
        topBtn.style.display = "none";
    }
});

topBtn.addEventListener("hover", () => {
    topBtn.style.transform = "translateY(-3px)";
});

topBtn.onclick = () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
};



//=========================
// CONSOLE MESSAGE
//=========================
console.log("Portfolio Premium Redesign loaded successfully.");