document.addEventListener('DOMContentLoaded', function () {

    const sidebar = document.querySelector('.sidebar');
    const sidebarArrow = document.querySelector('.sidebar_arrow');
    const liSpanElements = document.querySelectorAll('.sidebar li span');
    const logoLink = document.getElementById('logo_link');
    const arrowSVG = document.querySelector('.arrow-svg'); // Get the arrow SVG element
    
    const allLinks = document.querySelectorAll('.sidebar a');


    


    
    sidebarArrow.addEventListener('click', toggleSidebar);
    logoLink.addEventListener('click', () => {
        if (sidebar.classList.contains('collapsed')) {
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
    
    
    
    function toggleSidebar() {
        sidebar.classList.toggle('collapsed');
        arrowSVG.classList.toggle('rotate180'); // Rotate the arrow SVG
    
        if (sidebar.classList.contains('collapsed')) {
            allLinks.forEach(link => {
                if (link !== logoLink) {
                    link.style.display = 'none';
                }
            });
            sidebarArrow.innerHTML = buttonSVGCollapsed;
        } else {
            allLinks.forEach(link => {
                link.style.display = '';
            });
            sidebarArrow.innerHTML = buttonSVGExpanded;
        }
    }
    
    
    });