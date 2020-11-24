//Slide Change
let slide1 = document.querySelector('.viettel-infomation__deep__change--1');
let slide2 = document.querySelector('.viettel-infomation__deep__change--2');
let slide3 = document.querySelector('.viettel-infomation__deep__change--3');

let isSlide1Active = true;
let isSlide2Active = false;
let isSlide3Active = false;

if (slide1) {
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

}

//Navigation
let navigationButton = document.querySelector(".navigation__button");
let elementRemove = document.querySelector(".viettel-infomation");
let elementRemove2 = document.querySelector(".form-2");
let isRemove = true;
let isRemove2 = true;

if (elementRemove) {
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
}


if (elementRemove2) {
	navigationButton.addEventListener('click', () => {
		if (isRemove2) {
			elementRemove2.classList.add("display-active");
			isRemove2 = false;
		} else {
			setTimeout(() => {
				elementRemove2.classList.remove("display-active");
				isRemove2 = true;
			},500)	

		}
	});
}









//Scroll

let btnClickToScroll1 = document.querySelector('#scrollTo1');
let btnClickToScroll2 = document.querySelector('#scrollTo2');
// window.addEventListener('scroll', () => {
// 	console.log(window.pageYOffset);
// })

if (btnClickToScroll1) {
	btnClickToScroll1.addEventListener("click", (e) => {
		e.preventDefault();
		window.scrollTo({top: 2250, behavior: 'smooth'});

	})
}

if (btnClickToScroll2) {
	btnClickToScroll2.addEventListener("click", (e) => {
		e.preventDefault();
		window.scrollTo({top: 1950, behavior: 'smooth'});

	})
}

//Scroll For Phone

// if ($(window).width() < 480 || $(window).height() < 480) {
//     //small screen, load other JS files
//     $.getScript('/js/script.js', function () {
//         //the script has been added to the DOM, you can now use it's code
//     });
// }