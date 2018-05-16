<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace AiArtInc\Magento2FastsimpleimportCli\Console\Command\Customer;
use Magento\ImportExport\Model\Import;
use AiArtInc\Magento2FastsimpleimportCli\Console\Command\AbstractExportCommand;
/**
 * Class TestCommand
 * @package AiArtInc\FastSimpleImport2\Console\Command
 *
 */
class ExportCustomer extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('magento2fastsimpleimportcli:customers:export')
            ->setDescription('Export Customers');
        $this->setEntityCode('customer');

        parent::configure();
    }


}