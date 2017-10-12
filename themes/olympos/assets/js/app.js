//import {sayHi, sayBye} from './sayhi';

//sayHi('Toi 123 !');

class HelloWorld {
    constructor(name) {

        $('#maCase')
        	.html('<b>Salut, le Monde !</b>... Et <strong>' + name + '</strong> !');

    }
}

// new HelloWorld('Lionel');
new HelloWorld('Doro');


(function($){

	$('.menu .etape').tab();
	




	// $('#maCase').html('<b>Salut, le Monde !</b>... Et <strong>Lionel C.</strong> !');
	$('#MoviesFilter').on('change','input, select', function(){
		var $form = $(this).closest('form');
		$form.request();
	})

	$('#tab2').click();

})(jQuery);

