function solution() {
    var image = document.getElementById('image');

    image.onmousedown = function (e) {

        var coords = getCoords(image);
        var shiftX = e.pageX - coords.left;
        var shiftY = e.pageY - coords.top;

        image.style.position = 'absolute';
        document.body.appendChild(image);
        moveAt(e);

        image.style.zIndex = 1000; // над другими элементами

        function moveAt(e) {
            image.style.left = e.pageX - shiftX + 'px';
            image.style.top = e.pageY - shiftY + 'px';
        }

        document.onmousemove = function (e) {
            moveAt(e);
        };

        image.onmouseup = function () {
            document.onmousemove = null;
            image.onmouseup = null;
        };

    };

    image.ondragstart = function () {
        return false;
    };
}

solution();

function getCoords(elem) {   // кроме IE8-
    var box = elem.getBoundingClientRect();
    return {
        top: box.top + pageYOffset,
        left: box.left + pageXOffset
    };
}

