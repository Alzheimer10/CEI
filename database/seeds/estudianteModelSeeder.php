<?php

use Illuminate\Database\Seeder;

class estudianteModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//LATACTANCIA I
		App\Models\estudiante::create(['ci'=>'11614956124',	'apellido'=>'GONZALEZ AULAR',		'nombre'=>'FRANCISCO JAVIER',   'fechaNacimiento'=>'2016-03-15',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11620315153',	'apellido'=>'GONZALEZ MACHADO',		'nombre'=>'DIEGO ALEJANDRO',   	'fechaNacimiento'=>'2016-02-16',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11615861478',	'apellido'=>'GONZALEZ MARCANO',		'nombre'=>'YESHUA RAFAEL', 		'fechaNacimiento'=>'2016-04-13',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1161709505',	'apellido'=>'GUERRA PEÑA',			'nombre'=>'MARCOS ALEJANDRO',   'fechaNacimiento'=>'2016-03-07',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151658289',	'apellido'=>'HERNANDEZ FERNANDEZ',	'nombre'=>'JOSE ANTONIO',  		'fechaNacimiento'=>'2015-12-26',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11626011279',	'apellido'=>'JIMENEZ PEREZ',		'nombre'=>'ISAURA MAGALY',    	'fechaNacimiento'=>'2016-04-16',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1162463750',	'apellido'=>'LEZCANO MENDIETA',		'nombre'=>'ANGEL GIANPIERRE', 	'fechaNacimiento'=>'2016-03-29',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11617449931',	'apellido'=>'MORALES MARTINEZ',		'nombre'=>'JESUS AARON',   		'fechaNacimiento'=>'2016-03-22',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1161354795',	'apellido'=>'PEREZ RAMOS',			'nombre'=>'ALESSANDRO RAFAEL',  'fechaNacimiento'=>'2016-01-17',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1161779093',	'apellido'=>'ROSSODIVITA GIL',		'nombre'=>'FILIPPO', 			'fechaNacimiento'=>'2016-01-05',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11616595301',	'apellido'=>'SEIJAS RAMIREZ',		'nombre'=>'MATHIAS GABRIEL', 	'fechaNacimiento'=>'2016-01-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151499956',	'apellido'=>'SIERRA DIAZ',			'nombre'=>'VERONICA GABRIELA',  'fechaNacimiento'=>'2015-12-04',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11614731460',	'apellido'=>'SUAREZ VELIZ',			'nombre'=>'NAHOMY ESTHER', 		'fechaNacimiento'=>'2016-04-01',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1161958874',	'apellido'=>'YANEZ BARRERA',		'nombre'=>'THIAGO ALEJANDRO', 	'fechaNacimiento'=>'2016-01-08',	'sexo'=>'M']);

		//LACTANCIA II
		App\Models\estudiante::create(['ci'=>'1152491323',	'apellido'=>'COLMAN PRATO', 		'nombre'=>'FABIANA VALENTINA', 	 'fechaNacimiento'=>'2015-10-06',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1152251958',	'apellido'=>'COLON DI BIASE',  		'nombre'=>'ANYELO JOSUE', 		 'fechaNacimiento'=>'2015-11-11',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151586009',	'apellido'=>'GASPARINI VALVERDE', 	'nombre'=>'PAOLA SOFIA', 		 'fechaNacimiento'=>'2015-08-27',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151869799',	'apellido'=>'GONZALEZ MEDINA', 		'nombre'=>'VICTORIA ELENA', 	 'fechaNacimiento'=>'2015-09-25',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11515861250', 'apellido'=>'ERNANDEZ TERAN', 		'nombre'=>'EZEQUIEL DAVID',		 'fechaNacimiento'=>'2015-08-02',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1152148038', 	'apellido'=>'HERRERA RIVERO', 		'nombre'=>'VICTORIA ISABEL',	 'fechaNacimiento'=>'2015-11-03',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11515219223', 'apellido'=>'INARES CUENCA', 		'nombre'=>'ANGEL EDUARDO', 		 'fechaNacimiento'=>'2015-09-04',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151438345', 	'apellido'=>'MONTILLA NIÑO', 		'nombre'=>'JUAN PABLO DE JESUS', 'fechaNacimiento'=>'2015-10-26',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1162446546', 	'apellido'=>'MONTILLA SIMANCAS', 	'nombre'=>'JESUS DANIEL', 		 'fechaNacimiento'=>'2016-01-07',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151453262', 	'apellido'=>'PADRON MARTINEZ', 		'nombre'=>'IGNACIO DAVID', 		 'fechaNacimiento'=>'2015-09-19',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151707206', 	'apellido'=>'PAREDES ALONSO', 		'nombre'=>'EMILIANA', 			 'fechaNacimiento'=>'2015-09-10',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1152552164', 	'apellido'=>'PUEMAPE BLANCO', 		'nombre'=>'DANNA ALAIA',		 'fechaNacimiento'=>'2015-08-06',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11516015265', 'apellido'=>'IVERO ARTIGAS', 		'nombre'=>'LUCIA VALENTINA',	 'fechaNacimiento'=>'2015-12-03',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151375452',	'apellido'=>'ROMERO VARGAS', 		'nombre'=>'ISABELLA CRISTINA',   'fechaNacimiento'=>'2015-08-31',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151097393', 	'apellido'=>'TORRES GRAND', 		'nombre'=>'LUIS ALEJANDRO',		 'fechaNacimiento'=>'2015-10-27',	'sexo'=>'M']);

		//LACTANCIA III
		App\Models\estudiante::create(['ci'=>'11514392616',	 'apellido'=>'ANGULO ROSALES',		 	'nombre'=>'JUAN PABLO JOSE', 	'fechaNacimiento'=>'2015-04-23', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151996404',	 'apellido'=>' ARTEAGA ZAMORA',		 	'nombre'=>'NATALIA ISABELLA', 	'fechaNacimiento'=>'2015-04-23', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11512773169',	 'apellido'=>'CHACON CORDERO',		 	'nombre'=>'MANUELLA VALENTINA',	'fechaNacimiento'=>'2015-01-30', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151687303',	 'apellido'=>' CHIRINOS RAMOS',		 	'nombre'=>'JESUS MANUEL', 		'fechaNacimiento'=>'2015-06-08', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151574552',	 'apellido'=>' GARCIA USECHE',		 	'nombre'=>'SORIANGEL NAZARET', 	'fechaNacimiento'=>'2016-04-03', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1152016474',	 'apellido'=>' LOPEZ HEREIRA',		 	'nombre'=>'ISABELLA DEL VALLE', 'fechaNacimiento'=>'2015-02-06', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1152350333',	 'apellido'=>' LOPEZ PANDOLFI',		 	'nombre'=>'VALENTINA ISABELLE', 'fechaNacimiento'=>'2015-05-28', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151966720',	 'apellido'=>' NARANJO FIGUEROA',	 	'nombre'=>'SARA', 				'fechaNacimiento'=>'2015-03-27', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151590682',	 'apellido'=>' ORTEGA LOPEZ', 		 	'nombre'=>'ADRIAN DAVID', 		'fechaNacimiento'=>'2016-06-27', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11515528041',	 'apellido'=>'ORTEGA MORALES',		 	'nombre'=>'DIANA ALEJANDRA', 	'fechaNacimiento'=>'2016-03-30', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11419919335',	 'apellido'=>'RODRIGUEZ GONZALEZ',	 	'nombre'=>'HILARY ISABELLA', 	'fechaNacimiento'=>'2014-12-03', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11515398176',	 'apellido'=>'SAMPEDRANO CASADIEGO', 	'nombre'=>'ANNA PILAR', 		'fechaNacimiento'=>'2015-03-31', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1152572677',	 'apellido'=>' SAMPEDRANO VELASQUEZ',	'nombre'=>'FABIAN', 			'fechaNacimiento'=>'2015-04-09', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151699377',	 'apellido'=>' SANDOMINGO ROMAN',	 	'nombre'=>'LUCIA FERNANDA', 	'fechaNacimiento'=>'2015-04-25', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1152038475',	 'apellido'=>' SANTIAGO MENDOZA',	 	'nombre'=>'MATHIAS EDUARDO', 	'fechaNacimiento'=>'2015-05-15', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11514573186',	 'apellido'=>'SEQUERA ESCOBAR',		 	'nombre'=>'MAURICIO SAMUEL', 	'fechaNacimiento'=>'2015-07-15', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11516152636',	 'apellido'=>'SOLOVEY MATTHIESEN',	 	'nombre'=>'SABRINA', 			'fechaNacimiento'=>'2015-08-24', 'sexo'=>'F']);

		//LACTANCIA IV
		App\Models\estudiante::create(['ci'=>'1141446268', 	'apellido'=>'DIAZ ROMERO', 			'nombre'=>'PAULA FRANCESCA',    'fechaNacimiento'=>'2014-12-02',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1152510704', 	'apellido'=>'ESCOBAR GONZALEZ', 	'nombre'=>'SCARLYS SOFIA', 		'fechaNacimiento'=>'2015-02-11',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11422216281',	'apellido'=>'ESTRADA LEON', 		'nombre'=>'SEBASTIAN JEREMIAS', 'fechaNacimiento'=>'2014-10-24',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151525872', 	'apellido'=>'FALCON ESCALANTE', 	'nombre'=>'ASTRID SUSEJ', 		'fechaNacimiento'=>'2015-04-16',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151439392', 	'apellido'=>'GUEVARA SIERRA', 		'nombre'=>'ALEXANDRA CAROLINA', 'fechaNacimiento'=>'2015-02-11',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11515446741',	'apellido'=>'GUILLEN CASTRO', 		'nombre'=>'NELLY VALENTINA', 	'fechaNacimiento'=>'2015-01-06',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151446358', 	'apellido'=>'GUTIERREZ SANTIAGO', 	'nombre'=>'ASAEL AUGUSTO',		'fechaNacimiento'=>'2015-02-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11414079919',	'apellido'=>'HOYOS CASTRO',			'nombre'=>'SALMA VICTORIA',     'fechaNacimiento'=>'2014-10-19',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1141706538', 	'apellido'=>'MENDOZA DOMINGUEZ', 	'nombre'=>'ANDRES', 			'fechaNacimiento'=>'2014-12-12',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11516503134',	'apellido'=>'MENDOZA PEREZ', 		'nombre'=>'LETIZIA ELENA',    	'fechaNacimiento'=>'2015-02-27',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151304776', 	'apellido'=>'MONTENEGRO SANZ', 		'nombre'=>'CAMILA VALERIA', 	'fechaNacimiento'=>'2015-03-17',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1151597775', 	'apellido'=>'MORENO COLINA', 		'nombre'=>'VALERIA SOFIA',    	'fechaNacimiento'=>'2015-02-27',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11521154269',	'apellido'=>'NATERA RAMIREZ', 		'nombre'=>'ADRIANO FELIPE',  	'fechaNacimiento'=>'2015-12-15',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11416269715',	'apellido'=>'OLIVEROS JIMENEZ', 	'nombre'=>'FABIOLA ESMERALDA', 	'fechaNacimiento'=>'2014-08-18',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1152102800', 	'apellido'=>'ORTEGA CASTILLO', 		'nombre'=>'MAIGRET VICTORIA',	'fechaNacimiento'=>'2015-01-27',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1152054281', 	'apellido'=>'REYES OROPEZA', 		'nombre'=>'ASLAN SIMON',  		'fechaNacimiento'=>'2015-03-30',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1151862938', 	'apellido'=>'RODRIGUEZ MARTINEZ', 	'nombre'=>'SURI ANDREINA', 		'fechaNacimiento'=>'2015-02-06',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'2151539817', 	'apellido'=>'SAMPEDRANO CASADIEGO', 'nombre'=>'DANNA', 				'fechaNacimiento'=>'2015-03-31',	'sexo'=>'F']);

		//MATERNAL I
		App\Models\estudiante::create(['ci'=>'11414515682',	'apellido'=>'ANGARITA GOMEZ',		'nombre'=> 'SOLANGEL DEL VALLE',	'fechaNacimiento'=>'2016-09-08', 'sexo'=> 'F']);
		App\Models\estudiante::create(['ci'=>'1141706738',	'apellido'=>'AZUAJE SOTILLO',		'nombre'=> 'AUGUSTO GABRIEL',		'fechaNacimiento'=>'2014-06-27', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'1141650270',	'apellido'=>'PRIETO FERNANDEZ',		'nombre'=> 'LUCIA DE JESUS ',		'fechaNacimiento'=>'2014-11-18', 'sexo'=> 'F']);
		App\Models\estudiante::create(['ci'=>'1141346877',	'apellido'=>'ALVAREZ BARRETO',		'nombre'=> 'JUAN DAVID',			'fechaNacimiento'=>'2014-09-04', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'1141508799',	'apellido'=>'CEBALLOS PEÑA',		'nombre'=> 'MIGUEL ALEJANDRO',		'fechaNacimiento'=>'2014-04-28', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'1141489495',	'apellido'=>'CLAMENS RODRIGUEZ',	'nombre'=> 'HECTOR EDUARDO',		'fechaNacimiento'=>'2014-12-03', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'11414999173',	'apellido'=>'CONTRERAS RIVERO',		'nombre'=> 'DIEGO ANDRES',			'fechaNacimiento'=>'2016-07-12', 'sexo'=> 'M']);		
		App\Models\estudiante::create(['ci'=>'1141406905',	'apellido'=>'DIAZ BASTIDAS',		'nombre'=> 'LUIS MANUEL',			'fechaNacimiento'=>'2014-07-14', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'1141736748',	'apellido'=>'GIL RAMIREZ',			'nombre'=> 'SEBASTIAN ANDRES',		'fechaNacimiento'=>'2014-08-02', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'11515185877',	'apellido'=>'GUERRA OLIVO',			'nombre'=> 'PILAR VALENTINA',		'fechaNacimiento'=>'2015-11-17', 'sexo'=> 'F']);
		App\Models\estudiante::create(['ci'=>'11412521186',	'apellido'=>'GUTIERREZ GUDIÑO',		'nombre'=> 'VERONICA DEL VALLE',	'fechaNacimiento'=>'2014-09-10', 'sexo'=> 'F']);
		App\Models\estudiante::create(['ci'=>'11418060166',	'apellido'=>'MARIN LAMEDA',			'nombre'=> 'JUAN PABLO',			'fechaNacimiento'=>'2014-08-25', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'1142102922',	'apellido'=>' MEJIA OSPINO',		'nombre'=> 'JUAN ANDRES',			'fechaNacimiento'=>'2014-11-05', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'11421217277',	'apellido'=>'MOLINA JORDAN',		'nombre'=> 'MOISES DAVID',			'fechaNacimiento'=>'2014-11-05', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'1142446546',	'apellido'=>' MONTILLA SIMANCAS',	'nombre'=> 'IVANNA',				'fechaNacimiento'=>'2014-06-04', 'sexo'=> 'F']);
		App\Models\estudiante::create(['ci'=>'1141562956',	'apellido'=>' MORA PERNIA',			'nombre'=> 'LEOPOLDO JOSE',			'fechaNacimiento'=>'2014-10-22', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'1141874844',	'apellido'=>' NAREA VILLALBA',		'nombre'=> 'VALERY ELIZABETH',		'fechaNacimiento'=>'2014-08-01', 'sexo'=> 'F']);
		App\Models\estudiante::create(['ci'=>'1141862774',	'apellido'=>' NIETO VELIZ',			'nombre'=> 'NATALIA SOFIA',			'fechaNacimiento'=>'2014-08-03', 'sexo'=> 'F']);
		App\Models\estudiante::create(['ci'=>'11418410222',	'apellido'=>'PARRA OQUENDO',		'nombre'=> 'LUIS ARMANDO',			'fechaNacimiento'=>'2014-07-16', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'11415900810',	'apellido'=>'PEREZ PARACARE',		'nombre'=> 'DANIELA ISABELLA',		'fechaNacimiento'=>'2014-10-15', 'sexo'=> 'F']);
		App\Models\estudiante::create(['ci'=>'11412897169',	'apellido'=>'RADULOVIC SEIJAS',		'nombre'=> 'BORIS ZELJKO',			'fechaNacimiento'=>'2014-10-23', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'1141375437',	'apellido'=>' RIVERO PEREZ',		'nombre'=> 'ABRAHAM ALEJANDRO',		'fechaNacimiento'=>'2014-09-15', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'11417172272',	'apellido'=>'SIERRA OBERTO',		'nombre'=> 'LUIS ALFONSO',			'fechaNacimiento'=>'2014-08-07', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'11416801427',	'apellido'=>'VARGAS CUICAR',		'nombre'=> 'PABLO MANUEL',			'fechaNacimiento'=>'2014-06-24', 'sexo'=> 'M']);
		App\Models\estudiante::create(['ci'=>'11415901711',	'apellido'=>'VERA PAZ',				'nombre'=> 'CAMILA JOSE',			'fechaNacimiento'=>'2014-12-08', 'sexo'=> 'F']);
		App\Models\estudiante::create(['ci'=>'11421484931',	'apellido'=>'VIVAS NIÑO',			'nombre'=> 'ROSALIA CECILIA',		'fechaNacimiento'=>'2014-09-01', 'sexo'=> 'F']);

		//MATERNAL II
		App\Models\estudiante::create(['ci'=>'1141429286',  'apellido'=>'BARRIOS LINAREZ', 'nombre'=>'ABEL', 'fechaNacimiento'=>'2014-03-23',  'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11416241969', 'apellido'=>'CALDERA NOGUERA', 'nombre'=>'MARIA VALENTINA',     'fechaNacimiento'=>'2014-02-25',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11419021522', 'apellido'=>'CARPIO CASADIEGO', 'nombre'=>'VALERIE SOPHIA',     'fechaNacimiento'=>'2014-03-22',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'2141508799',  'apellido'=>'CEBALLOS PEÑA', 'nombre'=>'CRISTIAN ALEJANDRO',    'fechaNacimiento'=>'2014-04-28',  'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11414078118', 'apellido'=>'CHAVEZ VALLES', 'nombre'=>'RAINIER MATHIAS',   'fechaNacimiento'=>'2014-01-28',  'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131952450',  'apellido'=>'ESCALONA TERÁN', 'nombre'=>'ROMINA SOFIA',     'fechaNacimiento'=>'2013-12-31',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1141728247',  'apellido'=>'GONZALEZ GARCES', 'nombre'=>'ANGELA VIOLETTA',     'fechaNacimiento'=>'2014-03-19',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11414085170', 'apellido'=>'HERNANDEZ SCHAVER', 'nombre'=>'ALEJANDRO', 'fechaNacimiento'=>'2014-02-19',  'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11419642916', 'apellido'=>'MONTILLA CACERES', 'nombre'=>'LUZ ELENA',  'fechaNacimiento'=>'2014-05-07',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1141645425',  'apellido'=>'MORA PINTO', 'nombre'=>'GENESIS RORAIMA',  'fechaNacimiento'=>'2014-01-11',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11421028713', 'apellido'=>'MORENO LUJANO', 'nombre'=>'ALFONSO DAVID',     'fechaNacimiento'=>'2014-02-03',  'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1141784300',  'apellido'=>'NOGUERA COLMENARES', 'nombre'=>'LUCIANA',     'fechaNacimiento'=>'2014-01-27',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11425779119', 'apellido'=>'OJEDA MIRANDA', 'nombre'=>'KAMILA VICTORIA',   'fechaNacimiento'=>'2014-06-19',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1142220935',  'apellido'=>'OQUENDO CHIRINO', 'nombre'=>'BARBARA NICOLL',  'fechaNacimiento'=>'2014-04-09',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131396873',  'apellido'=>'PEÑALOZA TRUJILLO', 'nombre'=>'JOSUE DAVID',   'fechaNacimiento'=>'2013-12-07',  'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1142016359',  'apellido'=>'PERAZA ALIENDRES', 'nombre'=>'IKER ERNESTO',   'fechaNacimiento'=>'2014-01-11',  'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1142089730',  'apellido'=>'PÉREZ MOSQUEDA', 'nombre'=>'VALERIA RITZABETH',    'fechaNacimiento'=>'2014-03-03',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11414463071', 'apellido'=>'PINTO COLINA', 'nombre'=>'KEVIN ALEXANDER',    'fechaNacimiento'=>'2014-05-06',  'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11416424185', 'apellido'=>'REYES NAVAS', 'nombre'=>'CAMILA VALENTINA',    'fechaNacimiento'=>'2014-01-31',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11417575510', 'apellido'=>'REYES TOVAR', 'nombre'=>'IRINA SOFIA',     'fechaNacimiento'=>'2014-02-27',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1141487047',  'apellido'=>'SALAZAR GALLARDO', 'nombre'=>'ADRIANA SOFIA',  'fechaNacimiento'=>'2014-02-10',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11314573186', 'apellido'=>'SEQUERA ESCOBAR', 'nombre'=>'ESTER SOFÍA',     'fechaNacimiento'=>'2013-12-01',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131499956',  'apellido'=>'SIERRA DÍAZ', 'nombre'=>'LAURA GABRIELA',  'fechaNacimiento'=>'2013-12-29',  'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11411752730', 'apellido'=>'TURIPE GARCIA', 'nombre'=>'ANDRÉS ISAAC',  'fechaNacimiento'=>'2014-03-27',  'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1141900092',  'apellido'=>'VALERO MONTERO', 'nombre'=>'IVANNA ANDREINA',  'fechaNacimiento'=>'2014-05-17',  'sexo'=>'F']);

		//MATERNAL III
		App\Models\estudiante::create(['ci'=>'11310265011',	 'apellido'=>'ASCANIO PEREZ',			'nombre'=>'MARIA ALEJANDRA',	'fechaNacimiento'=>'2013-10-18', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131689708',	 'apellido'=>'BARRIOS JARAMILLO',		'nombre'=>'MILAN CRISTIANO',	'fechaNacimiento'=>'2013-12-21', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1132259977',	 'apellido'=>'BLANCO GARCIA',			'nombre'=>'CHANTAL JULIETT',	'fechaNacimiento'=>'2013-11-08', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1132241082',	 'apellido'=>'CASADIEGO VALLADARES',	'nombre'=>'JIMENA', 			'fechaNacimiento'=>'2013-11-06', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11317316817',	 'apellido'=>'COX FLORES',				'nombre'=>'ALEXANDER DAVID', 	'fechaNacimiento'=>'2013-10-17', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11320315153',	 'apellido'=>'GONZALEZ MACHADO',		'nombre'=>'MATÍAS', 			'fechaNacimiento'=>'2013-08-06', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11315185877',	 'apellido'=>'GUERRA OLIVO',			'nombre'=>'JOAQUIN IGNACIO',   	'fechaNacimiento'=>'2013-10-02', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11315398167',	 'apellido'=>'HEREDIA CASADIEGO',		'nombre'=>'NICOLLE', 			'fechaNacimiento'=>'2013-10-11', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1132221668',	 'apellido'=>'HERNANDEZ LINARES',		'nombre'=>'NICANOR ANDRES',		'fechaNacimiento'=>'2013-12-11', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11317990015',	 'apellido'=>'JUAREZ HERNANDEZ',		'nombre'=>'JUAN DIEGO',			'fechaNacimiento'=>'2013-07-07', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131658074',	 'apellido'=>'LÓPEZ OLIVERO',			'nombre'=>'VALERIA DENISE', 	'fechaNacimiento'=>'2013-10-28', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131388928',	 'apellido'=>'MOLINA ROMERO',			'nombre'=>'MARIA ROSALIA',  	'fechaNacimiento'=>'2013-09-09', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1132240360',	 'apellido'=>'MONTOYA RUIZ',			'nombre'=>'SUSEJ ANTONELLA',	'fechaNacimiento'=>'2013-10-03', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131586098',	 'apellido'=>'MORALES NATERA',			'nombre'=>'LUCIA ESPERANZA',	'fechaNacimiento'=>'2013-06-15', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131677358',	 'apellido'=>'NUÑEZ DOGLIA',			'nombre'=>'JULIETT ANTHONELLY', 'fechaNacimiento'=>'2013-12-11', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131407988',	 'apellido'=>'NUÑEZ PEREZ',				'nombre'=>'SOFIA ALEJANDRA',    'fechaNacimiento'=>'2013-07-30', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131678423',	 'apellido'=>'ORTIZ BERROETA',			'nombre'=>'DENZEL ABEL',		'fechaNacimiento'=>'2013-11-02', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131640645',	 'apellido'=>'PEREIRA LANDAETA',		'nombre'=>'LUCIANO EDUARDO',	'fechaNacimiento'=>'2013-09-11', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131677273',	 'apellido'=>'RAMOS PAREDES',			'nombre'=>'LEONARDO ANDRÉS', 	'fechaNacimiento'=>'2013-08-16', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11311348071',	 'apellido'=>'RIOS SAMBRANO',			'nombre'=>'EZEQUIEL ALEJANDRO', 'fechaNacimiento'=>'2013-10-23', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11320314127',	 'apellido'=>'RODRIGUEZ LUCIANO',		'nombre'=>'MATHIAS', 			'fechaNacimiento'=>'2013-11-03', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11411361012',	 'apellido'=>'ROMO MARTINEZ',			'nombre'=>'FABIAN DAVID',		'fechaNacimiento'=>'2014-03-23', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11315861507',	 'apellido'=>'SALAZAR PINTO',			'nombre'=>'JOSE ALEJANDRO',		'fechaNacimiento'=>'2013-07-03', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1141380935',	 'apellido'=>'SANCHEZ MATHEUS',			'nombre'=>'CAMILA ALEJANDRA',   'fechaNacimiento'=>'2016-01-23', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11316185222',	 'apellido'=>'SANCHEZ ORTIZ',			'nombre'=>'JOSE MIGUEL',		'fechaNacimiento'=>'2014-06-16', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11316581615',	 'apellido'=>'SOTO HENRIQUEZ',			'nombre'=>'VIKTORIA ALEJANDRA', 'fechaNacimiento'=>'2013-11-18', 'sexo'=>'F']);

		//MATERNAL Iv
		App\Models\estudiante::create(['ci'=>'11315731433',	'apellido'=>'ALVARENGA SOTO','nombre'=>'HANNA ISABELLA',		'fechaNacimiento'=>'2013-02-15', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11314571409',	'apellido'=>'AQUINO ESPINOZA','nombre'=>'JESUS DAVID',			'fechaNacimiento'=>'2013-06-05', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131759277',	'apellido'=>'BARROYETA TOVAR','nombre'=>'ELIEZER DAVID',		'fechaNacimiento'=>'2013-02-20', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131545542',	'apellido'=>'BRICEÑO RODRIGUEZ','nombre'=>'ANTONIO JOSE',		'fechaNacimiento'=>'2013-07-23', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11316399318',	'apellido'=>'CHIRINO BOADA','nombre'=>'CLARA VALENTINA',		'fechaNacimiento'=>'2013-02-06', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131624247',	'apellido'=>'COLOMBET PARIATA','nombre'=>'PABLO MIGUEL',		'fechaNacimiento'=>'2013-06-19', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11318166727',	'apellido'=>'CONTRERAS DIAZ','nombre'=>'SOFIA ISABELLA',		'fechaNacimiento'=>'2013-05-24', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131626568',	'apellido'=>'DE MATTEIS', 'nombre'=>'HERNANDEZ, FIORELLA',		'fechaNacimiento'=>'2013-04-12', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131586070',	'apellido'=>'ELEJALDE CASTRO', 'nombre'=>'SANTIAGO LIONEL',		'fechaNacimiento'=>'2013-06-04', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131687476',	'apellido'=>'FERNANDEZ GOMEZ', 'nombre'=>'DIEGO ARMANDO',		'fechaNacimiento'=>'2013-01-15', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131278493',	'apellido'=>'GARCIA DUQUE', 'nombre'=>'DAVID NAZARETH',			'fechaNacimiento'=>'2013-07-29', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131739900',	'apellido'=>'HERNANDEZ ENDARA', 'nombre'=>'ANGEL ANDRES',		'fechaNacimiento'=>'2013-05-25', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11318653130',	'apellido'=>'JARAMILLO LIMA', 'nombre'=>'JOSE AGUSTIN',			'fechaNacimiento'=>'2013-04-15', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131678557',	'apellido'=>'LOPEZ ALVAREZ', 'nombre'=>'DANNA FRANCESCA',		'fechaNacimiento'=>'2013-07-02', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1132016474',	'apellido'=>'LOPEZ HEREIRA', 'nombre'=>'ISAAC ABRAHAM',			'fechaNacimiento'=>'2014-06-04', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131565308',	'apellido'=>'MANZANILLA DIAZ', 'nombre'=>'VALENTINA',			'fechaNacimiento'=>'2013-05-01', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11317399812',	'apellido'=>'MARQUEZ PEREZ', 'nombre'=>'ARLOS MAURICIO',		'fechaNacimiento'=>'2013-02-19', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11311879214',	'apellido'=>'PAEZ HURTADO', 'nombre'=>'IERINA MIRANDA',			'fechaNacimiento'=>'2016-09-30', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131690493',	'apellido'=>'PEREIRA OLIVARES', 'nombre'=>'VERONICA ALEJANDRA',	'fechaNacimiento'=>'2013-06-18', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131292492',	'apellido'=>'RIVERO GONZALEZ', 'nombre'=>'VERONICA CAROLINA',	'fechaNacimiento'=>'2013-06-19', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131366788',	'apellido'=>'ROJAS MONSALVE', 'nombre'=>'FABIAN LEONALDO',		'fechaNacimiento'=>'2013-07-26', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131202968',	'apellido'=>'RUBERTIELLO QUIROGA', 'nombre'=>'ANTONELLA',		'fechaNacimiento'=>'2013-06-20', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131027459',	'apellido'=>'TORRES TORO', 'nombre'=>'ISAIAS JOSE',				'fechaNacimiento'=>'2013-06-06', 'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131687480',	'apellido'=>'TOVAR FUENTES', 'nombre'=>'ANIER ANIRUZ',			'fechaNacimiento'=>'2013-04-13', 'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1132241069',	'apellido'=>'VILLALOBOS LEON', 'nombre'=>'SCARLETT ANTONELLA',	'fechaNacimiento'=>'2013-05-17', 'sexo'=>'F']);

		//PREESCOLAR I
		App\Models\estudiante::create(['ci'=>'1121709505',	'apellido'=>'ALVAREZ PEÑA', 'nombre'=>'HILARY JHILMARA', 			'fechaNacimiento'=>'2012-09-15',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121560877',	'apellido'=>'BARRIOS ARCAY', 'nombre'=>'PAOLA ESTEFANIA', 			'fechaNacimiento'=>'2012-10-30',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131388990',	'apellido'=>'DIAZ FLORES', 'nombre'=>'ALEJANDRO JOSE', 				'fechaNacimiento'=>'2013-02-07',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11213852159',	'apellido'=>'GARCES UZCATEGUI', 'nombre'=>'LUIS EDUARDO', 			'fechaNacimiento'=>'2012-09-11',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11219589881',	'apellido'=>'GORDILLO CORONADO', 'nombre'=>'SOPHIA ISABEL', 		'fechaNacimiento'=>'2012-11-03',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1131439392',	'apellido'=>'GUEVARA SIERRA', 'nombre'=>'JUAN DIEGO', 				'fechaNacimiento'=>'2013-01-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11215446741',	'apellido'=>'GUILLEN CASTRO', 'nombre'=>'HEISSLER MIGUEL', 			'fechaNacimiento'=>'2012-10-26',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11217172986',	'apellido'=>'HENRÍQUEZ MORENO', 'nombre'=>'GENESIS', 				'fechaNacimiento'=>'2012-08-23',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121530068',	'apellido'=>'HERNANDEZ ORTUNIO', 'nombre'=>'FABIANA', 				'fechaNacimiento'=>'2012-08-24',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121626825',	'apellido'=>'JASPE TOVAR', 'nombre'=>'ELIANA ALEXANDRA', 			'fechaNacimiento'=>'2012-08-13',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11319481714',	'apellido'=>'LUY SANCHEZ', 'nombre'=>'SOFIA DEL CARMEN', 			'fechaNacimiento'=>'2013-01-04',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121706538',	'apellido'=>'MENDOZA DOMINGUEZ', 'nombre'=>'AILYN VALERIA', 		'fechaNacimiento'=>'2013-06-26',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121937452',	'apellido'=>'MORALES DIAZ', 'nombre'=>'MILENA PATRICIA', 			'fechaNacimiento'=>'2012-08-01',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121908256',	'apellido'=>'PEÑA CERMEÑO', 'nombre'=>'MOISES ALEXANDER', 			'fechaNacimiento'=>'2012-12-23',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131398786',	'apellido'=>'PEREZ DUNO', 'nombre'=>'JOSE GUILLERMO', 				'fechaNacimiento'=>'2013-06-17',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131549493',	'apellido'=>'PIMENTEL RODRIGUEZ', 'nombre'=>'CAMILO MATIAS', 		'fechaNacimiento'=>'2013-02-26',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121806055',	'apellido'=>'PULGAR CHAVEZ', 'nombre'=>'JUAN DAVID', 				'fechaNacimiento'=>'2012-07-12',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1131475452',	'apellido'=>'RIOS GALLEGO', 'nombre'=>'LUIS MANUEL', 				'fechaNacimiento'=>'2013-02-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121500784',	'apellido'=>'RIVAS CORONADO', 'nombre'=>'DIEGO ERNESTO', 			'fechaNacimiento'=>'2012-08-30',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1122038476',	'apellido'=>'RODRIGUEZ ORTEGA', 'nombre'=>'MAURICIO ALEJANDRO', 	'fechaNacimiento'=>'2012-11-01',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11220718148',	'apellido'=>'ROMERO TORRES', 'nombre'=>'SAMUEL ALEJANDRO', 			'fechaNacimiento'=>'2012-11-17',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1122140582',	'apellido'=>'SERRANO NUÑEZ', 'nombre'=>'CESAR ABRAHAM', 			'fechaNacimiento'=>'2012-10-26',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121462535',	'apellido'=>'SILVA HERNANDEZ', 'nombre'=>'NAHOMY DANIELA', 			'fechaNacimiento'=>'2012-10-25',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11220786110',	'apellido'=>'SUAREZ PEREZ', 'nombre'=>'HECMARY VALENTINA', 			'fechaNacimiento'=>'2012-10-30',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1132274277',	'apellido'=>'URPIN PEREZ', 'nombre'=>'JULIETA ELIE', 				'fechaNacimiento'=>'2013-01-21',	'sexo'=>'F']);

		//PREESCOLAR II
		App\Models\estudiante::create(['ci'=>'11219059311',	'apellido'=>'ARVELAEZ GOITIA',		'nombre'=>'CAMILA VICTORIA',	'fechaNacimiento'=>'2012-05-15',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121429286',	'apellido'=>'BARRIOS LINAREZ',		'nombre'=>'JOSE DAVID',			'fechaNacimiento'=>'2012-04-01',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121689549',	'apellido'=>'CARDOZO FERNANDEZ',	'nombre'=>'DIEGO ANDRES',		'fechaNacimiento'=>'2012-03-06',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11213313018',	'apellido'=>'COLMENARES RODRIGUEZ',	'nombre'=>'LUIS ENRIQUE',		'fechaNacimiento'=>'2012-05-31',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11211695360',	'apellido'=>'GONZALEZ CARRASCO',	'nombre'=>'LEONARDO ANDRES',	'fechaNacimiento'=>'2012-01-27',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11114085170',	'apellido'=>'HERNANDEZ SCHAVER',	'nombre'=>'ALEJANDRA',			'fechaNacimiento'=>'2011-12-15',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1122062572',	'apellido'=>'JIMENEZ PERDOMO',		'nombre'=>'IRIS ANTHONELLA',	'fechaNacimiento'=>'2012-10-10',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121550644',	'apellido'=>'LAMAS PACHECO',		'nombre'=>'JESUS LEANDRO',		'fechaNacimiento'=>'2012-07-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121560606',	'apellido'=>'LEAÑEZ DELPINO',		'nombre'=>'ANGELA GABRIELA',	'fechaNacimiento'=>'2012-03-26',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121768979',	'apellido'=>'MORANDY HIDALGO',		'nombre'=>'ROMAN ERNESTO',		'fechaNacimiento'=>'2012-10-31',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121862827',	'apellido'=>'MOREDA VELEZ',			'nombre'=>'FABIAN',				'fechaNacimiento'=>'2012-01-20',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121396873',	'apellido'=>'PEÑALOZA TRUJILLO',	'nombre'=>'ROSELVID VICTORIA',	'fechaNacimiento'=>'2012-07-14',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11218957106',	'apellido'=>'PEREZ BOLIVAR',		'nombre'=>'DIEGO JESUS',		'fechaNacimiento'=>'2012-12-27',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11214625321',	'apellido'=>'PEREZ HERRERA',		'nombre'=>'ELIAS JOSE',			'fechaNacimiento'=>'2012-02-18',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11222411243',	'apellido'=>'PEREZ PACHECO',		'nombre'=>'GEREMI ALBERTO',		'fechaNacimiento'=>'2012-04-12',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11218156473',	'apellido'=>'RODRIGUEZ LUGO',		'nombre'=>'NAIBER FERNANDA',	'fechaNacimiento'=>'2012-01-01',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121398732',	'apellido'=>'RODRIGUEZ TOYO',		'nombre'=>'VICTORIA CAMILA',	'fechaNacimiento'=>'2012-03-15',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121203470',	'apellido'=>'RONDON PEREZ',			'nombre'=>'SOFIA ALEJANDRA',	'fechaNacimiento'=>'2012-04-27',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11211278358',	'apellido'=>'SARCOS VASQUEZ',		'nombre'=>'FABIAN ALBERTO',		'fechaNacimiento'=>'2012-02-09',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121606020',	'apellido'=>'SEVILLA PÉREZ',		'nombre'=>'ELINA DE JESÚS',		'fechaNacimiento'=>'2012-04-30',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121702440',	'apellido'=>'SOLER MARTUSCELLI',	'nombre'=>'ALESSANDRA',			'fechaNacimiento'=>'2012-04-10',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1121728306',	'apellido'=>'TENORIO ROMERO',		'nombre'=>'SEBASTIAN ALBERTO',	'fechaNacimiento'=>'2012-01-17',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121492405',	'apellido'=>'TORRES MOYA',			'nombre'=>'DANIELA PAOLA',		'fechaNacimiento'=>'2012-01-13',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1122069751',	'apellido'=>'VARGAS GARCIA',		'nombre'=>'DARIANA CAMILA',		'fechaNacimiento'=>'2012-12-20',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11217449931',	'apellido'=>'MORALES MARTINEZ',		'nombre'=>'JESUS ALEJANDRO',	'fechaNacimiento'=>'2012-06-13',	'sexo'=>'M']);

		//PREESCOLAR III
		App\Models\estudiante::create(['ci'=>'11112337597', 'apellido'=>'ALVARADO CAMPOS', 'nombre'=>'CAMILA CLARET', 		'fechaNacimiento'=>'2011-07-29',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11112610230', 'apellido'=>'ARRAEZ MARTINEZ', 'nombre'=>'ANDRIUS ARGENIS', 	'fechaNacimiento'=>'2011-09-26',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11115485705', 'apellido'=>'CARMONA SANCHEZ', 'nombre'=>'AARON JOSUE', 		'fechaNacimiento'=>'2011-10-16',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11115087999', 'apellido'=>'CEBALLOS PEÑA', 'nombre'=>'SIARA NAHELYS', 		'fechaNacimiento'=>'2011-07-06',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11116399318', 'apellido'=>'CHIRINO BOADA', 'nombre'=>'ROSAIRYS LUCIA', 		'fechaNacimiento'=>'2011-09-02',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11120144226', 'apellido'=>'DIAZ ULLOA', 'nombre'=>'SEANERY ISABELLA', 		'fechaNacimiento'=>'2011-10-09',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11111685850', 'apellido'=>'ESPINOLA YOUNES', 'nombre'=>'YOUSSEF ANTONIO', 	'fechaNacimiento'=>'2011-08-09',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11119507298', 'apellido'=>'GAMBOA PULIDO', 'nombre'=>'MARIOSCAR ANDREA', 		'fechaNacimiento'=>'2011-08-10',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11114161092', 'apellido'=>'GARBAN BOLIVAR', 'nombre'=>'CAMILO MOISES DE', 	'fechaNacimiento'=>'2011-10-20',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11112521186', 'apellido'=>'GUTIERREZ GUDIÑO', 'nombre'=>'HELENA DEL VALLE', 	'fechaNacimiento'=>'2011-07-10',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11110144012', 'apellido'=>'HERNANDEZ BIGOTT', 'nombre'=>'LUIS ALEJANDRO', 	'fechaNacimiento'=>'2011-10-01',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11114384696', 'apellido'=>'HERNANDEZ SANCHEZ', 'nombre'=>'SOPHIA VALENTINA',	'fechaNacimiento'=>'2011-09-26',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11116580740', 'apellido'=>'LÓPEZ OLIVERO', 'nombre'=>'ADRIAN ERNESTO', 		'fechaNacimiento'=>'2011-09-29',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11113047310', 'apellido'=>'MATOS ESCOBAR', 'nombre'=>'DARYL GABRIELLA', 		'fechaNacimiento'=>'2011-10-21',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11121214103', 'apellido'=>'MOLINA NUÑEZ', 'nombre'=>'SAMANTHA DANIELA', 		'fechaNacimiento'=>'2013-11-01',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11116580538', 'apellido'=>'MORENO TORREALBA', 'nombre'=>'SEBASTIAN JOSE', 	'fechaNacimiento'=>'2011-12-29',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11119109638', 'apellido'=>'MUCHACHO CESARONI', 'nombre'=>'CARLA NAOMI', 		'fechaNacimiento'=>'2011-06-22',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11221154269', 'apellido'=>'NATERA RAMIREZ', 'nombre'=>'SANTIAGO DAVID', 		'fechaNacimiento'=>'2012-03-02',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11116269715', 'apellido'=>'OLIVEROS JIMENEZ', 'nombre'=>'MAURICIO ANDRES', 	'fechaNacimiento'=>'2016-11-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11117072067', 'apellido'=>'PAREDES ALONSO', 'nombre'=>'LOUIS ISAAC', 			'fechaNacimiento'=>'2011-08-05',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11112430923', 'apellido'=>'PEREZ SANCHEZ', 'nombre'=>'DAVID FERNANDO', 		'fechaNacimiento'=>'2011-05-22',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1121236235', 'apellido'=>'PINEDO LEDEZMA', 'nombre'=>'JUAN MARCOS', 			'fechaNacimiento'=>'2016-10-13',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11112897169', 'apellido'=>'RADULOVIC SEIJAS', 'nombre'=>'BORIS ALEKSANDAR', 	'fechaNacimiento'=>'2011-10-10',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11114501368', 'apellido'=>'RIVERA GUDIÑO', 'nombre'=>'JOSE ANTONIO', 			'fechaNacimiento'=>'2011-08-13',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11112924920', 'apellido'=>'RIVERO GONZALEZ', 'nombre'=>'VICTORIA VALENTINA',	'fechaNacimiento'=>'2011-08-03',	'sexo'=>'F']);

		//PREESCOLAR Iv
		App\Models\estudiante::create(['ci'=>'11110234432', 'apellido'=>'AGRINZONE BERMUDEZ', 'nombre'=>'JOSE ANTONIO', 	'fechaNacimiento'=>'2011-04-28',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11116050991', 'apellido'=>'ALVAREZ LUGO', 'nombre'=>'ENMANUEL DARIO', 		'fechaNacimiento'=>'2011-05-05',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11107126924', 'apellido'=>'ARIAS ALVAREZ', 'nombre'=>'RAFAEL ANDRES', 		'fechaNacimiento'=>'2011-10-24',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1112498724', 'apellido'=>'BENITEZ MEJIA', 'nombre'=>'BARBARA NICOL', 			'fechaNacimiento'=>'2011-04-15',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1101202954', 'apellido'=>'CASTILLO TOVAR', 'nombre'=>'VICTORIA DANIELA', 		'fechaNacimiento'=>'2010-12-15',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11116581396', 'apellido'=>'DIAZ FERNANDEZ', 'nombre'=>'SAMUEL DAVID', 		'fechaNacimiento'=>'2011-06-03',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11115614136', 'apellido'=>'DORANTE DIAZ', 'nombre'=>'BARBARA EUDELISMAR', 	'fechaNacimiento'=>'2011-07-07',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11118254640', 'apellido'=>'GARCIA PALENCIA', 'nombre'=>'ALEJANDRA SOFIA', 	'fechaNacimiento'=>'2011-07-17',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11113047819', 'apellido'=>'GOMEZ DORIA', 'nombre'=>'SANTIAGO ANDRES', 		'fechaNacimiento'=>'2011-06-20',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1112002937', 'apellido'=>'GUERRERO LESMES', 'nombre'=>'DYLAN SANTIAGO', 		'fechaNacimiento'=>'2011-04-01',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11113874183', 'apellido'=>'HERNÁNDEZ GALLARDO', 'nombre'=>'MARIA FERNANDA', 	'fechaNacimiento'=>'2011-05-12',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11212031292', 'apellido'=>'LUCENA VARGAS', 'nombre'=>'XIOMARA ALEJANDRA', 	'fechaNacimiento'=>'2012-05-17',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11115258839', 'apellido'=>'MORON DIAZ', 'nombre'=>'GABRIEL ANDRES', 			'fechaNacimiento'=>'2011-03-21',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'10911879214', 'apellido'=>'PAEZ HURTADO', 'nombre'=>'TONY LEONARDO', 			'fechaNacimiento'=>'2009-08-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11118410222', 'apellido'=>'PARRA OQUENDO', 'nombre'=>'JORGE ARMANDO', 		'fechaNacimiento'=>'2011-03-13',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11112402873', 'apellido'=>'POMBO PACHECO', 'nombre'=>'JOSE MANUEL', 			'fechaNacimiento'=>'2011-05-13',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11110691062', 'apellido'=>'RAMIREZ TORRES', 'nombre'=>'ILIANA VALERIA', 		'fechaNacimiento'=>'2011-02-16',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11118629385', 'apellido'=>'RODRIGUEZ MARTINEZ', 'nombre'=>'JAEL ANDREA', 		'fechaNacimiento'=>'2011-01-20',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11114870477', 'apellido'=>'SALAZAR GALLARDO', 'nombre'=>'PABLO DAVID', 		'fechaNacimiento'=>'2011-02-24',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11114304920', 'apellido'=>'SEQUERA CARIEL', 'nombre'=>'DIEGO ANDRÉS', 		'fechaNacimiento'=>'2011-03-18',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11114999565', 'apellido'=>'SIERRA DIAZ', 'nombre'=>'SEBASTIAN ANDRES', 		'fechaNacimiento'=>'2011-07-26',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11114336471', 'apellido'=>'STORACI GARRIDO', 'nombre'=>'AMANDA VALENTINA', 	'fechaNacimiento'=>'2011-03-29',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1102069751', 'apellido'=>'VARGAS GARCIA', 'nombre'=>'DAVIER ALEJANDRO', 		'fechaNacimiento'=>'2010-12-20',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11112854131', 'apellido'=>'VASQUEZ MUÑOZ', 'nombre'=>'CAMILA ALEXANDRA', 		'fechaNacimiento'=>'2011-04-22',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11111963034', 'apellido'=>'ZAMBRANO AGUILAR', 'nombre'=>'IRENSMAR DEL', 		'fechaNacimiento'=>'2011-01-28',	'sexo'=>'F']);

		//PRIMERO A
		App\Models\estudiante::create(['ci'=>'1101574623', 'apellido'=>'COLMENARES TORIN', 'nombre'=>'CAMILA VALENTINA',	'fechaNacimiento'=>'2010-07-27',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1102251958', 'apellido'=>'COLON DI BIASE', 'nombre'=>'ANYELINA LUISETH',		'fechaNacimiento'=>'2010-07-10',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1101438208', 'apellido'=>'HENRIQUEZ NIETO', 'nombre'=>'JAVIER ALEJANDRO',		'fechaNacimiento'=>'2010-10-23',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091387418', 'apellido'=>'HERNÁNDEZ GALLARDO', 'nombre'=>'MANUEL FELIPE',		'fechaNacimiento'=>'2009-08-11',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11015363124', 'apellido'=>'HERRERA LASABALLETT', 'nombre'=>'VALENTINA DEL',	'fechaNacimiento'=>'2010-05-22',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1101846857', 'apellido'=>'HERRERA SANCHEZ', 'nombre'=>'CAMILA FERNANDA',		'fechaNacimiento'=>'2010-07-10',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1101565308', 'apellido'=>'IBARRA DIAZ', 'nombre'=>'CESAR ALEJANDRO',			'fechaNacimiento'=>'2010-05-10',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11017314067', 'apellido'=>'LAMAS ALCALA', 'nombre'=>'PEDRO ANDRES',			'fechaNacimiento'=>'2010-09-17',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091784332', 'apellido'=>'LINARES FRANCO', 'nombre'=>'SANTIAGO ALFONZO',		'fechaNacimiento'=>'2009-12-10',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11019481714', 'apellido'=>'LUY SANCHEZ', 'nombre'=>'AUGUSTO SANDINO',			'fechaNacimiento'=>'2010-07-30',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11018264861', 'apellido'=>'MARTINEZ', 'nombre'=>'NOHEMI EGLEIDYS',			'fechaNacimiento'=>'2010-04-26',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11011100235', 'apellido'=>'MELIAN GONZALEZ', 'nombre'=>'STEFANIA ISABEL',		'fechaNacimiento'=>'2010-10-04',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1109665700', 'apellido'=>'MENDOZA AGUIRRE', 'nombre'=>'CAMILA ELENA',			'fechaNacimiento'=>'2010-03-18',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1101624352', 'apellido'=>'NUÑEZ BLANCO', 'nombre'=>'CAMILA ALEJANDRA',		'fechaNacimiento'=>'2010-11-07',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1101574552', 'apellido'=>'PARAO USECHE', 'nombre'=>'ISAAC ISMAEL',			'fechaNacimiento'=>'2010-06-11',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'2101277331', 'apellido'=>'PEREIRA SUMOZA', 'nombre'=>'SANTIAGO JOSE',			'fechaNacimiento'=>'2010-10-22',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1101806055', 'apellido'=>'PULGAR CHAVEZ', 'nombre'=>'JUAN SEBASTIAN',			'fechaNacimiento'=>'2010-06-30',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11014819843', 'apellido'=>'RAMIREZ GONZALEZ', 'nombre'=>'ISABELLA SOFIA',		'fechaNacimiento'=>'2010-06-04',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1101462535', 'apellido'=>'SILVA HERNANDEZ', 'nombre'=>'ANTHONY JESUS',		'fechaNacimiento'=>'2010-01-07',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11011752730', 'apellido'=>'TURIPE GARCIA', 'nombre'=>'SARAH VICTORIA',		'fechaNacimiento'=>'2010-12-16',	'sexo'=>'F']);

		//PRIMERO B
		App\Models\estudiante::create(['ci'=>'1091430547',  'apellido'=>'ALFONZO CARRUYO', 'nombre'=>'HORACIO ALEJANDRO',	'fechaNacimiento'=>'2009-05-15',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11014893184', 'apellido'=>'BARCASNEGRAS CASTILLO', 'nombre'=>'JESUS RAFAEL',	'fechaNacimiento'=>'2010-02-07',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1100882845', 'apellido'=>'BRITO SATURNO', 'nombre'=>'ANGELINA',				'fechaNacimiento'=>'2010-06-05',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11012724165', 'apellido'=>'CAYAMA PIÑA', 'nombre'=>'JOSE ANTONIO',			'fechaNacimiento'=>'2010-01-15',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1101626568', 'apellido'=>'DE MATTEIS HERNANDEZ', 'nombre'=>'MASSIMO',			'fechaNacimiento'=>'2010-05-04',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1101406905', 'apellido'=>'DIAZ BASTIDAS', 'nombre'=>'NATALIA VALENTINA',		'fechaNacimiento'=>'2010-11-25',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11013755481', 'apellido'=>'FACUNDO FUENTES', 'nombre'=>'ANA VICTORIA',		'fechaNacimiento'=>'2010-02-11',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'2109665700', 'apellido'=>'MENDOZA AGUIRRE', 'nombre'=>'ISABELA LUCIA',		'fechaNacimiento'=>'2010-03-18',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11010961737', 'apellido'=>'MENDOZA LARA', 'nombre'=>'IVANNA MARIA',			'fechaNacimiento'=>'2010-03-01',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1101038227', 'apellido'=>'MENDOZA RENDON', 'nombre'=>'FABIANA ALEXANDRA',		'fechaNacimiento'=>'2010-09-16',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1090982804', 'apellido'=>'MUÑOZ HERRERA', 'nombre'=>'VALERIA ALEJANDRA',		'fechaNacimiento'=>'2009-10-01',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11012773315', 'apellido'=>'PEREIRA SUMOZA', 'nombre'=>'FABIANA ISABELLA',		'fechaNacimiento'=>'2010-10-22',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1102429468', 'apellido'=>'PINEDA FERNANDEZ', 'nombre'=>'LEONEIBERT RAFAEL',	'fechaNacimiento'=>'2010-02-10',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091363434', 'apellido'=>'QUINTERO BETANCOURT', 'nombre'=>'MAURICIO',			'fechaNacimiento'=>'2009-01-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'11014501368', 'apellido'=>'RIVERA GUDIÑO', 'nombre'=>'SAMANTHA DANIELA',		'fechaNacimiento'=>'2010-04-06',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'11015259614', 'apellido'=>'RODRIGUEZ QUIROGA', 'nombre'=>'MARCOS JOSE',		'fechaNacimiento'=>'2010-05-04',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091539751', 'apellido'=>'ROMERO RODRIGUEZ', 'nombre'=>'MIGUEL ALEJANDRO',	'fechaNacimiento'=>'2009-09-23',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1101398763', 'apellido'=>'SANCHEZ PEREZ', 'nombre'=>'JOSE ALEJANDRO',			'fechaNacimiento'=>'2010-11-15',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1102044352', 'apellido'=>'VALLES ALMARZA', 'nombre'=>'CAMILA FELIAMD',		'fechaNacimiento'=>'2010-11-01',	'sexo'=>'F']);

		//SEGUNDO A
		App\Models\estudiante::create(['ci'=>'1092498724','apellido'=>'BENITEZ MEJIA','nombre'=>'MIGUEL DE JESUS',		'fechaNacimiento'=>'2009-01-05',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091658219','apellido'=>'CAMACHO CAÑIZALEZ','nombre'=>'SOFIA VALENTINA',	'fechaNacimiento'=>'2009-12-03',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1092121536','apellido'=>'CORTEZ GOMES','nombre'=>'CHRISTOPHER SANTIAGO',	'fechaNacimiento'=>'2009-02-05',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091626568','apellido'=>'DE MATTEIS HERNANDEZ','nombre'=>'VALENTINO',		'fechaNacimiento'=>'2009-02-13',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091314396','apellido'=>'GONZALEZ FERRIERE','nombre'=>'SANTIAGO',			'fechaNacimiento'=>'2009-08-09',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091345128','apellido'=>'MARTINEZ ROJAS','nombre'=>'ANDRES MANUEL',		'fechaNacimiento'=>'2009-02-05',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091462532','apellido'=>'PEREZ HERRERA','nombre'=>'EMA SARAY',			'fechaNacimiento'=>'2009-07-29',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1091441374','apellido'=>'QUIROZ HERNANDEZ','nombre'=>'FABRICIO JAVIER',	'fechaNacimiento'=>'2009-10-23',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091902152','apellido'=>'RODRIGUEZ CASADIEGO','nombre'=>'ANTONELLA',		'fechaNacimiento'=>'2009-08-19',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1091991933','apellido'=>'RODRIGUEZ GONZALEZ','nombre'=>'ASHLEY CAMILA',	'fechaNacimiento'=>'2009-06-09',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1080851523','apellido'=>'SOTO FREITES','nombre'=>'REBECA',				'fechaNacimiento'=>'2008-12-08',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1091666518','apellido'=>'TAM CASTRO','nombre'=>'CAMILA ANDREINA',			'fechaNacimiento'=>'2009-10-26',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1091168585','apellido'=>'ESPINOLA YOUNES','nombre'=>'SAMIA CAROLINA',		'fechaNacimiento'=>'2009-08-07',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1071277215','apellido'=>'PEÑA RODRIGUEZ','nombre'=>'SAMUEL DAVID',		'fechaNacimiento'=>'2007-10-05',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'10911816187','apellido'=>'GIL CONTRERAS','nombre'=>'SOFIA ISABEL',		'fechaNacimiento'=>'2009-12-10',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1091277331','apellido'=>'PEREIRA SUMOZA','nombre'=>'OTTONIEL ALEJANDRO',	'fechaNacimiento'=>'2009-03-23',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091549493','apellido'=>'PIMENTEL RODRIGUEZ','nombre'=>'SEBASTIAN',		'fechaNacimiento'=>'2009-02-10',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'2091152891','apellido'=>'RANGEL SUMOZA','nombre'=>'MARIA LAURA',			'fechaNacimiento'=>'2009-01-30',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1090700156','apellido'=>'PEREZ MEDEIROS','nombre'=>'ANGEL JESUS',			'fechaNacimiento'=>'2009-01-01',	'sexo'=>'M']);

		//SEGUNDO B
		App\Models\estudiante::create(['ci'=>'1091274215', 'apellido'=>'BARCASNEGRAS HERRERA', 'nombre'=>'JUAN ANDRES', 	'fechaNacimiento'=>'2009-01-16',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091624247', 'apellido'=>'COLOMBET PARIATA', 'nombre'=>'SOFIA VICTORIA', 		'fechaNacimiento'=>'2009-04-08',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1091475498', 'apellido'=>'FARIA MACHACON', 'nombre'=>'SAMANTHA GABRIELA', 	'fechaNacimiento'=>'2009-08-26',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1071586013', 'apellido'=>'GONZÁLEZ MARCANO', 'nombre'=>'GABRIEL', 			'fechaNacimiento'=>'2007-03-13',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1092002937', 'apellido'=>'GUERRERO LESMES', 'nombre'=>'SEBASTIAN ALFONSO', 	'fechaNacimiento'=>'2009-07-10',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091066075', 'apellido'=>'GUEVARA RODRIGUEZ', 'nombre'=>'DIEGO RAFAEL', 		'fechaNacimiento'=>'2009-05-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'10918781817', 'apellido'=>'MARQUEZ BARRIOS', 'nombre'=>'SAMUEL ANDRES', 		'fechaNacimiento'=>'2009-08-04',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1090713032', 'apellido'=>'MIJARES HERNANDEZ', 'nombre'=>'SOFIA CLARET', 		'fechaNacimiento'=>'2009-01-08',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1092102874', 'apellido'=>'OROZCO BRICEÑO', 'nombre'=>'DIEGO SAMUEL', 			'fechaNacimiento'=>'2009-10-24',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'10911181405', 'apellido'=>'PEREZ VILLEGAS','nombre'=>'PAOLA ANNABELLA',		'fechaNacimiento'=>'2009-07-01',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'10911528916', 'apellido'=>'RANGEL SUMOZA', 'nombre'=>'SEBASTIAN ANDRES', 		'fechaNacimiento'=>'2009-01-30',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1082038510', 'apellido'=>'REYNOSO FERNANDEZ', 'nombre'=>'LUIFE RAFAEL', 		'fechaNacimiento'=>'2008-10-17',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'10911348071', 'apellido'=>'RIOS SAMBRANO', 'nombre'=>'MARIA ANGELA', 			'fechaNacimiento'=>'2009-07-23',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'10915161839', 'apellido'=>'RODRIGUEZ ESCALONA', 'nombre'=>'ADRIAN', 			'fechaNacimiento'=>'2009-09-06',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081921903', 'apellido'=>'ROMERO COLMENARES', 'nombre'=>'SANTIAGO ABEL', 		'fechaNacimiento'=>'2008-12-04',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1091203200', 'apellido'=>'YRIGOYEN GONZALEZ', 'nombre'=>'ANDREA SARAI', 		'fechaNacimiento'=>'2009-08-26',	'sexo'=>'F']);
	
		//Tercero “u”
		App\Models\estudiante::create(['ci'=>'1091777779','apellido'=>'APARICIO BRACAMONTE','nombre'=>'ROLANDO JOSÉ',		'fechaNacimiento'=>'2009-01-30',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081522783', 'apellido'=>'ARMAS LAMEDA', 'nombre'=>'CAMILA VICTORIA', 		'fechaNacimiento'=>'2008-09-28',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1070713665', 'apellido'=>'AULAR GARCIA', 'nombre'=>'JOSE DANIEL', 			'fechaNacimiento'=>'2007-12-08',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1061952349', 'apellido'=>'BRACHO MEJIAS', 'nombre'=>'ANGELIMAR LUCILA', 		'fechaNacimiento'=>'2006-11-25',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1081574623', 'apellido'=>'COLMENARES TORIN', 'nombre'=>'SANTIAGO ENMANUEL', 	'fechaNacimiento'=>'2008-06-13',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081525872', 'apellido'=>'FALCON ESCALANTE', 'nombre'=>'JORGE ALFONZO DE', 	'fechaNacimiento'=>'2008-08-12',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081565277', 'apellido'=>'GARCES SEVILLA', 'nombre'=>'FERNANDA ANDREINA', 	'fechaNacimiento'=>'2008-10-09',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1078550310', 'apellido'=>'GARCIA MARCANO', 'nombre'=>'MARIA FERNANDA', 		'fechaNacimiento'=>'2007-12-22',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1080952852', 'apellido'=>'GOMEZ YNFANTE', 'nombre'=>'ALEXANDRA ELIZABETH', 	'fechaNacimiento'=>'2008-06-29',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1081260608', 'apellido'=>'GONZALEZ ROSQUETE', 'nombre'=>'MARIA FERNANDA', 	'fechaNacimiento'=>'2008-08-08',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1081304687', 'apellido'=>'GUERRERO CABRERA', 'nombre'=>'JEANNELL ROSANGEL', 	'fechaNacimiento'=>'2008-03-31',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1081694136', 'apellido'=>'HERNANDEZ GOMEZ', 'nombre'=>'FRANLEINNYS', 			'fechaNacimiento'=>'2008-12-12',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1080564236', 'apellido'=>'MARTINEZ ROA', 'nombre'=>'ENYORBER JOSE', 			'fechaNacimiento'=>'2008-11-27',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081174420', 'apellido'=>'ORTEGA HERNANDEZ', 'nombre'=>'JESUS ESTEBAN', 		'fechaNacimiento'=>'2008-06-24',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081032093', 'apellido'=>'PACHECO SANDOVAL', 'nombre'=>'VICTOR ANTONIO', 		'fechaNacimiento'=>'2008-03-07',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081467336', 'apellido'=>'PANTOJA FREITES', 'nombre'=>'JACOBO EMILIANO', 		'fechaNacimiento'=>'2008-07-08',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081022644', 'apellido'=>'PEÑA HERNANDEZ', 'nombre'=>'IRE DAVID', 			'fechaNacimiento'=>'2008-06-02',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081690493', 'apellido'=>'PEREIRA OLIVARES', 'nombre'=>'VALERIA ALEXANDRA', 	'fechaNacimiento'=>'2008-11-13',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1081398786', 'apellido'=>'PEREZ DUNO', 'nombre'=>'LORENS KATHERINE', 			'fechaNacimiento'=>'2008-05-17',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1081414575', 'apellido'=>'PEREZ SOLORZANO', 'nombre'=>'LUISANA YESENIA', 		'fechaNacimiento'=>'2008-08-08',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'10811117672', 'apellido'=>'RIETA RAVELO', 'nombre'=>'NESTOR ANDRES', 			'fechaNacimiento'=>'2008-10-21',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081277190', 'apellido'=>'RODRIGUEZ CARDONA', 'nombre'=>'MARIA', 				'fechaNacimiento'=>'2008-03-27',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1072071814', 'apellido'=>'ROMERO TORRES', 'nombre'=>'LEONARDO GABRIEL', 		'fechaNacimiento'=>'2007-06-20',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081586150', 'apellido'=>'SALAZAR PINTO', 'nombre'=>'NELSON EDUARDO', 		'fechaNacimiento'=>'2008-05-27',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'10811159445', 'apellido'=>'SANZ MEDINA', 'nombre'=>'SANTIAGO GABRIEL', 		'fechaNacimiento'=>'2008-06-19',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1071687303', 'apellido'=>'SEQUERA RAMOS', 'nombre'=>'NATALIA LUCIA', 			'fechaNacimiento'=>'2007-10-30',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1081606020', 'apellido'=>'SEVILLA PEREZ', 'nombre'=>'ANA PAOLA', 				'fechaNacimiento'=>'2008-08-04',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1081658271', 'apellido'=>'TRIAS SALINAS', 'nombre'=>'ANDRES RICARDO', 		'fechaNacimiento'=>'2008-03-14',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081184598', 'apellido'=>'VELASQUEZ RAMOS', 'nombre'=>'MAURICIO ALEJANDRO', 	'fechaNacimiento'=>'2008-03-15',	'sexo'=>'M']);
		App\Models\estudiante::create(['ci'=>'1081416224', 'apellido'=>'VENEGAS GRANADILLO', 'nombre'=>'ANDREA VICTORIA', 	'fechaNacimiento'=>'2008-04-11',	'sexo'=>'F']);
		App\Models\estudiante::create(['ci'=>'1080786948', 'apellido'=>'ZAPATA VIDAL', 'nombre'=>'DARIELSIX VERONICA', 		'fechaNacimiento'=>'2008-02-28',	'sexo'=>'F']);
    }
}