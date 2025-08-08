
const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menuBtn")
const closeBtn = document.querySelector("#closeBtn")



// show side menu
closeBtn.addEventListener('click', () => {
    sideMenu.classList.remove('showMenu');
    sideMenu.classList.add('closeMenu');
    
    sideMenu.addEventListener('animationend', () => {
        sideMenu.style.display = 'none';
    }, { once: true });
})



// close side menu
menuBtn.addEventListener('click', () => {
    sideMenu.classList.remove('closeMenu');
    sideMenu.classList.add('showMenu');
    sideMenu.style.display = 'block';
})