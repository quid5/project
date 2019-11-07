<?php
declare(strict_types=1);
namespace Project;
use Quid\Core;

// boot
// class for booting the application
class Boot extends Core\Boot
{
    // config
    public static $config = [
        'types'=>['app'],
        'version'=>['app'=>'1.0'],
        'lang'=>['en'],
        '@app'=>[
            'config'=>[
                Core\Route::class=>[
                    'docOpen'=>[
                        'head'=>[
                            'css'=>[
                                'type'=>'css/%type%.css'],
                            'js'=>[
                                'type'=>'js/%type%.js']]]]],
            'compileScss'=>[
                '[publicCss]/app.css'=>[
                    0=>'[scss]/app/_include.scss',
                    10=>'[scss]/app/app.scss']],
            'concatenateJs'=>[
                '[publicJs]/app.js'=>'[js]/app']]
    ];


    // onReady
    final protected function onReady():Core\Boot
    {
        return $this;
    }
}

return [Boot::class,'start'];
?>