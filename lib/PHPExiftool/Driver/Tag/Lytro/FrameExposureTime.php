<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Lytro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FrameExposureTime extends AbstractTag
{

    protected $Id = 'DevicesShutterFrameExposureDuration';

    protected $Name = 'FrameExposureTime';

    protected $FullName = 'Lytro::Main';

    protected $GroupName = 'Lytro';

    protected $g0 = 'Lytro';

    protected $g1 = 'Lytro';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Frame Exposure Time';

}
