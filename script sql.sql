use database cofetarie1;

CREATE TABLE `cofetarie1`.`client`(
`id_client` INT(11) NOT NULL AUTO_INCREMENT,
`nume` VARCHAR(20) NOT NULL,
`telefon` INT(11) NOT NULL,
PRIMARY KEY(`id_client`));


insert into `cofetarie1`.`client`(`id_client`, `nume`, `telefon`) values ('1','Popescu Ioana','0745672099');
insert into `cofetarie1`.`client`(`id_client`, `nume`, `telefon`) values ('2','Gavril George','0788234560');
insert into `cofetarie1`.`client`(`id_client`, `nume`, `telefon`) values ('3','Povala Marius','0724531356');
insert into `cofetarie1`.`client`(`id_client`, `nume`, `telefon`) values ('4','Micu Daria','0788266960');
insert into `cofetarie1`.`client`(`id_client`, `nume`, `telefon`) values ('5','Dumitru Ana','0788912570');
insert into `cofetarie1`.`client`(`id_client`, `nume`, `telefon`) values ('6','Bratianu Luca','0756671230');
insert into `cofetarie1`.`client`(`id_client`, `nume`, `telefon`) values ('7','Anghel Maria','0756805532');
insert into `cofetarie1`.`client`(`id_client`, `nume`, `telefon`) values ('8','Georgescu Andreea','0728663421');


-- crearea tabelei 'comanda'
create table `cofetarie1`.`comanda`(
`id_comanda` int(11) auto_increment,
`data` date not null,
`id_client` int(11) default null,
primary key(`id_comanda`),
constraint `id_client` foreign key(`id_client`) references `client`(`id_client`) on delete cascade on update cascade);

-- acelasi client poate sa dea mai multe comenzi
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('1','2021-02-23','1');
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('2','2021-02-24','3');
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('3','2021-01-28','2');
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('4','2021-02-05','2');
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('5','2021-01-06','4');
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('6','2020-12-29','5');
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('7','2021-01-17','6');
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('8','2021-02-24','6');
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('9','2021-01-05','7');
insert into `cofetarie1`.`comanda`(`id_comanda`,`data`,`id_client`) values ('10','2020-12-28','8');


-- crearea tabelei 'produs' 
CREATE TABLE `cofetarie1`.`produs`(
`id_produs` INT(11) AUTO_INCREMENT,
`denumire` VARCHAR(20) NOT NULL,
`pret` FLOAT(5,2) NOT NULL,
PRIMARY KEY(`id_produs`));

insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('1','Cremsnit','5');
insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('2','Salam de biscuiti','4');
insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('3','Select','6');
insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('4','Amandina','5.5');
insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('5','Papanasi','12');
insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('6','Tort de ciocolata','50');
insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('7','Savarina','4.5');
insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('8','Diplomat','6');
insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('9','Ecler','4');
insert into `cofetarie1`.`produs`(`id_produs`,`denumire`,`pret`) values ('10','Tiramisu','7');


-- crearea tabelei 'descriere comanda'
create table `cofetarie1`.`descriere comanda`(
`id_desc` int(11) auto_increment,
`cantitate` int(3) not null,
`id_produs` int(11) default null,
`id_comanda` int(11) default null,
primary key(`id_desc`),
constraint `id_produs` foreign key(`id_produs`) references `produs`(`id_produs`) on delete cascade on update cascade,
constraint `id_comanda` foreign key(`id_comanda`) references `comanda`(`id_comanda`) on delete cascade on update cascade);

alter table `cofetarie1`.`descriere comanda` add ( constraint vf_cantitate_oferta check( cantitate > 10 ));

insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('1','5','1','2');
insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('2','6','2','1');
insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('3','10','3','4');
insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('4','7','6','5');
insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('5','9','4','10');
insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('6','7','5','9');
insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('7','3','8','4');
insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('8','4','7','5');
insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('9','8','9','8');
insert into `cofetarie1`.`descriere comanda`(`id_desc`,`id_produs`,`id_comanda`,`cantitate`) values ('10','1','10','6');


-- crearea tabelei 'personal'
CREATE TABLE `cofetarie1`.`personal`(
`id_personal` INT AUTO_INCREMENT,
`nume` VARCHAR(20) NOT NULL,
`prenume` VARCHAR(20) NOT NULL,
`meserie` VARCHAR(20) NOT NULL,
`adresa` VARCHAR(40),
`telefon` INT(11) NOT NULL,
PRIMARY KEY(`id_personal`));

