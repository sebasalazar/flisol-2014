BEGIN TRANSACTION;

DROP TABLE IF EXISTS usuarios CASCADE;
CREATE TABLE usuarios (
    pk serial NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    remember_token varchar(255) NOT NULL,
    UNIQUE (email),
    PRIMARY KEY (pk)
);


DROP TABLE IF EXISTS accesos CASCADE;
CREATE TABLE accesos (
    pk bigserial NOT NULL,
    usuario_fk int NOT NULL REFERENCES usuarios(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    fecha timestamp NOT NULL DEFAULT NOW(),
    ip inet NOT NULL DEFAULT '127.0.0.1',
    PRIMARY KEY (pk)
);


DROP TABLE IF EXISTS articulos CASCADE;
CREATE TABLE articulos (
    pk bigserial NOT NULL,
    autor varchar(255) NOT NULL,
    fecha timestamp NOT NULL DEFAULT NOW(),
    titulo varchar(255) NOT NULL,
    articulo text,
    PRIMARY KEY (pk)
);

COMMIT;
