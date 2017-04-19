<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 19/04/17
 * Time: 9:56
 */

namespace models\Entities;

/**
 * @Entity
 * @Table(name="country")
 */

class CountryMapping
{
    /**
     * @Column(type="string",  name="name")
     */
    private $_country;
    /**
     * @Id @Column(type="string",  name="code")
     */
    private $_code;
    /**
     * @Column(type="integer",  name="population")
     */
    private $_population;


    /**
     * Set country
     *
     * @param string $_country
     *
     * @return CountryMapping
     */
    public function setCountry($_country)
    {
        $this->_country = $_country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->_country;
    }

    /**
     * Set code
     *
     * @param string $_code
     *
     * @return CountryMapping
     */
    public function setCode($_code)
    {
        $this->_code = $_code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->_code;
    }

    /**
     * Set population
     *
     * @param integer $_population
     *
     * @return CountryMapping
     */
    public function setPopulation($_population)
    {
        $this->_population = $_population;

        return $this;
    }

    /**
     * Get population
     *
     * @return integer
     */
    public function getPopulation()
    {
        return $this->_population;
    }
}
