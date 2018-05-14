<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace AiArtInc\fastsimpleimportCli\Console\Command\Customer;
use Magento\ImportExport\Model\Import;
use AiArtInc\fastsimpleimportCli\Console\Command\AbstractExportCommand;
/**
 * Class TestCommand
 * @package AiArtInc\FastSimpleImport2\Console\Command
 *
 */
class ExportCustomer extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportCli:customers:export')
            ->setDescription('Export Customers');
        $this->setEntityCode('customer');

        parent::configure();
    }


}