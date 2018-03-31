function solution () {
	var image = document.getElementById("image");

	image.onmouseover =  function () {
		image.src = "../img/img2.png";
	};
	image.onmouseout =  function () {
		image.src = "../img/img1.png";
	};
}
solution();