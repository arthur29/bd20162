<?php
	class Especificacao_VLT {

		private $estacao_Nome;
		private $roleta;
		private $integracao;
		private $tempo_ida;
		private $tempo_volta;

		function set_estacao_Nome($estacao_Nome){
			$this->estacao_Nome = $estacao_Nome;
		}
		function get_estacao_Nome(){
			return $this->estacao_Nome;
		}
		function set_roleta($roleta){
			$this->roleta = $roleta;
		}
		function get_roleta(){
			return $this->roleta;
		}
		function set_integracao($integracao){
			$this->integracao = $integracao;
		}
		function get_integracao(){
			return $this->integracao;
		}
		function set_tempo_ida($tempo_ida){
			$this->tempo_ida = $tempo_ida;
		}
		function get_tempo_ida(){
			return $this->tempo_ida;
		}
		function set_tempo_volta($tempo_volta){
			$this->tempo_volta = $tempo_volta;
		}
		function get_tempo_volta(){
			return $this->tempo_volta;
		}
    }
