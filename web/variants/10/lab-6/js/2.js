function solution() {
	var p = Number(document.getElementById("p").value);

	var number = 1;
	var composition = 1;
	var count = 0;
	for (; composition < p; ) {
		composition *= number;
		number += 2;
		count ++;
	}
	if (p === 1) {
		count = 1;
	}

	console.log(composition, composition === p, count);

	if (composition === p) {
		document.getElementById("result").innerHTML = "Все верно, <i>p</i> является произведением первых " + 
		          String(count) + " нечетных чисел";
	} else {
		document.getElementById("result").innerHTML = "<i>p</i> не является произведением скольких-то нечетных чисел, взятых по порядку "
	}
}