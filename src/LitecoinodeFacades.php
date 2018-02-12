<?php

namespace Adelphia\Litecoinode;

use Illuminate\Support\Facades\Facade;

class LitecoinodeFacades extends Facade {

    protected static function getFacadeAccessor() { return 'Litecoinode'; }

}
