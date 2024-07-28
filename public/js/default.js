document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();
    
    var sidenav = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(sidenav);

    var elemsnav = document.querySelectorAll('.dropdown-trigger');
    var optionsdropdown = {
        coverTrigger: false
    };
    var instances = M.Dropdown.init(elemsnav, optionsdropdown);

    var modal = document.querySelectorAll('.modal');
    var optionsModal = {};
    var instances = M.Modal.init(modal, optionsModal);
});