use bancomysavings;
     DROP TABLE cliente;
     CREATE Table cliente(
         id int AUTO_INCREMENT not NULL,
         dni varchar(12) not NULL,
         tipoDni CHAR(2) not NULL,
         nombres VARCHAR(50) not NULL,
         apellidos VARCHAR(50) not null,
         fechaNacimiento DATE NOT NULL,
         numeroCelular VARCHAR(20) NOT NULL,
         direccion VARCHAR(100) NOT NULL,
         deptoResidencia VARCHAR(50) NOT NULL,
         ciudad VARCHAR(50) not NULL,
         estadoCivil VARCHAR(10) NOT NULL,
         correo VARCHAR(100) NOT NULL,
         cantidadPrestamo VARCHAR(50) not NULL,
         cantidadMeses INT not NULL,
         fechaPago DATE not NULL,
         valorCuota VARCHAR(15) NOT NULL,
         subTotal VARCHAR(15) not NULL,
         fechaRegistro timestamp NOT NULL DEFAULT current_timestamp(),
         PRIMARY KEY(id)
     );
     CREATE Table admin(
         id int NOT NULL AUTO_INCREMENT,
         usuario VARCHAR(20) not NULL,
         pass VARCHAR(250) NOT NULL,
         PRIMARY KEY(id)
     );

/*drop Table cuenta;
     CREATE Table cuenta(
         id int NOT NULL AUTO_INCREMENT,
         fechaPago DATE not NULL,
         valorCuota VARCHAR(15) NOT NULL,
         subTotal VARCHAR(15) not NULL,
         cliente_id int NOT NULL,
         PRIMARY KEY(id),
         FOREIGN KEY (cliente_id) REFERENCES cliente (id)
     )*/