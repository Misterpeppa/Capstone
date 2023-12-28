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

