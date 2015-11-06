<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\Pests;

class PestsFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Adelgids';
        $array[0]['description'] = 'Relatives of aphids, these insect pests can damage
        
        the tender growth of trees by sucking out the plant\'s juices. Adelgids feed only on conifers, including Douglas fir, hemlock, larch, pine and spruce. They can produce white, cottony tufts on bark, branches, twigs, needles or cones of host plants; and cone shaped galls or swollen twigs on spruce and fir. When present in large numbers, adelgids may cause yellowing and early dropping of needles and dieback of terminals. They can retard or kill trees, although vigorous plants can usually tolerate moderate adelgid populations.

Control adelgid populations by directing a forceful stream of water at cottony masses, particularly those left on the trunk of host trees. Clip and dispose of swollen twigs or foliage damaged by galls before insects emerge. Prevent recurring problems by applying a narrow-range horticultural oil in the spring; be advised, however, that this method may discolor spruce foliage. Avoid excessive fertilization and quick release formulations that will produce flushes of succulent new growth preferred by adelgids.';
        
        $array[1]['name'] = 'Ants';
        $array[1]['description'] = 'Ants are attracted to the sticky honeydew secreted by aphids, leafhoppers, mealybugs, whiteflies and scale insects. While not problematic in and of itself, the presence of ants in your garden may indicate and/or exacerbate aphid problems. See Aphids, Hoppers, Mealybugs, Scales and Whiteflies.

Specific recommendations for fruit trees. To prevent ants from entering the foliage crowns of fruit trees, where they may aggravate aphid problems, use a 4-inch wide strip of polyester fiber matting to snugly surround the trunk, covered by a 4-inch wide strip of household plastic wrap. Smear this with a sticky substance such as Ant-Bar. The barrier will stretch as the tree grows, but once it splits, replace it.';
        
        $array[2]['name'] = 'Aphids';
        $array[2]['description'] = 'These small, soft-bodied, pear-shaped insects suck the juices from leaves and stems. The foliage of infested plants will show pale or yellow spots. Whole leaves may turn yellow or brown, or may be curled, puckered, or stunted. Flower buds may be seriously damaged and the blossoms distorted. Check for clusters of these common pests on the underside of leaves or clustered on new buds, tender stems and young leaves.

Spray infested plants vigorously with water once every other morning to knock these pests from your plants, making sure to get the undersides of the leaves. If the problem persists after three such treatments, use insecticidal soap, garlic spray, or hot pepper spray every 3 to 5 days for 2 weeks. Plants that are frequently damaged by aphids can be dusted with diatomaceous earth, or treated with the following botanical poisons: pyrethrum mixed with isopropyl alcohol at a rate of one tablespoon of alcohol per pint of prepared pyrethrum).

Many beneficial insects feed on aphids, including green lacewings, ladybugs, aphid midges, and braconid or chalcid wasps. These are all available commercially. Prevent future infestations with a thorough cleanup of your flower beds in the fall. This can eliminate aphid eggs that may overwinter on leaf litter or twigs of trees and shrubs.';
        
        $array[3]['name'] = 'Bees';
        $array[3]['description'] = 'Bees, particularly the domesticated honeybee, are among the most beneficial of garden insects, since they are efficient, dependable pollinators. While large numbers of bees visiting flower beds or flowering fruit crops may intimidate some gardeners, bees are unlikely to sting unless threatened in some way. Therefore, don\'t swat at bees. If a bee lands on you, stay calm and do not move quickly; if it lingers beyond your limits of tolerance, brush it off gently with a piece of paper. You can further prevent bee stings by avoiding perfumes and other heavily-scented toiletries, brightly colored and patterned clothing, and going barefoot in or near the garden. Persons allergic to bee stings should remain away from areas where bees are active, and should consult a physician regarding medication available on prescription for emergency treatment of stings.

The terms bee, hornet and wasp are often used interchangeably--and thus incorrectly. Yellow jackets, for example are wasps; for information about them and other related species, see wasps.';
        
        $array[4]['name'] = 'Beetles';
        $array[4]['description'] = 'Beetles may be found feeding on the leaves, flowers and fruit, in the stem or trunk of a plant or on the plant\'s roots. In many cases both adults and larvae can cause plant damage. Following are the major groups of beetles that feed on plants.';
        
        $array[5]['name'] = 'Caddisflies';
        $array[5]['description'] = 'A variety of insect pests, as well as mites and snails, attack water garden plants. Many are the same kinds of pests that attack other ornamental, garden, and vegetable plants, pests such as spider mites, aphids, beetles, borers, leaf miners, leaf rollers, whiteflies, leafhoppers, and moth larvae. Other pests, such as caddis fly larvae and water snails, are peculiar to water plants.

