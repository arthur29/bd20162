<?php
	class Integracao_Metro {

		private $especificacao_Metro_Estacao_Nome;
		private $nome_integracao;

		function set_especificacao_Metro_Estacao_Nome($especificacao_Metro_Estacao_Nome){
			$this->especificacao_Metro_Estacao_Nome = $especificacao_Metro_Estacao_Nome;
		}
		function get_especificacao_Metro_Estacao_Nome(){
			return $this->especificacao_Metro_Estacao_Nome;
		}
		function set_nome_integracao($nome_integracao){
			$this->nome_integracao = $nome_integracao;
		}
		function get_nome_integracao(){
			return $this->nome_integracao;
		}
    }
