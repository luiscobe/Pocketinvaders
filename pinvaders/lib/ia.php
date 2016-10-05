<?php
class ia
{
//public(atributo) $ (variables)
	public $columna = "3";
	public $fila = "3";
//return te devuelve a la variable columna en este caso entre 1 y 3
	public function getColumna()
//return columna te devuelve a la columna this es muestrame esta columna que tiene valores aleatorios del 1 al 3 (rand)
	{

	$this->Columna = rand (1,3);	
	return $this->Columna;

}

//return fila te devuelve a la fila this es muestrame esta fila que tiene valores aleatorios del 1 al 3 (rand)
public function getFila()
{
	$this->Fila = rand (1,3);
	return $this->Fila;
}

}

?>