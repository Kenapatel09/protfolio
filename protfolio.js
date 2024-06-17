const menuIcon = document.getElementById('menu-icon');
const navigation = document.getElementById('navigation');

menuIcon.addEventListener('click', () => {
  navigation.classList.toggle('active');
});

const educationContent = document.querySelector('.education-content');

// add event listener to the education page
document.addEventListener('DOMContentLoaded', () => {
  educationContent.classList.add('active'); // add the active class to trigger the animation
});
