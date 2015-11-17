<?php 

namespace PpgwBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert; 
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="PpgwBundle\Entity\Repository\PlantRepository")
 * @ORM\Table(name="plant")
 * @ORM\HasLifecycleCallbacks
 */
class Plant
{
   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\Attracts", inversedBy="plants", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    protected $attracts;    
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */    
    protected $authorId;

    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\User")
     * @ORM\JoinColumn(name="authorId", referencedColumnName="id")
     */
    protected $author;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */    
    protected $editorId;

    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\User")
     * @ORM\JoinColumn(name="editorId", referencedColumnName="id")
     */
    protected $editor;
    
    /**
     * @ORM\Column(type="datetimetz")
     */
    protected $created;
    
    /**
     * @ORM\Column(type="datetimetz")
     */
    protected $updated;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $plantTypeId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\PlantType")
     * @ORM\JoinColumn(name="plantTypeId", referencedColumnName="id")
     */    
    protected $plantTypes;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $taxKingdomId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\TaxKingdom")
     * @ORM\JoinColumn(name="taxKingdomId", referencedColumnName="id")
     */
    protected $taxKingdom;    
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $taxPhylumId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\TaxPhylum")
     * @ORM\JoinColumn(name="taxPhylumId", referencedColumnName="id")
     */
    protected $taxPhylum;    
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $taxClassId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\TaxClass")
     * @ORM\JoinColumn(name="taxClassId", referencedColumnName="id")
     */
    protected $taxClass;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $taxOrderId;    
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\TaxOrder")
     * @ORM\JoinColumn(name="taxOrderId", referencedColumnName="id")
     */
    protected $taxOrder;
    
    /**
     * @ORM\Column(type="string", length=75)
     */
    protected $taxFamily;
    
    /**
     * @ORM\Column(type="string", length=75)
     */
    protected $taxGenus;
    
    /**
     * @ORM\Column(type="string", length=75)
     */
    protected $taxSpecies;
    
    /**
     * @ORM\Column(type="string", nullable=true, length=75)
     */
    protected $taxVariety;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $plantGroupId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\PlantGroup")
     * @ORM\JoinColumn(name="plantGroupId", referencedColumnName="id")
     */
    protected $plantGroup;    
    
    /**
     * @ORM\Column(type="text")
     */
    protected $summary;
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\Light", inversedBy="plants", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    protected $light;    
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\Soil", inversedBy="plants", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    protected $soil;    
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $lifecycleId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\Lifecycle")
     * @ORM\JoinColumn(name="lifecycleId", referencedColumnName="id")
     */
    protected $lifecycle;    
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\BloomTime", inversedBy="plants", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    protected $bloomTimes;    
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $foliageColorId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\FoliageColor")
     * @ORM\JoinColumn(name="foliageColorId", referencedColumnName="id")
     */
    protected $foliageColor;    
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\FlowerColor", inversedBy="plants", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    protected $flowerColor;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $propagation;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $planting;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $care;
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\Pests", inversedBy="plants", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    protected $pests;
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\Diseases", inversedBy="plants", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    protected $diseases;    
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $originId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\Country")
     * @ORM\JoinColumn(name="originId", referencedColumnName="id")
     */
    protected $origin;    
    
    /**
     * @ORM\Column(type="integer", length=3)
     */
    protected $heightLow;
    
    /**
     * @ORM\Column(type="integer", length=3)
     */
    protected $heightHigh;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $zoneLowId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\HardinessZone")
     * @ORM\JoinColumn(name="zoneLowId", referencedColumnName="id")
     */
    protected $zoneLow;    
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $zoneHighId;
    
    /**
     * @ORM\ManyToOne(targetEntity="PpgwBundle\Entity\HardinessZone")
     * @ORM\JoinColumn(name="zoneHighId", referencedColumnName="id")
     */
    protected $zoneHigh;    
    
    /**
     * @ORM\Column(type="integer", length=3)
     */
    protected $spreadLow;
    
