const mobileMenu = document.getElementsByClassName('mobile-menu')[0];
const mainNav = document.getElementsByClassName('main-nav')[0];
const postPopup = document.getElementsByClassName('post-popup')[0];

mobileMenu.addEventListener('click',function(){
  if(this.className == 'mobile-menu'){
    this.className = 'mobile-menu active';
    mainNav.className = 'main-nav active';
  } else {
    this.className = 'mobile-menu';
    mainNav.className = 'main-nav';
  }
});
