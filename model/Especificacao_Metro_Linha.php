<?php
	class Especificacao_Metro_Linha {
		private $Linha_Nome;
		private $Especificacao_Metro_Estacao_Nome;
		function get_Linha_Nome(){
			return $Linha_Nome;
		}
		function set_Linha_Nome($Linha_Nome){
			$this->Linha_Nome = $Linha_Nome
		}
		function get_Especificacao_Metro_Estacao_Nome(){
			return $Especificacao_Metro_Estacao_Nome;
		}
		function set_Especificacao_Metro_Estacao_Nome($Especificacao_Metro_Estacao_Nome){
			$this->Especificacao_Metro_Estacao_Nome = $Especificacao_Metro_Estacao_Nome
		}
