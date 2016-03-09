
function Animal() {
	this.categoria = "Animal";
}
Animal.prototype = {

		barulhos:function(){
			return "...";
		}

};
function Cachorro(){
	Animal.call(this);
}
var cachorroPrototype = new Animal();
cachorroPrototype.barulhos = function(){
	return "Au";
};
Cachorro.prototype = cachorroPrototype;
function Gato(){
	Animal.call(this);
}
var gatoPrototype = new Animal();
gatoPrototype.barulhos = function(){
	return "Miau";
};
Gato.prototype = gatoPrototype;
function Manada(){
this.lista = [];
}
Manada.prototype.adicionar = function(animal){


		this.lista.push(animal)

};
function ManadaVirgula(){
	Manada.call(this);
}
var manadaVirgulaPrototype = new Manada();
manadaVirgulaPrototype.barulhos =  function(){
		var sons = "";
		for(tamanho = 0; tamanho < this.lista.length; tamanho++){
			if(tamanho != this.lista.length - 1)
				sons += this.lista[tamanho].barulhos() + ", ";
			else
				sons += this.lista[tamanho].barulhos();
	}
	return sons;
};
ManadaVirgula.prototype = manadaVirgulaPrototype;

function ManadaSustenido(){
	Manada.call(this);
}
var manadaSustenidoPrototype = new Manada();
manadaSustenidoPrototype.barulhos = function(){
	var sons = "";
	for(tamanho = 0; tamanho < this.lista.length; tamanho++){
		if(tamanho != this.lista.length - 1)
			sons += this.lista[tamanho].barulhos() + "# "  + this.lista[tamanho].barulhos() + "# ";
			else
				sons += this.lista[tamanho].barulhos() + "# " + this.lista[tamanho].barulhos();
	}
	return sons;
};
ManadaSustenido.prototype = manadaSustenidoPrototype;
var manadaVirgula = new ManadaVirgula();
var manadaSustenidaDupla = new ManadaSustenido();
var animais = [new Cachorro(), new Gato()];

animais.forEach(function (animal) {
  manadaVirgula.adicionar(animal);
	manadaSustenidaDupla.adicionar(animal);
});

// Print Esperado: Au, Miau
console.log(manadaVirgula.barulhos());

// Print Esperado: Au# Au# Miau# Miau
console.log(manadaSustenidaDupla.barulhos());
