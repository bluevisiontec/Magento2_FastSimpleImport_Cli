<?php
namespace BlueVisionTec\FastsimpleimportCli\Console\Command\Product;

use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\App\Filesystem\DirectoryList;
use BlueVisionTec\FastsimpleimportCli\Console\Command\AbstractImportCommand;
use Magento\Framework\App\ObjectManagerFactory;
use Magento\ImportExport\Model\Import;
use League\Csv\Reader;

use Symfony\Component\Console\Input\InputArgument;


class ImportCsv extends AbstractImportCommand
{

    /**
     * @var \Magento\Framework\Filesystem\Directory\ReadFactory
     */
    private $readFactory;
    /**
     * @var DirectoryList
     */
    private $directory_list;


    /**
     * Constructor
     *
     * @param ObjectManagerFactory $objectManagerFactory
     */
    public function __construct(
        ObjectManagerFactory $objectManagerFactory,
        \Magento\Framework\Filesystem\Directory\ReadFactory $readFactory,
        \Magento\Framework\App\Filesystem\DirectoryList $directory_list
    )
    {

        parent::__construct($objectManagerFactory);


        $this->readFactory = $readFactory;

        $this->directory_list = $directory_list;
        
    }

    protected function configure()
    {

        $this->setName('fastsimpleimportcli:products:importcsv')
            ->setDescription('Import Products from CSV');
        $this->setBehavior(Import::BEHAVIOR_ADD_UPDATE);
        $this->setEntityCode('catalog_product');
        
        $this->addArgument('csvPath', InputArgument::REQUIRED, __('Path to CSV file or import dir'));

        parent::configure();
    }

    /**
     * @return array
     */
    protected function getEntities()
    {
    
        $csvPath = $this->input->getArgument('csvPath');
        
        if(!$readFiles = $this->getFilePaths($csvPath)) {
            return false;
        }

        return $this->getData($readFiles);
    }

    protected function getData($readFiles)
    {
        $data = [];
        
        foreach($readFiles as $csvFile) {
            $csvObj = Reader::createFromPath($csvFile,'r');
            $csvObj->setHeaderOffset(0);
            $csvObj->setDelimiter(',');
            foreach ($csvObj->getRecords() as $record) {
                $data[] = $record;
            }
        }
        
        return $data;

    }

    protected function getFilePaths($csvPath)
    {
        if( !($csvPath === DIRECTORY_SEPARATOR || preg_match('~\A[A-Z]:(?![^/\\\\])~i',$csvPath) > 0)) {
            // relative path
            $csvPath = $this->directory_list->getRoot() . "/" . $csvPath;
        }
        
        if(!file_exists($csvPath)) {
            $this->io->error('Path does not exist.');
            return false;
        }
        $readFiles = [];
        
        
        
        if(is_dir($csvPath)) {
            $csvPath = rtrim($csvPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR;
            foreach(scandir($csvPath) as $fileName) {
                if(is_file($csvPath.$fileName)) {
                    $readFiles[] = $csvPath.$fileName;
                }
            }
        } else {
            $readFiles[] = $csvPath;
        }
        
        return $readFiles;
    }
}
