

CREATE TABLE `acudiente` (
  `id_acud` int(11) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nom_acu` varchar(50) NOT NULL,
  `apel_acu` varchar(50) NOT NULL,
  `parentesco` char(1) NOT NULL,
  `dir_acu` varchar(120) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `tel_acu` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  PRIMARY KEY (`id_acud`),
  KEY `REL_TIP_ACU` (`tipo_doc`),
  KEY `REL_PAIS_ACU` (`id_pais`),
  KEY `REL_CIU_ACU` (`id_ciu`),
  KEY `REL_ESTUD_ACU` (`id_est`),
  CONSTRAINT `REL_CIU_ACU` FOREIGN KEY (`id_ciu`) REFERENCES `ciudad` (`id_ciu`),
  CONSTRAINT `REL_ESTUD_ACU` FOREIGN KEY (`id_est`) REFERENCES `estudiantes` (`id_est`),
  CONSTRAINT `REL_PAIS_ACU` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  CONSTRAINT `REL_TIP_ACU` FOREIGN KEY (`tipo_doc`) REFERENCES `tipodoc` (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO acudiente VALUES("78","3","Bonsai Santiague","Martin Rodriguez","0","Mz B Casa 624","1","1","4567289","60");
INSERT INTO acudiente VALUES("89","3","Fernando Camilo","Tamarindo Guzman","P","Mz B Casa 623","3","3","56783","4");





CREATE TABLE `ano_academico` (
  `id_ano_acad` int(11) NOT NULL,
  `nom_ano_acad` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ano_acad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO ano_academico VALUES("1","2020");
INSERT INTO ano_academico VALUES("2","2021");





CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `nom_area` varchar(80) NOT NULL,
  `est_area` char(1) NOT NULL,
  PRIMARY KEY (`id_area`),
  UNIQUE KEY `nom_area` (`nom_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO areas VALUES("1","Matemáticas","A");
INSERT INTO areas VALUES("2","Ciencias sociales","A");
INSERT INTO areas VALUES("3","Ciencias naturales","A");
INSERT INTO areas VALUES("4","Informática","A");
INSERT INTO areas VALUES("6","Lengua Castellana","I");





CREATE TABLE `asignaturas` (
  `id_asig` int(11) NOT NULL,
  `nom_asig` varchar(25) NOT NULL,
  `int_horaria` int(11) NOT NULL,
  `est_asig` char(1) NOT NULL,
  `id_area` int(11) NOT NULL,
  PRIMARY KEY (`id_asig`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO asignaturas VALUES("1","Algebra","3","A","1");
INSERT INTO asignaturas VALUES("2","Geometría","1","A","1");
INSERT INTO asignaturas VALUES("3","Lectura","1","A","2");
INSERT INTO asignaturas VALUES("4","Geografía","2","A","3");
INSERT INTO asignaturas VALUES("5","Historia","1","A","3");
INSERT INTO asignaturas VALUES("6","Democracia","1","A","3");
INSERT INTO asignaturas VALUES("7","Biología","2","A","4");
INSERT INTO asignaturas VALUES("8","Física","2","A","4");
INSERT INTO asignaturas VALUES("9","Química","2","A","4");
INSERT INTO asignaturas VALUES("10","Inglés","4","A","5");





CREATE TABLE `ciudad` (
  `id_ciu` int(11) NOT NULL,
  `nom_ciu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ciu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO ciudad VALUES("1","Bogotá");
INSERT INTO ciudad VALUES("2","Girardot");
INSERT INTO ciudad VALUES("3","Flandes");
INSERT INTO ciudad VALUES("4","Tocaima");
INSERT INTO ciudad VALUES("5","Ricaurte");





CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nom_curso` varchar(50) NOT NULL,
  `id_ano_acad` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `REL_ANOC_CURSO` (`id_ano_acad`),
  CONSTRAINT `REL_ANOC_CURSO` FOREIGN KEY (`id_ano_acad`) REFERENCES `ano_academico` (`id_ano_acad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO cursos VALUES("1101","1101","2","1");
INSERT INTO cursos VALUES("1102","1102","2","1");
INSERT INTO cursos VALUES("1103","1103","2","1");
INSERT INTO cursos VALUES("1104","1104","2","1");





CREATE TABLE `docentes` (
  `id_doc` varchar(10) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nom_doc` varchar(50) NOT NULL,
  `ap_doc` varchar(50) NOT NULL,
  `gen_doc` varchar(20) NOT NULL,
  `direc_doc` varchar(50) NOT NULL,
  `ed_doc` int(11) NOT NULL,
  `tel_doc` varchar(10) NOT NULL,
  `emdoc` varchar(20) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `id_asig` int(11) NOT NULL,
  PRIMARY KEY (`id_doc`),
  KEY `REL_AREA_DOCENTE` (`id_area`),
  KEY `REL_PAIS_DOCENTE` (`id_pais`),
  KEY `REL_CIUDAD_DOCENTE` (`id_ciu`),
  KEY `REL_ASIG_DOCENTE` (`id_asig`),
  KEY `tipo_doc` (`tipo_doc`),
  CONSTRAINT `REL_AREA_DOCENTE` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`),
  CONSTRAINT `REL_ASIG_DOCENTE` FOREIGN KEY (`id_asig`) REFERENCES `asignaturas` (`id_asig`),
  CONSTRAINT `REL_CIUDAD_DOCENTE` FOREIGN KEY (`id_ciu`) REFERENCES `ciudad` (`id_ciu`),
  CONSTRAINT `REL_PAIS_DOCENTE` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  CONSTRAINT `REL_TIPDOC_DOCENTE` FOREIGN KEY (`tipo_doc`) REFERENCES `tipodoc` (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO docentes VALUES("1","1","Alvaro","Mejía","Masculino","GIRARDOT","45","323566742","javier@gmail.com","1","1","1","1");
INSERT INTO docentes VALUES("2","2","Martha","Alonso","F","las rosas calle 3 19-32","192","3244567098","marthaalonso@gmail.c","2","1","2","4");
INSERT INTO docentes VALUES("3","2","Yessica","Gonzales Jimenez","M","Girardot","46","323454215","yessicagonzales@gmai","2","3","3","3");
INSERT INTO docentes VALUES("4","2","Javier","Leal","Masculino","GIRARDOT","45","312454675","javier@gmail.com","1","1","1","1");





CREATE TABLE `estudiantes` (
  `id_est` int(11) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nom_est` varchar(50) NOT NULL,
  `ape_est` varchar(50) NOT NULL,
  `ed_est` int(11) NOT NULL,
  `fecnac_est` datetime NOT NULL,
  `gen_est` varchar(20) NOT NULL,
  `dir_est` varchar(40) NOT NULL,
  `tel_est` int(11) NOT NULL,
  `em_est` varchar(60) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id_est`),
  KEY `REL_TIPDOC_EST` (`tipo_doc`),
  KEY `REL_PAIS_EST` (`id_pais`),
  KEY `REL_CIU_EST` (`id_ciu`),
  KEY `REL_CURSO_ESTUDIANTE` (`id_curso`),
  CONSTRAINT `REL_CIU_EST` FOREIGN KEY (`id_ciu`) REFERENCES `ciudad` (`id_ciu`),
  CONSTRAINT `REL_CURSO_ESTUDIANTE` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`),
  CONSTRAINT `REL_PAIS_EST` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  CONSTRAINT `REL_TIPDOC_EST` FOREIGN KEY (`tipo_doc`) REFERENCES `tipodoc` (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO estudiantes VALUES("1","1","Brayan","Flórez","16","2021-06-01 00:00:00","M","Girardot","3121165","g@hotmail","1","1","1102");
INSERT INTO estudiantes VALUES("2","1","Luisa","Romero","54","0000-00-00 00:00:00","M","Girardot","2147483647","luluisa@gmail.com","3","2","1101");
INSERT INTO estudiantes VALUES("3","1","Brayan","Romero","54","2021-07-29 00:00:00","M","Girardot","34567892","gdsfg@gakkf","1","4","1103");
INSERT INTO estudiantes VALUES("4","2","Olga","Barrero","15","2021-01-20 00:00:00","F","Girardot","34562782","bdeidme@gmail.com","3","1","1104");
INSERT INTO estudiantes VALUES("5","2","Maria José","Fernandez","17","2021-12-10 00:00:00","F","MC 4 FCAJ6","2987654","dfghjkl@gmail.com","3","2","1101");
INSERT INTO estudiantes VALUES("6","2","Brayan","Martinez","20","2020-12-10 00:00:00","F","MC 4 FCAJ6","345242","h@gmail.com","1","2","1104");
INSERT INTO estudiantes VALUES("7","3","Brayan","Romero","13","2021-02-04 00:00:00","M","Girardot","98765433","romapvk@gmail.com","2","2","1101");
INSERT INTO estudiantes VALUES("8","2","Brayan","Flórez","16","2021-06-01 00:00:00","M","Girardot","3121165","g@hotmail","2","3","1102");
INSERT INTO estudiantes VALUES("56","3","Luisa","Romero","54","2021-07-01 00:00:00","M","Girardot","2147483647","luluisa@gmail.com","3","2","1101");
INSERT INTO estudiantes VALUES("57","2","Brayan","Romero","54","2021-07-29 00:00:00","M","Girardot","34567892","gdsfg@gakkf","3","4","1103");
INSERT INTO estudiantes VALUES("58","2","Olga","Barrero","15","2021-01-20 00:00:00","F","Girardot","34562782","bdeidme@gmail.com","3","2","1104");
INSERT INTO estudiantes VALUES("59","2","Maria José","Fernandez","17","2021-12-10 00:00:00","F","MC 4 FCAJ6","2987654","dfghjkl@gmail.com","3","2","1101");
INSERT INTO estudiantes VALUES("60","2","Brayan","Martinez","20","2020-12-10 00:00:00","F","MC 4 FCAJ6","345242","h@gmail.com","3","2","1104");
INSERT INTO estudiantes VALUES("61","3","Brayan","Romero","13","2021-02-04 00:00:00","M","Girardot","98765433","romapvk@gmail.com","2","2","1101");





CREATE TABLE `logros` (
  `id_logro` int(11) NOT NULL,
  `nom_logro` varchar(120) NOT NULL,
  `per_logro` int(11) NOT NULL,
  `id_ano_esc` int(11) NOT NULL,
  PRIMARY KEY (`id_logro`),
  KEY `REL_PER_LOGRO` (`per_logro`),
  KEY `REL_ANOC_LOGRO` (`id_ano_esc`),
  CONSTRAINT `REL_ANOC_LOGRO` FOREIGN KEY (`id_ano_esc`) REFERENCES `ano_academico` (`id_ano_acad`),
  CONSTRAINT `REL_PER_LOGRO` FOREIGN KEY (`per_logro`) REFERENCES `periodo` (`id_per_aca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO logros VALUES("1","Identificar y entender los contenidos locales que conforman un texto.","1","2");
INSERT INTO logros VALUES("2","Comprender cómo se articulan las partes de un texto para darle un sentido global.","1","1");
INSERT INTO logros VALUES("3","Reflexionar a partir de un texto y evaluar su contenido.","1","1");
INSERT INTO logros VALUES("4","Interpretación y representación.","1","1");
INSERT INTO logros VALUES("5","Formulación y ejecución","1","1");
INSERT INTO logros VALUES("6","Argumentación","1","1");
INSERT INTO logros VALUES("7","Explicación de fenómenos","1","1");
INSERT INTO logros VALUES("8","Uso comprensivo del conocimiento científico","1","1");
INSERT INTO logros VALUES("9","Comprensión lectora.","1","1");





CREATE TABLE `matriculas` (
  `id_matri` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `id_ano_acad` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_acud` int(11) NOT NULL,
  PRIMARY KEY (`id_matri`),
  KEY `REL_EST_MATRICULA` (`id_est`),
  KEY `REL_ANOC_MATRICULA` (`id_ano_acad`),
  KEY `REL_CURSO_MATRI` (`id_curso`),
  KEY `REL_ACU_MATRI` (`id_acud`),
  CONSTRAINT `REL_ACU_MATRI` FOREIGN KEY (`id_acud`) REFERENCES `acudiente` (`id_acud`),
  CONSTRAINT `REL_ANOC_MATRICULA` FOREIGN KEY (`id_ano_acad`) REFERENCES `ano_academico` (`id_ano_acad`),
  CONSTRAINT `REL_CURSO_MATRI` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`),
  CONSTRAINT `REL_EST_MATRICULA` FOREIGN KEY (`id_est`) REFERENCES `estudiantes` (`id_est`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `notas` (
  `id_per_aca` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `id_asig` int(11) NOT NULL,
  `v_nota` float(10,0) NOT NULL,
  `id_notas` int(11) NOT NULL,
  `id_logro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notas`),
  KEY `REL_ACA_NOTA` (`id_per_aca`),
  KEY `REL_ESTUD_NOTA` (`id_est`),
  KEY `REL_ASIG_NOTAS` (`id_asig`),
  KEY `REL_LOG_NOTA` (`id_logro`),
  CONSTRAINT `REL_ACA_NOTA` FOREIGN KEY (`id_per_aca`) REFERENCES `periodo` (`id_per_aca`),
  CONSTRAINT `REL_ASIG_NOTAS` FOREIGN KEY (`id_asig`) REFERENCES `asignaturas` (`id_asig`),
  CONSTRAINT `REL_ESTUD_NOTA` FOREIGN KEY (`id_est`) REFERENCES `estudiantes` (`id_est`),
  CONSTRAINT `REL_LOG_NOTA` FOREIGN KEY (`id_logro`) REFERENCES `logros` (`id_logro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nom_pais` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pais VALUES("1","Colombia");
INSERT INTO pais VALUES("2","México");
INSERT INTO pais VALUES("3","EEUU");





CREATE TABLE `periodo` (
  `id_per_aca` int(11) NOT NULL,
  `nom_per` varchar(50) NOT NULL,
  PRIMARY KEY (`id_per_aca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO periodo VALUES("1","Primero");
INSERT INTO periodo VALUES("2","Segundo");
INSERT INTO periodo VALUES("3","Tercero ");
INSERT INTO periodo VALUES("4","Cuarto");





CREATE TABLE `tipodoc` (
  `tipo_doc` int(11) NOT NULL,
  `nom_doc` varchar(25) NOT NULL,
  PRIMARY KEY (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO tipodoc VALUES("1","T.I.");
INSERT INTO tipodoc VALUES("2","C.C");
INSERT INTO tipodoc VALUES("3","C.E");





CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO users VALUES("10","Juan Manuel Viasus Parra","juanmanuelviasus0927@gmail.com","JuanManuelViasusParra","1234");





CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Usuario` varchar(11) NOT NULL,
  `Password` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO usuario VALUES("1","Juan","1234");





CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `nom_usu` varchar(50) NOT NULL,
  `apel_usu` varchar(50) NOT NULL,
  `pass_usu` varchar(10) NOT NULL,
  `per_usu` int(15) NOT NULL,
  `est_usu` char(1) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB AUTO_INCREMENT=20222 DEFAULT CHARSET=utf8mb4;

INSERT INTO usuarios VALUES("1","Ariana","","$2y$10$HhZ","0","");
INSERT INTO usuarios VALUES("7","e","e","aei","9","C");
INSERT INTO usuarios VALUES("2025","Ariana ","Grande Butera","ffbbecc283","5","C");
INSERT INTO usuarios VALUES("20211","Simón José Antonio de la Santísima Trinidad","Bolívar y Ponte Palacios y Blanco","pUiuTL^yyw","1","R");
INSERT INTO usuarios VALUES("20212","Will","Smith","ePWIn!w1AP","2","C");
INSERT INTO usuarios VALUES("20213","Silvana","Estrada","5TmUiW%Vps","3","C");
INSERT INTO usuarios VALUES("20214","Daniel","Zepeda","mbrwR&0O5h","4","C");
INSERT INTO usuarios VALUES("20215","e","","$2y$10$u6e","0","");
INSERT INTO usuarios VALUES("20216","e","","aeeee","0","");
INSERT INTO usuarios VALUES("20217","si","","no","0","");
INSERT INTO usuarios VALUES("20218","PepeGrillo","","1234","0","");
INSERT INTO usuarios VALUES("20219","PepeGrillo","","1234","0","");
INSERT INTO usuarios VALUES("20220","Olga Barrero","","987","0","");
INSERT INTO usuarios VALUES("20221","Nilo","","456","0","");



