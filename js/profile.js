$(document).ready(function() {
    $(navbarDropdownMenuLink).ready(function() {
        $('.dropdown-toggle').dropdown()
      });
  });
  // Define an object to store the click counts for each article
let clickCounts = {};

// Attach an event listener to all article links to track clicks
const articleLinks = document.querySelectorAll('a.article-link');
articleLinks.forEach(link => {
  link.addEventListener('click', event => {
    event.preventDefault();
    const articleId = link.dataset.id;
    clickCounts[articleId] = (clickCounts[articleId] || 0) + 1;
    localStorage.setItem('clickCounts', JSON.stringify(clickCounts));
    updateMostClickedArticle();
    window.location.href = link.href;
  });
});

// Retrieve the click counts from localStorage on page load
if (localStorage.getItem('clickCounts')) {
  clickCounts = JSON.parse(localStorage.getItem('clickCounts'));
}

// Define a function to update the "most clicked" article on the profile page
function updateMostClickedArticle() {
  const articleIds = Object.keys(clickCounts);
  const sortedIds = articleIds.sort((a, b) => clickCounts[b] - clickCounts[a]);
  const mostClickedId = sortedIds[0];
  const mostClickedTitle = document.querySelector(`a.article-link[data-id="${mostClickedId}"]`).textContent;
  const mostClickedLink = document.querySelector(`a.article-link[data-id="${mostClickedId}"]`).href;
  const mostClickedElement = document.querySelector('#most-clicked');
  mostClickedElement.innerHTML = `<a href="${mostClickedLink}">${mostClickedTitle}</a>`;
}

// Call the updateMostClickedArticle() function to set the initial "most clicked" article
updateMostClickedArticle();

// Schedule a periodic update to refresh the "most clicked" article every 10 minutes
setInterval(updateMostClickedArticle, 10 * 60 * 1000);
