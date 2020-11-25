<?php
namespace test;

require_once('../uteis/vendor/autoload.php');
require_once('../models/Prospect.php');
require_once('../controllers/Prospect/ControllerProspect.php');

use controllers\ControllerProspec;
use PHPUnit\Framework\TestCase;
use models\Prospect;
use controllers\ControllerProspect;

class ControllerProspectTest extends TestCase{
    /** @test */

 public function testincluirProspect(){

    $ctrlProspect = new ControllerProspec();
    

  try{
     $this->assertEquals(
        TRUE,
        $ctrlProspect->SalvarProspect("Leandro Machado", "leandro@gmail.com","(49)96632-7854", "leandro", "49991165592")
     );
  }catch(\Exception $e){
     $this->fail($e->getMessage());
  }

}
public function testexcluirProspect(){

    $ctrlProspect = new ControllerProspec();

    try {
        $ctrlProspect->excluirProspect();
    } catch (\Exception $e) {
       throw new \Exception($e->getMessage());
    }
 }
 public function testbuscarProspects(){
    $ctrlProspect= new ControllerProspec();
    try {
        $ctrlProspect->buscarProspects();
     } catch (\Exception $e) {
        throw new \Exception($e->getMessage());
     }

 }

}
?>

