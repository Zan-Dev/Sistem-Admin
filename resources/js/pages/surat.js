let currentPage = null;

function showPage(pageId) {

    const currentActive = document.querySelector('.page.active');
    const nextPage = document.getElementById(pageId);

    if (!nextPage) {
        return;
    }

    if (currentActive) {

        currentActive.classList.remove('active');
        currentActive.classList.add('hidden');

        if (['2', '3', '4', '5', '6'].includes(pageId)) {
            currentActive.classList.add('right');
        } else {
            currentActive.classList.add('left');
        }
    }

    nextPage.classList.remove('hidden', 'left', 'right');
    nextPage.classList.add('active');

    currentPage = pageId;
}

document.addEventListener('DOMContentLoaded', () => {
    showPage('1');
});