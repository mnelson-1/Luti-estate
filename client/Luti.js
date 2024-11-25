window.addEventListener("scroll", function() {
    const navbar = document.querySelector("header"); // Adjust selector if needed
    if (window.scrollY > 0) {
      navbar.classList.add("scrolled"); // Adds shadow when scrolling
    } else {
      navbar.classList.remove("scrolled"); // Removes shadow when back at top
    }
});

//Partners
$(document).ready(function(){
$('.partners-logos').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }
    ]
});
});

let menu = document.querySelector('.header .menu');

document.querySelector('#menu-btn').onclick = () =>{
    menu.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('active');
}

document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
    inputNumber.oninput = () =>{
        if(inputNumber.value.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
    };
});

document.querySelectorAll('.view-property .details .thumb .small-images img').forEach(images =>{
    images.onclick = () =>{
        src = images.getAttribute('src');
        document.querySelector('.view-property .details .thumb .big-image img').src = src;
    }
});

document.querySelectorAll('.faq .box-container .box h3').forEach(headings =>{
    headings.onclick = () =>{
        headings.parentElement.classList.toggle('active');
    }
});

// Select all nav links

// Get the current URL path
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('.nav_links li a').
forEach(link => {
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
    }
});