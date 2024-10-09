// const currentLocation = window.location.pathname;
// const navLinks = document.querySelectorAll('nav a').

// forEach(link => {
//     console.log(link.href);
    
// });
// navLinks.forEach(link => {
//     if (link.href === currentLocation) {
//         link.classList.add('active');
//     }
// });

document.addEventListener('DOMContentLoaded', () => {
    const currentLocation = window.location.pathname;
    const navLinks = document.querySelectorAll('nav a');
    
    navLinks.forEach(link => {
        if(link.href.includes(currentLocation)){
            console.log(currentLocation);
            link.classList.add('active');
        }
    })
        console.log(navLinks);
});

function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}
