<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use PpgwBundle\Entity\User;

class UserFixtures extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;
    
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setUsernameCanonical('admin');
        $user->setEmail('patrick.hollis@gmail.com');
        $user->setEmailCanonical('patrick.hollis@gmail.com');
        $user->setEnabled(true);
        
//        $user->setSalt(md5(uniqid()));
        $encoder = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($user)
        ;
        $user->setPassword($encoder->encodePassword('admin', $user->getSalt()));
        
        $user->setLastLogin(new \DateTime());
        $user->setLocked(false);
        $user->setExpired(false);
        $user->setExpiresAt(null);
        $user->setConfirmationToken('1234567890abcdefg');
        $user->setPasswordRequestedAt(null);
//        $user->setRoles(null);
        $user->setCredentialsExpireAt(null);
        $user->setCredentialsExpired(false);
        $user->setName('SuperAdmin');
        $manager->persist($user);
        
        $manager->flush();
        
        $this->addReference('user_1', $user);
        
    }
    
    public function getOrder()
    {
        return 1;
    }
}