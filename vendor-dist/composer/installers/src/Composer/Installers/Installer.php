<?php

namespace NF_FU_VENDOR\Composer\Installers;

use NF_FU_VENDOR\Composer\Composer;
use NF_FU_VENDOR\Composer\Installer\BinaryInstaller;
use NF_FU_VENDOR\Composer\Installer\LibraryInstaller;
use NF_FU_VENDOR\Composer\IO\IOInterface;
use NF_FU_VENDOR\Composer\Package\PackageInterface;
use NF_FU_VENDOR\Composer\Repository\InstalledRepositoryInterface;
use NF_FU_VENDOR\Composer\Util\Filesystem;
class Installer extends \NF_FU_VENDOR\Composer\Installer\LibraryInstaller
{
    /**
     * Package types to installer class map
     *
     * @var array
     */
    private $supportedTypes = array('aimeos' => 'AimeosInstaller', 'asgard' => 'AsgardInstaller', 'attogram' => 'AttogramInstaller', 'agl' => 'AglInstaller', 'annotatecms' => 'AnnotateCmsInstaller', 'bitrix' => 'BitrixInstaller', 'bonefish' => 'BonefishInstaller', 'cakephp' => 'CakePHPInstaller', 'chef' => 'ChefInstaller', 'civicrm' => 'CiviCrmInstaller', 'ccframework' => 'ClanCatsFrameworkInstaller', 'cockpit' => 'CockpitInstaller', 'codeigniter' => 'CodeIgniterInstaller', 'concrete5' => 'Concrete5Installer', 'craft' => 'CraftInstaller', 'croogo' => 'CroogoInstaller', 'dframe' => 'DframeInstaller', 'dokuwiki' => 'DokuWikiInstaller', 'dolibarr' => 'DolibarrInstaller', 'decibel' => 'DecibelInstaller', 'drupal' => 'DrupalInstaller', 'elgg' => 'ElggInstaller', 'eliasis' => 'EliasisInstaller', 'ee3' => 'ExpressionEngineInstaller', 'ee2' => 'ExpressionEngineInstaller', 'ezplatform' => 'EzPlatformInstaller', 'fuel' => 'FuelInstaller', 'fuelphp' => 'FuelphpInstaller', 'grav' => 'GravInstaller', 'hurad' => 'HuradInstaller', 'imagecms' => 'ImageCMSInstaller', 'itop' => 'ItopInstaller', 'joomla' => 'JoomlaInstaller', 'kanboard' => 'KanboardInstaller', 'kirby' => 'KirbyInstaller', 'known' => 'KnownInstaller', 'kodicms' => 'KodiCMSInstaller', 'kohana' => 'KohanaInstaller', 'lms' => 'LanManagementSystemInstaller', 'laravel' => 'LaravelInstaller', 'lavalite' => 'LavaLiteInstaller', 'lithium' => 'LithiumInstaller', 'magento' => 'MagentoInstaller', 'majima' => 'MajimaInstaller', 'mako' => 'MakoInstaller', 'maya' => 'MayaInstaller', 'mautic' => 'MauticInstaller', 'mediawiki' => 'MediaWikiInstaller', 'microweber' => 'MicroweberInstaller', 'modulework' => 'MODULEWorkInstaller', 'modx' => 'ModxInstaller', 'modxevo' => 'MODXEvoInstaller', 'moodle' => 'MoodleInstaller', 'october' => 'OctoberInstaller', 'ontowiki' => 'OntoWikiInstaller', 'oxid' => 'OxidInstaller', 'osclass' => 'OsclassInstaller', 'pxcms' => 'PxcmsInstaller', 'phpbb' => 'PhpBBInstaller', 'pimcore' => 'PimcoreInstaller', 'piwik' => 'PiwikInstaller', 'plentymarkets' => 'PlentymarketsInstaller', 'ppi' => 'PPIInstaller', 'puppet' => 'PuppetInstaller', 'radphp' => 'RadPHPInstaller', 'phifty' => 'PhiftyInstaller', 'porto' => 'PortoInstaller', 'redaxo' => 'RedaxoInstaller', 'redaxo5' => 'Redaxo5Installer', 'reindex' => 'ReIndexInstaller', 'roundcube' => 'RoundcubeInstaller', 'shopware' => 'ShopwareInstaller', 'sitedirect' => 'SiteDirectInstaller', 'silverstripe' => 'SilverStripeInstaller', 'smf' => 'SMFInstaller', 'sydes' => 'SyDESInstaller', 'symfony1' => 'Symfony1Installer', 'tao' => 'TaoInstaller', 'thelia' => 'TheliaInstaller', 'tusk' => 'TuskInstaller', 'typo3-cms' => 'TYPO3CmsInstaller', 'typo3-flow' => 'TYPO3FlowInstaller', 'userfrosting' => 'UserFrostingInstaller', 'vanilla' => 'VanillaInstaller', 'whmcs' => 'WHMCSInstaller', 'wolfcms' => 'WolfCMSInstaller', 'wordpress' => 'WordPressInstaller', 'yawik' => 'YawikInstaller', 'zend' => 'ZendInstaller', 'zikula' => 'ZikulaInstaller', 'prestashop' => 'PrestashopInstaller');
    /**
     * Installer constructor.
     *
     * Disables installers specified in main composer extra installer-disable
     * list
     *
     * @param IOInterface          $io
     * @param Composer             $composer
     * @param string               $type
     * @param Filesystem|null      $filesystem
     * @param BinaryInstaller|null $binaryInstaller
     */
    public function __construct(\NF_FU_VENDOR\Composer\IO\IOInterface $io, \NF_FU_VENDOR\Composer\Composer $composer, $type = 'library', \NF_FU_VENDOR\Composer\Util\Filesystem $filesystem = null, \NF_FU_VENDOR\Composer\Installer\BinaryInstaller $binaryInstaller = null)
    {
        parent::__construct($io, $composer, $type, $filesystem, $binaryInstaller);
        $this->removeDisabledInstallers();
    }
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(\NF_FU_VENDOR\Composer\Package\PackageInterface $package)
    {
        $type = $package->getType();
        $frameworkType = $this->findFrameworkType($type);
        if ($frameworkType === \false) {
            throw new \InvalidArgumentException('Sorry the package type of this package is not yet supported.');
        }
        $class = 'Composer\\Installers\\' . $this->supportedTypes[$frameworkType];
        $installer = new $class($package, $this->composer, $this->getIO());
        return $installer->getInstallPath($package, $frameworkType);
    }
    public function uninstall(\NF_FU_VENDOR\Composer\Repository\InstalledRepositoryInterface $repo, \NF_FU_VENDOR\Composer\Package\PackageInterface $package)
    {
        parent::uninstall($repo, $package);
        $installPath = $this->getPackageBasePath($package);
        $this->io->write(\sprintf('Deleting %s - %s', $installPath, !\file_exists($installPath) ? '<comment>deleted</comment>' : '<error>not deleted</error>'));
    }
    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        $frameworkType = $this->findFrameworkType($packageType);
        if ($frameworkType === \false) {
            return \false;
        }
        $locationPattern = $this->getLocationPattern($frameworkType);
        return \preg_match('#' . $frameworkType . '-' . $locationPattern . '#', $packageType, $matches) === 1;
    }
    /**
     * Finds a supported framework type if it exists and returns it
     *
     * @param  string $type
     * @return string
     */
    protected function findFrameworkType($type)
    {
        $frameworkType = \false;
        \krsort($this->supportedTypes);
        foreach ($this->supportedTypes as $key => $val) {
            if ($key === \substr($type, 0, \strlen($key))) {
                $frameworkType = \substr($type, 0, \strlen($key));
                break;
            }
        }
        return $frameworkType;
    }
    /**
     * Get the second part of the regular expression to check for support of a
     * package type
     *
     * @param  string $frameworkType
     * @return string
     */
    protected function getLocationPattern($frameworkType)
    {
        $pattern = \false;
        if (!empty($this->supportedTypes[$frameworkType])) {
            $frameworkClass = 'Composer\\Installers\\' . $this->supportedTypes[$frameworkType];
            /** @var BaseInstaller $framework */
            $framework = new $frameworkClass(null, $this->composer, $this->getIO());
            $locations = \array_keys($framework->getLocations());
            $pattern = $locations ? '(' . \implode('|', $locations) . ')' : \false;
        }
        return $pattern ?: '(\\w+)';
    }
    /**
     * Get I/O object
     *
     * @return IOInterface
     */
    private function getIO()
    {
        return $this->io;
    }
    /**
     * Look for installers set to be disabled in composer's extra config and
     * remove them from the list of supported installers.
     *
     * Globals:
     *  - true, "all", and "*" - disable all installers.
     *  - false - enable all installers (useful with
     *     wikimedia/composer-merge-plugin or similar)
     *
     * @return void
     */
    protected function removeDisabledInstallers()
    {
        $extra = $this->composer->getPackage()->getExtra();
        if (!isset($extra['installer-disable']) || $extra['installer-disable'] === \false) {
            // No installers are disabled
            return;
        }
        // Get installers to disable
        $disable = $extra['installer-disable'];
        // Ensure $disabled is an array
        if (!\is_array($disable)) {
            $disable = array($disable);
        }
        // Check which installers should be disabled
        $all = array(\true, "all", "*");
        $intersect = \array_intersect($all, $disable);
        if (!empty($intersect)) {
            // Disable all installers
            $this->supportedTypes = array();
        } else {
            // Disable specified installers
            foreach ($disable as $key => $installer) {
                if (\is_string($installer) && \key_exists($installer, $this->supportedTypes)) {
                    unset($this->supportedTypes[$installer]);
                }
            }
        }
    }
}
