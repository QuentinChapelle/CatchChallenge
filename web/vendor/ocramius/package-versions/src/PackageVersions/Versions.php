<?php

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const VERSIONS = array (
  'doctrine/cache' => 'v1.6.1@b6f544a20f4807e81f7044d31e679ccbb1866dc3',
  'jms/metadata' => '1.6.0@6a06970a10e0a532fb52d3959547123b84a3b3ab',
  'ocramius/package-versions' => '1.1.1@4b2bfc8128db95b533303942b0d5b332bffa07c6',
  'ocramius/proxy-manager' => '2.0.4@a55d08229f4f614bf335759ed0cf63378feeb2e6',
  'paragonie/random_compat' => 'v2.0.4@a9b97968bcde1c4de2a5ec6cbd06a0f6c919b46e',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/log' => '1.0.2@4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
  'symfony/cache' => 'v3.2.1@a2503bbf8ef729f4eb7b134efee6217f49ecd56d',
  'symfony/class-loader' => 'v3.2.1@87cd4e69435d98de01d0162c5f9c0ac017075c63',
  'symfony/config' => 'v3.2.1@b4ec9f099599cfc5b7f4d07bb2e910781a2be5e4',
  'symfony/debug' => 'v3.2.1@9f923e68d524a3095c5a2ae5fc7220c7cbc12231',
  'symfony/dependency-injection' => 'v3.2.1@037054501c41007c93b6de1b5c7a7acb83523593',
  'symfony/event-dispatcher' => 'v3.2.1@e8f47a327c2f0fd5aa04fa60af2b693006ed7283',
  'symfony/filesystem' => 'v3.2.1@8d4cf7561a5b17e5eb7a02b80d0b8f014a3796d4',
  'symfony/finder' => 'v3.2.1@a69cb5d455b4885ca376dc5bb3e1155cc8c08c4b',
  'symfony/framework-bundle' => 'v3.2.1@25f418298d8fa1cc129f9c33cbd627b20869c1a1',
  'symfony/http-foundation' => 'v3.2.1@9963bc29d7f4398b137dd8efc480efe54fdbe5f1',
  'symfony/http-kernel' => 'v3.2.1@8fedefadee9c91567414a07130c81e7c406fe68a',
  'symfony/inflector' => 'v3.2.1@50453f605f0f7f397aad4a4566d2b1d1fab9c3e2',
  'symfony/polyfill-mbstring' => 'v1.3.0@e79d363049d1c2128f133a2667e4f4190904f7f4',
  'symfony/polyfill-php70' => 'v1.3.0@13ce343935f0f91ca89605a2f6ca6f5c2f3faac2',
  'symfony/property-access' => 'v3.2.1@1cee1399154c1ac20184587ba4a6908488bf5eee',
  'symfony/routing' => 'v3.2.1@3f239c0e049d8920928674cd55e21061182b0106',
  'symfony/stopwatch' => 'v3.2.1@5b139e1c4290e6c7640ba80d9c9b5e49ef22b841',
  'vich/uploader-bundle' => '1.3.1@9559c29dcee87d99cb96279f03128059ae0bb480',
  'zendframework/zend-code' => '3.1.0@2899c17f83a7207f2d7f53ec2f421204d3beea27',
  'zendframework/zend-eventmanager' => '3.0.1@5c80bdee0e952be112dcec0968bad770082c3a6e',
  '__root__' => 'dev-AylinDev@75ebf84d1073e039d1355184d4598442b2911900',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException if a version cannot be located
     */
    public static function getVersion(string $packageName) : string
    {
        if (! isset(self::VERSIONS[$packageName])) {
            throw new \OutOfBoundsException(
                'Required package "' . $packageName . '" is not installed: cannot detect its version'
            );
        }

        return self::VERSIONS[$packageName];
    }
}
