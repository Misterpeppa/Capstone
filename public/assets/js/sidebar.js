document.addEventListener('DOMContentLoaded', function () {

    const sidebar = document.querySelector('.sidebar');
    const sidebarArrow = document.querySelector('.sidebar_arrow');
    const liSpanElements = document.querySelectorAll('.sidebar li span');
    const logoLink = document.getElementById('logo_link');
    const arrowSVG = document.querySelector('.arrow-svg'); // Get the arrow SVG element
    var menuToggle = document.getElementById('menu-toggle');
    
    const allLinks = document.querySelectorAll('.sidebar .sidebar_link');

    sidebarArrow.addEventListener('click', toggleSidebar);
    logoLink.addEventListener('click', () => {
        if (sidebar.classList.contains('collapsed')) {
            toggleSidebar();
        }
    });
    menuToggle.addEventListener('click', () => {
        if (sidebar.classList.contains('collapsed')) {
            toggleSidebar();
        } else{
            toggleSidebar();
        }
    });
        

    //added function para sa mga modals n lilitaw pagka click ng add buytton sa sidebar
    //buttons
    var add_appointment = document.getElementById('add_appointment');
    var add_pet = document.getElementById('add_pet');
    var add_client = document.getElementById('add_client');
    var add_product = document.getElementById('add_product');


    //modals
    var add_appointment_modal = new bootstrap.Modal(document.getElementById('add_appointment_modal'));
    var add_pet_record_modal = new bootstrap.Modal(document.getElementById('add_pet_record_modal-1'));
    var add_appointment_modal = new bootstrap.Modal(document.getElementById('add_client_modal'));
    var add_appointment_modal = new bootstrap.Modal(document.getElementById('add_product_modal'));
    
    


    add_appointment.addEventListener('click', function () {
        add_appointment_modal.show();
    });

    add_pet.addEventListener('click', function () {
        add_pet_record_modal.show();
    });

    add_client.addEventListener('click', function () {
        add_client_modal.show();
    });

    add_product.addEventListener('click', function () {
        add_product_modal.show();
    });

    function updateMenuToggleDisplay() {
        // Assuming you have a variable menuToggle that references the #menu-toggle element
        var menuToggle = document.getElementById('menu-toggle');
        
        if (sidebar.classList.contains('collapsed')) {
            // Show the menu-toggle when the sidebar is collapsed
            if (menuToggle) {
                menuToggle.style.display = 'flex';
            }
        } else {
            // Hide the menu-toggle when the sidebar is not collapsed
            if (menuToggle) {
                menuToggle.style.display = 'none';
            }
        }
    }
    
    // Initial call to set the initial state of the menu-toggle
    updateMenuToggleDisplay();
    
    
    
    
    function toggleSidebar() {
        sidebar.classList.toggle('collapsed');
        arrowSVG.classList.toggle('rotate180'); // Rotate the arrow SVG
    
        allLinks.forEach(link => {
            if (link !== logoLink) {
                link.style.display = sidebar.classList.contains('collapsed') ? 'none' : '';
            }
        });
    
        sidebarArrow.innerHTML = sidebar.classList.contains('collapsed') ? buttonSVGCollapsed : buttonSVGExpanded;
    
        // Call the function to update the menu-toggle display
        updateMenuToggleDisplay();
    }
    
    // Initial call to set the initial state of the menu-toggle
    updateMenuToggleDisplay();
    
    
    // Initial call to set the initial state of the menu-toggle
updateMenuToggleDisplay();

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
    });