<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolbGroupeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCreditCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCreditImputerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFlgAcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGenAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMentionExpresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPaiementImputationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz0990bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz0990Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1010bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1010Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1020bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1020Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1030bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1030Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1040bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1040Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1050bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1050Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1080bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1080Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1081bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1081Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1090bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1090Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1100bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1100Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1110bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1110Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1120bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz1120Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz3240Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz3260Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz3510Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz3520Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz38bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz38htTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz3910Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4200Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4201Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4204Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4206Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4207Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4208Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4209Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4210Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4211Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4212Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4213Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4215Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4220Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4222Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4223Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4224Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4228MttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4230Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4231Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4232Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4233Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4234Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4235Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4236Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4237Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4238Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4239Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4240Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4241Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4242Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4243Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4244Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4245Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4246Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4247Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4248Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4249Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4250Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4251Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4252Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4254Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4255Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4256Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4257Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4258Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4259Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4260Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4261Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4262Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4263Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4264Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4265Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4266Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4267Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4268BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4268Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4269BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4269Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4270BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4270Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4271BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4271Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4272Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4274Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4276BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4276Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4277BaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz4277Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz50MttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAz59MttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzEsMttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzEuMttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzExMttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzEyMttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzEzMttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzGaMttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzGcMttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzHiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzHlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzJbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzJcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzLigne4MttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAzLigne5MttTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHtTaux196Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHtTaux7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPCentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReportAcpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0029Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0030Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0031bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0031Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0032Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0033Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0034Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0035Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0036Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0037Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0038Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0039Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0040bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0040Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0041Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0044bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0044Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0045Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0046Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0059bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0100bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0100Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0121bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0121Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0151bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0151Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ01Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0200bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0200Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0205bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0205Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0207bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0207Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ02Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0600Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0701Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0702bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0702Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0703bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0703Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0705Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0709Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0900bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0900Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0920bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0920Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0950bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ0950Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz12HtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ12TaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ14Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ18Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ196bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ196Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ21Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ25Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ4227Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ8001Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ8002Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ8003cTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ8003Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ8005Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ9979Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ9989Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ9991Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ9999Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz9bHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatZ9BTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCa12MoisClotureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNoLotEcrituresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringACorres1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringACorres2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringACorres3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringACorres4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringACorres5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringACorres6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringACorres7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringACorres8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAz38CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAz38LibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAz50CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAz50LibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAz59CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAz59LibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEnCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEnLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEsCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEsLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEuCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEuLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzExCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzExLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEyCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEyLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEzCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzEzLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzGaCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzGaLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzGcCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAzGcLibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCorres1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCorres2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCorres3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCorres4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCorres5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCorres6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCorres7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCorres8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDateDecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLiquiTaxes1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLiquiTaxes2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLiquiTaxes3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLiquiTaxes4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLiquiTaxes5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMonnaieTenueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMonnaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTitulaire1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTitulaire2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSelAdresseDestTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZ12CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZ12LibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz9bCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz9bLibTrait;

