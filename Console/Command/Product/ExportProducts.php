<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace AiArtInc\fastsimpleimportCli\Console\Command\Product;
use AiArtInc\fastsimpleimportCli\Console\Command\AbstractExportCommand;
use AiArtInc\fastsimpleimportCli\Console\Command\AbstractImportCommand;
use Magento\Framework\App\ObjectManagerFactory;
use Magento\ImportExport\Model\Import;
use Magento\Catalog\Api\ProductAttributeOptionManagementInterface;
/**
 * Class TestCommand
 * @package AiArtInc\FastSimpleImport2\Console\Command
 *
 */
class ExportProducts extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportCli:products:export')
            ->setDescription('Export Products ');
        $this->setEntityCode('catalog_product');

        parent::configure();
    }


}