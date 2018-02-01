<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Setting
 *
 * @ORM\Table(name="setting")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SettingRepository")
 */
class Setting
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="multichoice", type="boolean")
     */
    private $multichoice;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set multichoice
     *
     * @param boolean $multichoice
     *
     * @return Setting
     */
    public function setMultichoice($multichoice)
    {
        $this->multichoice = $multichoice;

        return $this;
    }

    /**
     * Get multichoice
     *
     * @return bool
     */
    public function getMultichoice()
    {
        return $this->multichoice;
    }
}

