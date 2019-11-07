<?php
declare(strict_types=1);
namespace Project\App;
use Quid\Base\Html;
use Quid\Core;

// home
// class for the home route of the app
class Home extends Core\Route\Home
{
    // config
    public static $config = [];


    // trigger
    final public function trigger()
    {
        $r = $this->docOpen();
        $r .= Html::h1('Hello World');
        $r .= $this->docClose();

        return $r;
    }
}
?>