<?php
/**
 * @author devxnet
 * @date   2023-08-20 15:07:59
 * @file   BurziObiavi.php
 *
 * Do not modify this code on your own, as it may lead to unexpected outcomes.
 * We do not take responsibility for any issues that may arise from unauthorized changes.
 * For inquiries about modifications, please contact devxnetx@gmail.com.
 */

namespace Devxnetx\BoApiLaravel;

use Devxnet\BoApiPhp\BurziObiavi as BurziObiaviPhpClient;

class BurziObiavi {
    private BurziObiaviPhpClient $obiaviClient;

    public function __construct ($username, $password)
    {
        $this->obiaviClient = new BurziObiaviPhpClient($username, $password);
    }

    public function getCities ()
    {
        return $this->obiaviClient->getNomenclatureService()->cities();
    }

    public function getCategories ()
    {
        return $this->obiaviClient->getNomenclatureService()->categories();
    }

    public function postAd ($data)
    {
        return $this->obiaviClient->getAdService()->postAd($data);
    }
}