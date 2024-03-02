CREATE TABLE famandrihana.Client (
	id_client INT auto_increment NOT NULL,
	nom_client varchar(100) NOT NULL,
	email_client VARCHAR(100) NOT NULL,
	contact_client varchar(100) NOT NULL,
	adresse_client varchar(100) NULL,
	mdp varchar(100) NOT NULL,
	CONSTRAINT Client_PK PRIMARY KEY (id_client)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

CREATE TABLE famandrihana.Organisateur (
	id_organisateur INT auto_increment NOT NULL,
	nom_organisateur varchar(100) NOT NULL,
	email_organisateur varchar(100) NOT NULL,
	entreprise varchar(100) NOT NULL,
	numero_cin varchar(100) NOT NULL,
	CONSTRAINT Organisateur_PK PRIMARY KEY (id_organisateur)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

CREATE TABLE famandrihana.type_service (
	id_type varchar(100) NULL,
	nom_type varchar(100) NULL,
	nombre_place varchar(100) NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;


CREATE TABLE famandrihana.disponibiliter (
	id_disponibiliter INT auto_increment NOT NULL,
	numero_place INT NULL,
	disponibiliter BOOL NULL,
	CONSTRAINT disponibiliter_pk PRIMARY KEY (id_disponibiliter)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

CREATE TABLE famandrihana.service (
	id_service INT auto_increment NOT NULL,
	intitule varchar(100) NULL,
	prix INT NULL,
	id_disponibiliter INT NULL,
	id_type INT NULL,
	id_organisateur INT NULL,
	CONSTRAINT service_pk PRIMARY KEY (id_service)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

CREATE TABLE famandrihana.reservation (
	id_reservation INT auto_increment NOT NULL,
	date_reservation DATETIME NULL,
	nombre_reserver INT NULL,
	delait INT NULL,
	id_service INT NULL,
	id_client INT NULL,
	CONSTRAINT reservation_pk PRIMARY KEY (id_reservation)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;