<?php

class Receta extends AppModel {
    var $name = 'Receta';
    var $useTable = 'receta';
    public $hasAndBelongsToMany = array(
    	'Ingrediente' =>
    	array(
    		'className' => 'Ingrediente',
    		'joinTable' => 'receta_ingredientes',
    		'foreignKey' => 'receta_id',
    		'associationForeignKey' => 'ingrediente_id'
    		)
    	);

}

?>