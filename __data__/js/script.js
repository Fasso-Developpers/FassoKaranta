function addEv(elt, ev, h){
	if (elt.addEventListerner){
		elt.addEventListerner(ev,h,false);
	}else if (elt.attachEvent){
		elt.attachEvent('on'+ ev,h);
	}
}
var link = document.querySelectorAll('li.article')
var element = null;
var = panier = document.querySelector('#panier');

for (var i = 0; i<link.length; i++){
	element = link[i];
	addEv(element, 'dragstart', function (e){
		e.dataTransfer.setData('text/plain',this.id);
		ed.dataTransfer.effectAllowed = 'copy';
	});
}


addEv(panier, 'dragover', function (e){
	if (e.preventDefault){
		e.preventDefault();
	}
	return false;
});


addEv(panier, 'drop', function (e){
	var h=new Date();
	var plusId=h.getTime();

	var = element = document.getElementById(e.dataTransfer.getData('text/plain'));
	var clone=element.cloneNode(true);

	clone.id=element.id+plusId;
		document.getElementById('panier').appendChild(clone);
		clone.className='';
		clone.className="achete"

	
	// Gestion de la corbeille

	var elAchete=document.querySelectorAll('li.achete');

	for (i=0; i<elAchete.length; i++){
		var elASuppr = document.getElementById(elAchete[i].id);
	// A chaque element du panier, on ajoute un évenement clic qui permettra de la supprimer
	
	addEv(elASuppr,'click', function(){
		document.getElementById('corbeille').appendChild(this);
			this.className = ''
			this.className="article"		
	})
	}
})