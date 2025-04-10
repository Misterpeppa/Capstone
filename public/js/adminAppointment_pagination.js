// Get all pagination elements
const paginationMenus = document.querySelectorAll('.pagination-menu');
const paginationArrows = document.querySelectorAll('.pagination-arrow');
const paginationPagesContainers = document.querySelectorAll('.pagination-pages');
const paginationItemsSelects = document.querySelectorAll('.paginationItemsSelect');
const tabContents = document.querySelectorAll('.tab-content');

// Initialize the number of items per page for each tab
const itemsPerPage = [4, 4, 2]; // You can change these values as needed

// Add event listeners to handle pagination clicks
paginationMenus.forEach((paginationMenu, index) => {
  const paginationGoToSelect = paginationMenu.querySelector('.paginationGoToSelect');

  paginationGoToSelect.addEventListener('change', () => {
    const selectedPage = parseInt(paginationGoToSelect.value);
    showPage(index, selectedPage);
  });
});

paginationItemsSelects.forEach((paginationItemsSelect, index) => {
  paginationItemsSelect.addEventListener('change', () => {
    const newItemsPerPage = parseInt(paginationItemsSelect.value);
    itemsPerPage[index] = newItemsPerPage;
    showPage(index, 1); // Reset to the first page when changing items per page
  });
});

paginationArrows.forEach((paginationArrow, index) => {
  paginationArrow.addEventListener('click', () => {
    const currentPage = getCurrentPage(index);
    const nextPage = paginationArrow.classList.contains('previous-page')
      ? currentPage - 1
      : currentPage + 1;
    showPage(index, nextPage);
  });
});

paginationPagesContainers.forEach((paginationPagesContainer, index) => {
  paginationPagesContainer.addEventListener('click', (event) => {
    if (event.target.classList.contains('pagination-page')) {
      const selectedPage = parseInt(event.target.textContent);
      showPage(index, selectedPage);
    }
  });
});

// Function to show the specified page for a given tab
function showPage(tabIndex, pageNumber) {
  const tabContent = tabContents[tabIndex];
  const tableRows = tabContent.querySelectorAll('tbody tr');
  const totalRows = tableRows.length;
  const totalPages = Math.ceil(totalRows / itemsPerPage[tabIndex]);

  // Validate the pageNumber to ensure it stays within the valid range
  if (pageNumber < 1) {
    pageNumber = 1;
  } else if (pageNumber > totalPages) {
    pageNumber = totalPages;
  }

  // Calculate the start and end indexes of the items to display
  const startIndex = (pageNumber - 1) * itemsPerPage[tabIndex];
  const endIndex = Math.min(startIndex + itemsPerPage[tabIndex], totalRows);

  // Hide all table rows first
  tableRows.forEach((row) => {
    row.style.display = 'none';
  });

  // Show the items for the specified page
  for (let i = startIndex; i < endIndex; i++) {
    tableRows[i].style.display = 'table-row';
  }

  // Update the active page indicator within the current tab
  const paginationPages = tabContent.querySelectorAll('.pagination-page');
  paginationPages.forEach((paginationPage, index) => {
    if (index + 1 === pageNumber) {
      paginationPage.classList.add('active');
    } else {
      paginationPage.classList.remove('active');
    }
  });
}

// Helper function to get the current active page for a given tab
function getCurrentPage(tabIndex) {
  const tabContent = tabContents[tabIndex];
  const activePage = tabContent.querySelector('.pagination-page.active');
  return parseInt(activePage.textContent);
}

// Trigger initial pagination setup for each tab
tabContents.forEach((tabContent, index) => {
  showPage(index, 1);
});