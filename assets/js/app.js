function getMail(){
	let selectElement = document.getElementById("correo");
	let inputElement = document.getElementById("mail");

	let selectedValue = selectElement.value;

	inputElement.value = selectedValue;
}

function getDivision(){
	let selectElement = document.getElementById("miSelect");
	let inputElement = document.getElementById("division");

	let selectedValue = selectElement.value;

	inputElement.value = selectedValue;
}

function verify(){
	let inputElement = document.getElementById("psswd");
	let inputElement2 = document.getElementById("psswd2");
	let buttonElement = document.getElementById("btn");

	let pass1 = inputElement.value;
	let pass2 = inputElement2.value;

	if(pass1 == pass2){
		buttonElement.disabled = false;
	}else{
		buttonElement.disabled = true;
	}
}

function showOptionsFromSelect(){
	let selectElement = document.getElementById("servicios");
	let selectElement2 = document.getElementById("opciones");
	let selectedValue = selectElement.value;
	let campos = selectElement2.querySelectorAll('#opciones option');

	switch (selectedValue) {
	  	case '1':
	  		campos.forEach(o => o.remove());
	  		selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='1'>Diseño de CV</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='2'>Diseño de cartas de presentación</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='3'>Código de vestimenta para una entrevista de trabajo</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='4'>Reglas de comportamiento en una entrevista de trabajo</option>");
	    	break;
	    case '2':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='5'>Diagnóstico de clima organizacional</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='6'>Plan de clima organizacional</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='7'>Diagnóstico de cultura organizacional</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='8'>Plan de cultura organizacional</option>");
	    	break;
	    case '3':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='9'>Creación de la estructura organizacional</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='10'>Análisis de puestos</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='11'>Diseño de  puestos</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='12'>Elaboración de manuales de organización</option>");
	    	break;
	    case '4':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='13'>Proceso de reclutamiento</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='14'>Proceso de assessment</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='15'>Proceso de selección de personal</option>");
	    	break;
	    case '5':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='16'>Proceso de evaluación del desempeño</option>");
	    	break;
	    case '6':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='17'>Inducción laboral</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='18'>Alineación del personal con la filosofía de la empresa</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='19'>Indicadores de desempeño laboral</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='20'>Planes de desarrollo y carrera</option>");
	    	break;
	    case '7':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='21'>Diagnóstico de Necesidades de Capacitación</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='22'>Plan de capacitación</option>");
	    	break;
	    case '8':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='23'>Contrato laboral</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='24'>Prestaciones básicas </option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='25'>Rescisiones de trabajo</option>");
	    	break;
	    case '9':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='26'>Cálculo de nómina</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='27'>Vacaciones</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='28'>Utilidades</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='29'>Aguinaldo</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='30'>Finiquito</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='31'>Requisitos para el trámite de e-firma</option>");
	    	break;
	    case '10':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='32'>Identificación de riesgos y enfermedades de trabajo</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='33'>Tipos y cálculo de incapacidades</option>");
	    	break;
	    case '11':
	    	campos.forEach(o => o.remove());
	    	break;
	  	default:
	    	console.log(selectedValue);
	}
}

