<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace BlueVisionTec\FastsimpleimportCli\Console\Command\Product;
use BlueVisionTec\FastsimpleimportCli\Console\Command\AbstractExportCommand;
use BlueVisionTec\FastsimpleimportCli\Console\Command\AbstractImportCommand;
use Magento\Framework\App\ObjectManagerFactory;
use Magento\ImportExport\Model\Import;
use Magento\Catalog\Api\ProductAttributeOptionManagementInterface;
/**
 * Class TestCommand
 * @package BlueVisionTec\FastSimpleImport2\Console\Command
 *
 */
class ExportProducts extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportcli:products:export')
            ->setDescription('Export Products ');
        $this->setEntityCode('catalog_product');

        parent::configure();
    }


}
