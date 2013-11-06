create table materias(
id integer not null,
nombre varchar(30) not null,
constraint pk_materia primary key (id)
);

create table temas(
id integer not null,
nombre varchar(50) not null,
materiaid integer not null,
constraint pk_tema primary key (id),
constraint fk_tema_materia foreign key (materiaid) references materias(id)
);

create table usuarios(
id integer not null,
nombre varchar(50) not null,
rol integer not null,
constraint pk_usuario primary key (id)
);

create table materia_has_usuario(
id_materia integer not null,
id_usuario integer not null,
constraint fk_materia foreign key (id_materia) references materias(id),
constraint fk_usuario foreign key (id_usuario) references usuarios(id)
);
