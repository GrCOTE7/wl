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


	$('#procedure .menu .item')
  .tab({
    context: $('#procedure')
  });

	// $('#btn1').click();
	$('#tab1').click();


	// $('#maCase').html('<b>Salut, le Monde !</b>... Et <strong>Lionel C.</strong> !');
	$('#MoviesFilter').on('change','input, select', function(){
		var $form = $(this).closest('form');
		$form.request();
	})


})(jQuery);

