<?php


namespace Adelphia\Litecoinode;

use Adelphia\Litecoinode\Litecoinode;
use App\Models\master_coin;

class LitecoinCall
{

    private $ltc;

    public function __construct($coin_code = 'LTC')
    {
        $master_coin = master_coin::where('coin_code', $coin_code)->first();
        if($master_coin == null)
            abort(404);

        $username = $master_coin->coin_rpc_username;
        $password = $master_coin->coin_rpc_password;
        $host = $master_coin->coin_rpc_host;
        $port = $master_coin->coin_rpc_port;
        $url = $master_coin->coin_rpc_url;

        $this->ltc = new Litecoinode($username, $password, $host, $port, $url);

    }

    public function getinfo()
    {
       return $this->ltc->getinfo() ;
    }

    public function getbalance($account = '')
    {
        return $this->ltc->getbalance($account);
    }

    public function listtransactions($account = '', $count = 10000, $from = 0)
    {
        return $this->ltc->listtransactions($account, $count, $from);
    }

    public function getnewaddress($label)
    {
        $address['address'] = $this->ltc->getnewaddress($label);
        $address['key'] = null;
        return $address;
    }

    //public function g
}