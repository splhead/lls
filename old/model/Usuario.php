<?php

class Usuario {
	private usuario;
	private senha;
	private tipo;

	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	public funciton getUsuario() {
		return $this->usuario;
	}

	public funciton setSenha($senha) {
		$this->senha = $senha;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setTipo($tipo='c') {
		$this->tipo = $tipo;
	}

	public function getTipo() {
		return $this->tipo;
	}
}

?>