function showOptionsAsList(){
	/*Select*/
	let selectElement = document.getElementById("servicios");
	/*List*/
	let listElement = document.getElementById("options-list");
	/*Valor del select*/
	let selectedValue = selectElement.value;
	/*Opciones*/
	let opt1 = document.createElement("li");
	let opt2 = document.createElement("li");
	let opt3 = document.createElement("li");
	let opt4 = document.createElement("li");
	let opt5 = document.createElement("li");
	let opt6 = document.createElement("li");
	let opt7 = document.createElement("li");
	let opt8 = document.createElement("li");
	let opt9 = document.createElement("li");
	let opt10 = document.createElement("li");
	let opt11 = document.createElement("li");
	let opt12 = document.createElement("li");
	let opt13 = document.createElement("li");
	let opt14 = document.createElement("li");
	let opt15 = document.createElement("li");
	let opt16 = document.createElement("li");
	let opt17 = document.createElement("li");
	let opt18 = document.createElement("li");
	let opt19 = document.createElement("li");
	let opt20 = document.createElement("li");
	let opt21 = document.createElement("li");
	let opt22 = document.createElement("li");
	let opt23 = document.createElement("li");
	let opt24 = document.createElement("li");
	let opt25 = document.createElement("li");
	let opt26 = document.createElement("li");
	let opt27 = document.createElement("li");
	let opt28 = document.createElement("li");
	let opt29 = document.createElement("li");
	let opt30 = document.createElement("li");
	let opt31 = document.createElement("li");
	let opt32 = document.createElement("li");
	let opt33 = document.createElement("li");
	function clearList(){
		while (listElement.firstChild) {
		    listElement.removeChild(listElement.firstChild);
		}
	}

	/*Se ingresa el valor del select para saber las opciones que se van a mostrar*/
	switch (selectedValue) {
	  	case '1':
	  			clearList();
	  			opt1.textContent = "Diseño de CV";
	  			opt1.classList.add("list-group-item");
	  			listElement.appendChild(opt1);
	  			opt2.textContent = "Diseño de cartas de presentación";
	  			opt2.classList.add("list-group-item");
	  			listElement.appendChild(opt2);
	  			opt3.textContent = "Código de vestimenta para una entrevista de trabajo";
	  			opt3.classList.add("list-group-item");
	  			listElement.appendChild(opt3);
	  			opt4.textContent = "Reglas de comportamiento en una entrevista de trabajo";
	  			opt4.classList.add("list-group-item");
	  			listElement.appendChild(opt4);

	    	break;
	    case '2':
	    		clearList();
	    		opt5.textContent = "Diagnóstico de clima";
	    		opt5.classList.add("list-group-item")
	    		listElement.appendChild(opt5);
	    		opt6.textContent = "Plan de clima organizacional";
	    		opt6.classList.add("list-group-item")
	    		listElement.appendChild(opt6);
	    		opt7.textContent = "Diagnóstico de cultura organizacional";
	    		opt7.classList.add("list-group-item")
	    		listElement.appendChild(opt7);
	    		opt8.textContent = "Plan de cultura organizacional";
	    		opt8.classList.add("list-group-item")
	    		listElement.appendChild(opt8);
	    	break;
	    case '3':
	    		clearList();
	    		opt9.textContent = "Creación de la estructura organizacional";
	    		opt9.classList.add("list-group-item")
	    		listElement.appendChild(opt9);
	    		opt10.textContent = "Análisis de puestos";
	    		opt10.classList.add("list-group-item")
	    		listElement.appendChild(opt10);
	    		opt11.textContent = "Diseño de puestos";
	    		opt11.classList.add("list-group-item")
	    		listElement.appendChild(opt11);
	    		opt12.textContent = "Elaboración de manuales de organización";
	    		opt12.classList.add("list-group-item")
	    		listElement.appendChild(opt12);
	    	break;
	    case '4':
	    		clearList();
	    		opt13.textContent = "Proceso de reclutamiento";
	    		opt13.classList.add("list-group-item")
	    		listElement.appendChild(opt13);
	    		opt14.textContent = "Proceso de assessment";
	    		opt14.classList.add("list-group-item")
	    		listElement.appendChild(opt14);
	    		opt15.textContent = "Proceso de selección de personal";
	    		opt15.classList.add("list-group-item")
	    		listElement.appendChild(opt15);
	    	break;
	    case '5':
	    		clearList();
	    		opt16.textContent = "Proceso de evaluación del desempeño";
	    		opt16.classList.add("list-group-item")
	    		listElement.appendChild(opt16);
	    	break;
	    case '6':
	    		clearList();
	    		opt17.textContent = "Inducción laboral";
	    		opt17.classList.add("list-group-item")
	    		listElement.appendChild(opt17);
	    		opt18.textContent = "Alineación del personal con la filosofía de la empresa";
	    		opt18.classList.add("list-group-item")
	    		listElement.appendChild(opt18);
	    		opt19.textContent = "Indicadores de desempeño laboral";
	    		opt19.classList.add("list-group-item")
	    		listElement.appendChild(opt19);
	    		opt20.textContent = "Planes de desarrollo y carrera";
	    		opt20.classList.add("list-group-item")
	    		listElement.appendChild(opt20);
	    	break;
	    case '7':
	    		clearList();
	    		opt21.textContent = "Diagnóstico de necesidades de capacitación";
	    		opt21.classList.add("list-group-item")
	    		listElement.appendChild(opt21);
	    		opt22.textContent = "Plan de capacitación";
	    		opt22.classList.add("list-group-item")
	    		listElement.appendChild(opt22);
	    	break;
	    case '8':
	    		clearList();
	    		opt23.textContent = "Contrato laboral";
	    		opt23.classList.add("list-group-item")
	    		listElement.appendChild(opt23);
	    		opt24.textContent = "Prestaciones básicas";
	    		opt24.classList.add("list-group-item")
	    		listElement.appendChild(opt24);
	    		opt25.textContent = "Rescisiones de trabajo";
	    		opt25.classList.add("list-group-item")
	    		listElement.appendChild(opt25);
	    	break;
	    case '9':
	    		clearList();
	    		opt26.textContent = "Cálculo de nómina";
	    		opt26.classList.add("list-group-item")
	    		listElement.appendChild(opt26);
	    		opt27.textContent = "Vacaciones";
	    		opt27.classList.add("list-group-item")
	    		listElement.appendChild(opt27);
	    		opt28.textContent = "Utilidades";
	    		opt28.classList.add("list-group-item")
	    		listElement.appendChild(opt28);
	    		opt29.textContent = "Aguinaldo";
	    		opt29.classList.add("list-group-item")
	    		listElement.appendChild(opt29);
	    		opt30.textContent = "Finiquito";
	    		opt30.classList.add("list-group-item")
	    		listElement.appendChild(opt30);
	    		opt31.textContent = "Requisitos para el trámite de la e-firma";
	    		opt31.classList.add("list-group-item")
	    		listElement.appendChild(opt31);
	    	break;
	    case '10':
	    		clearList();
	    		opt32.textContent = "Identificación de riesgos y enfermedades de trabajo";
	    		opt32.classList.add("list-group-item")
	    		listElement.appendChild(opt32);
	    		opt33.textContent = "Tipos y cálculo-2 de incapacidades";
	    		opt33.classList.add("list-group-item")
	    		listElement.appendChild(opt33);
	    	break;
	}

}

