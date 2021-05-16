let salary;
let startedAt;
let skippedTicks = 0;
let nextAnimationFrame = false;
const $selector = document.querySelector('.selector > select');
const $selected = document.querySelector('.selector > .selected');
const $sum = document.querySelector('.sum');
const $sourceLink = document.querySelector('.source > a');
const $salaryComment = document.querySelector('.salary-comment');
// let $time = document.querySelector('.time');

const init = () => {
	startedAt = new Date().getTime();
	setSalary();
	window.setInterval(tick, 50);
	
	$selector.addEventListener('change', setSalary);
};

const setMineZP = () => {
    var value = document.getElementById("mine").value;
    
    if (value == "") {
        document.getElementById("mineOption").value = "0";
    } 
    else {
        document.getElementById("mineOption").value = value;
    }
}

const setSalary = () => {
	salary = parseFloat($selector.value) / 30 / 24 / 60 / 60 / 1000 / 135;
	
	const $option = $selector.querySelector('option:checked');
	
	$selected.textContent = $option.textContent;
	$sourceLink.href = $option.dataset.sourceLink;
	$sourceLink.textContent = $option.dataset.sourceName;
	$salaryComment.innerHTML = $option.dataset.comment || '&nbsp;';
	//alert(document.getElementById("select").innerHTML);
    if (document.getElementById("select").innerHTML == "Своя зарплата") {
        document.getElementById("mine").removeAttribute("hidden");
    }
    else {
        document.getElementById("mine").setAttribute("hidden", "hidden");
    }
};

const tick = () => {
	if (nextAnimationFrame === false)
	{
		nextAnimationFrame = window.requestAnimationFrame(animate);	
		return;
	}
	
	skippedTicks++;
	
	if (skippedTicks > 5)
	{
		nextAnimationFrame = false;
		skippedTicks = 0;
	}
	
	return;
};

const animate = () => {
	nextAnimationFrame = false;
	const now = new Date().getTime();
	const timeSpent = now - startedAt;
	const earned = salary * timeSpent;
	$sum.innerHTML = formatSum(earned);
	
	let k = Math.floor(earned);
	
	if (k % 100 > 10 && k % 100 < 20) {
	    document.getElementById("bigmak").innerHTML = "маков"
    }
    else if (k % 10 === 0) {
        document.getElementById("bigmak").innerHTML = "маков"
    }
    else if (k % 10 == 1) {
        document.getElementById("bigmak").innerHTML = "мак"
    }
    else if (k % 10 >= 5) {
        document.getElementById("bigmak").innerHTML = "маков"
    }
    else {
        document.getElementById("bigmak").innerHTML = "мака"
    }
};

const formatSum = sum => {
	const numString = sum.toFixed(4).toString();
	const numParts = numString.split('.');
	const intPart = numParts[0];
	const decPart = numParts[1];
	let formattedNum = intPart;
	
	if (intPart.length > 4)
	{
		let k = intPart.length % 4;
		const firstGroupIsEmpty = k === 0;
		formattedNum = intPart.substring(0, k);
		let first = true;
		while(k < intPart.length) {
			formattedNum += ((first && firstGroupIsEmpty) ? '' : '<b class="thin">&nbsp;</b>') + intPart.substring(k, k + 3);	
			first = false;
			k += 3;
		}
	}
	
	formattedNum += ',' + decPart;
	
	return formattedNum;
};

init();