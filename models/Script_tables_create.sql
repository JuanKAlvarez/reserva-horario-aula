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

-- Table: tbl_materias 
CREATE TABLE tbl_materias (
    id int NOT NULL AUTO_INCREMENT,
    codigo varchar(50) NOT NULL,
    nombre varchar(50) NOT NULL,
    duracion_horas int NOT NULL,
    CONSTRAINT materias_pk PRIMARY KEY (id)
);

-- Table: tbl_grupos 
CREATE TABLE tbl_grupos (
    id int NOT NULL AUTO_INCREMENT,
    codigo varchar(50) NOT NULL,
    numero int NOT NULL,
    numero_estudiantes int NOT NULL,
    CONSTRAINT grupos_pk PRIMARY KEY (id)
);

-- Table: tbl_docentes_materias 
CREATE TABLE tbl_docentes_materias (
    id int NOT NULL AUTO_INCREMENT,
    docente_id int NOT NULL,
    materia_id int NOT NULL,
    grupo_id int NOT NULL,
    CONSTRAINT tbl_docentes_materias PRIMARY KEY (id)
);

-- Table: tbl_eventos 
CREATE TABLE tbl_eventos (
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(60) NOT NULL,
    fecha date NOT NULL,
    duracion_horas int NOT NULL,
    objetivo varchar(500) NULL,
    CONSTRAINT eventos_pk PRIMARY KEY (id)
);

-- Table: tbl_eventos_grupos 
CREATE TABLE tbl_eventos_grupos (
    id int NOT NULL AUTO_INCREMENT,
    evento_id int NOT NULL,
    grupo_id int NOT NULL,
    CONSTRAINT eventos_grupos_pk PRIMARY KEY (id)
);

-- Table: tbl_horarios 
CREATE TABLE tbl_horarios (
    id int NOT NULL AUTO_INCREMENT,
    hora varchar(50) NOT NULL,
    CONSTRAINT id_horario  PRIMARY KEY (id)
);

-- Table: tbl_reservas 
CREATE TABLE tbl_reservas (
    id int NOT NULL AUTO_INCREMENT,
    fecha date NOT NULL,
    docente_id int NOT NULL,
    aula_id int NOT NULL,
    horario_id int NOT NULL,
    CONSTRAINT UC_tbl_reservas UNIQUE (fecha,aula_id,horario_id),
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


-- Seeder de la BD

Insert  Into tbl_aulas (numero, bloque, descripcion) 
        Values  (1 , 'A', "A1 - Aula"),
                (2 , 'A', "A2 - Aula"),
                (3 , 'A', "A3 - Aula"),
                (1 , 'B', "B1 - Aula"),
                (2 , 'B', "B2 - Aula"),
                (3 , 'B', "B3 - Aula"),
                (1 , 'C', "C1 - Aula"),
                (2 , 'C', "C2 - Aula"),
                (3 , 'C', "C3 - Aula"),
                (1 , 'D', "D1 - Aula");

Insert  Into tbl_docentes (nombres, apellidos, correo, telefono) 
        Values  ('Krista',    'Jobling',   'kjobling0@addthis.com',    '(543) 3003948'),
                ('Carmel',    'Marre',     'cmarre1@51.la',            '(779) 4908750'),
                ('Sibylla',   'Hogben',    'shogben2@friendfeed.com',  '(144) 6955668'),
                ('Shurlocke', 'James',     'sjames3@taobao.com',       '(487) 1316035'),
                ('Rochell',   'Heathcott', 'rheathcott4@about.me',     '(814) 6927153'),
                ('Darlene',   'Hadcroft',  'dhadcroft5@instagram.com', '(881) 6552631'),
                ('Elliott',   'Abernethy', 'eabernethy6@noaa.gov',     '(121) 4325416'),
                ('Errick',    'Shaefer',   'eshaefer7@reddit.com',     '(461) 8704999'),
                ('Orin',      'Farland',   'ofarland8@house.gov',      '(630) 5836437'),
                ('Zach',      'Ervin',     'zervin9@patch.com',        '(978) 1334863');

Insert  Into tbl_materias (codigo, nombre, duracion_horas) 
        Values  ('496275', 'Matematicas', 60),
                ('913328', 'Inglés',      48),
                ('464253', 'Español',     53),
                ('760797', 'Computación', 57),
                ('428995', 'Sociales',    48),
                ('810215', 'Algebra',     49),
                ('216172', 'Deportes',    52),
                ('299877', 'Religión',    51),
                ('981534', 'Filosofia',   56),
                ('655398', 'Artes',       48);

Insert  Into tbl_grupos (codigo, numero, numero_estudiantes) 
        Values  ('GRP-263', '787276', 42),
                ('GRP-585', '207423', 36),
                ('GRP-679', '945699', 44),
                ('GRP-684', '017777', 34),
                ('GRP-574', '341103', 47),
                ('GRP-713', '287995', 30),
                ('GRP-799', '876638', 48),
                ('GRP-836', '712859', 31),
                ('GRP-922', '395341', 41),
                ('GRP-570', '254469', 41);

Insert  Into tbl_docentes_materias (docente_id, materia_id, grupo_id) 
        Values  (1 , 1 , 1 ),
                (2 , 2 , 2 ),
                (3 , 3 , 3 ),
                (4 , 4 , 4 ),
                (5 , 5 , 5 );

Insert  Into tbl_eventos (nombre, fecha, duracion_horas, objetivo) 
        Values  ('Opela',   '2022-05-07', 6,  'nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat'),
                ('Lotlux',  '2022-06-17', 10, 'nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper'),
                ('Bamity',  '2022-03-20', 15, 'pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus'),
                ('Tresom',  '2022-03-24', 16, 'erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque'),
                ('Latlux',  '2022-05-30', 22, 'purus phasellus in felis donec semper sapien a libero nam dui proin leo odio'),
                ('Otcom',   '2022-09-09', 10, 'ut mauris eget massa tempor convallis nulla neque libero convallis'),
                ('Keylex',  '2022-05-14', 19, 'tristique est et tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum'),
                ('Pannier', '2022-06-04', 4,  'est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi'),
                ('Cookley', '2022-08-20', 24, 'varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla'),
                ('Duobam',  '2022-11-26', 3,  'duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in');

Insert  Into tbl_eventos_grupos (evento_id, grupo_id) 
        Values  (1 , 1 ),
                (2 , 2 ),
                (3 , 3 ),
                (4 , 4 ),
                (5 , 5 );

Insert  Into tbl_horarios (hora) 
        Values  ("06:00 - 06:59"),
                ("07:00 - 07:59"),
                ("08:00 - 08:59"),
                ("09:00 - 09:59"),
                ("10:00 - 10:59"),
                ("11:00 - 11:59"),
                ("12:00 - 12:59"),
                ("13:00 - 13:59"),
                ("14:00 - 14:59"),
                ("15:00 - 15:59"),
                ("16:00 - 16:59"),
                ("17:00 - 17:59"),
                ("18:00 - 18:59"),
                ("19:00 - 19:59"),
                ("20:00 - 20:59"),
                ("21:00 - 21:59"),
                ("22:00 - 22:59");

Insert  Into tbl_reservas (fecha, docente_id, aula_id, horario_id) 
        Values  ('2022-05-07', 1, 1, 1 ),
                ('2022-05-07', 2, 2, 2 ),
                ('2022-05-07', 3, 3, 3 );


-- End of file.