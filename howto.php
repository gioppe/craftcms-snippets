// Access a service from twig 

// inside main plugin file Pxxplugin.php...

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

// inside Twig templates

{{ craft.postino.foo('bar') }}
