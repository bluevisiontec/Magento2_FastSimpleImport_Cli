<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace BlueVisionTec\FastsimpleimportCli\Console\Command\Orders;
use Magento\ImportExport\Model\Import;
use BlueVisionTec\FastsimpleimportCli\Console\Command\AbstractExportCommand;
/**
 * Class TestCommand
 * @package BlueVisionTec\FastSimpleImport2\Console\Command
 *
 */
class ExportOrders extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportcli:orders:export')
            ->setDescription('Export Orders ');
        $this->setEntityCode('order');

        parent::configure();
    }


}
