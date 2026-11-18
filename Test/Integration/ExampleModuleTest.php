<?php declare(strict_types=1);

namespace Yireo\ExtensionCheckerTests\Test\Integration;

use Magento\Framework\App\ObjectManager;
use Magento\Framework\Component\ComponentRegistrar;
use Magento\TestFramework\Fixture\ComponentsDir;
use PHPUnit\Framework\TestCase;
use Yireo\ExtensionChecker\Message\MessageBucket;
use Yireo\ExtensionChecker\Scan\Scan;

class ExampleModuleTest extends TestCase
{
    #[ComponentsDir('../../../../vendor/yireo/module-extension-checker-tests/Test/Integration/_modules')]
    public function testExampleModules()
    {
        $componentRegistrar = ObjectManager::getInstance()->get(ComponentRegistrar::class);
        $modulePath = $componentRegistrar->getPath(ComponentRegistrar::MODULE, 'Yireo_Test1');
        $this->assertNotEmpty($modulePath, 'Module "Yireo_Test1" was not registered');

        $scan = ObjectManager::getInstance()->get(Scan::class);
        $scan->scan('Yireo_Test1', __DIR__.'/_modules/Yireo_Test1');

        $messageBucket = ObjectManager::getInstance()->get(MessageBucket::class);
        $messages = $messageBucket->getMessages();
        $this->assertNotEmpty($messages);
    }
}
