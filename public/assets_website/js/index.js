

let navBar = document.getElementById("navBar");
let footer = document.getElementById("footer");

let navBarcontainer= `      <div class=" navContainer text-white fixed-top">
<nav class=" py-2">
  <div class="container nav d-block  navbar-expand-lg bg-body-tertiary ">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-3 col-10">
        <a class="navbar-brand py-2 text-center  m-0" href="index.html">
          <img class="px-3" src="assets/imgs/home/malmas.svg" />
        </a>
      </div>
      <div class="col-lg-9  col-2 d-flex justify-content-sm-center" >
        <div class="container-fluid nav-container">
          <a class="navbar-toggler  border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars  fs-3"></i>
            </a>

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <a class="navbar-brand  py-2 text-center  m-0" href="index.html">
                  <img class="" src="assets/imgs/home/malmas.svg" />


                </a>
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
              <i class="fa-solid fa-xmark text-white"></i>
              </button>
            </div>

            <div class="offcanvas-body header ">

              <ul class="navbar-nav w-100  gap-lg-3 gap-2  align-items-lg-center">

                <li class="nav-item px-2 ">
                  <a class="nav-link active " aria-current="page" href="index.html">
                    <span >
                      الرئيسية
                    </span>
                  </a>
                </li>
                <li class="nav-item px-2  ">
                  <a class="nav-link " aria-current="page" href="index.html#services">
                    <span class="">الخدمات</span>
                  </a>
                </li>
                <li class="nav-item  px-2 ">
                  <a class="nav-link " aria-current="page" href="index.html#packages"><span class="">الباقات</span></a>
                </li>
                                <li class="nav-item px-2">
                  <a class="nav-link " aria-current="page" href="index.html#about"><span class="">عنا</span></a>
                </li>     
                <li class="nav-item px-2">
                  <a class="nav-link " aria-current="page" href="index.html#contactUs"><span class="">تواصل عنا</span></a>
                </li>      
              
              </ul>
                  <ul class="navbar-nav w-100  gap-lg-3 gap-2 justify-content-lg-end align-items-lg-center">                     

<li class="">
<div class="px-2 LanguageMenu " role="button">

<span class="lan" id="LanguageText">العربية</span>
<span >

    
<i class="fa-solid fa-globe"></i>
  </span>
</div>  </li>

<li class=" d-flex">
<a href="tel:+995553921888" class="bg-primary-color btn smallres w-auto my-2 rounded-2 text-white fw-semibold px-md-5 px-4 py-2 d-flex align-items-center gap-2 w-auto"><span><svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.71 14.29L7.56 14.17C7.50426 14.1322 7.44372 14.1019 7.38 14.08L7.2 14C7.03782 13.9661 6.86976 13.973 6.71092 14.0201C6.55208 14.0673 6.40744 14.1531 6.29 14.27C6.20167 14.3672 6.13064 14.4788 6.08 14.6C6.00432 14.7822 5.98423 14.9827 6.02226 15.1763C6.06028 15.3699 6.15472 15.5479 6.2937 15.688C6.43267 15.828 6.60996 15.9238 6.80326 15.9633C6.99656 16.0028 7.19722 15.9843 7.38 15.91C7.4995 15.852 7.61052 15.778 7.71 15.69C7.84876 15.5494 7.94275 15.3708 7.98013 15.1768C8.0175 14.9828 7.99658 14.7821 7.92 14.6C7.87014 14.4844 7.79889 14.3792 7.71 14.29ZM11 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H11C11.7956 20 12.5587 19.6839 13.1213 19.1213C13.6839 18.5587 14 17.7956 14 17V3C14 2.20435 13.6839 1.44129 13.1213 0.87868C12.5587 0.316071 11.7956 0 11 0ZM12 17C12 17.2652 11.8946 17.5196 11.7071 17.7071C11.5196 17.8946 11.2652 18 11 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H11C11.2652 2 11.5196 2.10536 11.7071 2.29289C11.8946 2.48043 12 2.73478 12 3V17Z" fill="white"/>
</svg>
</span><span class="d-flex align-items-center pt-1">553921888</span></a>    
</li>
              </ul>
            </div>
          </div>
        </div>
      </div>







    </div>
  </div>
</nav>

</div>
<div class="floatwhatsapp ">
<i class="fa-brands fa-whatsapp "></i>

</div>
<div class="back-to-top" id="backTop">
<i class="fa-solid fa-chevron-up"></i>

</div>

  `
