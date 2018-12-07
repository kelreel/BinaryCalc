var click = document.getElementById('button1'); // Отслеживание клика по кнопке
click.addEventListener('click', initDec);

var decimalForm = document.getElementById('decimal');
decimalForm.addEventListener('input', initDec);

var binaryForm = document.getElementById('binary');
binaryForm.addEventListener('input', initBin);

var octalForm = document.getElementById('octal');
octalForm.addEventListener('input', initOctal);

var hexForm = document.getElementById('hex');
hexForm.addEventListener('input', initHex);

function initDec() {
    let number = parseFloat(decimalForm.value);
    
    binaryForm.value = Convert(number,10,2);
    octalForm.value = Convert(number,10,8);
    hexForm.value = Convert(number,10,16).toUpperCase();
}

function initBin() {
    let number = parseFloat(binaryForm.value);

    decimalForm.value = Convert(number, 2, 10);
    octalForm.value = Convert(number, 2, 8);
    hexForm.value = Convert(number, 2, 16).toUpperCase();
}

function initOctal() {
    let number = parseFloat(octalForm.value);

    binaryForm.value = Convert(number, 8, 2);
    decimalForm.value = Convert(number, 8, 10);
    hexForm.value = Convert(number, 8, 16).toUpperCase();
}

function initHex() {
    let number = hexForm.value;

    binaryForm.value = Convert(number, 16, 2);
    decimalForm.value = Convert(number, 16, 10);
    octalForm.value = Convert(number, 16, 8);
}

function Convert (number, fromBase, toBase) {
    let a = parseInt(number, fromBase);
    let result = a.toString(toBase);

    if (isNaN(result) && (toBase <= 10)) {
        return '';
    } else if (isNaN(parseInt(result, toBase)) && (toBase > 10)) {
        return '';
    }
    else {
        return result;
    }
}

//str.replace(/(\d)(?=(\d{4})+(\D|$))/g, '$1 ')