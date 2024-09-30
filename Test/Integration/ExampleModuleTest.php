<?php declare(strict_types=1);

namespace Yireo\ExtensionCheckerTests\Test\Integration;

use Magento\Framework\App\ObjectManager;
use Magento\TestFramework\Fixture\ComponentsDir;
use PHPUnit\Framework\TestCase;
use Yireo\ExtensionChecker\Message\MessageBucket;
use Yireo\ExtensionChecker\Scan\Scan;

class ExampleModuleTest extends TestCase
{
    #[ComponentsDir('../../../../app/code/Yireo/ExtensionCheckerTests/Test/Integration/_modules')]
    public function testExampleModules()
    {
        $moduleStatus = ObjectManager::getInstance()->get(\Magento\Framework\Module\Status::class);
        $moduleStatus->setIsEnabled(true, ['Yireo_Test1']);

        $cache = ObjectManager::getInstance()->get(\Magento\Framework\App\Cache::class);
        $cache->clean();

        $scan = ObjectManager::getInstance()->get(Scan::class);
        $scan->scan('Yireo_Test1', __DIR__.'/_modules/Yireo_Test1');

        $messageBucket = ObjectManager::getInstance()->get(MessageBucket::class);
        $messages = $messageBucket->getMessages();
        $this->assertNotEmpty($messages);
    }
}
