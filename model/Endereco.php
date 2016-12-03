<?php
	class Endereco {
		private $Estacao_Nome;
		private $Tipo_Transporte;
		private $Bairro;
		private $Latitude;
		private $Longitude;
		function get_Estacao_Nome(){
			return $Estacao_Nome;
		}
		function set_Estacao_Nome($Estacao_Nome){
			$this->Estacao_Nome = $Estacao_Nome
		}
		function get_Tipo_Transporte(){
			return $Tipo_Transporte;
		}
		function set_Tipo_Transporte($Tipo_Transporte){
			$this->Tipo_Transporte = $Tipo_Transporte
		}
		function get_Bairro(){
			return $Bairro;
		}
		function set_Bairro($Bairro){
			$this->Bairro = $Bairro
		}
		function get_Latitude(){
			return $Latitude;
		}
		function set_Latitude($Latitude){
			$this->Latitude = $Latitude
		}
		function get_Longitude(){
			return $Longitude;
		}
		function set_Longitude($Longitude){
			$this->Longitude = $Longitude
		}
