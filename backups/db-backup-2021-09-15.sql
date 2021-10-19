

CREATE TABLE `acudiente` (
  `id_acud` int(11) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nom_acu` varchar(50) NOT NULL,
  `ape_acu` varchar(50) NOT NULL,
  `parentesco` varchar(15) NOT NULL,
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

INSERT INTO acudiente VALUES("0","2","carmen","villalobos","Tio/a","afdsa","1","2","32554","7");
INSERT INTO acudiente VALUES("1","2","Angela","Galindo","asdf","asdf","1","1","350411","1");
INSERT INTO acudiente VALUES("2","3","Carolina","hernandez","afdsa","afdsa","1","3","0","5");
INSERT INTO acudiente VALUES("3","2","Eduardo","Florez","afdsa","afdsa","2","3","0","4");





CREATE TABLE `ano_academico` (
  `id_ano_acad` int(11) NOT NULL,
  `nom_ano_acad` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ano_acad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO ano_academico VALUES("1","2020");
INSERT INTO ano_academico VALUES("2","2021");





CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `nom_area` varchar(25) NOT NULL,
  `est_area` char(1) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO areas VALUES("1","Matemáticas","A");
INSERT INTO areas VALUES("2","Lenguaje","A");
INSERT INTO areas VALUES("3","Ciencias sociales","A");
INSERT INTO areas VALUES("4","Ciencias  naturales","A");
INSERT INTO areas VALUES("5","Ingles","A");
INSERT INTO areas VALUES("7","Educación física","A");
INSERT INTO areas VALUES("8","Lógica y razonamiento ","A");





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
INSERT INTO asignaturas VALUES("10","Ingles","4","A","5");





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
INSERT INTO ciudad VALUES("6","Pereira");





CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nom_curso` varchar(50) NOT NULL,
  `id_ano_acad` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `REL_ANOC_CURSO` (`id_ano_acad`),
  CONSTRAINT `REL_ANOC_CURSO` FOREIGN KEY (`id_ano_acad`) REFERENCES `ano_academico` (`id_ano_acad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO cursos VALUES("601","601","2","8");
INSERT INTO cursos VALUES("602","602","2","1");
INSERT INTO cursos VALUES("603","603","2","7");
INSERT INTO cursos VALUES("1101","1101","2","6");
INSERT INTO cursos VALUES("1102","1102","2","9");
INSERT INTO cursos VALUES("1103","1103","2","2");
INSERT INTO cursos VALUES("1104","1104","2","3");





CREATE TABLE `docentes` (
  `id_doc` varchar(10) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nom_doc` varchar(50) NOT NULL,
  `ape_doc` varchar(50) NOT NULL,
  `gen_doc` varchar(20) NOT NULL,
  `dir_doc` varchar(50) NOT NULL,
  `ed_doc` int(11) NOT NULL,
  `tel_doc` varchar(10) NOT NULL,
  `em_doc` varchar(20) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `id_asig` int(11) NOT NULL,
  PRIMARY KEY (`id_doc`),
  KEY `REL_TIPDOC_DOCENTE` (`tipo_doc`),
  KEY `REL_AREA_DOCENTE` (`id_area`),
  KEY `REL_PAIS_DOCENTE` (`id_pais`),
  KEY `REL_CIUDAD_DOCENTE` (`id_ciu`),
  KEY `REL_ASIG_DOCENTE` (`id_asig`),
  CONSTRAINT `REL_AREA_DOCENTE` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`),
  CONSTRAINT `REL_ASIG_DOCENTE` FOREIGN KEY (`id_asig`) REFERENCES `asignaturas` (`id_asig`),
  CONSTRAINT `REL_CIUDAD_DOCENTE` FOREIGN KEY (`id_ciu`) REFERENCES `ciudad` (`id_ciu`),
  CONSTRAINT `REL_PAIS_DOCENTE` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  CONSTRAINT `REL_TIPDOC_DOCENTE` FOREIGN KEY (`tipo_doc`) REFERENCES `tipodoc` (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO docentes VALUES("1","1","Alvaro ","Mejía","M","GIRARDOT","45","31333202","alvarito@gmail.com","4","1","2","9");
INSERT INTO docentes VALUES("2","2","Martha","Alonso","F","M 45 C65 b/santa ano","50","8956544","marthaliliana@gmail.","1","2","2","3");
INSERT INTO docentes VALUES("3","2","Yessica ","Gonzales Jiménez ","F","calle 3 b n 54","30","3255214457","profeyesica.2021@gma","1","2","4","8");
INSERT INTO docentes VALUES("4","2","Javier ","leal","M","Ricaurte","50","8956544","javier.leal@gmail.co","1","1","5","1");
INSERT INTO docentes VALUES("5","2","Martha","Doncel","F","ricaurte","50","8956544","marthadocel@gmail.co","3","1","2","6");
INSERT INTO docentes VALUES("6","2","Fernando","Cetares","M","centenario ","35","310254587","cetaresinformatica@g","1","2","1","2");
INSERT INTO docentes VALUES("7","2","concepcion ","garcia","F","Villavicencio ","50","8956544","cochita.edfisica@gma","1","2","1","9");
INSERT INTO docentes VALUES("8","2","stella","tujillo ","F","Villavicencio ","50","3102548745","stellita.dondeestas@","1","2","5","10");
INSERT INTO docentes VALUES("9","2","ana","beatriz","F","M 45 C65 b/santa ano","45","32547851","anitavanegas@gmail.c","2","3","5","10");





CREATE TABLE `estudiantes` (
  `id_est` int(11) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nom_est` varchar(50) NOT NULL,
  `ape_est` varchar(50) NOT NULL,
  `ed_est` int(11) NOT NULL,
  `fecnac_est` date NOT NULL,
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

INSERT INTO estudiantes VALUES("1","1","brayan","florez","16","2021-06-01","M","Girardot","3121165","g@hotmail","1","5","1104");
INSERT INTO estudiantes VALUES("4","2","Luisa","romero","54","2021-07-03","M","girardot","2147483647","luluisa@gmail.com","3","4","1104");
INSERT INTO estudiantes VALUES("5","1","Brayan","Romero","54","2021-07-29","M","girardot","111112","gdsfg@gakkf","1","1","1101");
INSERT INTO estudiantes VALUES("6","2","Olga","Barrero","15","2008-06-10","F","Girardot","320482741","olgabarrer@gmail.com","3","4","1104");
INSERT INTO estudiantes VALUES("7","2","Maria jose","Fernández","17","2021-01-20","F","MC 4 FCAJ6","21855689","MARI@FGF","1","3","1102");
INSERT INTO estudiantes VALUES("10","2","Brayan","martinez","20","2020-12-10","F","MC 4 FCAJ6","2147483647","h@gmail.com","1","2","1104");
INSERT INTO estudiantes VALUES("45","3","Brayan","romero","17","2021-02-04","M","Girardot","111112","h@gmail.com","2","2","1103");





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

INSERT INTO logros VALUES("1","Identificar y entender los contenidos locales que conforman un texto.","2","1");
INSERT INTO logros VALUES("2","Comprender cómo se articulan las partes de un texto para darle un sentido global.","1","1");
INSERT INTO logros VALUES("3","Reflexionar a partir de un texto y evaluar su contenido.","1","1");
INSERT INTO logros VALUES("4","Interpretación y representación.","1","1");
INSERT INTO logros VALUES("5","Formulación y ejecución","1","1");
INSERT INTO logros VALUES("6","Argumentación","1","1");
INSERT INTO logros VALUES("7","Explicación de fenómenos","1","1");
INSERT INTO logros VALUES("8","Uso comprensivo del conocimiento científico","1","1");





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
INSERT INTO pais VALUES("4","Costa Rica");
INSERT INTO pais VALUES("8","cuba");





CREATE TABLE `periodo` (
  `id_per_aca` int(11) NOT NULL,
  `nom_per` varchar(50) NOT NULL,
  PRIMARY KEY (`id_per_aca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO periodo VALUES("1","primero");
INSERT INTO periodo VALUES("2","Segundo");
INSERT INTO periodo VALUES("3","Tercero");
INSERT INTO periodo VALUES("4","Cuarto");





CREATE TABLE `tipodoc` (
  `tipo_doc` int(11) NOT NULL,
  `nom_doc` varchar(25) NOT NULL,
  PRIMARY KEY (`tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO tipodoc VALUES("1","T.I");
INSERT INTO tipodoc VALUES("2","C.C");
INSERT INTO tipodoc VALUES("3","C.E");





CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO users VALUES("1","sapa sapa","sapa","david54","123");
INSERT INTO users VALUES("2","Juan David Galeano Fernandez","juanpis@gmail.com","juanpis01","123");
INSERT INTO users VALUES("3","Robinson Stick Florew","","Brayanflorez","XD*C^AueY^TlJ&s37F");
INSERT INTO users VALUES("4","Robinson Stick Florez Lopez","robinelmaslindo@gmail.com","pegastick","100301");
INSERT INTO users VALUES("5","Brayan David Florez Lopez","brayanfowers@gmail.com","Brayan Florez","123456");





CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nom_usu` varchar(50) NOT NULL,
  `apel_usu` varchar(50) NOT NULL,
  `pass_usu` varchar(10) NOT NULL,
  `per_usu` int(15) NOT NULL,
  `est_usu` char(1) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