    /**
     * @ORM\Column(type="integer", length=3)
     */
    protected $spreadHigh;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $resistsDeer;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $seed;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $invasivness;
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\PropagationMethod", inversedBy="plants", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    protected $propagationMethod;    
    
    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $height_measure;
    
    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $width_measure;    
    
    /**
     * @ORM\ManyToMany(targetEntity="PpgwBundle\Entity\Picture", inversedBy="plants", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    protected $pictures;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $slug;    
    
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('plantTypes', new NotBlank());
        $metadata->addPropertyConstraint('taxFamily', new Assert\Length(array(
            'min'        => 3,
            'max'        => 30
        )));
        $metadata->addPropertyConstraint('taxGenus', new Assert\Length(array(
            'min'        => 3,
            'max'        => 30
        )));
        $metadata->addPropertyConstraint('taxSpecies', new Assert\Length(array(
            'min'        => 3,
            'max'        => 30
        )));
        $metadata->addPropertyConstraint('taxVariety', new Assert\Length(array(
            'min'        => 3,
            'max'        => 30
        )));
        $metadata->addPropertyConstraint('summary', new Assert\Length(array(
            'min'        => 50,
            'max'        => 2500
        )));
        $metadata->addPropertyConstraint('propagation', new Assert\Length(array(
            'min'        => 50,
            'max'        => 2500
        )));
        $metadata->addPropertyConstraint('care', new Assert\Length(array(
            'min'        => 50,
            'max'        => 2500
        )));
        $metadata->addPropertyConstraint('planting', new Assert\Length(array(
            'min'        => 50,
            'max'        => 2500
        )));
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attracts = new ArrayCollection();
        $this->bloomTimes = new ArrayCollection();
        $this->diseases = new ArrayCollection();
        $this->flowerColor = new ArrayCollection();
        $this->light = new ArrayCollection();
        $this->pests = new ArrayCollection();
        $this->propagationMethod = new ArrayCollection();
        $this->soil = new ArrayCollection();
        $this->pictures = new ArrayCollection();
       
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());

    }
    
    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
    }

    public function getTaxName() {
        return ucfirst($this->taxGenus) .' '. strtolower($this->taxSpecies) .' '. '\''.strtolower($this->taxVariety).'\'';
     }
    
    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('#[^-\w]+#', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }
     
    /**
     * Add pictures
     *
     * @param \PpgwBundle\Entity\Picture $pictures
     * @return Plant
     */
    public function addPicture(\PpgwBundle\Entity\Picture $pictures)
    {
        $pictures->addPlant($this);
        $this->pictures[] = $pictures;
    }

    /**
     * Remove pictures
     *
     * @param \PpgwBundle\Entity\Picture $pictures
     */
    public function removePicture(\PpgwBundle\Entity\Picture $pictures)
    {
        $this->pictures->removeElement($pictures);
    }

    /**
     * Get pictures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPictures()
    {
        return $this->pictures;
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
     * Set authorId
     *
     * @param integer $authorId
     * @return Plant
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set editorId
     *
     * @param integer $editorId
     * @return Plant
     */
    public function setEditorId($editorId)
    {
        $this->editorId = $editorId;

        return $this;
    }