All of these pests, familiar and otherwise, present special treatment challenges when found in or adjacent to water features. Many ponds include fauna as well as flora. Fish, amphibians, and other desirable fauna, including desirable insects, may be harmed or killed by some pesticides normally used for pest control. Some water plants also can be damaged or killed by pesticides commonly used on non water-garden plants.

While most ponds and water gardens, once established, can do quite well with minimum pest management intervention, all aquatic, shoreline and marginal water side plants are subject to attack. Newly established ponds and those that have been cleaned and refilled are most vulnerable.';
        
        $array[6]['name'] = 'Caterpillars';
        $array[6]['description'] = 'Caterpillars are the larvae of moths and butterflies and can be very destructive to plants. Many feed on the surface or foliage of plants but others bore into the stems and trunks of plants where they are hidden and often difficult to control. Others, for example cutworms, may spend their days in the ground but come out at night to cut seedlings off at soil level or climb plants and cut and remove leaves. Still other caterpillars form homes by tying leaves together, creating bags from foliage or forming webs. Following are the major groups of caterpillars that are pests of plants. Many caterpillars do little feeding damage and do not warrant control. The adults of caterpillars are moths and butterflies. Some are very showy. Others are not.';
        
        $array[7]['name'] = 'Centipedes and millipedes';
        $array[7]['description'] = 'Millipedes and centipedes are not insects but distant relatives of lobsters, crayfish and shrimp. They are land dwellers, but they prefer moist areas with high humidity. They carry no diseases to man, animals or plants. They are considered more as nuisances than destructive pests, and are beneficial in the garden.';
        
        $array[8]['name'] = 'Cicadas';
        $array[8]['description'] = 'Cicadas are sizable, noisy insects with stout bodies, wide blunt heads, and large transparent wings. They emerge from the soil in mid to late summer, and spend much of their time thereafter in trees, where they molt and issue their sometimes startlingly loud mating calls. Some species\' populations fluctuate cyclically. None cause serious damage to more mature trees in your yard and garden though small trees, especially young orchard trees, may suffer significant damage.';
        
        $array[9]['name'] = 'Crickets';
        $array[9]['description'] = 'These nocturnal insects may do more than chirp at night: they can also become home and garden pests during late summer and early fall. In the garden, they may feed on the tender seedlings of your late season crops, as well as on almost any part of any garden plant when they are numerous enough. At this point they may also enter homes for shelter or food, particularly when vegetation becomes dry or scarce or as cold weather approaches. Once inside, they may feed on clothing and fabrics spotted or stained by spilled food or perspiration, leaving frayed holes in their wake. Pesticidal soaps such as Safers, and insecticidal dusts such as diatomaceous earth and boric acid are effective in controlling crickets. Exclude crickets from homes with tightly-fitting doors, windows and screens. Since crickets are attracted to light, consider installing yellow, non-attractive light bulbs near potential access areas.';
        
        $array[10]['name'] = 'Earwigs';
        $array[10]['description'] = 'Earwigs are reddish brown with short, leathery forewings and pincers on the tip of the abdomen, and measure about 3/4 inch long. Although they can be pests in their own right, earwigs deserve more widespread recognition as beneficial predators. They help control the common aphid as well as the particular aphid species that attacks apple, plum, pear, spirea, dogwood, flowering crabapple, and flowering quince, among others. While it is true that they may inflict minor damage in the garden, particularly to seedlings, their presence is generally far more beneficial than detrimental.';
        
        $array[11]['name'] = 'Earthworms';
        $array[11]['description'] = 'Scientists have long recognized the importance of earthworms to soil fertility, aeration, and the health of good soil. Their presence should be encouraged. As they tunnel deep into the soil, they feed on organic matter. Their digestive tracks are highly adapted to its burrowing and feeding on the soil that passes through their body. As the soil passes through the digestive track, digestive fluids containing enzymes are secreted that release amino acids, sugars, and other organic nutritive products from the decomposed plant and animal materials swallowed.

When the worms rise to the soil surface, they excrete nutrients in the form of casts. Casts contain considerable amounts of carbon, nitrogen, phosphorus, and potassium which are all essential nutrients for plants.

