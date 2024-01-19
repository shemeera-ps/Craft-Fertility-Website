const menuIcon = document.getElementById('menu-icon');
const closeIcon = document.getElementById('close-icon');
const navItems = document.getElementById('nav-items');
const navLinks = document.querySelectorAll('.nav-links');
menuIcon.addEventListener('click', (e) => {
    e.preventDefault();
    console.log(navLinks)
    menuIcon.classList.add('hidden');
    closeIcon.classList.remove('hidden');
    navItems.classList.remove('hidden');
    navLinks.forEach(link => {
        link.classList.remove('hidden');
    });
});

closeIcon.addEventListener('click', (e) => {
    e.preventDefault();
    menuIcon.classList.remove('hidden');
    closeIcon.classList.add('hidden');
    
    navLinks.forEach(link => {
        link.classList.add('hidden');
    });
});

const reviewContainer = document.getElementById('review-container');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');
const reviews = document.querySelectorAll('.review');
let currentIndex = 0;

function showReview(index, reviews) {
    reviews.forEach((review, i) => {
        if (i === index) {
            review.classList.remove('hidden');
        } else {
            review.classList.add('hidden');
        }
    });

    // Toggle visibility of navigation buttons
    if (index === 0) {
        prevButton.style.visibility = 'hidden';
    } else {
        prevButton.style.visibility = 'visible';
    }

    if (index === reviews.length - 1) {
        nextButton.style.visibility = 'hidden';
    } else {
        nextButton.style.visibility = 'visible';
    }
}

prevButton.addEventListener('click', (e) => {
    e.preventDefault();
    currentIndex = (currentIndex - 1 + reviews.length) % reviews.length;
    showReview(currentIndex,reviews);
});

nextButton.addEventListener('click', (e) => {
    e.preventDefault();
    currentIndex = (currentIndex + 1) % reviews.length;
    showReview(currentIndex,reviews);
});

// Initial display
showReview(currentIndex,reviews);

// const reviewVideo = document.getElementById('review-container');
const prevVideo = document.getElementById('prevVideo');
const nextVideo = document.getElementById('nextVideo');
const videos = document.querySelectorAll('.video');
let currentVideoIndex = 0;

prevVideo.addEventListener('click', (e) => {
    e.preventDefault();
    currentVideoIndex = (currentVideoIndex - 1 + videos.length) % videos.length;
    showReview(currentVideoIndex,videos);
});

nextVideo.addEventListener('click', (e) => {
    e.preventDefault(); 
    currentVideoIndex = (currentVideoIndex + 1) % videos.length;
    showReview(currentVideoIndex,videos);
});
showReview(currentVideoIndex,videos);


const prevTech = document.getElementById('prevTech');
const nextTech = document.getElementById('nextTech');
const technologies = document.querySelectorAll('.tech');
let currentTechIndex = 0;

prevTech.addEventListener('click', (e) => {
    e.preventDefault();
    currentTechIndex = (currentTechIndex - 1 + technologies.length) % technologies.length;
    showReview(currentTechIndex,technologies);
});

nextTech.addEventListener('click', (e) => {
    e.preventDefault(); 
    currentVideoIndex = (currentVideoIndex + 1) % technologies.length;
    showReview(currentTechIndex,technologies);
});
showReview(currentTechIndex,technologies);
