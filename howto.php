// Access a service from twig  ————————————————————————————————————————

// register variable inside init() in the main plugin file 

use craft\web\twig\variables\CraftVariable;
use paxxion\pxxplugin\services\Foo as FooService;

 Event::on(
    CraftVariable::class, 
    CraftVariable::EVENT_INIT, 
    function(Event $e) {
        /** @var CraftVariable $variable */
        $variable = $e->sender;
        $variable->set('foo', FooService::class);
});

// then inside Twig templates:

{{ craft.moduleName.foo('bar') }}

// Access a service from plugin  ————————————————————————————————————————

// register component inside init() in the main plugin file 
$this->setComponents([
    'fooService' => FooService::class,
]);

// elsewhere:
Pxxplugin::$plugin->fooService->fooMethod(); // $plugin is the instance created inside init(), do not change