Many earthworm species occur in our Midwest soils, each adapted to specific habitats. Nightcrawlers are the most familiar and dwell deep in the soil. At night they come to the surface and feed on leaves and other organic material but during the heat of the day they retreat to deep soil burrows. They can not tolerate temperatures higher than 55 degrees F. They produce the large castings often seen in yards.

Other worms commonly known as garden worms, field worms, manure worms, or angleworms, are also found in garden soils. These worms are found mostly in manure piles, compost piles or in soils containing large quantities of organic matter. They can live at relatively low oxygen and high carbon dioxide levels, and survive in water if the water contains dissolved oxygen.

The commonly used insecticide carbaryl and the fungicide copper sulfate are highly toxic to earthworms.';
        
        $array[12]['name'] = 'Flies';
        $array[12]['description'] = 'Adult flies cause little or no damage to plants but the larvae (maggots) of many feed on plants by tunneling into leaves, stems, fruits and roots. Following are the major categories of fly larvae that damage plants.';
        
        $array[13]['name'] = 'Grasshoppers';
        $array[13]['description'] = 'Grasshoppers can be green or brown, and range from under 2 inches to over 4 inches in length. All are distinguished by their large, chewing jaws and are tremendous jumpers. While they gained notoriety as the plague of dust bowl farmers, nowadays grasshoppers are not a major pest for most gardeners. They actually prefer grasses, clovers and some weeds to prized flowers and garden vegetables. However, if drought renders their favored foods scarce and there are sufficient numbers present, grasshoppers may strip the leaves and stems of your crops.

Fortunately, grasshopper populations are usually kept in check by a number of predators and parasites, which includes frogs, toads, birds, cats, skunks, coyotes, and even yellow jackets and hornets. If there are not enough of these natural controls in your environment, you can also use commercially available parasitic protozoa marketed as "NOLO Bait" or "Grasshopper Attack" or insecticidal soap to reduce their numbers. Bifenthrin is also effective.';
        
        $array[14]['name'] = 'Hoppers and leafhoppers';
        $array[14]['description'] = 'Hoppers are generally 1/4 to 1/3 inch long, and are green, brown or yellow, often with colorful wing markings. They are easily distinguished by their wedge-shaped wings held in a roof like position over their bodies.

