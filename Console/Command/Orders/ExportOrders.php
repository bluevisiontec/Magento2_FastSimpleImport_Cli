<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace FireGento\fastsimpleimportCli\Console\Command\Orders;
use Magento\ImportExport\Model\Import;
use AiArtInc\fastsimpleimportCli\Console\Command\AbstractExportCommand;
/**
 * Class TestCommand
 * @package AiArtInc\FastSimpleImport2\Console\Command
 *
 */
class ExportOrders extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportCli:orders:export')
            ->setDescription('Export Orders ');
        $this->setEntityCode('order');

        parent::configure();
    }


}