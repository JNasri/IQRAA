function restrictInputOtherThanArabic($field) {
    // Arabic characters fall in the Unicode range 0600 - 06FF
    var arabicCharUnicodeRange = /[\u0600-\u06FF]/;
    $field.bind("keypress", function(event) {
        var key = event.which;
        // 0 = numpad
        // 8 = backspace
        // 32 = space
        if (key == 8 || key == 0 || key === 32) {
            return true;
        }
        var str = String.fromCharCode(key);
        if (arabicCharUnicodeRange.test(str)) {
            return true;
        }
        return false;
    });
}


function restrictInputOtherThanEnglish($field) {
    // Arabic characters fall in the Unicode range 0000 - 007F
    var arabicCharUnicodeRange = /[\u0000-\u007F]/;
    $field.bind("keypress", function(event) {
        var key = event.which;
        if (key == 32)
            return true;
        if (48 >= key && key <= 57)
            return false;
        if (65 <= key && key <= 90)
            return true;
        if (97 <= key && key <= 122)
            return true;
        return false;
    });
}

function NASort(a, b) {
    if (a.innerHTML == 'NA') {
        return 1;
    } else if (b.innerHTML == 'NA') {
        return -1;
    }
    return (a.innerHTML > b.innerHTML) ? 1 : -1;
};