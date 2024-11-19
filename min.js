const navMenu = document.getElementById('nav-menu'),
navToggle = document.getElementById('nav-toggle'),
navClose = document.getElementById('nav-close');

if(navToggle){
  navToggle.addEventListener('click',()=>{
    navMenu.classList.add('show-menu');
  });
}

if(navClose){
  navClose.addEventListener('click',()=>{
    navMenu.classList.remove('show-menu');
  });
}
// <!--swipper-->
function imgGallery(){
  const mainImg = document.querySelector('.details-img'),
  smallImg = document.querySelectorAll('.details-small-img');

  smallImg.forEach((img)=>{
    img.addEventListener('click',function(){
      mainImg.src = this.src;
    });
  });
}

imgGallery();
var swipercategories = new Swiper(".categories-container", {
    spaceBetween: 24,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      350: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
        992: {
          slidesPerView: 4,
          spaceBetween: 24,
        },
        1200: {
          slidesPerView: 5,
          spaceBetween: 24,
        },
        1400: {
          slidesPerView: 6,
          spaceBetween: 24,
        },
      },
    
  });

  var swiperproducts = new Swiper(".new-container", {
    spaceBetween: 24,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
        1400: {
          slidesPerView: 4,
          spaceBetween: 24,
        },
      },
    
  });

  const tabs = document.querySelectorAll('[data-target]'),
  tabContents = document.querySelectorAll('[content]');

  tabs.forEach((tab)=>{
    tab.addEventListener('click',() => {
      const target = document.querySelector(tab.dataset.target);
      tabContents.forEach((tabContent) => {
        tabContent.classlist.remove('active-tab');
      });

      target.classList.add('active-tab');

      tabs.forEach((tab)=> {
        tab.classlist.remove('active-tab');
      });

      
      tab.classList.add('active-tab');
    });

  });

  $(document).ready(function(){
    $("#myInput").on("keyup",function(){
     var value = $(this).val().toLowerCase();
        $(".search").filter(function(){
          $(this).toggle($(this).text().toLowerCase().
          indexof(value) > -1)
        });
    });
  });

  // const search = () =>{
  //   const searchbox = document.getElementById("search-item").value.toUpperCase();
  //   const storeitems = document.getElementById("product-123")
  //   const product = document.querySelectorAll(".product-item")
  //   const pname = document.getElementsByTagName("h3")

  //   for(var i = 0; i < pname.length; i++){
  //     let match = product[i].getElementsByTagName('h3')[0];
  //     if(match){
  //       let textvalue = match.textContent || match.innerHTML

  //       if(textvalue.toUpperCase().indexOf(searchbox) > -1){
  //         product[i].computedStyleMap.display= "";

  //       }else{
  //         product[i].computedStyleMap.display= "none";
  //       }
  //     }
  //   }
  // }