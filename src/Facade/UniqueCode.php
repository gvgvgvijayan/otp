<?php 

// Define namespace
namespace Lakshmaji\UniqueCode\Facade;
 
// Include namespace
use Illuminate\Support\Facades\Facade;
 
/**
 * UniqueCode - Facade to support integration with Laravel framework 
 *
 * @package  UniqueCode
 * @version  1.0.1
 * @since    Class available since Release 1.0.0
 * @author   lakshmaji <lakshmajee88@gmail.com>
 */ 
class UniqueCode extends Facade {
 
    protected static function getFacadeAccessor() { return 'uniquecode'; }
 
}
// end of class UniqueCode
// end of file UniqueCode.php