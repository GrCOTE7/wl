

export default function (name) {
    $('#maCase').html('<b>Salut, ' + name + ' !</b>');
}

export function sayHi(name) {
    $('#maCase').html('<b>Salut, ' + name + ' !</b>');
}

export function sayBye(name) {
    $('#maCase').html('<b>Au revoir, ' + name + ' !</b>');
}
