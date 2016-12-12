<?php
	class Especificacao_Trem {

		private $estacao_Nome;
		private $ramal_Nome;
		private $bicilcetario;
		private $quilometragem;

		function set_estacao_Nome($estacao_Nome){
			$this->estacao_Nome = $estacao_Nome;
		}
		function get_estacao_Nome(){
			return $this->estacao_Nome;
		}
		function set_ramal_Nome($ramal_Nome){
			$this->ramal_Nome = $ramal_Nome;
		}
		function get_ramal_Nome(){
			return $this->ramal_Nome;
		}
		function set_bicilcetario($bicilcetario){
			$this->bicilcetario = $bicilcetario;
		}
		function get_bicilcetario(){
			return $this->bicilcetario;
		}
		function set_quilometragem($quilometragem){
			$this->quilometragem = $quilometragem;
		}
		function get_quilometragem(){
			return $this->quilometragem;
		}
    }
