<?php
/**
 * Copyright © 2016 FireGento e.V. - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */
namespace AiArtInc\fastsimpleimportCli\Console\Command\Product;
use AiArtInc\fastsimpleimportCli\Console\Command\AbstractImportCommand;
use Magento\Framework\App\ObjectManagerFactory;
use Magento\ImportExport\Model\Import;
use Magento\Catalog\Api\ProductAttributeOptionManagementInterface;
/**
 * Class TestCommand
 * @package AiArtInc\FastSimpleImport2\Console\Command
 *
 */
class ImportMultiselect extends AbstractImportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportCli:products:importmultiselect')
            ->setDescription('Import Simple Products with Multiselect ');

        $this->setBehavior(Import::BEHAVIOR_ADD_UPDATE);
        $this->setEntityCode('catalog_product');

        parent::configure();
    }

    /**
     * @return array
     */
    protected function getEntities()
    {

        $data = [];
        for ($i = 1; $i <= 1; $i++) {
            $data[] = array(
                'sku' => 'AiArtInc-' . $i,
                'attribute_set_code' => 'Default',
                'product_type' => 'simple',
                'product_websites' => 'base',
                'name' => 'AiArtInc Test Product ' . $i,
                'price' => '14.0000',
                'ean' => "1234",
                'multiselect' => 'Test|Test3'
            );
        }
        return $data;
    }
}