<?php
	class Endereco {
		private $estacao_Nome;
		private $tipo_Transporte;
		private $bairro;
		private $sigla_estacao_endereco;
		private $latitude;
		private $longitude;
		function set_estacao_Nome($estacao_Nome){
			$this->estacao_Nome = $estacao_Nome
		}
		function get_estacao_Nome(){
			return $estacao_Nome;
		}
		function set_tipo_Transporte($tipo_Transporte){
			$this->tipo_Transporte = $tipo_Transporte
		}
		function get_tipo_Transporte(){
			return $tipo_Transporte;
		}
		function set_bairro($bairro){
			$this->bairro = $bairro
		}
		function get_bairro(){
			return $bairro;
		}
		function set_sigla_estacao_endereco($sigla_estacao_endereco){
			$this->sigla_estacao_endereco = $sigla_estacao_endereco
		}
		function get_sigla_estacao_endereco(){
			return $sigla_estacao_endereco;
		}
		function set_latitude($latitude){
			$this->latitude = $latitude
		}
		function get_latitude(){
			return $latitude;
		}
		function set_longitude($longitude){
			$this->longitude = $longitude
		}
		function get_longitude(){
			return $longitude;
		}
