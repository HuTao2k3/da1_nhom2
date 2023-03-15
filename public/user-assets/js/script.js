'use strict';
window.addEventListener("load",function(){
  const progress = document.querySelector(".progress")
  window.addEventListener("scroll",function(){
      const scrollTop = window.pageYOffset
      /* Logging the value of the scrollTop variable to the console. */
      // console.log(scrollTop)
      //Tính ra chiều cao thật của web
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const width = (scrollTop / height) * 100;
      progress.style.width = `${width}%`
  })
  /**
   * navbar toggle
   */
  
  const overlay = document.querySelector("[data-overlay]");
  const navOpenBtn = document.querySelector("[data-nav-open-btn]");
  const navbar = document.querySelector("[data-navbar]");
  const navCloseBtn = document.querySelector("[data-nav-close-btn]");
  
  const navElemArr = [overlay, navOpenBtn, navCloseBtn];
  
  for (let i = 0; i < navElemArr.length; i++) {
    navElemArr[i].addEventListener("click", function () {
      navbar.classList.toggle("active");
      overlay.classList.toggle("active");
    });
  }
  
  
  
  /**
   * add active class on header when scrolled 200px from top
   */
  
  const header = document.querySelector("[data-header]");
  
  window.addEventListener("scroll", function () {
    window.scrollY >= 200 ? header.classList.add("active")
      : header.classList.remove("active");
  })
  
  const imgs = document.querySelectorAll('.img-select a');
  const imgBtns = [...imgs];
  let imgId = 1;
  
  imgBtns.forEach((imgItem) => {
      imgItem.addEventListener('click', (event) => {
          event.preventDefault();
          imgId = imgItem.dataset.id;
          slideImage();
      });
  });
  
  function slideImage(){
      const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;
  
      document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
  }
  
  window.addEventListener('resize', slideImage);
  window.addEventListener("load", function () {
    const tabItems = document.querySelectorAll(".tab-item");
    const tabList = document.querySelector(".tab-list");
    const tab = document.querySelector(".tab");
    const tabOffsetLeft = tab.offsetLeft;
    [...tabItems].forEach((item) =>
      item.addEventListener("click", handleTabClick)
    );
    function handleTabClick(e) {
      [...tabItems].forEach((item) => item.classList.remove("active"));
      e.target.classList.add("active");
      let leftSpacing = e.target.offsetLeft - tabOffsetLeft;
      tabList.scroll(leftSpacing / 2, 0);
    }
  });

    const tabItem = document.querySelectorAll(".tab-item");
    const tabList = document.querySelector(".tab-list");
    const tab = document.querySelector(".tab");
    const taboffSet = tab.offsetLeft; //khoảng cách của tab so với tablist
    [...tabItem].forEach(item => item.addEventListener("click", handleTabClick))
    function handleTabClick(e){
        [...tabItem].forEach(item => item.classList.remove("active"));
        e.target.classList.add("active");
        let leftSpacing = e.target.offsetLeft
        if(leftSpacing >= taboffSet){
            leftSpacing = e.target.offsetLeft - taboffSet
        }
        tabList.scroll(leftSpacing / 2,0);
    }
    tabList.addEventListener("wheel",function(e){
        const delta = e.deltaY;
        this.scrollLeft += delta
    });
})
 