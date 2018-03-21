function nameField(id) {
    var criterion = true;
    var name = document.getElementById(id).value;
    var name_label = document.getElementById(id + '-label').innerHTML;

    var first_letter = name.charAt(0);
    if (!((first_letter >= "A") && (first_letter <= "Z") || (first_letter >= "А") && (first_letter <= "Я"))) {
        criterion = false;
        alert('Значение поля "' + name_label + '" должно начинаться с заглавной буквы');
    }

    var other_criterion = true;
    if (criterion) {
        var other_letters = '';
        other_letters = name.substr(1, name.length - 1);
        while (other_letters !== '') {
            var char = other_letters.charAt(0);
            other_letters = other_letters.substr(1, other_letters.length - 1);

            if (!((char >= "a") && (char <= "z") || (char >= "а") && (char <= "я")) || !(char !== "'")) {
                other_criterion = false;
            }
        }
    }
    if (!other_criterion) {
        alert('Значение поля "' + name_label + '" должно содержать первую заглавную и прочие строчные буквы');
        criterion = false;
    }

    return criterion;
}