navBar.innerHTML = navBarcontainer;

$(document).ready(() => {
  $(window).scroll(function () {
    let windowScroll = $(window).scrollTop();
    if (windowScroll > 130) {
      $("#backTop").fadeIn(10).css("display","flex");
      $(".navContainer").addClass("bg-white");
      $(".navContainer").removeClass("text-white");
    }
    else {
      $("#backTop").fadeOut(500)
      $(".navContainer").removeClass("bg-white");
      $(".navContainer").addClass("text-white");

    }
  })
  $("#backTop").click(function () {
    $("html,body").animate({ scrollTop: 0 }, 300)
  })
  });



let FooterContainer= `        
        <footer>
      <div class="container py-5">
      <div class="row justify-content-between" data-aos="fade-up" >
      <div class=" col-12 text-white  align-items-start gap-3 pb-md-1 pb-3">
      <a class="navbar-brand py-2 text-center  m-0" href="index.html">
      <img class=""  src="assets/imgs/home/malmas-footer.svg" />
      </a>
      </div>
      <div class="col-md-4 col-12 text-white  align-items-start gap-3">

      <ul class="p-0 fs-6 ">
      
          
        <li class="py-lg-1 py-2">
          <a href="tel:+966553921888" target="_blank">
              <span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.3084 15.2748C18.3084 15.5748 18.2417 15.8832 18.1001 16.1832C17.9584 16.4832 17.7751 16.7665 17.5334 17.0332C17.1251 17.4832 16.6751 17.8082 16.1667 18.0165C15.6667 18.2248 15.1251 18.3332 14.5417 18.3332C13.6917 18.3332 12.7834 18.1332 11.8251 17.7248C10.8667 17.3165 9.90842 16.7665 8.95842 16.0748C8.00008 15.3748 7.09175 14.5998 6.22508 13.7415C5.36675 12.8748 4.59175 11.9665 3.90008 11.0165C3.21675 10.0665 2.66675 9.1165 2.26675 8.17484C1.86675 7.22484 1.66675 6.3165 1.66675 5.44984C1.66675 4.88317 1.76675 4.3415 1.96675 3.8415C2.16675 3.33317 2.48341 2.8665 2.92508 2.44984C3.45841 1.92484 4.04175 1.6665 4.65841 1.6665C4.89175 1.6665 5.12508 1.7165 5.33341 1.8165C5.55008 1.9165 5.74175 2.0665 5.89175 2.28317L7.82508 5.00817C7.97508 5.2165 8.08341 5.40817 8.15841 5.5915C8.23341 5.7665 8.27508 5.9415 8.27508 6.09984C8.27508 6.29984 8.21675 6.49984 8.10008 6.6915C7.99175 6.88317 7.83341 7.08317 7.63341 7.28317L7.00008 7.9415C6.90841 8.03317 6.86675 8.1415 6.86675 8.27484C6.86675 8.3415 6.87508 8.39984 6.89175 8.4665C6.91675 8.53317 6.94175 8.58317 6.95842 8.63317C7.10842 8.90817 7.36675 9.2665 7.73341 9.69984C8.10841 10.1332 8.50841 10.5748 8.94175 11.0165C9.39175 11.4582 9.82508 11.8665 10.2667 12.2415C10.7001 12.6082 11.0584 12.8582 11.3417 13.0082C11.3834 13.0248 11.4334 13.0498 11.4917 13.0748C11.5584 13.0998 11.6251 13.1082 11.7001 13.1082C11.8417 13.1082 11.9501 13.0582 12.0417 12.9665L12.6751 12.3415C12.8834 12.1332 13.0834 11.9748 13.2751 11.8748C13.4667 11.7582 13.6584 11.6998 13.8667 11.6998C14.0251 11.6998 14.1917 11.7332 14.3751 11.8082C14.5584 11.8832 14.7501 11.9915 14.9584 12.1332L17.7167 14.0915C17.9334 14.2415 18.0834 14.4165 18.1751 14.6248C18.2584 14.8332 18.3084 15.0415 18.3084 15.2748Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                  </svg>
                  
              </span>
              <span class="">(+966) 553-921-888</span>
          </a>
      </li>
      <li class="py-lg-1 py-2">
        <a href="mailto:Malmas@gmail.om" target="_blank">
            <span>
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.1667 17.0832H5.83332C3.33332 17.0832 1.66666 15.8332 1.66666 12.9165V7.08317C1.66666 4.1665 3.33332 2.9165 5.83332 2.9165H14.1667C16.6667 2.9165 18.3333 4.1665 18.3333 7.08317V12.9165C18.3333 15.8332 16.6667 17.0832 14.1667 17.0832Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.1667 7.5L11.5583 9.58333C10.7 10.2667 9.29167 10.2667 8.43334 9.58333L5.83334 7.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            </span>
            <span class="">Malmas@gmail.om</span>
        </a>
    </li>
                <li class="py-lg-1 py-2">
            <a href="https://maps.app.goo.gl/AXQyjMbeFXK5NdBe9" target="_blank">
                <span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 12.3108C12.5795 12.3108 13.86 11.0304 13.86 9.45082C13.86 7.87129 12.5795 6.59082 11 6.59082C9.42048 6.59082 8.14001 7.87129 8.14001 9.45082C8.14001 11.0304 9.42048 12.3108 11 12.3108Z" stroke="white" stroke-width="1.5"/>
                    <path d="M3.31832 7.78266C5.12415 -0.155669 16.885 -0.146502 18.6817 7.79183C19.7358 12.4485 16.8392 16.3902 14.3 18.8285C12.4575 20.6068 9.54249 20.6068 7.69082 18.8285C5.16082 16.3902 2.26415 12.4393 3.31832 7.78266Z" stroke="white" stroke-width="1.5"/>
                    </svg>     
                </span>
                <span class="">ام الشعال، الرياض 14579، المملكة العربية السعودية
                </span>
            </a>
        </li>
        </ul>      </div>
        <div class="col-lg-4 col-md-4 col-12 ">      
            <ul class="p-0 fs-6 list-footer">
              <li class="py-1">
                <a href="index.html">
                  الرئيسية
                </a>
              </li>
              <li class="py-1">
                <a href="index.html/#about">
               عنا
                </a>
              </li>
              <li class="py-1 py-2">
              <a href="index.html/#services">
                الخدمات
              </a>
            </li>
        <li class="py-1">
        <a href="index.html/#contactUs">
          تواصل معنا
        </a>
      </li>
      <li class="py-1">
        <a href="index.html/#packages">
          الباقات
        </a>
        </li>
      <li class="py-1">
      <a href="Policy.html">
        سياسة الخصوصية
      </a>
      </li>
      

        <li class="py-1">
          <a href="faq.html">
            الاسئلة الشائعة
          </a>
          </li>
          <li class="py-1">
            <a href="terms.html">
             الشروط والاحكام
            </a>
            </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4 col-12 ">
            <h4 class="">اشترك في نشرتنا الإخبارية</h4>
            <form class="Newsletter">
              <div>
              <label for="phonenumber" class="form-label">البريد الالكتروني </label>
            <input class="form-control border rounded-3 border-white py-2" id="Newsletter" placeholder="Enter your email address" requierd/>
          </div>
          <div class="d-flex justify-content-center py-4">
            <button type="submit" class="btn bg-Secondary-color text-white m-auto px-5 py-2">اشتراك</button>
          </div>
            </form>
            </div>
        <div class="col-12 d-flex justify-content-center">
          <ul class="social d-flex px-0">
            <li>
              <a target="_blank" href="#">
                <i class="fab fa-facebook-f icon"></i>
              </a>
            </li>
            <li>
              <a target="_blank" href="#"><i class="fab fa-twitter icon"></i></a>
            </li>
            <li>
              <a target="_blank" href="#"><i class="fa-brands fa-instagram icon">
              </i></a>
            </li>
            <li>
              <a target="_blank" href="#"><i class="fa-brands fa-whatsapp icon"></i></a>
      
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-12 px-0">
      
        </div>
      </div>
      </div>
      
      <div class="container py-3">
            
            
        <div class="row justify-content-between border-top border-light text-white-50 py-4 gy-3 fw-medium ">
          <div class=" col-lg-5 col-md-6  col-12  ">
            حقوق الطبع والنشر2024Malmas® والشركات التابعة لها. جميع الحقوق محفوظة.
        </div>
        <div class="col-lg-5 col-md-6  col-12   ">
        <div class=" w-100 emcan">
          بواسطة<span class="fw-semibold"> <a style="color:#33A081;opacity: 1; font-size:inherit" target="_blank"  href="https://emcan-group.com/en"> Emcan Solutions</a> </span>
        
        </div>
        </div>
        
        
        
        </div>
        
        </div>
      </footer>
  `
  footer.innerHTML = FooterContainer;