In both their nymph and adult stages, hoppers suck juices from plant leaves, buds and stems, and remove chlorophyll from plant cells. They thus weaken plants, and furthermore may spread viral diseases. Leaves may display such symptoms of hopper damage as white or yellow mottling, distortion, discoloration, shriveling and/or dropping. Check also for honeydew excreted in large amounts, which may encourage growth of sooty black mold. The list of vulnerable flowers and vegetables is fairly extensive, and includes, respectively: annual aster, baby\'s breath, coreopsis, cosmos, dahlia, marigold, nasturtium, petunia, poppy, rose, salvia and zinnia; beans (lima and snap), beets, carrots, celery, chard, citrus, eggplants, lettuce, potatoes, raspberries, rhubarb, spinach, squash (summer and winter), tomatoes, and most fruit trees.';
        
        $array[15]['name'] = 'Katydids';
        $array[15]['description'] = 'Katydids are members of the grasshopper family, and can be distinguished by their long "horns," bright green color, and by the male\'s loud, shrill call which sounds like "Katy did" and thus has earned them their onomatopoeic name. They do not pose any particular problem for the home gardener, but do feed on shrub and tree foliage.';
        
        $array[16]['name'] = 'Lace bugs';
        $array[16]['description'] = 'If heavily infested, the leaves may turn yellow and fall from trees and shrubs. The lace bug feeding mechanism is one that pierces and sucks the plant juices from leaves. This leaves tiny chlorotic flecks on the upper leaf surface. The underside of the leaves will have adults and spiny, dark-colored nymphs. The underside of leaves will look dirty with dark-brown spots and stains. When disturbed, lace bugs exhibit a peculiar bouncing movement.';
        
        $array[17]['name'] = 'Mealybugs';
        $array[17]['description'] = 'Male mealybugs resemble tiny flies. Females are wingless and covered with a powdery wax. When masses of them feed on stems, leaves and fruits, they resemble gobs of moldy cotton. They are related to aphids, psyllids and phylloxera, and cause similar problems: they damage plants by sucking their juices and spreading diseases, and the honeydew they secrete invites sooty fungus, thereby hampering photosynthesis. Ants spread mealybugs from plant to plant, and furthermore protect them from many natural enemies.';
        
        $array[18]['name'] = 'Mites';
        $array[18]['description'] = 'Minute red, black or brown mites are closely related to spiders, hence their common label of "spider mites." They attack just about anything in your flower or vegetable garden, including fruit crops. They especially like cucurbits, beans and tomatoes. In addition, plants on the inside of your house often fall victim to the indiscriminate mite. Mites feed on plants by sucking out plant juices, leaving leaves stippled, yellow and dry, or with pale yellow spots or blotches. They also suck chlorophyll out of leaves, causing small white dots to appear. Finally, they inject toxins into the leaves, discoloring and distorting them. If you notice any of the above symptoms, or fine webbing covering leaves, shoots and flowers, your plant is probably infested with mites. Since they are almost invisible to the naked eye, you can confirm your suspicion through examination of the undersides of the leaves with a magnifying glass. Tap a few leaves or a small branch tip against a sheet of white paper and look for the tiny culprits crawling on the paper.';
        
        $array[19]['name'] = 'Phylloxeras';
        $array[19]['description'] = 'Phlloxera are tiny, yellowish insects that suck sap from the underside of leaves, particularly on oak species, producing tiny, irregular brown and yellow spots. Damage is primarily aesthetic and is not serious. Either tolerate this pest or apply insecticidal soap to the Underside of affected leaves before they become severely spotted.';
        
        $array[20]['name'] = 'Plant bugs';
        $array[20]['description'] = 'Plant bugs comprise a number of species, all "true bugs" in that they belong to the Order Hemiptera. Most are easily distinguished by the unpleasant protective odor they emit when threatened. Although some of these bugs are of minor importance for the home gardener, other species can cause serious injury when present in large numbers. The following potentially problematic species will be treated below in the order given: chinch bugs, harlequin bugs, squash bugs, stink bugs, and tarnished plant bugs. Both the nymphs and adults of these species damage their plant host by sucking its juices.';
        
        $array[21]['name'] = 'Psyllids';
        $array[21]['description'] = 'These insect pests, similar to aphids, can damage the tender growth of trees by sucking out the plant\'s juices. They also secrete honeydew that coats leaves and may encourage the growth of a sooty black mold. Symptoms of damage include yellowing and dropping leaves.';
        
        $array[22]['name'] = 'Sawflies';
        $array[22]['description'] = 'Sawfly larvae are often confused with caterpillars but it is important to distinguish between them as controls that work for caterpillars may not be effective against sawfly larvae. Most commonly sawfly larvae are found feeding on foliage but some also bore or mine into stems, trunks and leaves. Following are the two most important categoies of sawflies, which are pests of plants.';
        
        $array[23]['name'] = 'Scale';
        $array[23]['description'] = 'Scales are sucking insects closely related to aphids, mealybugs and whiteflies. Like their counterparts, their mouthparts are fused into a slender tube, or stylet, that is used to pierce the plant surface. After hatching, the young scales wander over the plant searching for a spot in which to settle and begin producing their distinctive shell coverings. As adults, they are sedentary; only a few species have the ability to move.';
        
        $array[24]['name'] = 'Slugs and snails';
        $array[24]['description'] = 'Slugs are soil-dwelling creatures closely related to snails, clams, and other members of the phylum Mollusca. They are not insects, but they do feed on a wide variety of ornamentals and vegetables. The succulent tissues of young seedlings and bulbs are especially susceptible to slug damage. Groundcovers and hostas found in moist, shady areas of the garden are also slug favorites.';
        
        $array[25]['name'] = 'Sowbugs and pillbugs';
        $array[25]['description'] = 'Sowbugs (Porcellio laevis) and pillbugs or roly-polies (Armadillidium vulgare), sometimes called “woodlice” are outdoor creatures that are often mistaken to be insects. They range in size from ¼ to ½ inch long and are dark to slate grey with seven pairs of legs. Sowbugs have a pair of tail like appendages but pillbugs do not. Pillbugs can roll into a ball when disturbed. This behavior has given them the common name of “roly-polies”

Sowbugs and pillbugs live their lives in moist environments. Common places for them to live would be under mulch, compost, stones, flowerpots and other places on damp ground. Some places the creatures may explore would be damp basements and first floor levels and garages. Points of entry may be door thresholds and cracks. They do not bite people or damage structures. However they can damage plants in a greenhouse in high numbers. Sowbugs and pillbugs are scavengers and their main source of food is decaying organic matter. They do not survive indoors for more than a day or two without moist conditions.

