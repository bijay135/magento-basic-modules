<?php
namespace Bijay\VirtualType\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\ObjectManagerInterface;
use Bijay\VirtualType\Traits\ObjectReport;

class Testbed extends Command {
    use ObjectReport;
    
    protected $om;
    public function __construct(ObjectManagerInterface $om) {
        $this->om = $om;
        return parent::__construct();
    }
    
    protected function configure() {
        $this->setName("ps:virtual-type");
        $this->setDescription("Placeholder");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->output = $output;
        // $output->writeln("Installed Bijay_VirtualType!");
        $this->showNestedPropertiesForObject();
    }

    protected function getObjectManager() {
        return $this->om;
    }
    protected function showNestedPropertiesForObject() {
        $object_manager = $this->getObjectManager();        
        $example         = $object_manager->create('Bijay\VirtualType\Model\Example');
        $this->output("First, we'll report on the Bijay\VirtualType\Model\Example object");
        $properties     = get_object_vars($example);        
        foreach($properties as $name=>$property)  {
            $this->reportOnVariable($name, $property);       
        }  
        
        $this->output("Next, we're going to report on the Example object's one property (an Argument1 class)");  
        $properties     = get_object_vars($example->property_of_example_object);        
        foreach($properties as $name=>$property)  {
            $this->reportOnVariable($name, $property);       
        }  
        
        $this->output("Finally, we'll report on an Argument1 object, instantiated seperate from Example");          
        $argument1  = $object_manager->create('Bijay\VirtualType\Model\Argument1');
        $properties = get_object_vars($argument1);        
        foreach($properties as $name=>$property)  {
            $this->reportOnVariable($name, $property);       
        }          
    }                     
} 