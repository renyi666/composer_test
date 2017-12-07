<?php
/***
 *                        ,%%%%%%%%,
 *                      ,%%/\%%%%/\%%
 *                     ,%%%\c "" J/%%%
 *            %.       %%%%/ o  o \%%%
 *            `%%.     %%%%    _  |%%%
 *             `%%     `%%%%(__Y__)%%'
 *             //       ;%%%%`\-/%%%'
 *            ((       /  `%%%%%%%'
 *             \\    .'          |
 *              \\  /       \  | |
 *               \\/         ) | |
 *                \         /_ | |__
 *                (___________)))))))
 * @author：gaoyuan
 * @created_time：2017-12-07 10:44
 * When I wrote this, only God and I understood what I was doing
 * Now, God only knows
 */

namespace Sexyphp\Src;


use Illuminate\Support\ServiceProvider;

class AliPayProvider extends  ServiceProvider
{

    public function boot(){
        $this->publishes([
            __DIR__.'/config/apliay.php' => config_path('courier.php'),
        ]);
    }
}