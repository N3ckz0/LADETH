create table Divisiones(
	id int primary key auto_increment,
	division varchar(100)
);

INSERT INTO Divisiones(division) VALUES ('Sistemas Automotrices');
INSERT INTO Divisiones(division) VALUES ('Tecnologías de la Información');
INSERT INTO Divisiones(division) VALUES ('Energías Alternas y Medio Ambiente');
INSERT INTO Divisiones(division) VALUES ('Gastronomía');
INSERT INTO Divisiones(division) VALUES ('Procesos Industriales');
INSERT INTO Divisiones(division) VALUES ('Mantenimiento Industrial');
INSERT INTO Divisiones(division) VALUES ('Mecatrónica');
INSERT INTO Divisiones(division) VALUES ('Negocios');

create table Roles(
	id int primary key auto_increment,
	rol varchar(50)
);

INSERT INTO Roles(rol) VALUES ('admin');
INSERT INTO Roles(rol) VALUES ('student');
INSERT INTO Roles(rol) VALUES ('consultant');

create table Usuarios(
	id int primary key auto_increment,
	nombre varchar(50),
	apellidoPaterno varchar(50),
	apellidoMaterno varchar(50),
	matricula varchar(10),
	usuario varchar (50),
	correo varchar(50),
	contrasena varchar(50),
	telefono varchar(10),
	grado char,
	grupo char,
	fkDivisiones int,
	fkRoles int,
	foreign key (fkDivisiones) references Divisiones(id),
	foreign key (fkRoles) references Roles(id)
);

INSERT INTO Usuarios(nombre,apellidoPaterno,apellidoMaterno,matricula,usuario,correo,contrasena,telefono,grado,grupo,fkDivisiones,fkRoles)
VALUES ('Eduardo','Cortés','Hoyos',null,'Lalo','@alumno.utpuebla.edu.mx','pass1234','2222222222',null,null,null,1);

create table Servicios(
	id int primary key auto_increment,
	servicio varchar(100)
);

INSERT INTO Servicios(servicio) VALUES ('Desarrolo profesional');
INSERT INTO Servicios(servicio) VALUES ('Cultura corporal');
INSERT INTO Servicios(servicio) VALUES ('Diseño organizacional');
INSERT INTO Servicios(servicio) VALUES ('Reclutamiento y selección de personal');
INSERT INTO Servicios(servicio) VALUES ('Evaluación del desempeño');
INSERT INTO Servicios(servicio) VALUES ('Desarrollo y crecimiento del personal');
INSERT INTO Servicios(servicio) VALUES ('Capacitación de personal');
INSERT INTO Servicios(servicio) VALUES ('Legislación laboral');
INSERT INTO Servicios(servicio) VALUES ('Sueldos y salarios');
INSERT INTO Servicios(servicio) VALUES ('Higiene y seguridad laboral');
INSERT INTO Servicios(servicio) VALUES ('Otro');

create table Especificaciones(
	id int primary key auto_increment,
	especificaion varchar(100),
	fkServicios int,
	foreign key (fkServicios) references Servicios(id)
);

INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Diseño de CV',1);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Diseño de cartas de presentación',1);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Código de vestimenta para una entrevista de trabajo',1);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Reglas de comportamiento en una entrevista de trabajo',1);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Diagnóstico de clima organizacional',2);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Plan de clima organizacional',2);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Diagnóstico de cultura organizacional',2);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Plan de cultura organizacional',2);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Plan de cultura organizacional',3);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Análisis de puestos',3);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Diseño de puestos',3);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Elaboración de manuales de organización',3);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Proceso de reclutamiento',4);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Proceso de assessment',4);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Proceso de selección de personal',4);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Proceso de evaluación del desempeño',5);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Inducción laboral',6);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Alineación del personal con la filosofía de la empresa',6);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Indicadores de desempeño laboral',6);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Planes de desarrollo y carrera',6);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Diagnóstico de necesidades de capacitación',7);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Plan de capacitación',7);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Plan de capacitación',8);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Plan de capacitación',8);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Rescisiones de trabajo',8);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Cálculo de nómina',9);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Vacaciones',9);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Utilidades',9);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Aguinaldo',9);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Finiquito',9);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Requisitos para el trámite de la e-firma',9);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Identificación de riesgos y enfermedades de trabajo',10);
INSERT INTO Especificaciones(especificaion,fkServicios) VALUES ('Tipos y cálculo-2 de incapacidades',10);

create table Modalidades(
	id int primary key auto_increment,
	modalidad varchar(100)
);

INSERT INTO Modalidades(modalidad) VALUES ('Presencial');
INSERT INTO Modalidades(modalidad) VALUES ('Virtual');

create table Estados(
	id int primary key auto_increment,
	estado varchar(100)
);

INSERT INTO Estados(estado) VALUES ('Pendiente');
INSERT INTO Estados(estado) VALUES ('Aceptada');
INSERT INTO Estados(estado) VALUES ('Rechazada');
INSERT INTO Estados(estado) VALUES ('Agendada');

create table Citas(
	id int primary key auto_increment,
	fecha date,
	hora time,
	comentario varchar(100),
	encuesta varchar(2),
	fkEspecificaciones int,
	fkModalidades int,
	fkEstados int,
	fkUsuarios int,
	foreign key (fkEspecificaciones) references Especificaciones(id),
	foreign key (fkModalidades) references Modalidades(id),
	foreign key (fkEstados) references Estados(id),
	foreign key (fkUsuarios) references Usuarios(id)
);