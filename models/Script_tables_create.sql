-- tables
-- Table: tbl_aulas
CREATE TABLE tbl_aulas (
    id int NOT NULL AUTO_INCREMENT,
    numero int NOT NULL,
    bloque varchar(5) NOT NULL,
    descripcion varchar(200) NULL,
    CONSTRAINT aulas_pk PRIMARY KEY (id)
);

-- Table: tbl_docentes
CREATE TABLE tbl_docentes (
    id int NOT NULL AUTO_INCREMENT,
    nombres varchar(50) NOT NULL,
    apellidos varchar(50) NOT NULL,
    correo varchar(60) NOT NULL,
    telefono varchar(20) NOT NULL,
    CONSTRAINT docentes_pk PRIMARY KEY (id)
);

-- Table: tbl_docentes_materias 
CREATE TABLE tbl_docentes_materias (
    id int NOT NULL AUTO_INCREMENT,
    docente_id int NOT NULL,
    materia_id int NOT NULL,
    grupo_id int NOT NULL,
    CONSTRAINT docentes_materias_pk PRIMARY KEY (id)
);

-- Table: tbl_eventos 
CREATE TABLE tbl_eventos (
    id int NOT NULL AUTO_INCREMENT,
    nombre int NOT NULL,
    fecha date NOT NULL,
    duracion_horas int NOT NULL,
    Objetivo varchar(500) NULL,
    CONSTRAINT eventos_pk PRIMARY KEY (id)
);

-- Table: tbl_eventos_grupos 
CREATE TABLE tbl_eventos_grupos (
    id int NOT NULL AUTO_INCREMENT,
    evento_id int NOT NULL,
    grupo_id int NOT NULL,
    CONSTRAINT eventos_grupos_pk PRIMARY KEY (id)
);

-- Table: tbl_grupos 
CREATE TABLE tbl_grupos (
    id int NOT NULL AUTO_INCREMENT,
    codigo varchar(50) NOT NULL,
    numero int NOT NULL,
    numero_estudiantes int NOT NULL,
    CONSTRAINT grupos_pk PRIMARY KEY (id)
);

-- Table: tbl_horarios 
CREATE TABLE tbl_horarios (
    id int NOT NULL AUTO_INCREMENT,
    fecha date NOT NULL,
    hora time NOT NULL,
    CONSTRAINT id_horario  PRIMARY KEY (id)
);

-- Table: tbl_materias 
CREATE TABLE tbl_materias (
    id int NOT NULL AUTO_INCREMENT,
    Codigo varchar(50) NOT NULL,
    nombre varchar(50) NOT NULL,
    duracion_horas int NOT NULL,
    CONSTRAINT materias_pk PRIMARY KEY (id)
);

-- Table: tbl_reservas 
CREATE TABLE tbl_reservas (
    id int NOT NULL AUTO_INCREMENT,
    docente_id int NOT NULL,
    aula_id int NOT NULL,
    horario_id int NOT NULL,
    CONSTRAINT reserva_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: Reserva_aulas (table: reserva)
ALTER TABLE tbl_reservas ADD CONSTRAINT Reserva_aulas FOREIGN KEY Reserva_aulas (aula_id)
    REFERENCES tbl_aulas (id);

-- Reference: Reserva_docentes (table: reserva)
ALTER TABLE tbl_reservas ADD CONSTRAINT Reserva_docentes FOREIGN KEY Reserva_docentes (docente_id)
    REFERENCES tbl_docentes (id);

-- Reference: Reserva_horarios (table: reserva)
ALTER TABLE tbl_reservas ADD CONSTRAINT Reserva_horarios FOREIGN KEY Reserva_horarios (horario_id)
    REFERENCES tbl_horarios (id);

-- Reference: docentes_materias_docentes (table: docentes_materias)
ALTER TABLE tbl_docentes_materias ADD CONSTRAINT docentes_materias_docentes FOREIGN KEY docentes_materias_docentes (docente_id)
    REFERENCES tbl_docentes (id);

-- Reference: docentes_materias_grupos (table: docentes_materias)
ALTER TABLE tbl_docentes_materias ADD CONSTRAINT docentes_materias_grupos FOREIGN KEY docentes_materias_grupos (grupo_id)
    REFERENCES tbl_grupos (id);

-- Reference: docentes_materias_materias (table: docentes_materias)
ALTER TABLE tbl_docentes_materias ADD CONSTRAINT docentes_materias_materias FOREIGN KEY docentes_materias_materias (materia_id)
    REFERENCES tbl_materias (id);

-- Reference: eventos_grupos_eventos (table: eventos_grupos)
ALTER TABLE tbl_eventos_grupos ADD CONSTRAINT eventos_grupos_eventos FOREIGN KEY eventos_grupos_eventos (evento_id)
    REFERENCES tbl_eventos (id);

-- Reference: eventos_grupos_grupos (table: eventos_grupos)
ALTER TABLE tbl_eventos_grupos ADD CONSTRAINT eventos_grupos_grupos FOREIGN KEY eventos_grupos_grupos (grupo_id)
    REFERENCES tbl_grupos (id);

-- End of file.

