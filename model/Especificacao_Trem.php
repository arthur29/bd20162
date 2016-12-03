<?php
	class Especificacao_Trem {
		private $Estacao_Nome;
		private $Ramal_Nome;
		private $Bicilcetario;
		private $Kilometragem;
		function get_Estacao_Nome(){
			return $Estacao_Nome;
		}
		function set_Estacao_Nome($Estacao_Nome){
			$this->Estacao_Nome = $Estacao_Nome
		}
		function get_Ramal_Nome(){
			return $Ramal_Nome;
		}
		function set_Ramal_Nome($Ramal_Nome){
			$this->Ramal_Nome = $Ramal_Nome
		}
		function get_Bicilcetario(){
			return $Bicilcetario;
		}
		function set_Bicilcetario($Bicilcetario){
			$this->Bicilcetario = $Bicilcetario
		}
		function get_Kilometragem(){
			return $Kilometragem;
		}
		function set_Kilometragem($Kilometragem){
			$this->Kilometragem = $Kilometragem
		}
