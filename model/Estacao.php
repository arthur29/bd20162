<?php
	class Estacao {
		private $Nome;
		private $Sigla;
		function get_Nome(){
			return $Nome;
		}
		function set_Nome($Nome){
			$this->Nome = $Nome
		}
		function get_Sigla(){
			return $Sigla;
		}
		function set_Sigla($Sigla){
			$this->Sigla = $Sigla
		}
