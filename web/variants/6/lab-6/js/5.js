function solution() {
    var window = document.getElementById('window');
    document.getElementById('user_name').innerHTML = document.getElementById('name').value;
    window.style.display = 'block';
    document.getElementById('close').addEventListener('click', function () {
        window.style.display = 'none';
    });
}