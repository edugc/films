<?php

namespace models\entities;

/**
 * @Entity
 * @Table(name="peliculas")
 */
class MovieMapping
{

    /**
     * @Id
     * @Column(type="integer", name="id")
     */
    private $id;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return MovieMapping
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
