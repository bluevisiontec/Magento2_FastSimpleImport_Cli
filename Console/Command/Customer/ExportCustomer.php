<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace BlueVisionTec\FastsimpleimportCli\Console\Command\Customer;
use Magento\ImportExport\Model\Import;
use BlueVisionTec\FastsimpleimportCli\Console\Command\AbstractExportCommand;
/**
 * Class TestCommand
 * @package BlueVisionTec\FastSimpleImport2\Console\Command
 *
 */
class ExportCustomer extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportcli:customers:export')
            ->setDescription('Export Customers');
        $this->setEntityCode('customer');

        parent::configure();
    }


}
