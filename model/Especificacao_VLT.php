<?php
	class Especificacao_VLT {
		private $Estacao_Nome;
		private $Roletas;
		private $Integracao;
		private $Tempo_ida;
		private $Tempo_volta;
		function get_Estacao_Nome(){
			return $Estacao_Nome;
		}
		function set_Estacao_Nome($Estacao_Nome){
			$this->Estacao_Nome = $Estacao_Nome
		}
		function get_Roletas(){
			return $Roletas;
		}
		function set_Roletas($Roletas){
			$this->Roletas = $Roletas
		}
		function get_Integracao(){
			return $Integracao;
		}
		function set_Integracao($Integracao){
			$this->Integracao = $Integracao
		}
		function get_Tempo_ida(){
			return $Tempo_ida;
		}
		function set_Tempo_ida($Tempo_ida){
			$this->Tempo_ida = $Tempo_ida
		}
		function get_Tempo_volta(){
			return $Tempo_volta;
		}
		function set_Tempo_volta($Tempo_volta){
			$this->Tempo_volta = $Tempo_volta
		}
