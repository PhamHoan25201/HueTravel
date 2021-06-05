const postDetails = document.querySelector(".post-details");
const postSidebar = document.querySelector(".post-sidebar");
const postSidebarContent = document.querySelector(".post-sidebar > div");
 
//1
const controller = new ScrollMagic.Controller(); 
 
//2
const scene = new ScrollMagic.Scene({
  triggerElement: postSidebar,
  triggerHook: 0,
  duration: getDuration
}).addTo(controller);
 
//3
if (window.matchMedia("(min-width: 768px)").matches) {
  scene.setPin(postSidebar, {pushFollowers: false});
}
 
//4
window.addEventListener("resize", () => {
  if (window.matchMedia("(min-width: 768px)").matches) {
    scene.setPin(postSidebar, {pushFollowers: false});
  } else {
    scene.removePin(postSidebar, true);
  }
});
 
function getDuration() {
  return postDetails.offsetHeight - postSidebarContent.offsetHeight;
}