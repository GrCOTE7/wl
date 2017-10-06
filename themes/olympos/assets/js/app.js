//import {sayHi, sayBye} from './sayhi';

//sayHi('Toi 123 !');

class HelloWorld {
    constructor(name) {
	var a = 2;
	var b=210;

        $('#masCase')
        	.html('<b>Salut, le Monde !</b>... Et <strong>' + name + '</strong> ! => '+ (a+b));

    }
}

/*new HelloWorld('Lionel CÔTE');*/
new HelloWorld('Doro');