alter table personal add ( constraint vf_adresa check( adresa is not null));

insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('20','Popescu','Maria-Ioana','cofetar','Campulung, Str. Penelor, nr. 12','0745267994');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('63','Ivan','Malin','contabil','Campulung, Str. 1 Mai, nr. 23','0736581330');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('64','Geana','Ionut','manager','Brasov, Str. Ficusului, nr. 50','0755436231');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('65','Broscoteanu','Daria','patron','Campulung, Str. Brasovului, nr. 109','0745334194');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('101','Moise','George','chelner','Campulung, Str. Primaverii, nr. 32','0728990914');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('42','Gardin','Alex','cofetar','Campulung, Str. Grigorescu, nr. 35','0778311940');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('61','Ionescu','Ana','vanzator','Brasov, Str. Aldi, nr. 305','0745674494');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('62','Chivu','Elena','cofetar','Targoviste, Str. Madrid, nr. 78','0729678794');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('81','Constantin','Ramona','Femeie de serviciu','Campulung, Str. A.I. Cuza, nr. 90','0746771994');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('103','Popescu','Maria-Ioana','cofetar','Campulung, Str. Penelor, nr. 12','0745267994');
insert into `cofetarie1`.`personal`(`id_personal`,`nume`,`prenume`,`meserie`,`adresa`,`telefon`) values ('34','Ardelean','Marian', 'chelner','Pitesti, Str. Arici, nr. 3','0738456008');


-- creare tabela 'istoric'
create table `cofetarie1`.`istoric`(
`id_istoric` int(11) auto_increment,
`data` date not null,
`id_personal` int(11) default null,
`id_produs` int(11) default null,
primary key(`id_istoric`),
constraint `id_personal_ist` foreign key(`id_personal`) 
references `personal`(`id_personal`) on delete cascade on update cascade,
constraint `id_produs_ist` foreign key(`id_produs`) 
references `produs`(`id_produs`) on delete cascade on update cascade);


insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('1','20','3','2021-01-05');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('2','20','5','2021-01-06');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('3','42','2','2021-01-05');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('4','20','1','2021-01-06');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('5','42','6','2021-01-07');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('6','62','7','2021-01-06');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('7','62','10','2021-01-05');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('8','62','4','2021-01-06');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('9','103','8','2021-01-05');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('10','103','9','2021-01-05');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('11','20','6','2021-01-07');
insert into `cofetarie1`.`istoric`(`id_istoric`,`id_personal`,`id_produs`,`data`) values ('12','42','5','2021-01-06');


-- crearea tabelei 'ingredient'
CREATE TABLE `cofetarie1`.`ingredient`(
`id_ingredient` INT(11) AUTO_INCREMENT,
`denumire` VARCHAR(20) NOT NULL,
PRIMARY KEY(`id_ingredient`));

insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('1','lapte');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('2','oua');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('3','zahar');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('4','ciocolata');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('5','praf de copt');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('6','sare');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('7','mascarpone');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('8','faina');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('9','vanilie');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('10','iaurt');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('11','gem de zmeura');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('12','foietaj');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('13','piscoturi');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('14','frisca');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('15','portocale');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('16','banane');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('17','bicuiti');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('18','cacao');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('19','unt');
insert into `cofetarie1`.`ingredient`(`id_ingredient`,`denumire`) values ('20','apa');


-- crearea tabelei 'reteta'
create table `cofetarie1`.`reteta`(
`id_reteta` int(11) auto_increment,
`cantitate` varchar(20) not null,
`id_ingredient` int(11) default null,
`id_produs` int(11) default null,
primary key(`id_reteta`),
constraint `id_ingredient_ret` foreign key(`id_ingredient`) references `ingredient`(`id_ingredient`) on delete cascade on update cascade,
constraint `id_produs_ret` foreign key(`id_produs`) references `produs`(`id_produs`) on delete cascade on update cascade);

insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('1','12','1','550 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('2','2','1','6 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('3','3','1','200 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('4','6','1','un praf');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('5','9','1','o bucata');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('6','17','2','500 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('7','1','2','200 ml');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('8','19','2','150 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('9','3','2','100 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('10','18','2','2 linguri');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('11','7','3','200 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('12','17','3','500 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('13','1','3','150 ml');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('14','9','3','3 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('15','8','3','500 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('16','2','3','6 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('17','3','4','200 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('18','8','4','150 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('19','2','4','5 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('20','8','4','150 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('21','18','4','4 linguri');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('22','9','4','o bucata');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('23','10','5','500 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('24','8','5','300 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('25','11','5','150 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('26','2','5','2 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('27','6','5','un praf');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('28','2','6','8 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('29','3','6','220 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('30','8','6','170 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('31','4','6','600 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('32','7','6','750 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('33','20','6','200 ml');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('34','8','7','250 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('35','1','7','150 ml');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('36','2','7','2 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('37','6','7','un praf');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('38','2','8','11 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('39','14','8','2 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('40','15','8','2 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('41','16','8','3 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('42','1','9','625 ml');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('43','2','9','3 bucati');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('44','3','9','100 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('45','14','9','200 ml');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('46','13','10','400 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('47','7','10','500 g');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('48','3','10','8 linguri');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('49','18','10','3 linguri');
insert into `cofetarie1`.`reteta`(`id_reteta`,`id_ingredient`,`id_produs`,`cantitate`) values ('50','2','10','5 bucati');


-- creare tabel 'furnizor' 
CREATE TABLE `cofetarie1`.`furnizor`(
`cod_fiscal` INT(11) AUTO_INCREMENT,
`denumire` VARCHAR(20) NOT NULL,
`telefon` INT(11) NOT NULL, 
PRIMARY KEY(`cod_fiscal`));

insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('145670','Yakar Group', '0789334051');
insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('670199','MONTE VERDE SR', '0724112390');
insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('903130','Dion District', '0789839340');
insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('223413','Zarall Trading', '0723440125');
insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('10013','Kalos', '0789001138');
insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('112145','Joy Trading', '0764242051');
insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('143440','Romics SRL', '0778534086');
insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('669731','REDWOOD IFN', '0278810851');
insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('77834','Cibibon SRL', '0266793109');
insert into `cofetarie1`.`furnizor`(`cod_fiscal`,`denumire`, `telefon`) values ('445221','Silva SRL', '0709478341');


-- creare tabel 'factura fiscala' 
create table `cofetarie1`.`factura fiscala`(
`id_factura` int(11) auto_increment,
`data` date not null,
`cod_fiscal` int(11) default null,
primary key(`id_factura`),
constraint `cod_fiscal` foreign key(`cod_fiscal`) 
references `furnizor`(`cod_fiscal`) on delete cascade on update cascade);

insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('1','145670','2020-12-15');
insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('2','112145','2020-12-23');
insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('3','145670','2021-01-06');
insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('4','445221','2020-12-29');
insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('5','669731','2021-01-20');
insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('6','77834','2020-12-16');
insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('7','10013','2021-01-01');
insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('8','10013','2020-12-31');
insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('9','112145','2021-02-01');
insert into `cofetarie1`.`factura fiscala`(`id_factura`,`cod_fiscal`,`data`) values ('10','903130','2021-01-04'); 


-- creare tabela 'detaliu factura'
create table `cofetarie1`.`detaliu factura`(
`id_detfact` int(11) auto_increment,
`cantitate` varchar(20) not null,
`pret` float(10,2) not null,
`id_ingredient` int(11) default null,
`id_factura` int(11) default null,
primary key(`id_detfact`),
constraint `id_ingredient_fact` foreign key(`id_ingredient`)
 references `ingredient`(`id_ingredient`) on delete cascade on update cascade,
constraint `id_factura` foreign key(`id_factura`) 
references `factura fiscala`(`id_factura`) on delete cascade on update cascade);

insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('1', '1', '16', '20', '20');
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('2', '1', '15', '20', '15');
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('3', '1', '11', '5', '20');
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('4', '2', '1', '50 L', 250);
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('5', '2', '2', '100 bucati', 100);
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('6', '2', '6', '10 kg', 40 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('7', '3', '8', '50 kg', 200 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('8', '4', '12', '30 pachete', 150 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('9', '5', '10', '10 kg', 70 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('10', '5', '7', '5 kg', 200 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('11', '6', '5', '200 pliculete', 250 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('12', '7', '9', '10 bucati', 100 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('13', '8', '13', '8 kg', 80 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('14', '9', '3', '10 kg', 40 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('15', '9', '4', '50 bucati', 150 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('16', '10', '14', '10 L', 60 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('17', '10', '17', '50 pachete', 150 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('18', '9', '19', '6 kg', 180 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('19', '10', '18', '3 kg', 99 );
insert into `cofetarie1`.`detaliu factura`(`id_detfact`, `id_factura`, `id_ingredient`, `cantitate`, `pret`) values ('20', '6', '20', '20 L', 24 );
