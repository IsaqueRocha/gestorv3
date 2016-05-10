$(document).ready(function(){

	//Adiciona a class .option-selected emcada li da ul.box-option-selected li
	$( ".box-option-selected li" ).addClass( "option-selected" );

	//Adiciona a class .option-not-selected emcada li da ul.box-option-not--selected li
	$( ".box-option-not-selected li" ).addClass( "option-not-selected" );

	//Adiciona o span.search-option na ul.box-option-selected
	$('.box-option-selected').append('<span class="search-option"><input class="buscar" placeholder="Buscar..." type="text" autocomplete="off"></span>');

	// Oculta o span.box-option-not-selected
	$( '.box-option-not-selected' ).hide();

	// Verifica se não existe li.option-selected
    if ( $( 'li' ).hasClass( "option-selected" ) == false ) {

    	//Se a condição for verdadeira será exibido o Callback "Nenhum item selecionado" em ul.box-option-selected
		$('.box-option-selected').append('<span class="semItemSelected">Nenhum item selecionado</span>');
	};

	// Verifica se não existe li.option-not-selected
    if ( $( 'li' ).hasClass( "option-not-selected" ) == false ) {

    	//Se a condição for verdadeira será exibido o Callback "Nenhum item selecionado" em ul.box-option-not-selected
		$('.box-option-not-selected').append('<span class="semItemNotSelected">Não há itens para selecionar</span>');
	};

	//Seta o foco para o input.buscar e exibe ul.box-option-selected
	$(document).on('click', '.box-option-selected', function(){
	  $('.buscar').focus();
	  $('.box-option-not-selected').show();
	});

	//Esconde ul.box-option-selected
	$(function() {
	    $("html").on("click", function (e) {
	        if ($(e.target).closest(".box-option-selected,.box-option-not-selected").length){
	            return;
	        }else{
	        	$('.box-option-not-selected').hide();
	        }
	    });
	});

	// Evenntos onclick em li.option-selected
	$(document).on('click', '.option-selected', function(){

		// Cria a variavel valorOptionSelect que recebe o valor do li.option-selected
	    var valorOptionSelected = $(this).text();    
    	$('.box-option-not-selected').append('<li class="option-not-selected">' + valorOptionSelected + '</li>');

    	//Remove o li.option-selected no evento onclick
	    $(this).remove();

	    // Verifica se não existe li.option-selected
	    if ( $( 'li' ).hasClass( "option-selected" ) == false ) {

	    	//Se a condição for verdadeira será exibido o Callback "Nenhum item selecionado" em ul.box-option-selected
			$('.box-option-selected').append('<span class="semItemSelected">Nenhum item selecionado</span>');
		};

	    // Verifica se existe o callback "Nenhum item para selecionar" span.semtemNotSelected
	    if ($( 'span' ).hasClass( "semItemNotSelected" ) == true ) {

	    	//Se a condição for verdadeira remove o callback "Nenhum item para selecionado" span.semItemNotSelected
	    	$('.semItemNotSelected').remove();
	    };		

	});

	// Evenntos onclick em li.option-not-selected
	$(document).on('click', '.option-not-selected', function(){

		// Cria a variavel valorOptionNotSelect que recebe o valor do li.option-not-selected
	    var valorOptionNotSelected = $(this).text();    
		$('.box-option-selected').append('<li class="option-selected">' + valorOptionNotSelected + '</li>');	        

	    //Remove o li.option-not-selected no evento onclick
	    $(this).remove();

	    //Seta o foco para o input.buscar
	    $('.buscar').focus();

	    //// Verifica se existe o callback "Nenhum item selecionado" span,semItemSelected
	    if ($( 'span' ).hasClass( "semItemSelected" ) == true ) {

	    	//Se a condição for verdadeira remove o callback "Nenhum item selecionado" span,semItemSelected
	    	$('.semItemSelected').remove();
	    };

	    // Verifica se não existe li.option-selected
	    if ( $( 'li' ).hasClass( "option-not-selected" ) == false ) {

	    	//Se a condição for verdadeira será exibido o Callback "Nenhum item selecionado" em ul.box-option-selected
			$('.box-option-not-selected').append('<span class="semItemNotSelected">Nenhum item para selecionar</span>');
		};

	});

	// Filtro
	$(".buscar").keyup(function(){
		var texto = $(this).val();
		$(".box-option-not-selected li").css("display", "block");
		$(".box-option-not-selected li").each(function(){
			if($(this).text().toUpperCase().indexOf(texto.toUpperCase()) < 0){
				$(this).css("display", "none");
			}
		});
	});


	//limpa campo de busca
	$(".buscar").blur(function(){
	    $(this).val("");
	});


});