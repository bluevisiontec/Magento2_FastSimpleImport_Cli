# Magento2_FastSimpleImport_Cli
Cli module for calling FastSimpleImport via command line

AI Art Inc. version starts at 1.2.0


Installation Instructions with Composer
---------------------------------------------

    composer require bluevisiontec/fastsimpleimportcli
    bin/magento module:enable BlueVisionTec_FastsimpleimportCli
    bin/magento setup:upgrade
    



## Products

### Import simple products:
`bin/magento magento2fastsimpleimportcli:products:importsimple`

### Import configurable products:
`bin/magento magento2fastsimpleimportcli:products:importconfigurable`

### Import bundle products:
`bin/magento magento2fastsimpleimportcli:products:importbundle`

### Import simple Products with multiselect-attributes:
`bin/magento magento2fastsimpleimportcli:products:importmultiselect`

### Delete all products in Catalog(Warning : really all Products):
`bin/magento magento2fastsimpleimportcli:products:deleteall`

### Import products from CSV File:
`bin/magento magento2fastsimpleimportcli:products:importcsv`

## Customers

### Import customers
`bin/magento magento2fastsimpleimportcli:customers:import`

### Delete all customers:
`bin/magento magento2fastsimpleimportcli:customers:deleteall`

## Categories

### Import Categories:
`bin/magento magento2fastsimpleimportcli:category:import`

## Credits

This module is a fork of https://github.com/aiartinc/Magento2_FastSimpleImport_Cli

### Initial contributors

* FireGento e.V.
* Elias Kotlyar
* AiArtInc e.V.

