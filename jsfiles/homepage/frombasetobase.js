var click = document.getElementById('button2'); // Отслеживание клика по кнопке
click.addEventListener('click', calculate);

var numberInput = document.getElementById('number');
numberInput.addEventListener('input', calculate);

var baseFrom = document.getElementById('basefrom');
baseFrom.addEventListener('input', calculate);

var baseTo = document.getElementById('baseto');
baseTo.addEventListener('input', calculate);

var result = document.getElementById('result');

function calculate() {
    let number = numberInput.value;
    let from = baseFrom.value;
    let to = baseTo.value;

    number = Convert (number, from, to);

    result.value = number.toUpperCase();
}