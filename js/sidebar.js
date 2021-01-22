// window.onload = () => sidebar();
// window.onscroll = () => sidebar();

// const sideBar = document.getElementById('sideBar');
// const sideMenu = document.getElementById('sideMenu');
// const sideIcon = document.getElementById('icon-grp-div');
// let page1 = '';
// if (window.location.pathname.indexOf('/') !== -1 && window.location.pathname.indexOf('index') !== -1) page1 = document.getElementById('page1');
// const iconName = document.getElementsByClassName('iconName');
// // sideMenu.classList.remove('footer');
// sideBar.classList.remove('footer');
// sideIcon.classList.remove('footer');
// sideBar.classList.remove('top');
// sideIcon.classList.remove('top');

// function sidebar() {
//     for (let i = 0; i< iconName.length; i++) iconName[i].classList.remove('top');
//     if (window.location.pathname.indexOf('index') !== -1) {
//         if (window.pageYOffset < (page1.offsetHeight - sideMenu.offsetHeight)) {
//             sideBar.classList.add('top');
//             sideIcon.classList.add('top');
//             for (let i = 0; i< iconName.length; i++) iconName[i].classList.add('top');
//         } else {
//             sideBar.classList.remove('top');
//             sideIcon.classList.remove('top');
//             for (let i = 0; i< iconName.length; i++) iconName[i].classList.remove('top');
//         }
//     }
//     console.log(window.pageYOffset)
//     // console.log(document.getElementsByClassName('page-container')[0].clientHeight);
//     console.log(window.outerHeight)

//     if (window.pageYOffset >= document.getElementsByClassName('page-container')[0].offsetHeight) {
//         sideBar.classList.add('footer');
//         sideIcon.classList.add('footer');
//         // sideMenu.classList.add('footer');
//     } else {
//         sideBar.classList.remove('footer');
//         sideIcon.classList.remove('footer');
//         // sideMenu.classList.remove('footer');
//     }
// }

const sideBar = document.getElementById('sideBar');
const sideMenu = document.getElementById('sideMenu');
const sideIcon = document.getElementById('icon-grp-div');
const iconName = document.getElementsByClassName('iconName');
const landingScreen = document.getElementById('landing-screen');
const headerContainer = document.getElementsByClassName('navbar')[0];
const footerContainer = document.getElementsByClassName('footer-con')[0];

// function removeSidebar() {
// }

window.onscroll = function() {
    console.log(window.location.pathname.indexOf('index') !== -1 || window.location.pathname === '');
    if (window.location.pathname.indexOf('index') !== -1 || window.location.pathname === '') {
        if (window.pageYOffset > (landingScreen.offsetHeight - sideMenu.offsetHeight)) {
            sideBar.classList.remove('top');
            sideIcon.classList.remove('top');
            for (let i = 0; i< iconName.length; i++) iconName[i].classList.remove('top');
        }
        else {
            sideBar.classList.add('top');
            sideIcon.classList.add('top');
            for (let i = 0; i< iconName.length; i++) iconName[i].classList.add('top');
        }
    }

    // if (window.pageYOffset > document.getElementsByClassName('page-container')[0].offsetHeight) {
    if ((footerContainer.offsetTop - footerContainer.offsetHeight - 150) < window.pageYOffset) {
        sideBar.classList.add('footer');
        sideIcon.classList.add('footer');
        headerContainer.classList.add('remove-header');
        // sideMenu.classList.add('footer');
    }
    else {
        sideBar.classList.remove('footer');
        sideIcon.classList.remove('footer');
        headerContainer.classList.remove('remove-header');
        // sideMenu.classList.remove('footer');
    }
    // console.log("Footer: ", (footerContainer.offsetTop - footerContainer.offsetHeight));
    // console.log("Y: ", window.pageYOffset);
}

$(() => {
    sideBar.classList.remove('footer');
    sideIcon.classList.remove('footer');

    if (window.location.pathname.indexOf('index') === -1 && window.location.pathname !== '') {
        sideBar.classList.remove('top');
        sideIcon.classList.remove('top');
    }
});