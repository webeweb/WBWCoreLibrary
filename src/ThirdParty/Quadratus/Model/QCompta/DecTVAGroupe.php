<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Dec t v a groupe model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTVAGroupe {

    /**
     * A z0990b.
     *
     * @var float
     */
    private $aZ0990b;

    /**
     * A z1010b.
     *
     * @var float
     */
    private $aZ1010b;

    /**
     * A z1020b.
     *
     * @var float
     */
    private $aZ1020b;

    /**
     * A z1030b.
     *
     * @var float
     */
    private $aZ1030b;

    /**
     * A z1040b.
     *
     * @var float
     */
    private $aZ1040b;

    /**
     * A z1050b.
     *
     * @var float
     */
    private $aZ1050b;

    /**
     * A z1080b.
     *
     * @var float
     */
    private $aZ1080b;

    /**
     * A z1090b.
     *
     * @var float
     */
    private $aZ1090b;

    /**
     * A z1100b.
     *
     * @var float
     */
    private $aZ1100b;

    /**
     * A z1110b.
     *
     * @var float
     */
    private $aZ1110b;

    /**
     * A z1120b.
     *
     * @var float
     */
    private $aZ1120b;

    /**
     * A z3240.
     *
     * @var float
     */
    private $aZ3240;

    /**
     * A z3510.
     *
     * @var float
     */
    private $aZ3510;

    /**
     * A z3520.
     *
     * @var float
     */
    private $aZ3520;

    /**
     * A z38 code.
     *
     * @var string
     */
    private $aZ38Code;

    /**
     * A z38 lib.
     *
     * @var string
     */
    private $aZ38Lib;

    /**
     * A z38b.
     *
     * @var float
     */
    private $aZ38b;

    /**
     * A z4200.
     *
     * @var float
     */
    private $aZ4200;

    /**
     * A z4201.
     *
     * @var float
     */
    private $aZ4201;

    /**
     * A z4204.
     *
     * @var float
     */
    private $aZ4204;

    /**
     * A z4206.
     *
     * @var float
     */
    private $aZ4206;

    /**
     * A z4207.
     *
     * @var float
     */
    private $aZ4207;

    /**
     * A z4213.
     *
     * @var float
     */
    private $aZ4213;

    /**
     * A z4215.
     *
     * @var float
     */
    private $aZ4215;

    /**
     * A z4220.
     *
     * @var float
     */
    private $aZ4220;

    /**
     * A z4222.
     *
     * @var float
     */
    private $aZ4222;

    /**
     * A z4223.
     *
     * @var float
     */
    private $aZ4223;

    /**
     * A z4228 mtt.
     *
     * @var float
     */
    private $aZ4228Mtt;

    /**
     * A z4230.
     *
     * @var float
     */
    private $aZ4230;

    /**
     * A z4231.
     *
     * @var float
     */
    private $aZ4231;

    /**
     * A z4232.
     *
     * @var float
     */
    private $aZ4232;

    /**
     * A z4233.
     *
     * @var float
     */
    private $aZ4233;

    /**
     * A z4234.
     *
     * @var float
     */
    private $aZ4234;

    /**
     * A z4235.
     *
     * @var float
     */
    private $aZ4235;

    /**
     * A z59 mtt.
     *
     * @var float
     */
    private $aZ59Mtt;

    /**
     * A z e s mtt.
     *
     * @var float
     */
    private $aZESMtt;

    /**
     * A z e u mtt.
     *
     * @var float
     */
    private $aZEUMtt;

    /**
     * A z e z code.
     *
     * @var string
     */
    private $aZEZCode;

    /**
     * A z e z lib.
     *
     * @var string
     */
    private $aZEZLib;

    /**
     * A z e z m t t.
     *
     * @var float
     */
    private $aZEZMTT;

    /**
     * A z g a code.
     *
     * @var string
     */
    private $aZGACode;

    /**
     * A z g a lib.
     *
     * @var string
     */
    private $aZGALib;

    /**
     * A z g a m t t.
     *
     * @var float
     */
    private $aZGAMTT;

    /**
     * A z g c mtt.
     *
     * @var float
     */
    private $aZGCMtt;

    /**
     * A z h i.
     *
     * @var float
     */
    private $aZHI;

    /**
     * A z j b.
     *
     * @var float
     */
    private $aZJB;

    /**
     * A z j c.
     *
     * @var float
     */
    private $aZJC;

    /**
     * A z total b.
     *
     * @var float
     */
    private $aZTotalB;

    /**
     * Az1081b.
     *
     * @var float
     */
    private $az1081b;

    /**
     * Az4236.
     *
     * @var float
     */
    private $az4236;

    /**
     * Az4237.
     *
     * @var float
     */
    private $az4237;

    /**
     * Az4238.
     *
     * @var float
     */
    private $az4238;

    /**
     * Az4239.
     *
     * @var float
     */
    private $az4239;

    /**
     * Az4240.
     *
     * @var float
     */
    private $az4240;

    /**
     * Az4241.
     *
     * @var float
     */
    private $az4241;

    /**
     * Az4242.
     *
     * @var float
     */
    private $az4242;

    /**
     * Az4243.
     *
     * @var float
     */
    private $az4243;

    /**
     * Az4244.
     *
     * @var float
     */
    private $az4244;

    /**
     * Az4245.
     *
     * @var float
     */
    private $az4245;

    /**
     * Az4246.
     *
     * @var float
     */
    private $az4246;

    /**
     * Az4247.
     *
     * @var float
     */
    private $az4247;

    /**
     * Az4248.
     *
     * @var float
     */
    private $az4248;

    /**
     * Az4249.
     *
     * @var float
     */
    private $az4249;

    /**
     * Az4250.
     *
     * @var float
     */
    private $az4250;

    /**
     * Az4251.
     *
     * @var float
     */
    private $az4251;

    /**
     * Az4252.
     *
     * @var float
     */
    private $az4252;

    /**
     * Az4254.
     *
     * @var float
     */
    private $az4254;

    /**
     * Az4255.
     *
     * @var float
     */
    private $az4255;

    /**
     * Az4256.
     *
     * @var float
     */
    private $az4256;

    /**
     * Az4257.
     *
     * @var float
     */
    private $az4257;

    /**
     * Az4258.
     *
     * @var float
     */
    private $az4258;

    /**
     * Az4259.
     *
     * @var float
     */
    private $az4259;

    /**
     * Az4260.
     *
     * @var float
     */
    private $az4260;

    /**
     * Az4261.
     *
     * @var float
     */
    private $az4261;

    /**
     * Az4262.
     *
     * @var float
     */
    private $az4262;

    /**
     * Az4263.
     *
     * @var float
     */
    private $az4263;

    /**
     * Az4264.
     *
     * @var float
     */
    private $az4264;

    /**
     * Az4265.
     *
     * @var float
     */
    private $az4265;

    /**
     * Az4266.
     *
     * @var float
     */
    private $az4266;

    /**
     * Az4267.
     *
     * @var float
     */
    private $az4267;

    /**
     * Az4268.
     *
     * @var float
     */
    private $az4268;

    /**
     * Az4268 base.
     *
     * @var float
     */
    private $az4268Base;

    /**
     * Az4269.
     *
     * @var float
     */
    private $az4269;

    /**
     * Az4269 base.
     *
     * @var float
     */
    private $az4269Base;

    /**
     * Az4270.
     *
     * @var float
     */
    private $az4270;

    /**
     * Az4270 base.
     *
     * @var float
     */
    private $az4270Base;

    /**
     * Az4271.
     *
     * @var float
     */
    private $az4271;

    /**
     * Az4271 base.
     *
     * @var float
     */
    private $az4271Base;

    /**
     * Az4272.
     *
     * @var float
     */
    private $az4272;

    /**
     * Az4274.
     *
     * @var float
     */
    private $az4274;

    /**
     * Az4276.
     *
     * @var float
     */
    private $az4276;

    /**
     * Az4276 base.
     *
     * @var float
     */
    private $az4276Base;

    /**
     * Az4277.
     *
     * @var float
     */
    private $az4277;

    /**
     * Az4277 base.
     *
     * @var float
     */
    private $az4277Base;

    /**
     * Az4278.
     *
     * @var float
     */
    private $az4278;

    /**
     * Az4279.
     *
     * @var float
     */
    private $az4279;

    /**
     * Az4280.
     *
     * @var float
     */
    private $az4280;

    /**
     * Az4281.
     *
     * @var float
     */
    private $az4281;

    /**
     * Az4282.
     *
     * @var float
     */
    private $az4282;

    /**
     * Az4283.
     *
     * @var float
     */
    private $az4283;

    /**
     * Az4284.
     *
     * @var float
     */
    private $az4284;

    /**
     * Az4285.
     *
     * @var float
     */
    private $az4285;

    /**
     * Az4288.
     *
     * @var float
     */
    private $az4288;

    /**
     * Az4289.
     *
     * @var float
     */
    private $az4289;

    /**
     * Az4290.
     *
     * @var float
     */
    private $az4290;

    /**
     * Corres1.
     *
     * @var string
     */
    private $corres1;

    /**
     * Corres2.
     *
     * @var string
     */
    private $corres2;

    /**
     * Corres3.
     *
     * @var string
     */
    private $corres3;

    /**
     * Corres4.
     *
     * @var string
     */
    private $corres4;

    /**
     * Corres5.
     *
     * @var string
     */
    private $corres5;

    /**
     * Date dec.
     *
     * @var string
     */
    private $dateDec;

    /**
     * Debut exo.
     *
     * @var DateTime
     */
    private $debutExo;

    /**
     * Fin exo.
     *
     * @var DateTime
     */
    private $finExo;

    /**
     * i lock.
     *
     * @var int
     */
    private $iLock;

    /**
     * Lib doss.
     *
     * @var string
     */
    private $libDoss;

    /**
     * Mention expresse.
     *
     * @var bool
     */
    private $mentionExpresse;

    /**
     * No doss.
     *
     * @var string
     */
    private $noDoss;

    /**
     * No lot ecritures.
     *
     * @var int
     */
    private $noLotEcritures;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Paiement imputation.
     *
     * @var bool
     */
    private $paiementImputation;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Sel adresse dest.
     *
     * @var string
     */
    private $selAdresseDest;

    /**
     * Total.
     *
     * @var float
     */
    private $total;

    /**
     * Type dec.
     *
     * @var string
     */
    private $typeDec;

    /**
     * Ville.
     *
     * @var string
     */
    private $ville;

    /**
     * Z0100b.
     *
     * @var float
     */
    private $z0100b;

    /**
     * Z0121b.
     *
     * @var float
     */
    private $z0121b;

    /**
     * z0151b.
     *
     * @var float
     */
    private $z0151b;

    /**
     * z0207b.
     *
     * @var float
     */
    private $z0207b;

    /**
     * z0600.
     *
     * @var float
     */
    private $z0600;

    /**
     * Z0705.
     *
     * @var float
     */
    private $z0705;

    /**
     * z0900b.
     *
     * @var float
     */
    private $z0900b;

    /**
     * Z0920b.
     *
     * @var float
     */
    private $z0920b;

    /**
     * Z12 code.
     *
     * @var string
     */
    private $z12Code;

    /**
     * Z12 lib.
     *
     * @var string
     */
    private $z12Lib;

    /**
     * Z12 taxe.
     *
     * @var float
     */
    private $z12Taxe;

    /**
     * Z14.
     *
     * @var float
     */
    private $z14;

    /**
     * Z196b.
     *
     * @var float
     */
    private $z196b;

    /**
     * Z21.
     *
     * @var float
     */
    private $z21;

    /**
     * Z25.
     *
     * @var float
     */
    private $z25;

    /**
     * Z4227.
     *
     * @var float
     */
    private $z4227;

    /**
     * Z8001.
     *
     * @var float
     */
    private $z8001;

    /**
     * Z8002.
     *
     * @var float
     */
    private $z8002;

    /**
     * Z8003.
     *
     * @var float
     */
    private $z8003;

    /**
     * Z8005.
     *
     * @var float
     */
    private $z8005;

    /**
     * Z8006.
     *
     * @var float
     */
    private $z8006;

    /**
     * Z9979.
     *
     * @var float
     */
    private $z9979;

    /**
     * Z9989.
     *
     * @var float
     */
    private $z9989;

    /**
     * Z9991.
     *
     * @var float
     */
    private $z9991;

    /**
     * Z9999.
     *
     * @var float
     */
    private $z9999;

    /**
     * Z9 b taxe.
     *
     * @var float
     */
    private $z9BTaxe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a z0990b.
     *
     * @return float Returns the a z0990b.
     */
    public function getAZ0990b() {
        return $this->aZ0990b;
    }

    /**
     * Get the a z1010b.
     *
     * @return float Returns the a z1010b.
     */
    public function getAZ1010b() {
        return $this->aZ1010b;
    }

    /**
     * Get the a z1020b.
     *
     * @return float Returns the a z1020b.
     */
    public function getAZ1020b() {
        return $this->aZ1020b;
    }

    /**
     * Get the a z1030b.
     *
     * @return float Returns the a z1030b.
     */
    public function getAZ1030b() {
        return $this->aZ1030b;
    }

    /**
     * Get the a z1040b.
     *
     * @return float Returns the a z1040b.
     */
    public function getAZ1040b() {
        return $this->aZ1040b;
    }

    /**
     * Get the a z1050b.
     *
     * @return float Returns the a z1050b.
     */
    public function getAZ1050b() {
        return $this->aZ1050b;
    }

    /**
     * Get the a z1080b.
     *
     * @return float Returns the a z1080b.
     */
    public function getAZ1080b() {
        return $this->aZ1080b;
    }

    /**
     * Get the a z1090b.
     *
     * @return float Returns the a z1090b.
     */
    public function getAZ1090b() {
        return $this->aZ1090b;
    }

    /**
     * Get the a z1100b.
     *
     * @return float Returns the a z1100b.
     */
    public function getAZ1100b() {
        return $this->aZ1100b;
    }

    /**
     * Get the a z1110b.
     *
     * @return float Returns the a z1110b.
     */
    public function getAZ1110b() {
        return $this->aZ1110b;
    }

    /**
     * Get the a z1120b.
     *
     * @return float Returns the a z1120b.
     */
    public function getAZ1120b() {
        return $this->aZ1120b;
    }

    /**
     * Get the a z3240.
     *
     * @return float Returns the a z3240.
     */
    public function getAZ3240() {
        return $this->aZ3240;
    }

    /**
     * Get the a z3510.
     *
     * @return float Returns the a z3510.
     */
    public function getAZ3510() {
        return $this->aZ3510;
    }

    /**
     * Get the a z3520.
     *
     * @return float Returns the a z3520.
     */
    public function getAZ3520() {
        return $this->aZ3520;
    }

    /**
     * Get the a z38 code.
     *
     * @return string Returns the a z38 code.
     */
    public function getAZ38Code() {
        return $this->aZ38Code;
    }

    /**
     * Get the a z38 lib.
     *
     * @return string Returns the a z38 lib.
     */
    public function getAZ38Lib() {
        return $this->aZ38Lib;
    }

    /**
     * Get the a z38b.
     *
     * @return float Returns the a z38b.
     */
    public function getAZ38b() {
        return $this->aZ38b;
    }

    /**
     * Get the a z4200.
     *
     * @return float Returns the a z4200.
     */
    public function getAZ4200() {
        return $this->aZ4200;
    }

    /**
     * Get the a z4201.
     *
     * @return float Returns the a z4201.
     */
    public function getAZ4201() {
        return $this->aZ4201;
    }

    /**
     * Get the a z4204.
     *
     * @return float Returns the a z4204.
     */
    public function getAZ4204() {
        return $this->aZ4204;
    }

    /**
     * Get the a z4206.
     *
     * @return float Returns the a z4206.
     */
    public function getAZ4206() {
        return $this->aZ4206;
    }

    /**
     * Get the a z4207.
     *
     * @return float Returns the a z4207.
     */
    public function getAZ4207() {
        return $this->aZ4207;
    }

    /**
     * Get the a z4213.
     *
     * @return float Returns the a z4213.
     */
    public function getAZ4213() {
        return $this->aZ4213;
    }

    /**
     * Get the a z4215.
     *
     * @return float Returns the a z4215.
     */
    public function getAZ4215() {
        return $this->aZ4215;
    }

    /**
     * Get the a z4220.
     *
     * @return float Returns the a z4220.
     */
    public function getAZ4220() {
        return $this->aZ4220;
    }

    /**
     * Get the a z4222.
     *
     * @return float Returns the a z4222.
     */
    public function getAZ4222() {
        return $this->aZ4222;
    }

    /**
     * Get the a z4223.
     *
     * @return float Returns the a z4223.
     */
    public function getAZ4223() {
        return $this->aZ4223;
    }

    /**
     * Get the a z4228 mtt.
     *
     * @return float Returns the a z4228 mtt.
     */
    public function getAZ4228Mtt() {
        return $this->aZ4228Mtt;
    }

    /**
     * Get the a z4230.
     *
     * @return float Returns the a z4230.
     */
    public function getAZ4230() {
        return $this->aZ4230;
    }

    /**
     * Get the a z4231.
     *
     * @return float Returns the a z4231.
     */
    public function getAZ4231() {
        return $this->aZ4231;
    }

    /**
     * Get the a z4232.
     *
     * @return float Returns the a z4232.
     */
    public function getAZ4232() {
        return $this->aZ4232;
    }

    /**
     * Get the a z4233.
     *
     * @return float Returns the a z4233.
     */
    public function getAZ4233() {
        return $this->aZ4233;
    }

    /**
     * Get the a z4234.
     *
     * @return float Returns the a z4234.
     */
    public function getAZ4234() {
        return $this->aZ4234;
    }

    /**
     * Get the a z4235.
     *
     * @return float Returns the a z4235.
     */
    public function getAZ4235() {
        return $this->aZ4235;
    }

    /**
     * Get the a z59 mtt.
     *
     * @return float Returns the a z59 mtt.
     */
    public function getAZ59Mtt() {
        return $this->aZ59Mtt;
    }

    /**
     * Get the a z e s mtt.
     *
     * @return float Returns the a z e s mtt.
     */
    public function getAZESMtt() {
        return $this->aZESMtt;
    }

    /**
     * Get the a z e u mtt.
     *
     * @return float Returns the a z e u mtt.
     */
    public function getAZEUMtt() {
        return $this->aZEUMtt;
    }

    /**
     * Get the a z e z code.
     *
     * @return string Returns the a z e z code.
     */
    public function getAZEZCode() {
        return $this->aZEZCode;
    }

    /**
     * Get the a z e z lib.
     *
     * @return string Returns the a z e z lib.
     */
    public function getAZEZLib() {
        return $this->aZEZLib;
    }

    /**
     * Get the a z e z m t t.
     *
     * @return float Returns the a z e z m t t.
     */
    public function getAZEZMTT() {
        return $this->aZEZMTT;
    }

    /**
     * Get the a z g a code.
     *
     * @return string Returns the a z g a code.
     */
    public function getAZGACode() {
        return $this->aZGACode;
    }

    /**
     * Get the a z g a lib.
     *
     * @return string Returns the a z g a lib.
     */
    public function getAZGALib() {
        return $this->aZGALib;
    }

    /**
     * Get the a z g a m t t.
     *
     * @return float Returns the a z g a m t t.
     */
    public function getAZGAMTT() {
        return $this->aZGAMTT;
    }

    /**
     * Get the a z g c mtt.
     *
     * @return float Returns the a z g c mtt.
     */
    public function getAZGCMtt() {
        return $this->aZGCMtt;
    }

    /**
     * Get the a z h i.
     *
     * @return float Returns the a z h i.
     */
    public function getAZHI() {
        return $this->aZHI;
    }

    /**
     * Get the a z j b.
     *
     * @return float Returns the a z j b.
     */
    public function getAZJB() {
        return $this->aZJB;
    }

    /**
     * Get the a z j c.
     *
     * @return float Returns the a z j c.
     */
    public function getAZJC() {
        return $this->aZJC;
    }

    /**
     * Get the a z total b.
     *
     * @return float Returns the a z total b.
     */
    public function getAZTotalB() {
        return $this->aZTotalB;
    }

    /**
     * Get the az1081b.
     *
     * @return float Returns the az1081b.
     */
    public function getAz1081b() {
        return $this->az1081b;
    }

    /**
     * Get the az4236.
     *
     * @return float Returns the az4236.
     */
    public function getAz4236() {
        return $this->az4236;
    }

    /**
     * Get the az4237.
     *
     * @return float Returns the az4237.
     */
    public function getAz4237() {
        return $this->az4237;
    }

    /**
     * Get the az4238.
     *
     * @return float Returns the az4238.
     */
    public function getAz4238() {
        return $this->az4238;
    }

    /**
     * Get the az4239.
     *
     * @return float Returns the az4239.
     */
    public function getAz4239() {
        return $this->az4239;
    }

    /**
     * Get the az4240.
     *
     * @return float Returns the az4240.
     */
    public function getAz4240() {
        return $this->az4240;
    }

    /**
     * Get the az4241.
     *
     * @return float Returns the az4241.
     */
    public function getAz4241() {
        return $this->az4241;
    }

    /**
     * Get the az4242.
     *
     * @return float Returns the az4242.
     */
    public function getAz4242() {
        return $this->az4242;
    }

    /**
     * Get the az4243.
     *
     * @return float Returns the az4243.
     */
    public function getAz4243() {
        return $this->az4243;
    }

    /**
     * Get the az4244.
     *
     * @return float Returns the az4244.
     */
    public function getAz4244() {
        return $this->az4244;
    }

    /**
     * Get the az4245.
     *
     * @return float Returns the az4245.
     */
    public function getAz4245() {
        return $this->az4245;
    }

    /**
     * Get the az4246.
     *
     * @return float Returns the az4246.
     */
    public function getAz4246() {
        return $this->az4246;
    }

    /**
     * Get the az4247.
     *
     * @return float Returns the az4247.
     */
    public function getAz4247() {
        return $this->az4247;
    }

    /**
     * Get the az4248.
     *
     * @return float Returns the az4248.
     */
    public function getAz4248() {
        return $this->az4248;
    }

    /**
     * Get the az4249.
     *
     * @return float Returns the az4249.
     */
    public function getAz4249() {
        return $this->az4249;
    }

    /**
     * Get the az4250.
     *
     * @return float Returns the az4250.
     */
    public function getAz4250() {
        return $this->az4250;
    }

    /**
     * Get the az4251.
     *
     * @return float Returns the az4251.
     */
    public function getAz4251() {
        return $this->az4251;
    }

    /**
     * Get the az4252.
     *
     * @return float Returns the az4252.
     */
    public function getAz4252() {
        return $this->az4252;
    }

    /**
     * Get the az4254.
     *
     * @return float Returns the az4254.
     */
    public function getAz4254() {
        return $this->az4254;
    }

    /**
     * Get the az4255.
     *
     * @return float Returns the az4255.
     */
    public function getAz4255() {
        return $this->az4255;
    }

    /**
     * Get the az4256.
     *
     * @return float Returns the az4256.
     */
    public function getAz4256() {
        return $this->az4256;
    }

    /**
     * Get the az4257.
     *
     * @return float Returns the az4257.
     */
    public function getAz4257() {
        return $this->az4257;
    }

    /**
     * Get the az4258.
     *
     * @return float Returns the az4258.
     */
    public function getAz4258() {
        return $this->az4258;
    }

    /**
     * Get the az4259.
     *
     * @return float Returns the az4259.
     */
    public function getAz4259() {
        return $this->az4259;
    }

    /**
     * Get the az4260.
     *
     * @return float Returns the az4260.
     */
    public function getAz4260() {
        return $this->az4260;
    }

    /**
     * Get the az4261.
     *
     * @return float Returns the az4261.
     */
    public function getAz4261() {
        return $this->az4261;
    }

    /**
     * Get the az4262.
     *
     * @return float Returns the az4262.
     */
    public function getAz4262() {
        return $this->az4262;
    }

    /**
     * Get the az4263.
     *
     * @return float Returns the az4263.
     */
    public function getAz4263() {
        return $this->az4263;
    }

    /**
     * Get the az4264.
     *
     * @return float Returns the az4264.
     */
    public function getAz4264() {
        return $this->az4264;
    }

    /**
     * Get the az4265.
     *
     * @return float Returns the az4265.
     */
    public function getAz4265() {
        return $this->az4265;
    }

    /**
     * Get the az4266.
     *
     * @return float Returns the az4266.
     */
    public function getAz4266() {
        return $this->az4266;
    }

    /**
     * Get the az4267.
     *
     * @return float Returns the az4267.
     */
    public function getAz4267() {
        return $this->az4267;
    }

    /**
     * Get the az4268.
     *
     * @return float Returns the az4268.
     */
    public function getAz4268() {
        return $this->az4268;
    }

    /**
     * Get the az4268 base.
     *
     * @return float Returns the az4268 base.
     */
    public function getAz4268Base() {
        return $this->az4268Base;
    }

    /**
     * Get the az4269.
     *
     * @return float Returns the az4269.
     */
    public function getAz4269() {
        return $this->az4269;
    }

    /**
     * Get the az4269 base.
     *
     * @return float Returns the az4269 base.
     */
    public function getAz4269Base() {
        return $this->az4269Base;
    }

    /**
     * Get the az4270.
     *
     * @return float Returns the az4270.
     */
    public function getAz4270() {
        return $this->az4270;
    }

    /**
     * Get the az4270 base.
     *
     * @return float Returns the az4270 base.
     */
    public function getAz4270Base() {
        return $this->az4270Base;
    }

    /**
     * Get the az4271.
     *
     * @return float Returns the az4271.
     */
    public function getAz4271() {
        return $this->az4271;
    }

    /**
     * Get the az4271 base.
     *
     * @return float Returns the az4271 base.
     */
    public function getAz4271Base() {
        return $this->az4271Base;
    }

    /**
     * Get the az4272.
     *
     * @return float Returns the az4272.
     */
    public function getAz4272() {
        return $this->az4272;
    }

    /**
     * Get the az4274.
     *
     * @return float Returns the az4274.
     */
    public function getAz4274() {
        return $this->az4274;
    }

    /**
     * Get the az4276.
     *
     * @return float Returns the az4276.
     */
    public function getAz4276() {
        return $this->az4276;
    }

    /**
     * Get the az4276 base.
     *
     * @return float Returns the az4276 base.
     */
    public function getAz4276Base() {
        return $this->az4276Base;
    }

    /**
     * Get the az4277.
     *
     * @return float Returns the az4277.
     */
    public function getAz4277() {
        return $this->az4277;
    }

    /**
     * Get the az4277 base.
     *
     * @return float Returns the az4277 base.
     */
    public function getAz4277Base() {
        return $this->az4277Base;
    }

    /**
     * Get the az4278.
     *
     * @return float Returns the az4278.
     */
    public function getAz4278() {
        return $this->az4278;
    }

    /**
     * Get the az4279.
     *
     * @return float Returns the az4279.
     */
    public function getAz4279() {
        return $this->az4279;
    }

    /**
     * Get the az4280.
     *
     * @return float Returns the az4280.
     */
    public function getAz4280() {
        return $this->az4280;
    }

    /**
     * Get the az4281.
     *
     * @return float Returns the az4281.
     */
    public function getAz4281() {
        return $this->az4281;
    }

    /**
     * Get the az4282.
     *
     * @return float Returns the az4282.
     */
    public function getAz4282() {
        return $this->az4282;
    }

    /**
     * Get the az4283.
     *
     * @return float Returns the az4283.
     */
    public function getAz4283() {
        return $this->az4283;
    }

    /**
     * Get the az4284.
     *
     * @return float Returns the az4284.
     */
    public function getAz4284() {
        return $this->az4284;
    }

    /**
     * Get the az4285.
     *
     * @return float Returns the az4285.
     */
    public function getAz4285() {
        return $this->az4285;
    }

    /**
     * Get the az4288.
     *
     * @return float Returns the az4288.
     */
    public function getAz4288() {
        return $this->az4288;
    }

    /**
     * Get the az4289.
     *
     * @return float Returns the az4289.
     */
    public function getAz4289() {
        return $this->az4289;
    }

    /**
     * Get the az4290.
     *
     * @return float Returns the az4290.
     */
    public function getAz4290() {
        return $this->az4290;
    }

    /**
     * Get the corres1.
     *
     * @return string Returns the corres1.
     */
    public function getCorres1() {
        return $this->corres1;
    }

    /**
     * Get the corres2.
     *
     * @return string Returns the corres2.
     */
    public function getCorres2() {
        return $this->corres2;
    }

    /**
     * Get the corres3.
     *
     * @return string Returns the corres3.
     */
    public function getCorres3() {
        return $this->corres3;
    }

    /**
     * Get the corres4.
     *
     * @return string Returns the corres4.
     */
    public function getCorres4() {
        return $this->corres4;
    }

    /**
     * Get the corres5.
     *
     * @return string Returns the corres5.
     */
    public function getCorres5() {
        return $this->corres5;
    }

    /**
     * Get the date dec.
     *
     * @return string Returns the date dec.
     */
    public function getDateDec() {
        return $this->dateDec;
    }

    /**
     * Get the debut exo.
     *
     * @return DateTime Returns the debut exo.
     */
    public function getDebutExo() {
        return $this->debutExo;
    }

    /**
     * Get the fin exo.
     *
     * @return DateTime Returns the fin exo.
     */
    public function getFinExo() {
        return $this->finExo;
    }

    /**
     * Get the lib doss.
     *
     * @return string Returns the lib doss.
     */
    public function getLibDoss() {
        return $this->libDoss;
    }

    /**
     * Get the mention expresse.
     *
     * @return bool Returns the mention expresse.
     */
    public function getMentionExpresse() {
        return $this->mentionExpresse;
    }

    /**
     * Get the no doss.
     *
     * @return string Returns the no doss.
     */
    public function getNoDoss() {
        return $this->noDoss;
    }

    /**
     * Get the no lot ecritures.
     *
     * @return int Returns the no lot ecritures.
     */
    public function getNoLotEcritures() {
        return $this->noLotEcritures;
    }

    /**
     * Get the num uniq.
     *
     * @return int Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
    }

    /**
     * Get the paiement imputation.
     *
     * @return bool Returns the paiement imputation.
     */
    public function getPaiementImputation() {
        return $this->paiementImputation;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the sel adresse dest.
     *
     * @return string Returns the sel adresse dest.
     */
    public function getSelAdresseDest() {
        return $this->selAdresseDest;
    }

    /**
     * Get the total.
     *
     * @return float Returns the total.
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Get the type dec.
     *
     * @return string Returns the type dec.
     */
    public function getTypeDec() {
        return $this->typeDec;
    }

    /**
     * Get the ville.
     *
     * @return string Returns the ville.
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Get the z0100b.
     *
     * @return float Returns the z0100b.
     */
    public function getZ0100b() {
        return $this->z0100b;
    }

    /**
     * Get the z0121b.
     *
     * @return float Returns the z0121b.
     */
    public function getZ0121b() {
        return $this->z0121b;
    }

    /**
     * Get the z0705.
     *
     * @return float Returns the z0705.
     */
    public function getZ0705() {
        return $this->z0705;
    }

    /**
     * Get the z0920b.
     *
     * @return float Returns the z0920b.
     */
    public function getZ0920b() {
        return $this->z0920b;
    }

    /**
     * Get the z12 code.
     *
     * @return string Returns the z12 code.
     */
    public function getZ12Code() {
        return $this->z12Code;
    }

    /**
     * Get the z12 lib.
     *
     * @return string Returns the z12 lib.
     */
    public function getZ12Lib() {
        return $this->z12Lib;
    }

    /**
     * Get the z12 taxe.
     *
     * @return float Returns the z12 taxe.
     */
    public function getZ12Taxe() {
        return $this->z12Taxe;
    }

    /**
     * Get the z14.
     *
     * @return float Returns the z14.
     */
    public function getZ14() {
        return $this->z14;
    }

    /**
     * Get the z196b.
     *
     * @return float Returns the z196b.
     */
    public function getZ196b() {
        return $this->z196b;
    }

    /**
     * Get the z21.
     *
     * @return float Returns the z21.
     */
    public function getZ21() {
        return $this->z21;
    }

    /**
     * Get the z25.
     *
     * @return float Returns the z25.
     */
    public function getZ25() {
        return $this->z25;
    }

    /**
     * Get the z4227.
     *
     * @return float Returns the z4227.
     */
    public function getZ4227() {
        return $this->z4227;
    }

    /**
     * Get the z8001.
     *
     * @return float Returns the z8001.
     */
    public function getZ8001() {
        return $this->z8001;
    }

    /**
     * Get the z8002.
     *
     * @return float Returns the z8002.
     */
    public function getZ8002() {
        return $this->z8002;
    }

    /**
     * Get the z8003.
     *
     * @return float Returns the z8003.
     */
    public function getZ8003() {
        return $this->z8003;
    }

    /**
     * Get the z8005.
     *
     * @return float Returns the z8005.
     */
    public function getZ8005() {
        return $this->z8005;
    }

    /**
     * Get the z8006.
     *
     * @return float Returns the z8006.
     */
    public function getZ8006() {
        return $this->z8006;
    }

    /**
     * Get the z9979.
     *
     * @return float Returns the z9979.
     */
    public function getZ9979() {
        return $this->z9979;
    }

    /**
     * Get the z9989.
     *
     * @return float Returns the z9989.
     */
    public function getZ9989() {
        return $this->z9989;
    }

    /**
     * Get the z9991.
     *
     * @return float Returns the z9991.
     */
    public function getZ9991() {
        return $this->z9991;
    }

    /**
     * Get the z9999.
     *
     * @return float Returns the z9999.
     */
    public function getZ9999() {
        return $this->z9999;
    }

    /**
     * Get the z9 b taxe.
     *
     * @return float Returns the z9 b taxe.
     */
    public function getZ9BTaxe() {
        return $this->z9BTaxe;
    }

    /**
     * Get the i lock.
     *
     * @return int Returns the i lock.
     */
    public function getiLock() {
        return $this->iLock;
    }

    /**
     * Get the z0151b.
     *
     * @return float Returns the z0151b.
     */
    public function getz0151b() {
        return $this->z0151b;
    }

    /**
     * Get the z0207b.
     *
     * @return float Returns the z0207b.
     */
    public function getz0207b() {
        return $this->z0207b;
    }

    /**
     * Get the z0600.
     *
     * @return float Returns the z0600.
     */
    public function getz0600() {
        return $this->z0600;
    }

    /**
     * Get the z0900b.
     *
     * @return float Returns the z0900b.
     */
    public function getz0900b() {
        return $this->z0900b;
    }

    /**
     * Set the a z0990b.
     *
     * @param float $aZ0990b The a z0990b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ0990b($aZ0990b) {
        $this->aZ0990b = $aZ0990b;
        return $this;
    }

    /**
     * Set the a z1010b.
     *
     * @param float $aZ1010b The a z1010b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1010b($aZ1010b) {
        $this->aZ1010b = $aZ1010b;
        return $this;
    }

    /**
     * Set the a z1020b.
     *
     * @param float $aZ1020b The a z1020b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1020b($aZ1020b) {
        $this->aZ1020b = $aZ1020b;
        return $this;
    }

    /**
     * Set the a z1030b.
     *
     * @param float $aZ1030b The a z1030b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1030b($aZ1030b) {
        $this->aZ1030b = $aZ1030b;
        return $this;
    }

    /**
     * Set the a z1040b.
     *
     * @param float $aZ1040b The a z1040b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1040b($aZ1040b) {
        $this->aZ1040b = $aZ1040b;
        return $this;
    }

    /**
     * Set the a z1050b.
     *
     * @param float $aZ1050b The a z1050b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1050b($aZ1050b) {
        $this->aZ1050b = $aZ1050b;
        return $this;
    }

    /**
     * Set the a z1080b.
     *
     * @param float $aZ1080b The a z1080b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1080b($aZ1080b) {
        $this->aZ1080b = $aZ1080b;
        return $this;
    }

    /**
     * Set the a z1090b.
     *
     * @param float $aZ1090b The a z1090b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1090b($aZ1090b) {
        $this->aZ1090b = $aZ1090b;
        return $this;
    }

    /**
     * Set the a z1100b.
     *
     * @param float $aZ1100b The a z1100b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1100b($aZ1100b) {
        $this->aZ1100b = $aZ1100b;
        return $this;
    }

    /**
     * Set the a z1110b.
     *
     * @param float $aZ1110b The a z1110b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1110b($aZ1110b) {
        $this->aZ1110b = $aZ1110b;
        return $this;
    }

    /**
     * Set the a z1120b.
     *
     * @param float $aZ1120b The a z1120b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ1120b($aZ1120b) {
        $this->aZ1120b = $aZ1120b;
        return $this;
    }

    /**
     * Set the a z3240.
     *
     * @param float $aZ3240 The a z3240.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ3240($aZ3240) {
        $this->aZ3240 = $aZ3240;
        return $this;
    }

    /**
     * Set the a z3510.
     *
     * @param float $aZ3510 The a z3510.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ3510($aZ3510) {
        $this->aZ3510 = $aZ3510;
        return $this;
    }

    /**
     * Set the a z3520.
     *
     * @param float $aZ3520 The a z3520.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ3520($aZ3520) {
        $this->aZ3520 = $aZ3520;
        return $this;
    }

    /**
     * Set the a z38 code.
     *
     * @param string $aZ38Code The a z38 code.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ38Code($aZ38Code) {
        $this->aZ38Code = $aZ38Code;
        return $this;
    }

    /**
     * Set the a z38 lib.
     *
     * @param string $aZ38Lib The a z38 lib.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ38Lib($aZ38Lib) {
        $this->aZ38Lib = $aZ38Lib;
        return $this;
    }

    /**
     * Set the a z38b.
     *
     * @param float $aZ38b The a z38b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ38b($aZ38b) {
        $this->aZ38b = $aZ38b;
        return $this;
    }

    /**
     * Set the a z4200.
     *
     * @param float $aZ4200 The a z4200.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4200($aZ4200) {
        $this->aZ4200 = $aZ4200;
        return $this;
    }

    /**
     * Set the a z4201.
     *
     * @param float $aZ4201 The a z4201.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4201($aZ4201) {
        $this->aZ4201 = $aZ4201;
        return $this;
    }

    /**
     * Set the a z4204.
     *
     * @param float $aZ4204 The a z4204.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4204($aZ4204) {
        $this->aZ4204 = $aZ4204;
        return $this;
    }

    /**
     * Set the a z4206.
     *
     * @param float $aZ4206 The a z4206.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4206($aZ4206) {
        $this->aZ4206 = $aZ4206;
        return $this;
    }

    /**
     * Set the a z4207.
     *
     * @param float $aZ4207 The a z4207.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4207($aZ4207) {
        $this->aZ4207 = $aZ4207;
        return $this;
    }

    /**
     * Set the a z4213.
     *
     * @param float $aZ4213 The a z4213.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4213($aZ4213) {
        $this->aZ4213 = $aZ4213;
        return $this;
    }

    /**
     * Set the a z4215.
     *
     * @param float $aZ4215 The a z4215.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4215($aZ4215) {
        $this->aZ4215 = $aZ4215;
        return $this;
    }

    /**
     * Set the a z4220.
     *
     * @param float $aZ4220 The a z4220.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4220($aZ4220) {
        $this->aZ4220 = $aZ4220;
        return $this;
    }

    /**
     * Set the a z4222.
     *
     * @param float $aZ4222 The a z4222.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4222($aZ4222) {
        $this->aZ4222 = $aZ4222;
        return $this;
    }

    /**
     * Set the a z4223.
     *
     * @param float $aZ4223 The a z4223.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4223($aZ4223) {
        $this->aZ4223 = $aZ4223;
        return $this;
    }

    /**
     * Set the a z4228 mtt.
     *
     * @param float $aZ4228Mtt The a z4228 mtt.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4228Mtt($aZ4228Mtt) {
        $this->aZ4228Mtt = $aZ4228Mtt;
        return $this;
    }

    /**
     * Set the a z4230.
     *
     * @param float $aZ4230 The a z4230.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4230($aZ4230) {
        $this->aZ4230 = $aZ4230;
        return $this;
    }

    /**
     * Set the a z4231.
     *
     * @param float $aZ4231 The a z4231.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4231($aZ4231) {
        $this->aZ4231 = $aZ4231;
        return $this;
    }

    /**
     * Set the a z4232.
     *
     * @param float $aZ4232 The a z4232.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4232($aZ4232) {
        $this->aZ4232 = $aZ4232;
        return $this;
    }

    /**
     * Set the a z4233.
     *
     * @param float $aZ4233 The a z4233.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4233($aZ4233) {
        $this->aZ4233 = $aZ4233;
        return $this;
    }

    /**
     * Set the a z4234.
     *
     * @param float $aZ4234 The a z4234.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4234($aZ4234) {
        $this->aZ4234 = $aZ4234;
        return $this;
    }

    /**
     * Set the a z4235.
     *
     * @param float $aZ4235 The a z4235.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ4235($aZ4235) {
        $this->aZ4235 = $aZ4235;
        return $this;
    }

    /**
     * Set the a z59 mtt.
     *
     * @param float $aZ59Mtt The a z59 mtt.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZ59Mtt($aZ59Mtt) {
        $this->aZ59Mtt = $aZ59Mtt;
        return $this;
    }

    /**
     * Set the a z e s mtt.
     *
     * @param float $aZESMtt The a z e s mtt.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZESMtt($aZESMtt) {
        $this->aZESMtt = $aZESMtt;
        return $this;
    }

    /**
     * Set the a z e u mtt.
     *
     * @param float $aZEUMtt The a z e u mtt.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZEUMtt($aZEUMtt) {
        $this->aZEUMtt = $aZEUMtt;
        return $this;
    }

    /**
     * Set the a z e z code.
     *
     * @param string $aZEZCode The a z e z code.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZEZCode($aZEZCode) {
        $this->aZEZCode = $aZEZCode;
        return $this;
    }

    /**
     * Set the a z e z lib.
     *
     * @param string $aZEZLib The a z e z lib.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZEZLib($aZEZLib) {
        $this->aZEZLib = $aZEZLib;
        return $this;
    }

    /**
     * Set the a z e z m t t.
     *
     * @param float $aZEZMTT The a z e z m t t.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZEZMTT($aZEZMTT) {
        $this->aZEZMTT = $aZEZMTT;
        return $this;
    }

    /**
     * Set the a z g a code.
     *
     * @param string $aZGACode The a z g a code.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZGACode($aZGACode) {
        $this->aZGACode = $aZGACode;
        return $this;
    }

    /**
     * Set the a z g a lib.
     *
     * @param string $aZGALib The a z g a lib.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZGALib($aZGALib) {
        $this->aZGALib = $aZGALib;
        return $this;
    }

    /**
     * Set the a z g a m t t.
     *
     * @param float $aZGAMTT The a z g a m t t.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZGAMTT($aZGAMTT) {
        $this->aZGAMTT = $aZGAMTT;
        return $this;
    }

    /**
     * Set the a z g c mtt.
     *
     * @param float $aZGCMtt The a z g c mtt.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZGCMtt($aZGCMtt) {
        $this->aZGCMtt = $aZGCMtt;
        return $this;
    }

    /**
     * Set the a z h i.
     *
     * @param float $aZHI The a z h i.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZHI($aZHI) {
        $this->aZHI = $aZHI;
        return $this;
    }

    /**
     * Set the a z j b.
     *
     * @param float $aZJB The a z j b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZJB($aZJB) {
        $this->aZJB = $aZJB;
        return $this;
    }

    /**
     * Set the a z j c.
     *
     * @param float $aZJC The a z j c.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZJC($aZJC) {
        $this->aZJC = $aZJC;
        return $this;
    }

    /**
     * Set the a z total b.
     *
     * @param float $aZTotalB The a z total b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAZTotalB($aZTotalB) {
        $this->aZTotalB = $aZTotalB;
        return $this;
    }

    /**
     * Set the az1081b.
     *
     * @param float $az1081b The az1081b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz1081b($az1081b) {
        $this->az1081b = $az1081b;
        return $this;
    }

    /**
     * Set the az4236.
     *
     * @param float $az4236 The az4236.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4236($az4236) {
        $this->az4236 = $az4236;
        return $this;
    }

    /**
     * Set the az4237.
     *
     * @param float $az4237 The az4237.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4237($az4237) {
        $this->az4237 = $az4237;
        return $this;
    }

    /**
     * Set the az4238.
     *
     * @param float $az4238 The az4238.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4238($az4238) {
        $this->az4238 = $az4238;
        return $this;
    }

    /**
     * Set the az4239.
     *
     * @param float $az4239 The az4239.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4239($az4239) {
        $this->az4239 = $az4239;
        return $this;
    }

    /**
     * Set the az4240.
     *
     * @param float $az4240 The az4240.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4240($az4240) {
        $this->az4240 = $az4240;
        return $this;
    }

    /**
     * Set the az4241.
     *
     * @param float $az4241 The az4241.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4241($az4241) {
        $this->az4241 = $az4241;
        return $this;
    }

    /**
     * Set the az4242.
     *
     * @param float $az4242 The az4242.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4242($az4242) {
        $this->az4242 = $az4242;
        return $this;
    }

    /**
     * Set the az4243.
     *
     * @param float $az4243 The az4243.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4243($az4243) {
        $this->az4243 = $az4243;
        return $this;
    }

    /**
     * Set the az4244.
     *
     * @param float $az4244 The az4244.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4244($az4244) {
        $this->az4244 = $az4244;
        return $this;
    }

    /**
     * Set the az4245.
     *
     * @param float $az4245 The az4245.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4245($az4245) {
        $this->az4245 = $az4245;
        return $this;
    }

    /**
     * Set the az4246.
     *
     * @param float $az4246 The az4246.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4246($az4246) {
        $this->az4246 = $az4246;
        return $this;
    }

    /**
     * Set the az4247.
     *
     * @param float $az4247 The az4247.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4247($az4247) {
        $this->az4247 = $az4247;
        return $this;
    }

    /**
     * Set the az4248.
     *
     * @param float $az4248 The az4248.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4248($az4248) {
        $this->az4248 = $az4248;
        return $this;
    }

    /**
     * Set the az4249.
     *
     * @param float $az4249 The az4249.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4249($az4249) {
        $this->az4249 = $az4249;
        return $this;
    }

    /**
     * Set the az4250.
     *
     * @param float $az4250 The az4250.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4250($az4250) {
        $this->az4250 = $az4250;
        return $this;
    }

    /**
     * Set the az4251.
     *
     * @param float $az4251 The az4251.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4251($az4251) {
        $this->az4251 = $az4251;
        return $this;
    }

    /**
     * Set the az4252.
     *
     * @param float $az4252 The az4252.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4252($az4252) {
        $this->az4252 = $az4252;
        return $this;
    }

    /**
     * Set the az4254.
     *
     * @param float $az4254 The az4254.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4254($az4254) {
        $this->az4254 = $az4254;
        return $this;
    }

    /**
     * Set the az4255.
     *
     * @param float $az4255 The az4255.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4255($az4255) {
        $this->az4255 = $az4255;
        return $this;
    }

    /**
     * Set the az4256.
     *
     * @param float $az4256 The az4256.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4256($az4256) {
        $this->az4256 = $az4256;
        return $this;
    }

    /**
     * Set the az4257.
     *
     * @param float $az4257 The az4257.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4257($az4257) {
        $this->az4257 = $az4257;
        return $this;
    }

    /**
     * Set the az4258.
     *
     * @param float $az4258 The az4258.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4258($az4258) {
        $this->az4258 = $az4258;
        return $this;
    }

    /**
     * Set the az4259.
     *
     * @param float $az4259 The az4259.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4259($az4259) {
        $this->az4259 = $az4259;
        return $this;
    }

    /**
     * Set the az4260.
     *
     * @param float $az4260 The az4260.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4260($az4260) {
        $this->az4260 = $az4260;
        return $this;
    }

    /**
     * Set the az4261.
     *
     * @param float $az4261 The az4261.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4261($az4261) {
        $this->az4261 = $az4261;
        return $this;
    }

    /**
     * Set the az4262.
     *
     * @param float $az4262 The az4262.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4262($az4262) {
        $this->az4262 = $az4262;
        return $this;
    }

    /**
     * Set the az4263.
     *
     * @param float $az4263 The az4263.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4263($az4263) {
        $this->az4263 = $az4263;
        return $this;
    }

    /**
     * Set the az4264.
     *
     * @param float $az4264 The az4264.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4264($az4264) {
        $this->az4264 = $az4264;
        return $this;
    }

    /**
     * Set the az4265.
     *
     * @param float $az4265 The az4265.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4265($az4265) {
        $this->az4265 = $az4265;
        return $this;
    }

    /**
     * Set the az4266.
     *
     * @param float $az4266 The az4266.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4266($az4266) {
        $this->az4266 = $az4266;
        return $this;
    }

    /**
     * Set the az4267.
     *
     * @param float $az4267 The az4267.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4267($az4267) {
        $this->az4267 = $az4267;
        return $this;
    }

    /**
     * Set the az4268.
     *
     * @param float $az4268 The az4268.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4268($az4268) {
        $this->az4268 = $az4268;
        return $this;
    }

    /**
     * Set the az4268 base.
     *
     * @param float $az4268Base The az4268 base.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4268Base($az4268Base) {
        $this->az4268Base = $az4268Base;
        return $this;
    }

    /**
     * Set the az4269.
     *
     * @param float $az4269 The az4269.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4269($az4269) {
        $this->az4269 = $az4269;
        return $this;
    }

    /**
     * Set the az4269 base.
     *
     * @param float $az4269Base The az4269 base.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4269Base($az4269Base) {
        $this->az4269Base = $az4269Base;
        return $this;
    }

    /**
     * Set the az4270.
     *
     * @param float $az4270 The az4270.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4270($az4270) {
        $this->az4270 = $az4270;
        return $this;
    }

    /**
     * Set the az4270 base.
     *
     * @param float $az4270Base The az4270 base.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4270Base($az4270Base) {
        $this->az4270Base = $az4270Base;
        return $this;
    }

    /**
     * Set the az4271.
     *
     * @param float $az4271 The az4271.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4271($az4271) {
        $this->az4271 = $az4271;
        return $this;
    }

    /**
     * Set the az4271 base.
     *
     * @param float $az4271Base The az4271 base.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4271Base($az4271Base) {
        $this->az4271Base = $az4271Base;
        return $this;
    }

    /**
     * Set the az4272.
     *
     * @param float $az4272 The az4272.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4272($az4272) {
        $this->az4272 = $az4272;
        return $this;
    }

    /**
     * Set the az4274.
     *
     * @param float $az4274 The az4274.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4274($az4274) {
        $this->az4274 = $az4274;
        return $this;
    }

    /**
     * Set the az4276.
     *
     * @param float $az4276 The az4276.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4276($az4276) {
        $this->az4276 = $az4276;
        return $this;
    }

    /**
     * Set the az4276 base.
     *
     * @param float $az4276Base The az4276 base.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4276Base($az4276Base) {
        $this->az4276Base = $az4276Base;
        return $this;
    }

    /**
     * Set the az4277.
     *
     * @param float $az4277 The az4277.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4277($az4277) {
        $this->az4277 = $az4277;
        return $this;
    }

    /**
     * Set the az4277 base.
     *
     * @param float $az4277Base The az4277 base.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4277Base($az4277Base) {
        $this->az4277Base = $az4277Base;
        return $this;
    }

    /**
     * Set the az4278.
     *
     * @param float $az4278 The az4278.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4278($az4278) {
        $this->az4278 = $az4278;
        return $this;
    }

    /**
     * Set the az4279.
     *
     * @param float $az4279 The az4279.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4279($az4279) {
        $this->az4279 = $az4279;
        return $this;
    }

    /**
     * Set the az4280.
     *
     * @param float $az4280 The az4280.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4280($az4280) {
        $this->az4280 = $az4280;
        return $this;
    }

    /**
     * Set the az4281.
     *
     * @param float $az4281 The az4281.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4281($az4281) {
        $this->az4281 = $az4281;
        return $this;
    }

    /**
     * Set the az4282.
     *
     * @param float $az4282 The az4282.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4282($az4282) {
        $this->az4282 = $az4282;
        return $this;
    }

    /**
     * Set the az4283.
     *
     * @param float $az4283 The az4283.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4283($az4283) {
        $this->az4283 = $az4283;
        return $this;
    }

    /**
     * Set the az4284.
     *
     * @param float $az4284 The az4284.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4284($az4284) {
        $this->az4284 = $az4284;
        return $this;
    }

    /**
     * Set the az4285.
     *
     * @param float $az4285 The az4285.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4285($az4285) {
        $this->az4285 = $az4285;
        return $this;
    }

    /**
     * Set the az4288.
     *
     * @param float $az4288 The az4288.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4288($az4288) {
        $this->az4288 = $az4288;
        return $this;
    }

    /**
     * Set the az4289.
     *
     * @param float $az4289 The az4289.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4289($az4289) {
        $this->az4289 = $az4289;
        return $this;
    }

    /**
     * Set the az4290.
     *
     * @param float $az4290 The az4290.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setAz4290($az4290) {
        $this->az4290 = $az4290;
        return $this;
    }

    /**
     * Set the corres1.
     *
     * @param string $corres1 The corres1.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setCorres1($corres1) {
        $this->corres1 = $corres1;
        return $this;
    }

    /**
     * Set the corres2.
     *
     * @param string $corres2 The corres2.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setCorres2($corres2) {
        $this->corres2 = $corres2;
        return $this;
    }

    /**
     * Set the corres3.
     *
     * @param string $corres3 The corres3.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setCorres3($corres3) {
        $this->corres3 = $corres3;
        return $this;
    }

    /**
     * Set the corres4.
     *
     * @param string $corres4 The corres4.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setCorres4($corres4) {
        $this->corres4 = $corres4;
        return $this;
    }

    /**
     * Set the corres5.
     *
     * @param string $corres5 The corres5.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setCorres5($corres5) {
        $this->corres5 = $corres5;
        return $this;
    }

    /**
     * Set the date dec.
     *
     * @param string $dateDec The date dec.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setDateDec($dateDec) {
        $this->dateDec = $dateDec;
        return $this;
    }

    /**
     * Set the debut exo.
     *
     * @param DateTime $debutExo The debut exo.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setDebutExo(DateTime $debutExo = null) {
        $this->debutExo = $debutExo;
        return $this;
    }

    /**
     * Set the fin exo.
     *
     * @param DateTime $finExo The fin exo.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setFinExo(DateTime $finExo = null) {
        $this->finExo = $finExo;
        return $this;
    }

    /**
     * Set the lib doss.
     *
     * @param string $libDoss The lib doss.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setLibDoss($libDoss) {
        $this->libDoss = $libDoss;
        return $this;
    }

    /**
     * Set the mention expresse.
     *
     * @param bool $mentionExpresse The mention expresse.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setMentionExpresse($mentionExpresse) {
        $this->mentionExpresse = $mentionExpresse;
        return $this;
    }

    /**
     * Set the no doss.
     *
     * @param string $noDoss The no doss.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setNoDoss($noDoss) {
        $this->noDoss = $noDoss;
        return $this;
    }

    /**
     * Set the no lot ecritures.
     *
     * @param int $noLotEcritures The no lot ecritures.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setNoLotEcritures($noLotEcritures) {
        $this->noLotEcritures = $noLotEcritures;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the paiement imputation.
     *
     * @param bool $paiementImputation The paiement imputation.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setPaiementImputation($paiementImputation) {
        $this->paiementImputation = $paiementImputation;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the sel adresse dest.
     *
     * @param string $selAdresseDest The sel adresse dest.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setSelAdresseDest($selAdresseDest) {
        $this->selAdresseDest = $selAdresseDest;
        return $this;
    }

    /**
     * Set the total.
     *
     * @param float $total The total.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Set the type dec.
     *
     * @param string $typeDec The type dec.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setTypeDec($typeDec) {
        $this->typeDec = $typeDec;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string $ville The ville.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

    /**
     * Set the z0100b.
     *
     * @param float $z0100b The z0100b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ0100b($z0100b) {
        $this->z0100b = $z0100b;
        return $this;
    }

    /**
     * Set the z0121b.
     *
     * @param float $z0121b The z0121b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ0121b($z0121b) {
        $this->z0121b = $z0121b;
        return $this;
    }

    /**
     * Set the z0705.
     *
     * @param float $z0705 The z0705.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ0705($z0705) {
        $this->z0705 = $z0705;
        return $this;
    }

    /**
     * Set the z0920b.
     *
     * @param float $z0920b The z0920b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ0920b($z0920b) {
        $this->z0920b = $z0920b;
        return $this;
    }

    /**
     * Set the z12 code.
     *
     * @param string $z12Code The z12 code.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ12Code($z12Code) {
        $this->z12Code = $z12Code;
        return $this;
    }

    /**
     * Set the z12 lib.
     *
     * @param string $z12Lib The z12 lib.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ12Lib($z12Lib) {
        $this->z12Lib = $z12Lib;
        return $this;
    }

    /**
     * Set the z12 taxe.
     *
     * @param float $z12Taxe The z12 taxe.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ12Taxe($z12Taxe) {
        $this->z12Taxe = $z12Taxe;
        return $this;
    }

    /**
     * Set the z14.
     *
     * @param float $z14 The z14.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ14($z14) {
        $this->z14 = $z14;
        return $this;
    }

    /**
     * Set the z196b.
     *
     * @param float $z196b The z196b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ196b($z196b) {
        $this->z196b = $z196b;
        return $this;
    }

    /**
     * Set the z21.
     *
     * @param float $z21 The z21.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ21($z21) {
        $this->z21 = $z21;
        return $this;
    }

    /**
     * Set the z25.
     *
     * @param float $z25 The z25.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ25($z25) {
        $this->z25 = $z25;
        return $this;
    }

    /**
     * Set the z4227.
     *
     * @param float $z4227 The z4227.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ4227($z4227) {
        $this->z4227 = $z4227;
        return $this;
    }

    /**
     * Set the z8001.
     *
     * @param float $z8001 The z8001.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ8001($z8001) {
        $this->z8001 = $z8001;
        return $this;
    }

    /**
     * Set the z8002.
     *
     * @param float $z8002 The z8002.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ8002($z8002) {
        $this->z8002 = $z8002;
        return $this;
    }

    /**
     * Set the z8003.
     *
     * @param float $z8003 The z8003.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ8003($z8003) {
        $this->z8003 = $z8003;
        return $this;
    }

    /**
     * Set the z8005.
     *
     * @param float $z8005 The z8005.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ8005($z8005) {
        $this->z8005 = $z8005;
        return $this;
    }

    /**
     * Set the z8006.
     *
     * @param float $z8006 The z8006.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ8006($z8006) {
        $this->z8006 = $z8006;
        return $this;
    }

    /**
     * Set the z9979.
     *
     * @param float $z9979 The z9979.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ9979($z9979) {
        $this->z9979 = $z9979;
        return $this;
    }

    /**
     * Set the z9989.
     *
     * @param float $z9989 The z9989.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ9989($z9989) {
        $this->z9989 = $z9989;
        return $this;
    }

    /**
     * Set the z9991.
     *
     * @param float $z9991 The z9991.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ9991($z9991) {
        $this->z9991 = $z9991;
        return $this;
    }

    /**
     * Set the z9999.
     *
     * @param float $z9999 The z9999.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ9999($z9999) {
        $this->z9999 = $z9999;
        return $this;
    }

    /**
     * Set the z9 b taxe.
     *
     * @param float $z9BTaxe The z9 b taxe.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setZ9BTaxe($z9BTaxe) {
        $this->z9BTaxe = $z9BTaxe;
        return $this;
    }

    /**
     * Set the i lock.
     *
     * @param int $iLock The i lock.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setiLock($iLock) {
        $this->iLock = $iLock;
        return $this;
    }

    /**
     * Set the z0151b.
     *
     * @param float $z0151b The z0151b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setz0151b($z0151b) {
        $this->z0151b = $z0151b;
        return $this;
    }

    /**
     * Set the z0207b.
     *
     * @param float $z0207b The z0207b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setz0207b($z0207b) {
        $this->z0207b = $z0207b;
        return $this;
    }

    /**
     * Set the z0600.
     *
     * @param float $z0600 The z0600.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setz0600($z0600) {
        $this->z0600 = $z0600;
        return $this;
    }

    /**
     * Set the z0900b.
     *
     * @param float $z0900b The z0900b.
     * @return DecTVAGroupe Returns this dec t v a groupe.
     */
    public function setz0900b($z0900b) {
        $this->z0900b = $z0900b;
        return $this;
    }
}