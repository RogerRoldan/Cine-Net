CREATE TABLE PELICULAS
(
  cod_pelicula varchar(10) NOT NULL,
  nomb_pelicula varchar(50),
  genero varchar(30),
  clasificacion varchar(5),
  PRIMARY KEY (cod_pelicula)
);

CREATE TABLE SALAS
(
  cod_sala varchar(5) NOT NULL,
  nomb_sala varchar(20),
  capacidad INT,
  tipo_sala varchar(20),
  valor INT,
  PRIMARY KEY (cod_sala)
);

CREATE TABLE USUARIOS
(
  cod_usuario INT NOT NULL,
  nomb_usuario varchar(50),
  tipo_usuario varchar(15),
  descuento INT,
  PRIMARY KEY (cod_usuario)
);

CREATE TABLE TAQUILLA
(
  cod_taquilla varchar(10) NOT NULL,
  tipo_taquilla varchar(20),
  PRIMARY KEY (cod_taquilla)
);

CREATE TABLE EMPLEADOS
(
  cod_empleado varchar(10) NOT NULL,
  cod_taquilla varchar(10) NOT NULL,
  nomb_empleado varchar (60),
  horario varchar(20),
  PRIMARY KEY (cod_empleado),
  FOREIGN KEY (cod_taquilla) REFERENCES TAQUILLA(cod_taquilla)
);

CREATE TABLE REPARTO
(
  cod_persona varchar(10) NOT NULL,
  nomb_persona varchar(50),
  profesion varchar(50),
  PRIMARY KEY (cod_persona)
);

CREATE TABLE cartelera
(
  cod_pelicula varchar(10) NOT NULL,
  cod_sala varchar(5) NOT NULL,
  horario TIME,
  fecha DATE,
  PRIMARY KEY (cod_pelicula, cod_sala, horario, fecha),
  FOREIGN KEY (cod_pelicula) REFERENCES PELICULAS(cod_pelicula),
  FOREIGN KEY (cod_sala) REFERENCES SALAS(cod_sala)
);

CREATE TABLE tiene
(
  cod_persona varchar(10) NOT NULL,
  cod_pelicula varchar(10) NOT NULL,
  participacion varchar(50),
  PRIMARY KEY (cod_persona, cod_pelicula, participacion),
  FOREIGN KEY (cod_persona) REFERENCES REPARTO(cod_persona),
  FOREIGN KEY (cod_pelicula) REFERENCES PELICULAS(cod_pelicula)
);

CREATE TABLE TIQUETE
(
  cod_tiquete serial NOT NULL,
  cod_usuario INT NOT NULL,
  cod_taquilla varchar(10) NOT NULL,
  cod_pelicula varchar(10) NOT NULL,
  cod_sala varchar(5) NOT NULL,
  hora_funcion TIME,
  fecha_funcion DATE,
  num_silla INT,
  tipo_pago varchar(20),
  pago_total INT,
  PRIMARY KEY (cod_tiquete),
  FOREIGN KEY (cod_sala) REFERENCES SALAS(cod_sala),
  FOREIGN KEY (cod_usuario) REFERENCES USUARIOS(cod_usuario),
  FOREIGN KEY (cod_taquilla) REFERENCES TAQUILLA(cod_taquilla),
  FOREIGN KEY (cod_pelicula) REFERENCES PELICULAS(cod_pelicula)
);


COPY peliculas(cod_pelicula,nomb_pelicula,genero,clasificacion) FROM '/tmp/peliculas.csv' DELIMITER ',' CSV HEADER;
COPY salas(cod_sala,nomb_sala,capacidad,tipo_sala,valor) FROM '/tmp/salas.csv' DELIMITER ',' CSV HEADER;
COPY usuarios(cod_usuario,nomb_usuario,tipo_usuario,descuento) FROM '/tmp/usuarios.csv' DELIMITER ',' CSV HEADER;
COPY taquilla(cod_taquilla,tipo_taquilla) FROM '/tmp/taquilla.csv' DELIMITER ',' CSV HEADER;
COPY empleados(cod_empleado,cod_taquilla,nomb_empleado,horario) FROM '/tmp/empleados.csv' DELIMITER ',' CSV HEADER;
COPY reparto(cod_persona,nomb_persona,profesion) FROM '/tmp/reparto.csv' DELIMITER ',' CSV HEADER;
COPY cartelera(cod_pelicula,cod_sala,horario,fecha) FROM '/tmp/cartelera.csv' DELIMITER ',' CSV HEADER;
COPY tiene(cod_persona,cod_pelicula,participacion) FROM '/tmp/tiene.csv' DELIMITER ',' CSV HEADER;
COPY tiquete(cod_tiquete,cod_usuario,cod_taquilla,cod_pelicula,cod_sala,hora_funcion,fecha_funcion,num_silla,tipo_pago,pago_total) FROM '/tmp/tiquete.csv' DELIMITER ',' CSV HEADER;

CREATE TABLE sillas (num_silla INT);
COPY sillas(num_silla) FROM '/tmp/sillas.csv' DELIMITER ',' CSV HEADER;
