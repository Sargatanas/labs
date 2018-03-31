function solution() {
	var size = document.getElementById("size").value;
	
    var result = "<table><tr>";
    var count = 1;
    var temp = 0;
    var sum = 0;
    for (var i = 0; i < size; i++) {
    	if (count > 20) {
    		result += "</tr><tr>";
    		count = 1;
    	} else {
    		count++;
    	}
    	temp = Math.floor(Math.random() * 100);
    	sum += temp;
    	result += "<td>" + String(temp) + "</td>";
    }

    if (count < 20) {
        result += "<td style='border: none;' rowspan='" + String(20 - count) +  "'></td>";
    }
    result += "</tr></table>";

    document.getElementById("sequence").innerHTML = result;
    document.getElementById("avarage").innerHTML = String(sum / size);
}