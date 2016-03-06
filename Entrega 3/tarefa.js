var contagemObservador = iniciarObservador();

function iniciarObservador(){
	var lista = [];
	var evento = {contador:1};
	var item = {
		contagem : function () {
			var tamanho;
			for(tamanho = 0; tamanho < lista.length; ++tamanho){
				
			}
			console.log(evento);
			evento.contador++;
			
		}
	};
	function adicionarOuvinte(ouvinte){
		lista.push(ouvinte);
		contagemObservador.contagem();
	}
	item.adicionarOuvinte = adicionarOuvinte;
	return item;
}
function observador(evento){
	console.log(evento.contador);
}

console.log(contagemObservador);