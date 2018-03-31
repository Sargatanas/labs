function solution() {
	var date = new Date();
	
	if (date.getFullYear() % 4 !== 0) {
		document.getElementById("result").innerHTML = "В этом году летней Олимпиады не будет";
	} else {
		document.getElementById("result").innerHTML = "Летнеяя Олимпиада в этом году";
	}
}
solution();