function selectedOption(){
	let selectElement = document.getElementById("opciones");
	let inputElement = document.getElementById("opcion");
	let selectedValue = selectElement.value;
	inputElement.value = selectedValue;
}

function getFecha(){
	let selectElement = document.getElementById("horarios");
	let inputElement2 = document.getElementById("hora");

	let selectedValue = selectElement.value;

	switch (selectedValue) {
	  	case '1':
	  		inputElement2.value = '10:00:00';
	    	break;
	  	case '2':
	  		inputElement2.value = '11:00:00';
	    	break;
	  	case '3':
	  		inputElement2.value = '12:00:00';
	    	break;
	  	case '4':
	  		inputElement2.value = '13:00:00';
	    	break;
	  	case '5':
	  		inputElement2.value = '14:00:00';
	    	break;
	    case '6':
	    	inputElement2.value = '15:00:00';
	    	break;
	}
}

function getModalidad()
{
	let selectElement = document.getElementById("modalidad");
	let inputElement = document.getElementById("modal");
	let selectedValue = selectElement.value;
	inputElement.value = selectedValue;
}

function convertirAMayusculas() {
    var input = document.getElementById("grupo");
    input.value = input.value.toUpperCase();
}

function selectDate(){
	let inputElement = document.getElementById('date');
	let inputElement2 = document.getElementById('fecha');

	let selectedValue = inputElement.value;

	inputElement2.value = selectedValue;
}