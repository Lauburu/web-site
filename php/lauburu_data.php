<?php
	if(!$_POST) exit;
	$datasec = $_POST['section'];
	$softype = $_POST['type'];
	$sofname = $_POST['name'];
	$package = '<section class="software window" data-section='.$datasec.' data-type='.$softype.' data-name='.$sofname.' data-number="0">';
	$package .= '<div class="soft_header"><label style="float:left;">'.$sofname.'</label><div style="float:right;"><label id="mini">minimizar</label> <label id="maxi">maximizar</label> <label id="close">cerrar</label></div></div>';
	$package .= '<div class="data_content"><i id="lg-'.$sofname.'" class="showit"></i>';
	
	switch ($datasec){
		case "PC":
			switch ($softype){
				case "gamer":
					$package .= 'En el ordenador gaming de este mes, hemos escogido un tandem de la mejor calidad. Por un lado, una caja que tanto en estética como en disipación del calor es de 
					las mejores que hay en el mercado. Y no podía ser de otra manera, viniedo de una de las grandes reconocidas en el mundillo: NZXT.</div>';
					$package .= '<div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (hardware, tipo ...) </div>';
					break;
				case "office":
					$package .= 'Un pc a medida de una oficina, particular o PYMES. No es necesario tener lo último que salga al mercado para tener un buen ordenador que nos cubra todas nuestras 
					necesidades, ni siquiera es necesario en la mayoría de los casos, cambiar cada dos o tres años por uno nuevo.</div>';
					$package .= '<div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (hardware, tipo ...) </div>';
					break;
				case "server":
					$package .= 'Dependiendo del tipo de servicio que necesitemos, un servidor tendrá que tener unas piezas u otras. Esta es nuestra opción genérica, que podremos especializar a cualquier 
					necesidad que necesite nuestro cliente.</div>';
					$package .= '<div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (hardware, tipo ...) </div>';
					break;
				case "work":
					$package .= 'Si lo que necesitas es trabajar con software multimedia, imagen y/o sonido, podemos ayudarte. Podemos montar un equipo de los más potentes del mercado, por mucho menos dinero
					que otras soluciones propietarias, asegurandote tanto calidad, estabilidad como potencia. Aquí puedes consultar nuestra oferta.</div>';
					$package .= '<div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (hardware, tipo ...) </div>';
					break;
				case "media":
					$package .= 'Hoy en día el ocio multimedia está en auge. Existen multiples soluciones para múltiples usuarios. Nosotros, después de probar unas cuantas, hemos optado por esta que 
					puedes consultar a continuación, y con la que te aseguramos poder disfrutar de cualquier contenido.</div>';
					$package .= '<div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (hardware, tipo ...) </div>';
					break;
				default:
					break;
				}
			break;
		case "SOFT":
			switch ($softype){
				case "GR":
					switch ($sofname){
						case "krita":
							$package .= '¿Te gusta dibujar? entonces ESTE es tu programa... y si tienes una tableta gráfica puedes llegar ha realizar auténticas virguerías, 
							como ya lo han hecho infinidad de profesionales. ¿No me crees? Visita su página, y disfruta de lo que puedes llegar a dibujar.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "gimp":
							$package .= '¿Este programa es todo lo que cualquier usuario medio/avanzado puede necesitar para trabajar con imágenes. Una gran alternativa, 
							totalmente libre que te permite retocar o crear imágenes. Pruébalo y no querras saber nada de cualquier otro programa de pago similar.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "inkscape":
							$package .= 'Si el Gimp se os queda corto, el siguiente paso es trabajar con vectores... ¿sabéis lo que son? ¡Exacto!, imágenes escalables sin 
							pérdida de calidad.	Con este programa podréis hacer todo lo que se os ocurra con vectores.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "blender":
							$package .= 'A todos los diesñadores gráficos 3D les debe sonar este programa. No tiene nada que envidiarle a sistemas de pago y privativos. Podéis ver 
							en su página de lo que es capaz, y no sería la primera vez que una empresa lo usa para sus proyectos audiovisuales... Y además, es multiplataforma.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "librecad":
							$package .= 'Si lo que necesitas es realizar planos, al estilo del Autocad, mira por donde, también tenemos una alternativa, y aunque no sea tan potente 
							como otros, es muy probable que lo que te ofrece sea más suficiente. Pruebalo, y opina.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						default:
							break;
						}
					break;
				case "SO":
					switch ($sofname){
						case "minino":
							$package .= 'En LauburuSI contemplamos todas las posibilidades, y para aquellos equipos con más de 10 años que esteis usando pero que ya no le veis 
							utilidad, o que no usais y estais pensando en tirar... ¡ESPERA! dale una nueva oportunidad. Gracias a este sistema operativo made in Galicia podrás 
							recuperar y utiliza cualquier ordenador, viejo o nuevo.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "trisquel":
							$package .= 'Otra distribución made in Galicia, en este caso orientada a la ofimática y los centros educativos. Se caracteriza por ofrecer software 
							100% libre, y desde su aparición se está convirtiendo en un gran referente dentro de su campo. Esta es nuestra distribución abanderada, la que instalamos 
							por defecto en nuestros sistemas.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "proxmox":
							$package .= 'Contemplamos la opción de que nuestros clientes puedan necesitar trabajar con entornos virtualizados. En vista de esta necesidad, hemos 
							incluido a nuestro repertorio esta distribución. Te sorprenderá lo bien que aprovecha los recursos de tu máquina.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "zentyal":
							$package .= 'Como olvidarnos de las PYMES. Esta distribución es la candidata ideal para realizar las tareas de servidor de cualquier PYMES. Ofrece todo lo 
							que puedas necesitar, y seguro que algo más. Ya lleva muchos años en escena, y solo ha hecho mejorar y consolidarse en el sector. No te vas a equivocar si 
							la escoges.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "linuxmint":
							$package .= 'Esta distribución se especializa en su alta compatibilidad con cualquier sistema de nueva generación, y destaca por su integración con los 
							sistemas privativos de Nvidia y ATI. Ideal para pc-gamers e incluso para Workstations de gama media/alta.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						default:
							break;
						}
					break;
				case "OF":
					switch ($sofname){
						case "libreoffice":
							$package .= 'Sí, existe vida más allá de Microsoft, incluso en entornos ofimáticos. Consideramos que esta suite es el mejor referente libre y gratuito que podemos 
							ofrecer a nuestros clientes, por que no solo cumple nuestros requisitos mínimos de calidad y estabilidad, también los amplia gracias a ser multiplataforma y a su 
							gran compatibilidad de formatos.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "thunderbird":
							$package .= 'Si tenemos la suite ofimática, nos falta un gestor de correos que pueda trabajar con calendarios y eventos... Pues blanco y en botella, aquí tenéis la 
							solución. Multiplataforma y apoyado por la comunidad de Mozilla, esta opción es la que más nos ha convencido.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "keme":
							$package .= 'Por supuesto, también tenemos solución para la contabilidad. Gracias a este software, podrás llevar al día tanto la contabilidad de tu empresa como la 
							que puedas necesitar en tu propia casa. Y no te preocupes, porque al ser multiplataforma, podrás usarlo tanto en Linux como en Windows.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "gnuhealth":
							$package .= 'Si alguien necesita un sistema para poder gestionar un hospital o semejante, también podemos aportar una solución opensource. Este software está orientado 
							a la gestión hospitalaria, ofreciendo un expediente médico electrónico completo.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						default:
							break;
						}
					break;
				case "MU":
					switch ($sofname){
						case "audacity":
							$package .= 'Para poder editar pistas de audio, o incluso extraerlas de pistas de vídeo, podremos usar este software. Aumentar el pitch, modificar el volumen, mezclar pistas, 
							e incluso trabajar con múltiples pistas a la vez, podremos abarcar con este programa casi tanto como con un software de pago.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "xcfa":
							$package .= 'Cuando tenemos la necesidad de convertir multiples pistas de audio a diversos formatos, extraer pistas de CDs y DVDs o simplemente normalizar dichas pistas, 
							este software es la mejor opción. Rápido e intuitivo, nos ayudará de una manera rápida y fiable con este trabajo.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "vlc":
							$package .= 'Este reproductor podría ser llamado la navaja suiza multimedia. Puedes reproducir infinidad de archivos, tanto de video como de audio, sin excluir los video CDs, 
							DVDs o BlueRay. Y no solo eso, además te permite emitir y reproducir contenido en streaming. El más completo y estable en su género.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						default:
							break;
						}
					break;
				case "P2":
					switch ($sofname){
						case "transmission":
							$package .= 'El P2P está aquí para quedarse, por mucho que haya gente que no le guste (mayoritariamente por ignorancia). Este simple pograma nos permite descargar todo el contenido 
							compartido en este tipo de redes, siendo compatible con los magnet, listas de bloqueo y consumiendo muy pocos recursos del ordenador.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						case "nicotine":
							$package .= 'Este software es un fork de soulseek y busca compartir contenido libre y legal entre usuarios. Es muy similar al difunto napster. Hay una comunidad bastante amplia 
							dentro de este sistema, por lo que es muy fácil encontrar lo que necesites.</div>';
							$package .= '<div style="width:100%;height:3%;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
							break;
						default:
							break;
						}
					break;
				default:
					break;
				}
			break;
		default:
			break;
		}

	$package .= '<script src="js/menubar.js"></script></section>';
	
	echo $package;
?>
