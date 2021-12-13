<?php

class DtoF{
	
	private $id = 0;
	private $nombre = "";
	private $nombre2 = "";
	private $observaciones = "";
	
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		this -> id = $id;
	}

	public function getNombre()
	{
		return $this->nombre; 
	}

	public function setNombre($nombre)
	{
		return $this->nombre = $nombre;
	}

	public function getNombre2()
	{
		return $this->nombre2;
	}

	public function setNombre2($nombre2)
	{
		$this->nombre2 = $nombre2;

		return $this;
	}

	public function getObservaciones()
	{
		return $this->observaciones;
	}

	public function setObservaciones($observaciones)
	{
		$this->observaciones = $observaciones;

		return $this;
	}
}
?>