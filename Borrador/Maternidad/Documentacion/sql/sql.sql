


CREATE TABLE cliente (
		id_cliente int NOT NULL AUTO_INCREMENT,
		nombre_cliente varchar(10) not null,
		apellido_cliente_paterno varchar(10) null,
		apellido_cliente_materno varchar(10) null,
		id_etapa int not null,
		fecha_regreso date null,
		id_genero int not null
		PRIMARY KEY (id_cliente)
); 

-- Analizar 
CREATE TABLE bebe (
		id_bebe int NOT NULL AUTO_INCREMENT,
		nombre_bebe varchar(10) null,
		fecha_nacimiento_bebe date null,
		id_genero int null,
		id_lactancia int null, 
		id_cliente int null, 
		PRIMARY KEY (id_bebe)
); 
-- =====================================
--  Organizar datos no cuadra sentencia 
CREATE TABLE etapa_cliente (
    id_etapa int NOT NULL AUTO_INCREMENT,
    nombre_etapa varchar(10) not null,
    id_estado_etapa int null,
	PRIMARY KEY (id_etapa)
); 



CREATE TABLE estado_etapa (
    id_estado_etapa int NOT NULL AUTO_INCREMENT,
    fecha_inicio date null,
    fecha_fin date null,
  	PRIMARY KEY (id_genero)
); 
--  Organizar datos no cuadra sentencia 
-- =====================================
CREATE TABLE genero (
    id_genero int NOT NULL AUTO_INCREMENT,
    tipo_genero varchar(10),
  	PRIMARY KEY (id_genero)
); 


CREATE TABLE tipo_lactancia (
    id_lactancia int NOT NULL AUTO_INCREMENT,
    tipo_lactancia varchar(10),
  	PRIMARY KEY (id_lactancia)
); 

--  

CREATE TABLE peso_bebe (
    id_bebe int NOT NULL ,
    peso_bebe DOUBLE(9, 2),
    id_medida int
 
); 
CREATE TABLE tipo_medida (
    id_medida int NOT NULL AUTO_INCREMENT,
    tipo_medida varchar(10),
  	PRIMARY KEY (id_medida)
); 

 
CREATE TABLE lactancia (
    id_lactancia datatype,
    tipo_lactancia datatype,
    column3 datatype,

); 

-- 
CREATE TABLE registro_lactancia (
    id_cliente datatype,
    id_bebe datatype,
    id_lactancia datatype,
 
); 


CREATE TABLE cliente (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); 