# Magento2_FastSimpleImport_Cli
Cli module for calling FastSimpleImport via command line



Installation Instructions with Composer
---------------------------------------------

    composer require aiartinc/magento2fastsimpleimportcli
    bin/magento module:enable HamiltonWang_FastSimpleImportCli
    bin/magento setup:upgrade
    



## Products

### Import simple products:
`bin/magento fastsimpleimportCli:products:importsimple`

### Import configurable products:
`bin/magento fastsimpleimportCli:products:importconfigurable`

### Import bundle products:
`bin/magento fastsimpleimportCli:products:importbundle`

### Import simple Products with multiselect-attributes:
`bin/magento fastsimpleimportCli:products:importmultiselect`

### Delete all products in Catalog(Warning : really all Products):
`bin/magento fastsimpleimportCli:products:deleteall`

### Import products from CSV File:
`bin/magento fastsimpleimportCli:products:importcsv`

## Customers

### Import customers
`bin/magento fastsimpleimportCli:customers:import`

### Delete all customers:
`bin/magento fastsimpleimportCli:customers:deleteall`

## Categories

### Import Categories:
`bin/magento fastsimpleimportCli:category:import`
