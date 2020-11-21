// const inputs = document.querySelectorAll(".input");

// function focusFunc() {
//   let parent = this.parentNode;
//   parent.classList.add("focus");
// }

// function blurFunc() {
//   let parent = this.parentNode;
//   if (this.value == "") {
//     parent.classList.remove("focus");
//   }
// }

// inputs.forEach((input) => {
//   input.addEventListener("focus", focusFunc);
//   input.addEventListener("blur", blurFunc);
// });

//Slide Change
let slide1 = document.querySelector('.viettel-infomation__deep__change--1');
let slide2 = document.querySelector('.viettel-infomation__deep__change--2');
let slide3 = document.querySelector('.viettel-infomation__deep__change--3');

let isSlide1Active = true;
let isSlide2Active = false;
let isSlide3Active = false;

setInterval(() => {
	if (isSlide1Active) {
		setTimeout(() => {
			slide1.classList.remove('active');
			slide2.classList.add('active');
			isSlide1Active = false;
			isSlide2Active = true;

		},1000)
	} else if (isSlide2Active) {
		setTimeout(() => {
			slide2.classList.remove('active');
			slide3.classList.add('active');
			isSlide2Active = false;
			isSlide3Active = true;
		},1000)

	} else if (isSlide3Active) {
		setTimeout(() => {
			slide3.classList.remove('active');
			slide1.classList.add('active');
			isSlide3Active = false;
			isSlide1Active = true;
		},1000)	
	}

},7000)


//Navigation
let navigationButton = document.querySelector(".navigation__button");
let elementRemove = document.querySelector(".viettel-infomation");
let isRemove = true;

navigationButton.addEventListener('click', () => {
	if (isRemove) {
		elementRemove.classList.add("display-active");
		isRemove = false;
	} else {
		setTimeout(() => {
			elementRemove.classList.remove("display-active");
			isRemove = true;
		},500)	
		
	}
	
});