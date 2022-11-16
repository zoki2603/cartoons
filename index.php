<?php 


// cartoon caracter can walk and jump
// based on their type they make different sounds
// The Simpsons have their catch phrase, as well as Loonie Tunes and Disney characters
// SchoolKids are type of Simpsons, Rabbits are part of Loonie Tunes and princesses are part of the Disneys
// Learning is reading and memorizing
// Playing is running
// Going back to life is standingUp and shinning
// SchoolKids can play and learn, Rabits can play, princesses can do all
// make Bart, Bugs Bunny and Cinderella as instances



abstract class CartoonCaracter{
  
    function walk(){
        echo "I never walk alone";
    }
    function jump(){
        echo "jump around";
    }
    abstract function typeOfSound();

}
interface Learning{
    function reading();
    function memorizing();
}
interface Playing{
    function running();
}

interface GoingBackToLife{
    function standingUp();
    function shinning();
}

class Simpsons implements Learning,Playing{
    
	
	public function reading() {
        echo" I will never lie again";
	}
	
	
	public function memorizing() {
	}
	
	
	public function running() {
	}
}
class LoonieTunes implements Playing{
    
	
	public function running() {
        echo "I'm the fastest";
	}
}
class Disneys implements Learning,Playing,GoingBackToLife{
    
	
	public function reading() {
	}
	
	public function memorizing() {
        echo " I remember everything";
	}
	
	
	public function running() {
	}
	

	public function standingUp() {
	}
	
	
	public function shinning() {
	}
}
    

class Bart extends CartoonCaracter{
    
	public Simpsons $schoolKids;
    public function getSimpsonsActiviti()
    {
        return $this->schoolKids;
    }
    public function setSimpsonsActiviti($schoolKids)
    {
        $this->schoolKids =$schoolKids;
    }

	public function typeOfSound() {
        echo "Haa Bart Simpson Style";
	}
}
class BugsBunny extends CartoonCaracter{
    
public LoonieTunes $rabbit;
public function getRabbits()
{
    return $this->rabbit;
}
public function setRabbits($rabbit)
{
    $this->rabbit =$rabbit;
}
	public function typeOfSound() {
        echo "What's up, Doc?";
	}
}
class  Cinderella extends CartoonCaracter{
    public Disneys $princes;
    public function getPrinces()
    {
        return $this->princes;
    }
    public function setPrinces($princes)
    {
        $this->princes =$princes;
    }

	public function typeOfSound() {
        echo "She lost her shoe";
	}
}
$simpsons = new Simpsons();
$bart = new Bart();
$bart->walk();
$bart->typeOfSound();
$bart->setSimpsonsActiviti($simpsons);
$bart->getSimpsonsActiviti()->reading();

$cinderella = new Cinderella();
$disney = new Disneys();
$cinderella->setPrinces($disney);
$cinderella->getPrinces()->memorizing();

$rabbit = new BugsBunny();
$loonieTunes = new LoonieTunes();
$rabbit->setRabbits($loonieTunes);
$rabbit->getRabbits()->running();