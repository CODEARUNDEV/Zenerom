/* ==========================================================================
   work.js - Interactive Mechanics for Zenerom Work & Case Studies Page
   Zenerom UAE Digital Marketing & Technology Agency
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  initWorkFilter();
});

/**
 * Category Filtering for Works Page
 */
function initWorkFilter() {
  const filterBtns = document.querySelectorAll('.work-filter-btn');
  const workItems = document.querySelectorAll('.work-cl-item');

  if (!filterBtns.length || !workItems.length) return;

  filterBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      filterBtns.forEach((b) => b.classList.remove('is-active'));
      btn.classList.add('is-active');

      const filterVal = btn.getAttribute('data-filter');

      workItems.forEach((item) => {
        const itemCategory = item.getAttribute('data-category') || '';
        if (filterVal === 'all' || itemCategory.includes(filterVal)) {
          item.classList.remove('is-filtered-out');
        } else {
          item.classList.add('is-filtered-out');
        }
      });
    });
  });
}
