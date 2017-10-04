function sayHi(name) {
    $('#maCase').html('<b>Salut, ' + name + ' !</b>');
}

// sayHi('Toi');


var salut = function Salut(name) {
    $('#maCase').html('<b>Salut, ' + name + ' !</b>');
};


new salut('Tôa');


$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})
