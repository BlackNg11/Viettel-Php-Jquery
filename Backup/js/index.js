let slide1=document.querySelector(".viettel-infomation__deep__change--1"),slide2=document.querySelector(".viettel-infomation__deep__change--2"),slide3=document.querySelector(".viettel-infomation__deep__change--3"),isSlide1Active=!0,isSlide2Active=!1,isSlide3Active=!1;slide1&&setInterval(()=>{isSlide1Active?setTimeout(()=>{slide1.classList.remove("active"),slide2.classList.add("active"),isSlide1Active=!1,isSlide2Active=!0},1e3):isSlide2Active?setTimeout(()=>{slide2.classList.remove("active"),slide3.classList.add("active"),isSlide2Active=!1,isSlide3Active=!0},1e3):isSlide3Active&&setTimeout(()=>{slide3.classList.remove("active"),slide1.classList.add("active"),isSlide3Active=!1,isSlide1Active=!0},1e3)},7e3);let navigationButton=document.querySelector(".navigation__button"),elementRemove=document.querySelector(".viettel-infomation"),elementRemove2=document.querySelector(".form-register"),isRemove=!0,isRemove2=!0;elementRemove&&navigationButton.addEventListener("click",()=>{isRemove?(elementRemove.classList.add("display-active"),isRemove=!1):setTimeout(()=>{elementRemove.classList.remove("display-active"),isRemove=!0},500)}),elementRemove2&&navigationButton.addEventListener("click",()=>{isRemove2?(elementRemove2.classList.add("display-active"),isRemove2=!1):setTimeout(()=>{elementRemove2.classList.remove("display-active"),isRemove2=!0},500)});function findTop(a){var b=document.querySelector(a).getBoundingClientRect();return b.top+window.scrollY}let findWifi,findPhone,btnClickToScrollPhone1=document.querySelector("#scrollTo1"),btnClickToScrollPhone2=document.querySelector("#scrollTo2"),nodelistBtn1=document.querySelectorAll(".btn-scroll--1"),nodelistBtn2=document.querySelectorAll(".btn-scroll--2"),nodelistBtn3=document.querySelectorAll(".btn-scroll--3"),btnClickToScrollWifi1=Array.from(nodelistBtn1),btnClickToScrollWifi2=Array.from(nodelistBtn2),btnClickToScrollWifi3=Array.from(nodelistBtn3),wifiToScroll=document.querySelector("#wifiScroll"),phoneToScroll=document.querySelector("#phoneScroll"),formSetToScroll=document.querySelector(".form-register");if(formSetToScroll)var formRegister=findTop(".form-register");let indexToScroll=document.querySelector(".wifi-detail");indexToScroll&&(findWifi=findTop(".wifi-detail"),findPhone=findTop(".phone-detail")),wifiToScroll&&wifiToScroll.addEventListener("click",a=>{a.preventDefault(),window.scrollTo({top:findWifi,behavior:"smooth"})}),phoneToScroll&&phoneToScroll.addEventListener("click",a=>{a.preventDefault(),window.scrollTo({top:findPhone,behavior:"smooth"})}),btnClickToScrollPhone1&&btnClickToScrollPhone1.addEventListener("click",a=>{a.preventDefault(),window.scrollTo({top:formRegister,behavior:"smooth"})});btnClickToScrollPhone2&&btnClickToScrollPhone2.addEventListener("click",a=>{a.preventDefault(),window.scrollTo({top:formRegister,behavior:"smooth"})});btnClickToScrollWifi1&&btnClickToScrollWifi1.map(a=>{a.addEventListener("click",a=>{a.preventDefault(),window.scrollTo({top:formRegister,behavior:"smooth"})})});btnClickToScrollWifi2&&btnClickToScrollWifi2.map(a=>{a.addEventListener("click",a=>{a.preventDefault(),window.scrollTo({top:formRegister,behavior:"smooth"})})});btnClickToScrollWifi3&&btnClickToScrollWifi3.map(a=>{a.addEventListener("click",a=>{a.preventDefault(),window.scrollTo({top:formRegister,behavior:"smooth"})})});let itemHide=$(".navigation");itemHide.hide(),window.addEventListener("scroll",()=>{50<window.pageYOffset?itemHide.show("slow"):50>=window.pageYOffset&&itemHide.hide("slow")});