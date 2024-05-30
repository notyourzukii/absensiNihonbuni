const showMenu = (toggleId, navbarId) =>{
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId)

    if(toggle && navbar){
        toggle.addEventListener('click', ()=>{
            navbar.classList.toggle('show-menu')
            toggle.classList.toggle('rotate-icon')
        })
    }
}

showMenu('nav-toggle','nav')
new DataTable('#table');
$(document).ready(function() {
    $('.select2').select2({
        dropdownAutoWidth: true
    });
});

