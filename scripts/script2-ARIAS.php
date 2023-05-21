<?php

/**
 * Clase que representa un usuario del sistema.
 *
 * @package MyApp
 * @version 1.0.0
 * @author Jose Arias
 * @date 15-05-2023
 */
class User
{
    /**
     * @var int La identificación del usuario.
     */
    private $id;

    /**
     * @var string El nombre del usuario.
     */
    private $name;

    /**
     * Constructor de la clase User.
     *
     * @param int $id La identificación del usuario.
     * @param string $name El nombre del usuario.
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Devuelve la identificación del usuario.
     *
     * @return int La identificación del usuario.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Devuelve el nombre del usuario.
     *
     * @return string El nombre del usuario.
     */
    public function getName()
    {
        return $this->name;
    }
}
?>