They are actually crustaceans that have adapted to living their life on land. They are closely related to lobsters, shrimp and crayfish and have gills.';
        
        $array[26]['name'] = 'Spittlebugs';
        $array[26]['description'] = 'Adult spittlebugs resemble robust leafhoppers (see Hoppers and Planthoppers) with many varied color patterns. They deposit eggs in rows between sheaths and stems of plants near the soil surface. Yellow nymphs become green as they reach full development. The nymphs form the namesake spittle by mixing air with the excretion of their alimentary canal. While perhaps unsightly, this most obvious symptom of the spittlebug\'s presence is not harmful to the host plant. Injury is caused rather by both nymphs and adults, who remove plant juices with their piercing-sucking mouthparts. Resulting damage includes stunted growth, shortened internodes, dwarfing, and a general loss of vitality. Strawberries, nursery stock, and legume forage crops are the spittlebug\'s favored hosts. Control infestations with insecticidal soap, preferably before adults begin laying eggs. Alternately, nymphs can be easily handpicked from small strawberry patches or dislodged by a jet of water.';
        
        $array[27]['name'] = 'Termites';
        $array[27]['description'] = 'While certainly a concern for the homeowner, termites seldom pose problems for the home gardener, since wood and paper are the best sources of cellulose, their primary nutrient. Occasionally, however, termites may tunnel through the woody stems of geraniums, causing plants to turn yellow and die for no apparent reason. Dig up and destroy infested plants, and check wooden structures nearby for termite infestations. Unfortunately, if termites are making a meal of these structures, the services of a licensed pest control operator are usually needed, since termites have not been successfully controlled with any methods other than chemical control. Look for a reputable firm that will guarantee its work.';
        
        $array[28]['name'] = 'Thrips';
        $array[28]['description'] = 'Because they are tiny (only about 1/25" long) and difficult to see, thrips are most obvious through what they leave behind, for example, dark, fecal pellets and whitened, desiccated plant tissue resulting from mass feedings. With magnification, you can identify the adults as elongated, slim insects which range in color from yellow to black and have double, fringed wings; nymphs are even smaller, wingless, and range in color from yellow to white. Eggs are inserted into leaves, fruit, or stems. Nymphs and adults puncture flower buds, leaves and stems with their single large mandible then slurp the plant juices that seep from the wound.';
        
        $array[30]['name'] = 'Wasps';
        $array[30]['description'] = 'Most wasps are beneficial or nuisance insects but a few can cause damage to plants. Noteworthy among these are those wasps that strip bark from poplars, willows, birch, mountain-ash, boxwood or lilac to use for forming their paper nests. The giant hornet is also a pest of dahlias when it gnaws at the base of the plant, which can completely girdle the stem.

A number of wasps are beneficial to the home gardener, among them the parasitic trichogramma wasps, braconid wasps, and chalcid wasps. These wasps parasitize hundreds of different garden pests, from aphids, scale and mealybugs to the larvae of many beetles, moths and butterflies. These beneficial wasps are found throughout North America, and you can try luring them to your garden by providing the small-blossomed, single-blooming flowers upon which they rely for nectar. These wasps are also available commercially. Even more fortunately for the home gardener, they do not sting!';
        
        $array[31]['name'] = 'Whiteflies';
        $array[31]['description'] = 'If your plants are becoming weak and the leaves a yellow and dying, give them a good shake. If they release hordes of what appears to be flying dandruff, you have a whitefly problem (Note: in western states, leafhoppers are also called whiteflies.) Even without a good shaking out, whiteflies are clearly visible on plants. The adult is approximately the size of a pinhead, mothlike, dusty and white winged. The nymph is yellowish, legless, flat and oval; it may resemble scale at certain stages. The yellow, cone shaped eggs are laid on the underside of leaves. Both the nymphs and adult whiteflies weaken plants by sucking juices from leaves, buds and stems. In addition to being general weakened with yellowed, dying foliage, affected plants and fruit may be undersized and poorly colored. Another indication of a whitefly infestation is shiny, sticky honeydew covering fruit and leaves, an excretion which furthermore encourages growth of black fungus. Most fruits and vegetables are vulnerable to whitefly damage, and they are also common greenhouse pests.';
                
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new Pests();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('pests_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 16;
    }
    
}