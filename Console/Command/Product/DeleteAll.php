<?php
/**
 * Copyright © 2016 FireGento e.V. - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */
namespace BlueVisionTec\FastsimpleimportCli\Console\Command\Product;
use BlueVisionTec\FastsimpleimportCli\Console\Command\AbstractImportCommand;
use Magento\ImportExport\Model\Import;
/**
 * Class TestCommand
 * @package BlueVisionTec\FastSimpleImport2\Console\Command
 *
 */
class DeleteAll extends AbstractImportCommand
{




    protected function configure()
    {
        $this->setName('fastsimpleimportcli:products:deleteall')
            ->setDescription('Delete Products ');

        $this->setBehavior(Import::BEHAVIOR_DELETE);
        $this->setEntityCode('catalog_product');

        parent::configure();
    }

    /**
     * @return array
     */
    protected function getEntities()
    {

        $productFactory = $this->objectManager->create('Magento\Catalog\Model\ProductFactory');
        $productCollection  = $productFactory->create()->getCollection();
        $data = [];
        foreach($productCollection as $product) {
            $data[] = array(
                'sku' => $product->getSku()
            );
        }
        return $data;
    }
}
