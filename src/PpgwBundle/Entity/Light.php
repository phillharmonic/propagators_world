<?php

namespace PpgwBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="light")
 */
class Light
{
        
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string", length=1500)
     */
    protected $description;
    
    
/* This IS the right way to store a collection of results - or an array of checkbox choices.  It allows
 * the developer to run queries in both directions, since the collection is not stored as an array in a 
 * column field.  In the example below, 'plants' is not a field.  It's a method.  A new 'plant_light' table 
 * has been created to store the plant_id and the light_id.  That's it.  The method simply returns all light_ids
 * matched to the plant_id.  AND - it returns the object.  Both ways.  So, if the developer ever wanted to
 * run a query to find out which plants could be grown in "Full Sun" (a light choice), it would be super easy.
 * As before, with results stored as an array in a field, it would be impossible.  Integrity is also always
 * achieved - upon delete.  No more integrity constrait violations.   
*/  
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\Plant", mappedBy="light", cascade={"persist", "remove"})
     */
    private $plants;
    
//    Entities passed to a choice field must have a “__toString()” method defined
    public function __toString()
    {
        return $this->getName();
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
     * @return Light
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
     * @return Light
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
     * Set plants
     *
     * @param \PpgwBundle\Entity\Plant $plants
     * @return Light
     */
    public function setPlants(\PpgwBundle\Entity\Plant $plants = null)
    {
        $this->plants = $plants;

        return $this;
    }

    /**
     * Get plants
     *
     * @return \PpgwBundle\Entity\Plant 
     */
    public function getPlants()
    {
        return $this->plants;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add plants
     *
     * @param \PpgwBundle\Entity\Plant $plants
     * @return Light
     */
    public function addPlant(\PpgwBundle\Entity\Plant $plants)
    {
        $this->plants[] = $plants;

        return $this;
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
}
