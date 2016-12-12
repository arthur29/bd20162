<?php
	class Especificacao_Metro_Linha {

		private $linha_Nome;
		private $especificacao_Metro_Estacao_Nome;

		function set_linha_Nome($linha_Nome){
			$this->linha_Nome = $linha_Nome;
		}
		function get_linha_Nome(){
			return $this->linha_Nome;
		}
		function set_especificacao_Metro_Estacao_Nome($especificacao_Metro_Estacao_Nome){
			$this->especificacao_Metro_Estacao_Nome = $especificacao_Metro_Estacao_Nome;
		}
		function get_especificacao_Metro_Estacao_Nome(){
			return $this->especificacao_Metro_Estacao_Nome;
		}
    }