/**
 * Dec tva.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva {

    use StringACorres1Trait;
    use StringACorres2Trait;
    use StringACorres3Trait;
    use StringACorres4Trait;
    use StringACorres5Trait;
    use StringACorres6Trait;
    use StringACorres7Trait;
    use StringACorres8Trait;
    use FloatAz0990Trait;
    use FloatAz0990bTrait;
    use FloatAz1010Trait;
    use FloatAz1010bTrait;
    use FloatAz1020Trait;
    use FloatAz1020bTrait;
    use FloatAz1030Trait;
    use FloatAz1030bTrait;
    use FloatAz1040Trait;
    use FloatAz1040bTrait;
    use FloatAz1050Trait;
    use FloatAz1050bTrait;
    use FloatAz1080Trait;
    use FloatAz1080bTrait;
    use FloatAz1081Trait;
    use FloatAz1081bTrait;
    use FloatAz1090Trait;
    use FloatAz1090bTrait;
    use FloatAz1100Trait;
    use FloatAz1100bTrait;
    use FloatAz1110Trait;
    use FloatAz1110bTrait;
    use FloatAz1120Trait;
    use FloatAz1120bTrait;
    use FloatAz3240Trait;
    use FloatAz3260Trait;
    use FloatAz3510Trait;
    use FloatAz3520Trait;
    use StringAz38CodeTrait;
    use StringAz38LibTrait;
    use FloatAz38bTrait;
    use FloatAz38htTrait;
    use FloatAz3910Trait;
    use FloatAz4200Trait;
    use FloatAz4201Trait;
    use FloatAz4204Trait;
    use FloatAz4206Trait;
    use FloatAz4207Trait;
    use FloatAz4208Trait;
    use FloatAz4209Trait;
    use FloatAz4210Trait;
    use FloatAz4211Trait;
    use FloatAz4212Trait;
    use FloatAz4213Trait;
    use FloatAz4215Trait;
    use FloatAz4220Trait;
    use FloatAz4222Trait;
    use FloatAz4223Trait;
    use FloatAz4224Trait;
    use FloatAz4228MttTrait;
    use FloatAz4230Trait;
    use FloatAz4231Trait;
    use FloatAz4232Trait;
    use FloatAz4233Trait;
    use FloatAz4234Trait;
    use FloatAz4235Trait;
    use FloatAz4236Trait;
    use FloatAz4237Trait;
    use FloatAz4238Trait;
    use FloatAz4239Trait;
    use FloatAz4240Trait;
    use FloatAz4241Trait;
    use FloatAz4242Trait;
    use FloatAz4243Trait;
    use FloatAz4244Trait;
    use FloatAz4245Trait;
    use FloatAz4246Trait;
    use FloatAz4247Trait;
    use FloatAz4248Trait;
    use FloatAz4249Trait;
    use FloatAz4250Trait;
    use FloatAz4251Trait;
    use FloatAz4252Trait;
    use FloatAz4254Trait;
    use FloatAz4255Trait;
    use FloatAz4256Trait;
    use FloatAz4257Trait;
    use FloatAz4258Trait;
    use FloatAz4259Trait;
    use FloatAz4260Trait;
    use FloatAz4261Trait;
    use FloatAz4262Trait;
    use FloatAz4263Trait;
    use FloatAz4264Trait;
    use FloatAz4265Trait;
    use FloatAz4266Trait;
    use FloatAz4267Trait;
    use FloatAz4268Trait;
    use FloatAz4268BaseTrait;
    use FloatAz4269Trait;
    use FloatAz4269BaseTrait;
    use FloatAz4270Trait;
    use FloatAz4270BaseTrait;
    use FloatAz4271Trait;
    use FloatAz4271BaseTrait;
    use FloatAz4272Trait;
    use FloatAz4274Trait;
    use FloatAz4276Trait;
    use FloatAz4276BaseTrait;
    use FloatAz4277Trait;
    use FloatAz4277BaseTrait;
    use StringAz50CodeTrait;
    use StringAz50LibTrait;
    use FloatAz50MttTrait;
    use StringAz59CodeTrait;
    use StringAz59LibTrait;
    use FloatAz59MttTrait;
    use StringAzEnCodeTrait;
    use StringAzEnLibTrait;
    use StringAzEsCodeTrait;
    use StringAzEsLibTrait;
    use FloatAzEsMttTrait;
    use StringAzEuCodeTrait;
    use StringAzEuLibTrait;
    use FloatAzEuMttTrait;
    use StringAzExCodeTrait;
    use StringAzExLibTrait;
    use FloatAzExMttTrait;
    use StringAzEyCodeTrait;
    use StringAzEyLibTrait;
    use FloatAzEyMttTrait;
    use StringAzEzCodeTrait;
    use StringAzEzLibTrait;
    use FloatAzEzMttTrait;
    use StringAzGaCodeTrait;
    use StringAzGaLibTrait;
    use FloatAzGaMttTrait;
    use StringAzGcCodeTrait;
    use StringAzGcLibTrait;
    use FloatAzGcMttTrait;
    use FloatAzHiTrait;
    use FloatAzHlTrait;
    use FloatAzJbTrait;
    use FloatAzJcTrait;
    use FloatAzLigne4MttTrait;
    use FloatAzLigne5MttTrait;
    use IntCa12MoisClotureTrait;
    use StringCorres1Trait;
    use StringCorres2Trait;
    use StringCorres3Trait;
    use StringCorres4Trait;
    use StringCorres5Trait;
    use StringCorres6Trait;
    use StringCorres7Trait;
    use StringCorres8Trait;
    use BoolCreditCompteTrait;
    use BoolCreditImputerTrait;
    use StringDateDecTrait;
    use BoolFlgAcTrait;
    use BoolGenAutoTrait;
    use FloatHtTaux196Trait;
    use FloatHtTaux7Trait;
    use StringLiquiTaxes1Trait;
    use StringLiquiTaxes2Trait;
    use StringLiquiTaxes3Trait;
    use StringLiquiTaxes4Trait;
    use StringLiquiTaxes5Trait;
    use BoolMentionExpresseTrait;
    use StringMonnaieTrait;
    use StringMonnaieTenueTrait;
    use IntNoLotEcrituresTrait;
    use FloatPCentTrait;
    use BoolPaiementImputationTrait;
    use DateTimePeriodeTrait;
    use StringRibTitulaire1Trait;
    use StringRibTitulaire2Trait;
    use FloatReportAcpTrait;
    use StringSelAdresseDestTrait;
    use FloatTotalTrait;
    use IntTypeReglementTrait;
    use StringVilleTrait;
    use FloatZ0031Trait;
    use FloatZ0031bTrait;
    use FloatZ0032Trait;
    use FloatZ0033Trait;
    use FloatZ0034Trait;
    use FloatZ0035Trait;
    use FloatZ0037Trait;
    use FloatZ0038Trait;
    use FloatZ0040Trait;
    use FloatZ0040bTrait;
    use FloatZ0041Trait;
    use FloatZ01Trait;
    use FloatZ0100Trait;
    use FloatZ0100bTrait;
    use FloatZ02Trait;
    use FloatZ0200Trait;
    use FloatZ0200bTrait;
    use FloatZ0205Trait;
    use FloatZ0205bTrait;
    use FloatZ0600Trait;
    use FloatZ0701Trait;
    use FloatZ0702Trait;
    use FloatZ0702bTrait;
    use FloatZ0703Trait;
    use FloatZ0703bTrait;
    use FloatZ0705Trait;
    use FloatZ0900Trait;
    use FloatZ0900bTrait;
    use FloatZ0920Trait;
    use FloatZ0920bTrait;
    use FloatZ0950Trait;
    use FloatZ0950bTrait;
    use FloatZ14Trait;
    use FloatZ18Trait;
    use FloatZ196Trait;
    use FloatZ196bTrait;
    use FloatZ21Trait;
    use FloatZ25Trait;
    use FloatZ8001Trait;
    use FloatZ8002Trait;
    use FloatZ8003Trait;
    use FloatZ8003cTrait;
    use FloatZ8005Trait;
    use FloatZ9979Trait;
    use FloatZ9989Trait;
    use FloatZ9991Trait;
    use FloatZ9999Trait;
    use BoolbGroupeTrait;
    use Floatz0029Trait;
    use Floatz0030Trait;
    use Floatz0036Trait;
    use Floatz0039Trait;
    use Floatz0044Trait;
    use Floatz0044bTrait;
    use Floatz0045Trait;
    use Floatz0046Trait;
    use Floatz0059bTrait;
    use Floatz0121Trait;
    use FloatZ0121bTrait;
    use Floatz0151Trait;
    use Floatz0151bTrait;
    use Floatz0207Trait;
    use Floatz0207bTrait;
    use Floatz0709Trait;
    use StringZ12CodeTrait;
    use Floatz12HtTrait;
    use StringZ12LibTrait;
    use FloatZ12TaxeTrait;
    use FloatZ4227Trait;
    use Stringz9bCodeTrait;
    use Floatz9bHtTrait;
    use Stringz9bLibTrait;
    use FloatZ9BTaxeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
