	<!--SERVICIOS-->
	<div class="container-fluid" style="background: #F8F9F9;" >
		<section class="d-flex flex-column">
			<h2 class="display-2 fw-bold p-5 mt-5" >Servicios</h2>
			<div id="services">
				<table class="table">
					<thead>
					    <tr>
					        <th class="text-center" style="background: #5fc861; color:#fff;" scope="row">Area</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Desarrolo profesional</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Cultura corporal</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Diseño organizacional</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Reclutamiento y selección de personal</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Evaluación del desempeño</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Desarrollo y crecimiento del personal</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Capacitación de personal</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Legislación laboral</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Sueldos y salarios</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Higiene y seguridad laboral</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
					      <th class="text-center" style="background: #5fc861; color:#fff;" scope="row">Tema</th>
						    <td>
							   	<ol>
						    		<li class="txt-table">Diseño de CV</li>
						      		<li class="txt-table">Diseño de cartas de presentación</li>
						      		<li class="txt-table">Código de vestimenta para una entrevista de trabajo</li>
						      		<li class="txt-table">Reglas de comportamiento en una entrevista de trabajo</li>
						      	</ol>
						    </td>
						    <td>
						     	<ol start="5">
						     		<li class="txt-table">Diagnóstico de clima organizacional</li>
						      		<li class="txt-table">Plan de clima organizacional</li>
						      		<li class="txt-table">Diagnóstico de cultura organizacional</li>
						      		<li class="txt-table">Plan de cultura organizacional</li>
						      	</ol>
						    </td>
						     <td>
						      	<ol start="9">
						      		<li class="txt-table">Creación de la estructura organizacional</li>
						      		<li class="txt-table">Análisis de puestos</li>
						      		<li class="txt-table">Diseño de  puestos</li>
						      		<li class="txt-table">Elaboración de manuales de organización</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="13">
						      		<li class="txt-table">Proceso de reclutamiento</li>
						      		<li class="txt-table">Proceso de assessment</li>
						      		<li class="txt-table">Proceso de selección de personal</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="16">
						      		<li class="txt-table">Proceso de evaluación del desempeño</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="17">
						      		<li class="txt-table">Inducción laboral</li>
						      		<li class="txt-table">Alineación del personal con la filosofía de la empresa</li>
						      		<li class="txt-table">Indicadores de desempeño laboral</li>
						      		<li class="txt-table">Planes de desarrollo y carrera</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="21">
						      		<li class="txt-table">Diagnóstico de necesidades de capacitación</li>
						      		<li class="txt-table">Plan de capacitación</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="23">
						      		<li class="txt-table">Contrato laboral</li>
						      		<li class="txt-table">Prestaciones básicas</li>
						      		<li class="txt-table">Rescisiones de trabajo</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="26">
						      		<li class="txt-table">Cálculo de nómina</li>
						      		<li class="txt-table">Vacaciones</li>
						      		<li class="txt-table">Utilidades</li>
						      		<li class="txt-table">Aguinaldo</li>
						      		<li class="txt-table">Finiquito</li>
						      		<li class="txt-table">Requisitos para el trámite de la e-firma</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="32">
						      		<li class="txt-table">Identificación de riesgos y enfermedades de trabajo</li>
						      		<li class="txt-table">Tipos y cálculo-2 de incapacidades</li>
						      	</ol>
						    </td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="servicesResponsive">
				<div class="row w-100 p-3 g-3">
					<!--Subtitle-->
					<div class="col-md-12 title">
						<h2>Elige el servicio y se mostraran sus opciones</h2>
					</div>
					<!--Select-->
					<div class="col-md-12 col-sm-12 mt-4">
						<select class="form-select" aria-label="Default select example" id="servicios" onchange="showOptionsAsList()">
						  	<option selected>Elige el servicio</option>
						  	<option value="1">Desarrollo profesional</option>
						  	<option value="2">Cultura corporativa</option>
						  	<option value="3">Diseño organizacional</option>
						  	<option value="4">Reclutamiento y selección de personal</option>
						  	<option value="5">Evaluación del desempeño</option>
						  	<option value="6">Desarrollo y crecimiento del personal</option>
						  	<option value="7">Capacitación de personal</option>
						  	<option value="8">Legislación laboral</option>
						  	<option value="9">Sueldos y salarios</option>
						  	<option value="10">Higiene y seguridad laboral</option>
						</select>
					</div>
					<!--Disponible Options-->
					<div class="col-md-12 col-sm-12 mt-4">
						<h2 class="text-start">Opciones disponibles</h2>
						<ul class="list-group" id="options-list">
						  	<li class="list-group-item">No has seleccionado un servicio.</li>
						</ul>
						<div class="options" id="options">
							<div><p class="div-options">No has seleccionado un servicio.</p></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