//     startPage();
// CheckLanguage();
// function startPage() {
//   let lang = localStorage.getItem('Language');
//   if (lang == undefined || lang == null || lang == "") {
//   localStorage.setItem('Language',"English");
//   }
// }

// document.addEventListener('DOMContentLoaded', function() {
//   const dropdownLanguage = document.querySelectorAll('.LanguageMenu');
//   dropdownItems.forEach(item => {
//       item.addEventListener('click', function() {
//           const selectedOption = item.textContent.trim();
//           localStorage.setItem('ViewMode',selectedOption);
//           window.location.reload();
//       });
//   });
//   dropdownLanguage.forEach(item => {
//     item.addEventListener('click', function() {
//         const selectedOption = item.textContent.trim();
//         localStorage.setItem('Language',selectedOption);
//         window.location.reload();
//     });
// });
// });

startPage();
CheckLanguage();
/////// initialize All Item needed for Running Page
function startPage() {
  let lang = localStorage.getItem('Language');
  if (lang == undefined || lang == null || lang == "") {
  localStorage.setItem('Language',"العربية");
  }

  
}


    document.addEventListener('DOMContentLoaded', function() {
      const dropdownLanguage = document.querySelectorAll('.LanguageMenu .lan');
      dropdownLanguage.forEach(item => {
        item.addEventListener('click', function() {
            const selectedOption = item.textContent.trim();
            localStorage.setItem('Language',selectedOption);
            window.location.reload();
        });
    });
    });

    function CheckLanguage(){
      const Language = localStorage.getItem('Language');
      if (Language == "English") {
        document.body.style.direction = "ltr";
        document.body.classList.remove("arabicVersion");

      }
      else if(Language == "العربية"){
        document.body.style.direction = "rtl";
        const Language = document.getElementById('LanguageText');
        Language.textContent = "English" ;
    document.body.classList.add("arabicVersion");
      }
    }

    
    document.addEventListener('DOMContentLoaded', function() {
      const dropdownLanguage = document.querySelectorAll('.LanguageMenu .lan');
      dropdownLanguage.forEach(item => {
        item.addEventListener('click', function() {
            const selectedOption = item.textContent.trim();
            localStorage.setItem('Language',selectedOption);
            window.location.reload();
        });
    });
    });
    // $(document).ready(() => {
    //   $(window).scroll(function () {
    //     let windowScroll = $(window).scrollTop();
    //     if (windowScroll > 130) {
    //       $("#backTop").fadeIn(10).css("display","flex");
    //       // $(".navContainer").addClass("bg-white");
    //       // $(".navContainer").removeClass("text-white");
    
    
    //     }
    //     else if(windowScroll > 0.5) {
    //       // $(".navContainer").addClass("bg-white");
    //       // $(".navContainer").removeClass("text-white");
    //       $(".navContainer").removeClass("fixed-top");
    //       $(".navContainer").addClass("bg-white");
    //             $(".navContainer").removeClass("text-white");
    
    //     }
    //     else {
    //       $("#backTop").fadeOut(500)
    //       $(".navContainer").removeClass("bg-white");
    //       $(".navContainer").addClass("fixed-top");
    //       $(".navContainer").addClass("text-white");
    
    //     }
    //   })
    //   $("#backTop").click(function () {
    //     $("html,body").animate({ scrollTop: 0 }, 300)
    //   })
    //   });