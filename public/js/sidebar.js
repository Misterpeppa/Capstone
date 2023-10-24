const sidebar = document.querySelector('.sidebar');
const sidebarArrow = document.querySelector('.sidebar_arrow');
const liSpanElements = document.querySelectorAll('.sidebar li span');
const logoLink = document.getElementById('logoLink');
const arrowSVG = document.querySelector('.arrow-svg'); // Get the arrow SVG element


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
        liSpanElements.forEach(span => {
            span.style.display = 'none';
        });
        sidebarArrow.innerHTML = buttonSVGCollapsed;
    } else {
        liSpanElements.forEach(span => {
            span.style.display = '';
        });
        sidebarArrow.innerHTML = buttonSVGExpanded;
    }
}
// Get all the <li> elements inside the sidebar
const liElements = document.querySelectorAll('.sidebar li');

// Attach a click event listener to each <li> element
liElements.forEach(li => {
    li.addEventListener('click', function() {
        // Remove the 'active' class from all <li> elements
        liElements.forEach(item => item.classList.remove('active'));

        // Add the 'active' class to the clicked <li> element
        this.classList.add('active');

        // Reset the stroke color of all SVG icons
        document.querySelectorAll('.sidebar li svg path').forEach(path => {
            path.setAttribute('stroke', '#1C1C1C');
        });

        // Change the stroke color of the clicked SVG icon
        const svgPath = this.querySelector('svg path');
        svgPath.setAttribute('stroke', '#004D53');
    });
});