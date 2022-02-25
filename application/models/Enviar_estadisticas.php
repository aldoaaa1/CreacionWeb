<?php

	class Enviar_estadisticas extends CI_Model {
		
		function __construct(){
			$this->load->database();
			date_default_timezone_set("America/Monterrey");

			// PaginaWeb de la Base de Datos
			$this->data_page_id = 'creacionweb';
		}

		function registrar_visita(){
			if (!$this->data_page_id == '') {
				// Se crean los datos a registrar
				$datestring = '%Y-%m-%d  %H:%i:%s';
				$fecha = mdate($datestring, now());
				$data = array(
					'date' => $fecha,
					'ip' => $_POST['user']['ip'],
					'pagina' => $_POST['user']['paginaActual'],
					'screenWidth' => $_POST['user']['screenWidth'],
					'screenHeight' => $_POST['user']['screenHeight'],
					'language' => $_POST['user']['language'],
					'vendor' => $_POST['user']['vendor'],
					'userAgent' => $_POST['user']['userAgent']
				);
				$this->db->insert($this->data_page_id.'_visitas', $data);
			}
		}

		function registrar_frecuencia(){
			if (!$this->data_page_id == '') {
				// Creo el identificador de la visita
				$identificador = $_POST['user']['ip'].'(res:'.$_POST['user']['screenWidth'].'x'.$_POST['user']['screenHeight'].')'.$_POST['user']['userAgent'];

				// Traemos id si el usuario ya visitó anteriormente
				$query = 'SELECT idvisitas_frecuencia, cantidad_visitas FROM '.$this->data_page_id.'_frecuencia where key_visita = \''.$identificador.'\'';
				$consulta = $this->db->query($query)->result_array();
				if (!$consulta) { $es_nuevo = true; } else{ $es_nuevo = false; }
				$datestring = '%Y-%m-%d  %H:%i:%s';
				$fecha = mdate($datestring, now());
				if ($es_nuevo) {
					$data = array(
						'cantidad_visitas' => 1,
						'primera_visita' => $fecha,
						'ultima_pagina' => $_POST['user']['paginaActual'],
						'ip' => $_POST['user']['ip'],
						'screenWidth' => $_POST['user']['screenWidth'],
						'screenHeight' => $_POST['user']['screenHeight'],
						'key_visita' => $identificador
					);
					$this->db->insert($this->data_page_id.'_frecuencia', $data);
				} else {
					$cantidad_visitas = 
					$this->db->set('cantidad_visitas', intval($consulta[0]['cantidad_visitas']) + 1);
					$this->db->set('ultima_visita', $fecha);
					$this->db->set('ultima_pagina', $_POST['user']['paginaActual']);
					$this->db->where('idvisitas_frecuencia', intval($consulta[0]["idvisitas_frecuencia"]));
					$this->db->update($this->data_page_id.'_frecuencia');
				}
			}
		}

		function registrar_reporte_mensual(){
			if (!$this->data_page_id == '') {
				// DEFINIMOS EL MES A ANALIZAR
				$datestring_1 = '%Y-%m-%d  %H:%i:%s';
				$data['creation_date'] = mdate($datestring_1, now());
				$datestring_2 = '%m';
				$current_month = intval(mdate($datestring_2, now()));
				$datestring_3 = '%Y';
				$current_year = intval(mdate($datestring_3, now()));

				if ($current_month == 0) {
					$date_query = ($current_year-1).'-12';
				}
				if ($current_month < 10) {
					$date_query = $current_year.'-0'.($current_month-1);
				}
				if ($current_month > 9) {
					$date_query = $current_year.'-'.$current_month;
				}

				// TRAEMOS TABLA DE REPORTES
				$query = 'SELECT count(id_reportes) FROM '.$this->data_page_id.'_reportes where date_report like "'.$date_query.'"';
				$consulta = $this->db->query($query)->result_array();
				$count_reports = intval($consulta[0]["count(id_reportes)"]);


				// SE CREA EL REPORTE MENSUAL SI NO HA SIDO CREADO AÚN
				if ($count_reports < 1) {
					// Visitas Totales
					$query = 'SELECT count(idvisitas) FROM '.$this->data_page_id.'_visitas where date like "'.$date_query.'%"';
					$consulta = $this->db->query($query)->result_array();
					$data['visitas'] = intval($consulta[0]["count(idvisitas)"]);

					// Usuarios Totales
					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%"';
					$consulta = $this->db->query($query)->result_array();
					$data['usuarios'] = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					// Bots
					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%AdsBot%"';
					$consulta = $this->db->query($query)->result_array();
					$bot_1 = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%Googlebot%"';
					$consulta = $this->db->query($query)->result_array();
					$bot_2 = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$data['bots'] = $bot_1 + $bot_2;

					//Usuarios Reales
					$data['u_reales'] = $data['usuarios'] - $data['bots'];

					// Celulares
					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%mobile%"';
					$consulta = $this->db->query($query)->result_array();
					$celulares_totales = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%mobile%" and key_visita like "%AdsBot%"';
					$consulta = $this->db->query($query)->result_array();
					$celulares_bots1 = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%mobile%" and key_visita like "%Googlebot%"';
					$consulta = $this->db->query($query)->result_array();
					$celulares_bots2 = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$data['celulares'] = $celulares_totales - $celulares_bots1 - $celulares_bots2;

					// Desktop
					$data['desktop'] = $data['u_reales'] - $data['celulares'];

					
					$data['date_report'] = $date_query;
					$this->db->insert($this->data_page_id.'_reportes', $data);
				} else { echo('Reporte no creado (Ya creado anteriormente)');}
			}
		}
		function reporte_manual($date){
			if (!$this->data_page_id == '') {
				// DEFINIMOS EL MES A ANALIZAR
				$datestring_1 = '%Y-%m-%d  %H:%i:%s';
				$data['creation_date'] = mdate($datestring_1, now());
				$date_query = $date;

				// TRAEMOS TABLA DE REPORTES
				$query = 'SELECT count(id_reportes) FROM '.$this->data_page_id.'_reportes where date_report like "'.$date_query.'"';
				$consulta = $this->db->query($query)->result_array();
				$count_reports = intval($consulta[0]["count(id_reportes)"]);


				// SE CREA EL REPORTE MENSUAL SI NO HA SIDO CREADO AÚN
				if ($count_reports < 1) {
					// Visitas Totales
					$query = 'SELECT count(idvisitas) FROM '.$this->data_page_id.'_visitas where date like "'.$date_query.'%"';
					$consulta = $this->db->query($query)->result_array();
					$data['visitas'] = intval($consulta[0]["count(idvisitas)"]);

					// Usuarios Totales
					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%"';
					$consulta = $this->db->query($query)->result_array();
					$data['usuarios'] = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					// Bots
					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%AdsBot%"';
					$consulta = $this->db->query($query)->result_array();
					$bot_1 = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%Googlebot%"';
					$consulta = $this->db->query($query)->result_array();
					$bot_2 = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$data['bots'] = $bot_1 + $bot_2;

					//Usuarios Reales
					$data['u_reales'] = $data['usuarios'] - $data['bots'];

					// Celulares
					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%mobile%"';
					$consulta = $this->db->query($query)->result_array();
					$celulares_totales = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%mobile%" and key_visita like "%AdsBot%"';
					$consulta = $this->db->query($query)->result_array();
					$celulares_bots1 = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$query = 'SELECT count(idvisitas_frecuencia) FROM '.$this->data_page_id.'_frecuencia where primera_visita like "'.$date_query.'%" and key_visita like "%mobile%" and key_visita like "%Googlebot%"';
					$consulta = $this->db->query($query)->result_array();
					$celulares_bots2 = intval($consulta[0]["count(idvisitas_frecuencia)"]);

					$data['celulares'] = $celulares_totales - $celulares_bots1 - $celulares_bots2;

					// Desktop
					$data['desktop'] = $data['u_reales'] - $data['celulares'];

					
					$data['date_report'] = $date_query;
					$this->db->insert($this->data_page_id.'_reportes', $data);
					echo('Reporte creado exitosamente. <br>DATE: '.$date_query);
				} else { echo('Reporte no creado (Ya creado anteriormente)');}
			}
		}
	}
?>