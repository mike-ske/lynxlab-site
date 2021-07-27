// import Typed from 'typed.js';
"restrict";

/* 
================ Code for active menu ===============
*/

let nav__link = document.getElementsByClassName("list_1");
let main_menu = document.getElementsByClassName("list_menu")[0];

for (let i = 0; i < nav__link.length; i++) {
    const list__item = nav__link[i];

    list__item.addEventListener("click", function () {
        document.getElementsByClassName("active")[0].classList.remove("active");
        nav__link[i].classList.add("active");
    })
    
    // ==== CODE TO HIDE THE MENU WHEN TABS ARE CLICKED
    list__item.addEventListener("click", function () {
        main_menu.classList.remove("show");
    })
}

/* 
============== CODE TO HIDE AND SHOW MENU ========
*/

let main__nav = document.getElementsByClassName("list_menu")[0];
let nav__icon = document.getElementsByClassName("toggle")[0];

nav__icon.addEventListener('click', function () {
    main__nav.classList.toggle("show");
})

// ============ CODE TO SET ACTIVE MENU FOOTER SECTION

let foot_menu = document.getElementsByClassName("ft_about")[0].getElementsByClassName("ft__01")[0].getElementsByClassName("ft__list")[0];

for (let i = 0; i < foot_menu.length; i++) {
    let ft__link = foot_menu[i];

    ft__link.addEventListener("click", function () {
        document.getElementsByClassName("active_2")[0].classList.remove("active_2");
        foot_menu.classList.add("active_2");
    })

}


// ========= set scroll nav =====

window.addEventListener("scroll", function () {
    document.getElementById("nav").classList.add("sticky");
    const currentScroll = window.pageYOffset;
    if (currentScroll <= 0) {
    document.getElementById("nav").classList.remove("sticky");
     
    }
    return;
});




/**
 * Code to create image slider for each section 
 * containing courosel
 * 
 */

// slide 1

let elms = document.getElementsByClassName( 'splide' );
for ( var i = 0, len = elms.length; i < len; i++ ) {
	
    slide = new Splide(elms[i], {
        classes: {
            arrows: 'splide__arrows your-class-arrows',
            arrow : 'splide__arrow your-class-arrow',
            prev  : 'splide__arrow--prev your-class-prev',
            next  : 'splide__arrow--next your-class-next',
        },
    
        type: 'loop',
        trimSpace: false,
        perPage : 1,
        width: '100%',

        autoplay: true,
        autoWidth: true,
        focus: 'center',
        fixWidth: '0rem',
        padding: {
            right: '5rem',
            left : '5rem',
        },
        perMove: 1,
       
    });
    slide.mount();
}








// SMOOTH SCROLL ANNIMATION WITH SCROLL REVEAL


// const scroll_item = ScrollReveal(
//     {
//         origin: 'bottom',
//         distance: '70px',
//         duration: 400,
//         reset: true
//     }
// )
// // start assigning the scroll animation to all div containers


//  // =========== INDEX PAGE ANNIMATION ====
// scroll_item.reveal('.hero__main', {delay: 100})
// // scroll_item.reveal('.left_icon', {interval: 200})
// scroll_item.reveal('.about__main', {delay: 100})
// scroll_item.reveal('.skills__main', {delay: 100})
// scroll_item.reveal('.outer__bx', {interval: 100})
// scroll_item.reveal('.works__main', {delay: 100})
// scroll_item.reveal('.grid__box', {interval: 100})
// scroll_item.reveal('.expert__main', {delay: 100})
// scroll_item.reveal('.box1', {interval: 100})

// scroll_item.reveal('.contact__main', {delay: 100})

// scroll_item.reveal('.contact__main', {delay: 100})



// AJAX REQUEST


function sendRequest() {
    // Validate inputs
    let mail = document.getElementById('email');
    let num = document.getElementById('phone');
    let message = document.getElementById('message');
    let name_error = document.getElementById('name_error')
    let num_error = document.getElementById('num_error')
    let respond = document.getElementById('respond')
    let re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (num.value.length !== 11  || num.length > 11 || num.length < 11) 
    {
        num_error.innerHTML = "Invalid phone number";
        num_error.style.color = "red";

        retrun;
    }
    else
    {
        if (num !== "" && mail !== "" && message !== "") 
        {
            var xhttp = new XMLHttpRequest()
            // AJAX
            xhttp.open("POST", "sendMail.php", true);
            xhttp.send()
            xhttp.onreadystatechange = function () {
                if(this.readyState == 4 && this.status == 200)
                {
                    respond.innerHTML = this.responseText;
    
                }
            }
    
        }
        else
        {
            respond.innerHTML = "failed something went wrong!";
            respond.style.background = "rgb(255, 101, 101);";
    
        }
    }
    
    
}

let respond = document.getElementById('respond');

setTimeout(() => {
    respond.style.display = 'none';
}, 5000);