    /**
     * Get editorId
     *
     * @return integer 
     */
    public function getEditorId()
    {
        return $this->editorId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Plant
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Plant
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set plantTypeId
     *
     * @param integer $plantTypeId
     * @return Plant
     */
    public function setPlantTypeId($plantTypeId)
    {
        $this->plantTypeId = $plantTypeId;

        return $this;
    }

    /**
     * Get plantTypeId
     *
     * @return integer 
     */
    public function getPlantTypeId()
    {
        return $this->plantTypeId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Plant
     */
    public function setName($name)
    {
        $this->name = $name;
//        $this->setSlug($name); //replaced - set this value during the save action in the controller
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
     * Set taxKingdomId
     *
     * @param integer $taxKingdomId
     * @return Plant
     */
    public function setTaxKingdomId($taxKingdomId)
    {
        $this->taxKingdomId = $taxKingdomId;

        return $this;
    }

    /**
     * Get taxKingdomId
     *
     * @return integer 
     */
    public function getTaxKingdomId()
    {
        return $this->taxKingdomId;
    }

    /**
     * Set taxPhylumId
     *
     * @param integer $taxPhylumId
     * @return Plant
     */
    public function setTaxPhylumId($taxPhylumId)
    {
        $this->taxPhylumId = $taxPhylumId;

        return $this;
    }

    /**
     * Get taxPhylumId
     *
     * @return integer 
     */
    public function getTaxPhylumId()
    {
        return $this->taxPhylumId;
    }

    /**
     * Set taxClassId
     *
     * @param integer $taxClassId
     * @return Plant
     */
    public function setTaxClassId($taxClassId)
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    /**
     * Get taxClassId
     *
     * @return integer 
     */
    public function getTaxClassId()
    {
        return $this->taxClassId;
    }

    /**
     * Set taxOrderId
     *
     * @param integer $taxOrderId
     * @return Plant
     */
    public function setTaxOrderId($taxOrderId)
    {
        $this->taxOrderId = $taxOrderId;

        return $this;
    }

    /**
     * Get taxOrderId
     *
     * @return integer 
     */
    public function getTaxOrderId()
    {
        return $this->taxOrderId;
    }

    /**
     * Set taxFamily
     *
     * @param string $taxFamily
     * @return Plant
     */
    public function setTaxFamily($taxFamily)
    {
        $this->taxFamily = $taxFamily;

        return $this;
    }

    /**
     * Get taxFamily
     *
     * @return string 
     */
    public function getTaxFamily()
    {
        return $this->taxFamily;
    }

    /**
     * Set taxGenus
     *
     * @param string $taxGenus
     * @return Plant
     */
    public function setTaxGenus($taxGenus)
    {
        $this->taxGenus = $taxGenus;

        return $this;
    }

    /**
     * Get taxGenus
     *
     * @return string 
     */
    public function getTaxGenus()
    {
        return $this->taxGenus;
    }

    /**
     * Set taxSpecies
     *
     * @param string $taxSpecies
     * @return Plant
     */
    public function setTaxSpecies($taxSpecies)
    {
        $this->taxSpecies = $taxSpecies;

        return $this;
    }

    /**
     * Get taxSpecies
     *
     * @return string 
     */
    public function getTaxSpecies()
    {
        return $this->taxSpecies;
    }

    /**
     * Set taxVariety
     *
     * @param string $taxVariety
     * @return Plant
     */
    public function setTaxVariety($taxVariety)
    {
        $this->taxVariety = $taxVariety;

        return $this;
    }

    /**
     * Get taxVariety
     *
     * @return string 
     */
    public function getTaxVariety()
    {
        return $this->taxVariety;
    }

    /**
     * Set plantGroupId
     *
     * @param integer $plantGroupId
     * @return Plant
     */
    public function setPlantGroupId($plantGroupId)
    {
        $this->plantGroupId = $plantGroupId;

        return $this;
    }

    /**
     * Get plantGroupId
     *
     * @return integer 
     */
    public function getPlantGroupId()
    {
        return $this->plantGroupId;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Plant
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set lifecycleId
     *
     * @param integer $lifecycleId
     * @return Plant
     */
    public function setLifecycleId($lifecycleId)
    {
        $this->lifecycleId = $lifecycleId;

        return $this;
    }

    /**
     * Get lifecycleId
     *
     * @return integer 
     */
    public function getLifecycleId()
    {
        return $this->lifecycleId;
    }

    /**
     * Set foliageColorId
     *
     * @param integer $foliageColorId
     * @return Plant
     */
    public function setFoliageColorId($foliageColorId)
    {
        $this->foliageColorId = $foliageColorId;

        return $this;
    }

    /**
     * Set propagation
     *
     * @param string $propagation
     * @return Plant
     */
    public function setPropagation($propagation)
    {
        $this->propagation = $propagation;

        return $this;
    }

    /**
     * Get propagation
     *
     * @return string 
     */
    public function getPropagation()
    {
        return $this->propagation;
    }

    /**
     * Set planting
     *
     * @param string $planting
     * @return Plant
     */
    public function setPlanting($planting)
    {
        $this->planting = $planting;

        return $this;
    }

    /**
     * Get planting
     *
     * @return string 
     */
    public function getPlanting()
    {
        return $this->planting;
    }

    /**
     * Set care
     *
     * @param string $care
     * @return Plant
     */
    public function setCare($care)
    {
        $this->care = $care;

        return $this;
    }

    /**
     * Get care
     *
     * @return string 
     */
    public function getCare()
    {
        return $this->care;
    }

    /**
     * Set originId
     *
     * @param integer $originId
     * @return Plant
     */
    public function setOriginId($originId)
    {
        $this->originId = $originId;

        return $this;
    }

    /**
     * Get originId
     *
     * @return integer 
     */
    public function getOriginId()
    {
        return $this->originId;
    }

    /**
     * Set heightLow
     *
     * @param integer $heightLow
     * @return Plant
     */
    public function setHeightLow($heightLow)
    {
        $this->heightLow = $heightLow;

        return $this;
    }

    /**
     * Get heightLow
     *
     * @return integer 
     */
    public function getHeightLow()
    {
        return $this->heightLow;
    }

    /**
     * Set heightHigh
     *
     * @param integer $heightHigh
     * @return Plant
     */
    public function setHeightHigh($heightHigh)
    {
        $this->heightHigh = $heightHigh;

        return $this;
    }

    /**
     * Get heightHigh
     *
     * @return integer 
     */
    public function getHeightHigh()
    {
        return $this->heightHigh;
    }

    /**
     * Set zoneLowId
     *
     * @param integer $zoneLowId
     * @return Plant
     */
    public function setZoneLowId($zoneLowId)
    {
        $this->zoneLowId = $zoneLowId;

        return $this;
    }

    /**
     * Get zoneLowId
     *
     * @return integer 
     */
    public function getZoneLowId()
    {
        return $this->zoneLowId;
    }

    /**
     * Set zoneHighId
     *
     * @param integer $zoneHighId
     * @return Plant
     */
    public function setZoneHighId($zoneHighId)
    {
        $this->zoneHighId = $zoneHighId;

        return $this;
    }

    /**
     * Get zoneHighId
     *
     * @return integer 
     */
    public function getZoneHighId()
    {
        return $this->zoneHighId;
    }

    /**
     * Set spreadLow
     *
     * @param integer $spreadLow
     * @return Plant
     */
    public function setSpreadLow($spreadLow)
    {
        $this->spreadLow = $spreadLow;

        return $this;
    }

    /**
     * Get spreadLow
     *
     * @return integer 
     */
    public function getSpreadLow()
    {
        return $this->spreadLow;
    }

    /**
     * Set spreadHigh
     *
     * @param integer $spreadHigh
     * @return Plant
     */
    public function setSpreadHigh($spreadHigh)
    {
        $this->spreadHigh = $spreadHigh;

        return $this;
    }

    /**
     * Get spreadHigh
     *
     * @return integer 
     */
    public function getSpreadHigh()
    {
        return $this->spreadHigh;
    }

    /**
     * Set resistsDeer
     *
     * @param boolean $resistsDeer
     * @return Plant
     */
    public function setResistsDeer($resistsDeer)
    {
        $this->resistsDeer = $resistsDeer;

        return $this;
    }

    /**
     * Get resistsDeer
     *
     * @return boolean 
     */
    public function getResistsDeer()
    {
        return $this->resistsDeer;
    }

    /**
     * Set seed
     *
     * @param string $seed
     * @return Plant
     */
    public function setSeed($seed)
    {
        $this->seed = $seed;

        return $this;
    }

    /**
     * Get seed
     *
     * @return string 
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * Set invasivness
     *
     * @param string $invasivness
     * @return Plant
     */
    public function setInvasivness($invasivness)
    {
        $this->invasivness = $invasivness;

        return $this;
    }

    /**
     * Get invasivness
     *
     * @return string 
     */
    public function getInvasivness()
    {
        return $this->invasivness;
    }

    /**
     * Set height_measure
     *
     * @param string $heightMeasure
     * @return Plant
     */
    public function setHeightMeasure($heightMeasure)
    {
        $this->height_measure = $heightMeasure;

        return $this;
    }

    /**
     * Get height_measure
     *
     * @return string 
     */
    public function getHeightMeasure()
    {
        return $this->height_measure;
    }

    /**
     * Set width_measure
     *
     * @param string $widthMeasure
     * @return Plant
     */
    public function setWidthMeasure($widthMeasure)
    {
        $this->width_measure = $widthMeasure;

        return $this;
    }

    /**
     * Get width_measure
     *
     * @return string 
     */
    public function getWidthMeasure()
    {
        return $this->width_measure;
    }

    /**
     * Add attracts
     *
     * @param \PpgwBundle\Entity\Attracts $attracts
     * @return Plant
     */
    public function addAttract(\PpgwBundle\Entity\Attracts $attracts)
    {
        $this->attracts[] = $attracts;

        return $this;
    }

    /**
     * Remove attracts
     *
     * @param \PpgwBundle\Entity\Attracts $attracts
     */
    public function removeAttract(\PpgwBundle\Entity\Attracts $attracts)
    {
        $this->attracts->removeElement($attracts);
    }

    /**
     * Get attracts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttracts()
    {
        return $this->attracts;
    }

    /**
     * Set author
     *
     * @param \PpgwBundle\Entity\User $author
     * @return Plant
     */
    public function setAuthor(\PpgwBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \PpgwBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set editor
     *
     * @param \PpgwBundle\Entity\User $editor
     * @return Plant
     */
    public function setEditor(\PpgwBundle\Entity\User $editor = null)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return \PpgwBundle\Entity\User 
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set plantTypes
     *
     * @param \PpgwBundle\Entity\PlantType $plantTypes
     * @return Plant
     */
    public function setPlantTypes(\PpgwBundle\Entity\PlantType $plantTypes = null)
    {
        $this->plantTypes = $plantTypes;

        return $this;
    }

    /**
     * Get plantTypes
     *
     * @return \PpgwBundle\Entity\PlantType 
     */
    public function getPlantTypes()
    {
        return $this->plantTypes;
    }

    /**
     * Set taxKingdom
     *
     * @param \PpgwBundle\Entity\TaxKingdom $taxKingdom
     * @return Plant
     */
    public function setTaxKingdom(\PpgwBundle\Entity\TaxKingdom $taxKingdom = null)
    {
        $this->taxKingdom = $taxKingdom;

        return $this;
    }

    /**
     * Get taxKingdom
     *
     * @return \PpgwBundle\Entity\TaxKingdom 
     */
    public function getTaxKingdom()
    {
        return $this->taxKingdom;
    }

    /**
     * Set taxPhylum
     *
     * @param \PpgwBundle\Entity\TaxPhylum $taxPhylum
     * @return Plant
     */
    public function setTaxPhylum(\PpgwBundle\Entity\TaxPhylum $taxPhylum = null)
    {
        $this->taxPhylum = $taxPhylum;

        return $this;
    }

    /**
     * Get taxPhylum
     *
     * @return \PpgwBundle\Entity\TaxPhylum 
     */
    public function getTaxPhylum()
    {
        return $this->taxPhylum;
    }

    /**
     * Set taxClass
     *
     * @param \PpgwBundle\Entity\TaxClass $taxClass
     * @return Plant
     */
    public function setTaxClass(\PpgwBundle\Entity\TaxClass $taxClass = null)
    {
        $this->taxClass = $taxClass;

        return $this;
    }

    /**
     * Get taxClass
     *
     * @return \PpgwBundle\Entity\TaxClass 
     */
    public function getTaxClass()
    {
        return $this->taxClass;
    }

    /**
     * Set taxOrder
     *
     * @param \PpgwBundle\Entity\TaxOrder $taxOrder
     * @return Plant
     */
    public function setTaxOrder(\PpgwBundle\Entity\TaxOrder $taxOrder = null)
    {
        $this->taxOrder = $taxOrder;

        return $this;
    }

    /**
     * Get taxOrder
     *
     * @return \PpgwBundle\Entity\TaxOrder 
     */
    public function getTaxOrder()
    {
        return $this->taxOrder;
    }

    /**
     * Set plantGroup
     *
     * @param \PpgwBundle\Entity\PlantGroup $plantGroup
     * @return Plant
     */
    public function setPlantGroup(\PpgwBundle\Entity\PlantGroup $plantGroup = null)
    {
        $this->plantGroup = $plantGroup;

        return $this;
    }

    /**
     * Get plantGroup
     *
     * @return \PpgwBundle\Entity\PlantGroup 
     */
    public function getPlantGroup()
    {
        return $this->plantGroup;
    }

    /**
     * Add light
     *
     * @param \PpgwBundle\Entity\Light $light
     * @return Plant
     */
    public function addLight(\PpgwBundle\Entity\Light $light)
    {
        $this->light[] = $light;

        return $this;
    }

    /**
     * Remove light
     *
     * @param \PpgwBundle\Entity\Light $light
     */
    public function removeLight(\PpgwBundle\Entity\Light $light)
    {
        $this->light->removeElement($light);
    }

    /**
     * Get light
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLight()
    {
        return $this->light;
    }

    /**
     * Add soil
     *
     * @param \PpgwBundle\Entity\Soil $soil
     * @return Plant
     */
    public function addSoil(\PpgwBundle\Entity\Soil $soil)
    {
        $this->soil[] = $soil;

        return $this;
    }

    /**
     * Remove soil
     *
     * @param \PpgwBundle\Entity\Soil $soil
     */
    public function removeSoil(\PpgwBundle\Entity\Soil $soil)
    {
        $this->soil->removeElement($soil);
    }

    /**
     * Get soil
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSoil()
    {
        return $this->soil;
    }

    /**
     * Set lifecycle
     *
     * @param \PpgwBundle\Entity\Lifecycle $lifecycle
     * @return Plant
     */
    public function setLifecycle(\PpgwBundle\Entity\Lifecycle $lifecycle = null)
    {
        $this->lifecycle = $lifecycle;

        return $this;
    }

    /**
     * Get lifecycle
     *
     * @return \PpgwBundle\Entity\Lifecycle 
     */
    public function getLifecycle()
    {
        return $this->lifecycle;
    }

    /**
     * Add bloomTimes
     *
     * @param \PpgwBundle\Entity\BloomTime $bloomTimes
     * @return Plant
     */
    public function addBloomTime(\PpgwBundle\Entity\BloomTime $bloomTimes)
    {
        $this->bloomTimes[] = $bloomTimes;

        return $this;
    }

    /**
     * Remove bloomTimes
     *
     * @param \PpgwBundle\Entity\BloomTime $bloomTimes
     */
    public function removeBloomTime(\PpgwBundle\Entity\BloomTime $bloomTimes)
    {
        $this->bloomTimes->removeElement($bloomTimes);
    }

    /**
     * Get bloomTimes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBloomTimes()
    {
        return $this->bloomTimes;
    }

    /**
     * Set foliageColor
     *
     * @param \PpgwBundle\Entity\FoliageColor $foliageColor
     * @return Plant
     */
    public function setFoliageColor(\PpgwBundle\Entity\FoliageColor $foliageColor = null)
    {
        $this->foliageColor = $foliageColor;

        return $this;
    }

    /**
     * Get foliageColor
     *
     * @return \PpgwBundle\Entity\FoliageColor 
     */
    public function getFoliageColor()
    {
        return $this->foliageColor;
    }

    /**
     * Add flowerColor
     *
     * @param \PpgwBundle\Entity\FlowerColor $flowerColor
     * @return Plant
     */
    public function addFlowerColor(\PpgwBundle\Entity\FlowerColor $flowerColor)
    {
        $this->flowerColor[] = $flowerColor;

        return $this;
    }

    /**
     * Remove flowerColor
     *
     * @param \PpgwBundle\Entity\FlowerColor $flowerColor
     */
    public function removeFlowerColor(\PpgwBundle\Entity\FlowerColor $flowerColor)
    {
        $this->flowerColor->removeElement($flowerColor);
    }

    /**
     * Get flowerColor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFlowerColor()
    {
        return $this->flowerColor;
    }

    /**
     * Add pests
     *
     * @param \PpgwBundle\Entity\Pests $pests
     * @return Plant
     */
    public function addPest(\PpgwBundle\Entity\Pests $pests)
    {
        $this->pests[] = $pests;

        return $this;
    }

    /**
     * Remove pests
     *
     * @param \PpgwBundle\Entity\Pests $pests
     */
    public function removePest(\PpgwBundle\Entity\Pests $pests)
    {
        $this->pests->removeElement($pests);
    }

    /**
     * Get pests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPests()
    {
        return $this->pests;
    }

    /**
     * Add diseases
     *
     * @param \PpgwBundle\Entity\Diseases $diseases
     * @return Plant
     */
    public function addDisease(\PpgwBundle\Entity\Diseases $diseases)
    {
        $this->diseases[] = $diseases;

        return $this;
    }

    /**
     * Remove diseases
     *
     * @param \PpgwBundle\Entity\Diseases $diseases
     */
    public function removeDisease(\PpgwBundle\Entity\Diseases $diseases)
    {
        $this->diseases->removeElement($diseases);
    }

    /**
     * Get diseases
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDiseases()
    {
        return $this->diseases;
    }

    /**
     * Set origin
     *
     * @param \PpgwBundle\Entity\Country $origin
     * @return Plant
     */
    public function setOrigin(\PpgwBundle\Entity\Country $origin = null)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return \PpgwBundle\Entity\Country 
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set zoneLow
     *
     * @param \PpgwBundle\Entity\HardinessZone $zoneLow
     * @return Plant
     */
    public function setZoneLow(\PpgwBundle\Entity\HardinessZone $zoneLow = null)
    {
        $this->zoneLow = $zoneLow;

        return $this;
    }

    /**
     * Get zoneLow
     *
     * @return \PpgwBundle\Entity\HardinessZone 
     */
    public function getZoneLow()
    {
        return $this->zoneLow;
    }

    /**
     * Set zoneHigh
     *
     * @param \PpgwBundle\Entity\HardinessZone $zoneHigh
     * @return Plant
     */
    public function setZoneHigh(\PpgwBundle\Entity\HardinessZone $zoneHigh = null)
    {
        $this->zoneHigh = $zoneHigh;

        return $this;
    }

    /**
     * Get zoneHigh
     *
     * @return \PpgwBundle\Entity\HardinessZone 
     */
    public function getZoneHigh()
    {
        return $this->zoneHigh;
    }

    /**
     * Add propagationMethod
     *
     * @param \PpgwBundle\Entity\PropagationMethod $propagationMethod
     * @return Plant
     */
    public function addPropagationMethod(\PpgwBundle\Entity\PropagationMethod $propagationMethod)
    {
        $this->propagationMethod[] = $propagationMethod;

        return $this;
    }

    /**
     * Remove propagationMethod
     *
     * @param \PpgwBundle\Entity\PropagationMethod $propagationMethod
     */
    public function removePropagationMethod(\PpgwBundle\Entity\PropagationMethod $propagationMethod)
    {
        $this->propagationMethod->removeElement($propagationMethod);
    }

    /**
     * Get propagationMethod
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPropagationMethod()
    {
        return $this->propagationMethod;
    }

    /**
     * Get foliageColorId
     *
     * @return integer 
     */
    public function getFoliageColorId()
    {
        return $this->foliageColorId;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Plant
     */
    public function setSlug($slug)
    {
        $this->slug = $this->slugify($slug);

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
