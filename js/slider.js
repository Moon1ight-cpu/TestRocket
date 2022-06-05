function slider(set) {
	const sliderContainer = document.querySelector(set.name),
		slider = sliderContainer.querySelector('.slider'),
		sliderItem = slider.querySelectorAll('.slider__item'),
		sliderArrows = sliderContainer.querySelectorAll('.arrows__item');
		numbersCounter = sliderContainer.querySelector('.numbers__counter');

	let numberSlider,numberSliderWork;

	// calculate the maximum width of all slides
	function forSliderItem(t) {
		t = 0;
		for (let i = 0; i < sliderItem.length - 1; i++) {
			t += sliderItem[i].clientWidth;
		}
		return t;
	}

	let maxWidth = forSliderItem(sliderItem), // maximum width of all slides
		slidWidth = 0, // main variable for calculating the movement of the slider
		count = 0; // counter

	//===== flip left
	sliderArrows[0].addEventListener('click', function () {
		if (count !== 0) {
			count--;
			slidWidth -= sliderItem[count].clientWidth;
			slider.style.transform = `translateX(-${slidWidth}px)`;
		} else {
			count = sliderItem.length - 1;
			slidWidth = maxWidth;
			slider.style.transform = `translateX(-${slidWidth}px)`;
		}

		if (set.numberSlid) {
			numberSliderWork(count);
		}
	});

	//===== flip right  
	sliderArrows[1].addEventListener('click', function () {
		if (count < sliderItem.length - 1) {
			count++;
			slidWidth += sliderItem[count].clientWidth;
			slider.style.transform = `translateX(-${slidWidth}px)`;
		} else {
			count = 0;
			slidWidth = 0;
			slider.style.transform = `translateX(-${slidWidth}px)`;
		}

		if (set.numberSlid) {
			numberSliderWork(count);
		}
	});

	//=====  count slider
	if (set.numberSlid) {
		numberSlider = function (item) {
			const countContainer = document.createElement('div'),
				sliderNumber = document.createElement('span'),
				slash = document.createElement('span'),
				allSliderNumber = document.createElement('span');
			sliderNumber.innerHTML = item + 1;
			slash.innerHTML = '/';
			allSliderNumber.innerHTML = sliderItem.length;
			countContainer.classList.add('count-slides');
			countContainer.append(sliderNumber, slash, allSliderNumber);
			numbersCounter.append(countContainer);
		};
		numberSlider(0);

		numberSliderWork = function (item) {
			const sliderNumberNow = numbersCounter.querySelector('.count-slides span');
			sliderNumberNow.innerHTML = item + 1;
		};
	}
}

slider({
	name: ".service__slider",
	numberSlid: true,
});