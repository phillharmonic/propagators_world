<?php

namespace PpgwBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="Picture")
 */
class Picture
{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;    
    
    /**
     * @ORM\Column(type="string", length=75, nullable=true)
     */
    protected $name;    
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $path;
    
//  * @ORM\Column(type="array", nullable=true)    
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\Plant", mappedBy="pictures", cascade={"persist", "remove"})
     */
    private $plants;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plants = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set name
     *
     * @param string $name
     * @return Picture
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Picture
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Picture
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Add plants
     *
     * @param \PpgwBundle\Entity\Plant $plants
     * @return Picture
     */
    public function addPlant(\PpgwBundle\Entity\Plant $plants)
    {
        if (!$this->plants->contains($plants)) {
            $this->plants->add($plants);
        }
    }

    /**
     * Remove plants
     *
     * @param \PpgwBundle\Entity\Plant $plants
     */
    public function removePlant(\PpgwBundle\Entity\Plant $plants)
    {
        $this->plants->removeElement($plants);
    }

    /**
     * Get plants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlants()
    {
        return $this->plants;
    }
}
