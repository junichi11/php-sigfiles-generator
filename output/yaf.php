<?php



namespace {

	/**
	 * <p>A action can be defined in a separate file in Yaf(see Yaf_Controller_Abstract). that is a action method can also be a <b>Yaf_Action_Abstract</b> class.</p>
	 * <p>Since there should be a entry point which can be called by Yaf (as of PHP 5.3, there is a new magic method __invoke, but Yaf is not only works with PHP 5.3+, Yaf choose another magic method execute), you must implement the abstract method <code>Yaf_Action_Abstract::execute()</code> in your custom action class.</p>
	 * @link https://php.net/manual/en/class.yaf-action-abstract.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Action_Abstract extends \Yaf_Controller_Abstract {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-action-abstract.php#yaf-action-abstract.props.controller
		 */
		protected $_controller;

		/**
		 * Yaf_Controller_Abstract constructor
		 * <p><b>Yaf_Controller_Abstract::__construct()</b> is final, which means it can not be overridden. You may want to see <code>Yaf_Controller_Abstract::init()</code> instead.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-controller-abstract.construct.php
		 * @since Yaf >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * The display purpose
		 * @param string $tpl
		 * @param array $parameters
		 * @return bool
		 * @link https://php.net/manual/en/yaf-controller-abstract.display.php
		 * @since Yaf >=1.0.0
		 */
		protected function display(string $tpl, array $parameters = NULL): bool {}

		/**
		 * Action entry point
		 * <p>user should always define this method for a action, this is the entry point of an action. <b>Yaf_Action_Abstract::execute()</b> may have agruments.</p><p><b>Note</b>:</p><p>The value retrived from the request is not safe. you should do some filtering work before you use it.</p>
		 * @param mixed $args
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-action-abstract.execute.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function execute(mixed ...$args): mixed;

		/**
		 * Foward to another action
		 * <p>forward current execution process to other action.</p><p><b>Note</b>:</p><p>this method doesn't switch to the destination action immediately, it will take place after current flow finish.</p>
		 * @param string $action <p>destination action name</p>
		 * @param array $paramters <p>calling arguments</p>
		 * @return void <p>return FALSE on failure</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.forward.php
		 * @since Yaf >=1.0.0
		 */
		public function forward(string $action, array $paramters = NULL): void {}

		/**
		 * Retrieve controller object
		 * <p>retrieve current controller object.</p>
		 * @return Yaf_Controller_Abstract <p>Yaf_Controller_Abstract instance</p>
		 * @link https://php.net/manual/en/yaf-action-abstract.getcontroller.php
		 * @since Yaf >=1.0.0
		 */
		public function getController(): \Yaf_Controller_Abstract {}

		/**
		 * Get controller name
		 * <p>get the controller's name</p>
		 * @return string <p><code>string</code>, controller name</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.getcontrollername.php
		 * @since No version information available, might only be in Git
		 */
		public function getControllerName(): string {}

		/**
		 * The getInvokeArg purpose
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.getinvokearg.php
		 * @since Yaf >=1.0.0
		 */
		public function getInvokeArg(string $name): void {}

		/**
		 * The getInvokeArgs purpose
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.getinvokeargs.php
		 * @since Yaf >=1.0.0
		 */
		public function getInvokeArgs(): void {}

		/**
		 * Get module name
		 * <p>get the controller's module name</p>
		 * @return string
		 * @link https://php.net/manual/en/yaf-controller-abstract.getmodulename.php
		 * @since Yaf >=1.0.0
		 */
		public function getModuleName(): string {}

		/**
		 * Get self name
		 * <p>get the controller's name</p>
		 * @return string <p><code>string</code>, controller name</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.getname.php
		 * @since Yaf >=3.2.0
		 */
		public function getName(): string {}

		/**
		 * Retrieve current request object
		 * <p>retrieve current request object</p>
		 * @return Yaf_Request_Abstract <p>Yaf_Request_Abstract instance</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.getrequest.php
		 * @since Yaf >=1.0.0
		 */
		public function getRequest(): \Yaf_Request_Abstract {}

		/**
		 * Retrieve current response object
		 * <p>retrieve current response object</p>
		 * @return Yaf_Response_Abstract <p>Yaf_Response_Abstract instance</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.getresponse.php
		 * @since Yaf >=1.0.0
		 */
		public function getResponse(): \Yaf_Response_Abstract {}

		/**
		 * Retrieve the view engine
		 * <p>retrieve view engine</p>
		 * @return Yaf_View_Interface
		 * @link https://php.net/manual/en/yaf-controller-abstract.getview.php
		 * @since Yaf >=1.0.0
		 */
		public function getView(): \Yaf_View_Interface {}

		/**
		 * The getViewpath purpose
		 * @return string
		 * @link https://php.net/manual/en/yaf-controller-abstract.getviewpath.php
		 * @since Yaf >=1.0.0
		 */
		public function getViewpath(): string {}

		/**
		 * Controller initializer
		 * <p><code>Yaf_Controller_Abstract::__construct()</code> is final, which means users can not override it. but users can define <b>Yaf_Controller_Abstract::init()</b>, which will be called after controller object is instantiated.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.init.php
		 * @since Yaf >=1.0.0
		 */
		public function init(): void {}

		/**
		 * The initView purpose
		 * @param array $options
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.initview.php
		 * @since Yaf >=1.0.0
		 */
		public function initView(array $options = NULL): void {}

		/**
		 * Redirect to a URL
		 * <p>redirect to a URL by sending a 302 header</p>
		 * @param string $url <p>a location URL</p>
		 * @return bool <p>bool</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.redirect.php
		 * @since Yaf >=1.0.0
		 */
		public function redirect(string $url): bool {}

		/**
		 * Render view template
		 * @param string $tpl
		 * @param array $parameters
		 * @return string
		 * @link https://php.net/manual/en/yaf-controller-abstract.render.php
		 * @since Yaf >=1.0.0
		 */
		protected function render(string $tpl, array $parameters = NULL): string {}

		/**
		 * The setViewpath purpose
		 * @param string $view_directory
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.setviewpath.php
		 * @since Yaf >=1.0.0
		 */
		public function setViewpath(string $view_directory): void {}
	}

	/**
	 * <p>Yaf_Application provides a bootstrapping facility for applications which provides reusable resources, common- and module-based bootstrap classes and dependency checking.</p>
	 * <p><b>Note</b>:</p>
	 * <p>Yaf_Application implements the singleton pattern, and Yaf_Application can not be serialized or unserialized which will cause problem when you try to use PHPUnit to write some test case for Yaf.</p>
	 * <p>You may use @backupGlobals annotation of PHPUnit to control the backup and restore operations for global variables. thus can solve this problem.</p>
	 * @link https://php.net/manual/en/class.yaf-application.php
	 * @since No version information available, might only be in Git
	 */
	class Yaf_Application extends \Yaf_Application {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-application.php#yaf-application.props.config
		 */
		protected $config;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-application.php#yaf-application.props.dispatcher
		 */
		protected $dispatcher;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-application.php#yaf-application.props.app
		 */
		protected static $_app;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-application.php#yaf-application.props.modules
		 */
		protected $_modules;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-application.php#yaf-application.props.running
		 */
		protected $_running;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-application.php#yaf-application.props.environ
		 */
		protected $_environ;

		/**
		 * Yaf_Application constructor
		 * <p>Instance a Yaf_Application.</p>
		 * @param mixed $config <p>A ini config file path, or a config array</p> <p>If is a ini config file, there should be a section named as the one defined by yaf.environ, which is "product" by default.</p><p><b>Note</b>:</p><p>If you use a ini configuration file as your applicatioin's config container. you would open the yaf.cache_config to improve performance.</p>  <p>And the config entry(and there default value) list blow:</p> <p><b>Example #1 A ini config file example</b></p>  <pre>[product] ;this one should alway be defined, and have no default value application.directory=APPLICATION_PATH ;following configs have default value, you may no need to define them application.library = APPLICATION_PATH . "/library" application.dispatcher.throwException=1 application.dispatcher.catchException=1 application.baseUri="" ;the php script ext name ap.ext=php ;the view template ext name ap.view.ext=phtml ap.dispatcher.defaultModuel=Index ap.dispatcher.defaultController=Index ap.dispatcher.defaultAction=index ;defined modules ap.modules=Index</pre>
		 * @param string $envrion <p>Which section will be loaded as the final config</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-application.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(mixed $config, string $envrion = NULL) {}

		/**
		 * The __destruct purpose
		 * @return void
		 * @link https://php.net/manual/en/yaf-application.destruct.php
		 * @since Yaf >=1.0.0
		 */
		public function __destruct() {}

		/**
		 * Retrieve an Application instance
		 * <p>Retrieve the Yaf_Application instance. Alternatively, we also could use <code>Yaf_Dispatcher::getApplication()</code>.</p>
		 * @return mixed <p>A Yaf_Application instance, if no Yaf_Application was initialized before, <b><code>NULL</code></b> will be returned.</p>
		 * @link https://php.net/manual/en/yaf-application.app.php
		 * @since Yaf >=1.0.0
		 */
		public static function app(): mixed {}

		/**
		 * Call bootstrap
		 * <p>Run a Bootstrap, all the methods defined in the Bootstrap and named with prefix "_init" will be called according to their declaration order, if the parameter bootstrap is not supplied, Yaf will look for a Bootstrap under application.directory.</p>
		 * @param \Yaf_Bootstrap_Abstract $bootstrap <p>A Yaf_Bootstrap_Abstract instance</p>
		 * @return void <p>Yaf_Application instance</p>
		 * @link https://php.net/manual/en/yaf-application.bootstrap.php
		 * @since Yaf >=1.0.0
		 */
		public function bootstrap(\Yaf_Bootstrap_Abstract $bootstrap = NULL): void {}

		/**
		 * Clear the last error info
		 * @return Yaf_Application
		 * @link https://php.net/manual/en/yaf-application.clearlasterror.php
		 * @since Yaf >=2.1.2
		 */
		public function clearLastError(): \Yaf_Application {}

		/**
		 * Retrive environ
		 * <p>Retrive environ which was defined in yaf.environ which has a default value "product".</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-application.environ.php
		 * @since Yaf >=1.0.0
		 */
		public function environ(): void {}

		/**
		 * Execute a callback
		 * <p>This method is typically used to run Yaf_Application in a crontab work. Make the crontab work can also use the autoloader and Bootstrap mechanism.</p>
		 * @param callable $entry <p>a valid callback</p>
		 * @param string $args <p>parameters will pass to the callback</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-application.execute.php
		 * @since Yaf >=1.0.0
		 */
		public function execute(callable $entry, string ...$args): void {}

		/**
		 * Get the application directory
		 * @return Yaf_Application
		 * @link https://php.net/manual/en/yaf-application.getappdirectory.php
		 * @since Yaf >=2.1.4
		 */
		public function getAppDirectory(): \Yaf_Application {}

		/**
		 * Retrive the config instance
		 * @return Yaf_Config_Abstract <p>A Yaf_Config_Abstract instance</p>
		 * @link https://php.net/manual/en/yaf-application.getconfig.php
		 * @since Yaf >=1.0.0
		 */
		public function getConfig(): \Yaf_Config_Abstract {}

		/**
		 * Get Yaf_Dispatcher instance
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-application.getdispatcher.php
		 * @since Yaf >=1.0.0
		 */
		public function getDispatcher(): \Yaf_Dispatcher {}

		/**
		 * Get message of the last occurred error
		 * @return string
		 * @link https://php.net/manual/en/yaf-application.getlasterrormsg.php
		 * @since Yaf >=2.1.2
		 */
		public function getLastErrorMsg(): string {}

		/**
		 * Get code of last occurred error
		 * @return int
		 * @link https://php.net/manual/en/yaf-application.getlasterrorno.php
		 * @since Yaf >=2.1.2
		 */
		public function getLastErrorNo(): int {}

		/**
		 * Get defined module names
		 * <p>Get the modules list defined in config, if no one defined, there will always be a module named "Index".</p>
		 * @return array
		 * @link https://php.net/manual/en/yaf-application.getmodules.php
		 * @since Yaf >=1.0.0
		 */
		public function getModules(): array {}

		/**
		 * Start Yaf_Application
		 * <p>Run a Yaf_Application, let the Yaf_Application accept a request and route this request, dispatch to controller/action and render response. Finally, return the response to the client.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-application.run.php
		 * @since Yaf >=1.0.0
		 */
		public function run(): void {}

		/**
		 * Change the application directory
		 * @param string $directory
		 * @return Yaf_Application
		 * @link https://php.net/manual/en/yaf-application.setappdirectory.php
		 * @since Yaf >=2.1.4
		 */
		public function setAppDirectory(string $directory): \Yaf_Application {}
	}

	/**
	 * <p>Bootstrap is a mechanism used to do some initial config before a Application run.</p>
	 * <p>User may define their own Bootstrap class by inheriting <b>Yaf_Bootstrap_Abstract</b></p>
	 * <p>Any method declared in Bootstrap class with leading "_init", will be called by <code>Yaf_Application::bootstrap()</code> one by one according to their defined order.</p>
	 * @link https://php.net/manual/en/class.yaf-bootstrap-abstract.php
	 * @since No version information available, might only be in Git
	 */
	abstract class Yaf_Bootstrap_Abstract {
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-config-abstract.php
	 * @since Yaf >=1.0.0
	 */
	abstract class Yaf_Config_Abstract {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-config-abstract.php#yaf-config-abstract.props.config
		 */
		protected $_config;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-config-abstract.php#yaf-config-abstract.props.readonly
		 */
		protected $_readonly;

		/**
		 * Getter
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param mixed $value
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-config-abstract.get.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function get(string $name, mixed $value): mixed;

		/**
		 * Find a config whether readonly
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool
		 * @link https://php.net/manual/en/yaf-config-abstract.readonly.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function readonly(): bool;

		/**
		 * Setter
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return Yaf_Config_Abstract
		 * @link https://php.net/manual/en/yaf-config-abstract.set.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function set(): \Yaf_Config_Abstract;

		/**
		 * Cast to array
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/yaf-config-abstract.toarray.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function toArray(): array;
	}

	/**
	 * <p>Yaf_Config_Ini enables developers to store configuration data in a familiar INI format and read them in the application by using nested object property syntax. The INI format is specialized to provide both the ability to have a hierarchy of configuration data keys and inheritance between configuration data sections. Configuration data hierarchies are supported by separating the keys with the dot or period character ("."). A section may extend or inherit from another section by following the section name with a colon character (":") and the name of the section from which data are to be inherited.</p>
	 * <p><b>Note</b>:</p>
	 * <p>Yaf_Config_Ini utilizes the &raquo; parse_ini_file() PHP function. Please review this documentation to be aware of its specific behaviors, which propagate to Yaf_Config_Ini, such as how the special values of "<b><code>TRUE</code></b>", "<b><code>FALSE</code></b>", "yes", "no", and "<b><code>NULL</code></b>" are handled.</p>
	 * @link https://php.net/manual/en/class.yaf-config-ini.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Config_Ini extends \Yaf_Config_Abstract implements \Iterator, \ArrayAccess, \Countable {

		/**
		 * Yaf_Config_Ini constructor
		 * <p>Yaf_Config_Ini constructor</p>
		 * @param string $config_file <p>path to an INI configure file</p>
		 * @param string $section <p>which section in that INI file you want to be parsed</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-config-ini.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(string $config_file, string $section = NULL) {}

		/**
		 * Retrieve a element
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.get.php
		 * @since Yaf >=1.0.0
		 */
		public function __get(string $name = NULL): void {}

		/**
		 * Determine if a key is exists
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.isset.php
		 * @since Yaf >=1.0.0
		 */
		public function __isset(string $name): void {}

		/**
		 * The __set purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param mixed $value
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.set.php
		 * @since Yaf >=1.0.0
		 */
		public function __set(string $name, mixed $value): void {}

		/**
		 * Count all elements in Yaf_Config.ini
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.count.php
		 * @since Yaf >=1.0.0
		 */
		public function count(): void {}

		/**
		 * Retrieve the current value
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.current.php
		 * @since Yaf >=1.0.0
		 */
		public function current(): void {}

		/**
		 * Getter
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param mixed $value
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-config-abstract.get.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function get(string $name, mixed $value): mixed;

		/**
		 * Fetch current element's key
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.key.php
		 * @since Yaf >=1.0.0
		 */
		public function key(): void {}

		/**
		 * Advance the internal pointer
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.next.php
		 * @since Yaf >=1.0.0
		 */
		public function next(): void {}

		/**
		 * The offsetExists purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.offsetexists.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetExists(string $name): void {}

		/**
		 * The offsetGet purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.offsetget.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetGet(string $name): void {}

		/**
		 * The offsetSet purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param string $value
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.offsetset.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetSet(string $name, string $value): void {}

		/**
		 * The offsetUnset purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.offsetunset.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetUnset(string $name): void {}

		/**
		 * The readonly purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.readonly.php
		 * @since Yaf >=1.0.0
		 */
		public function readonly(): void {}

		/**
		 * The rewind purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.rewind.php
		 * @since Yaf >=1.0.0
		 */
		public function rewind(): void {}

		/**
		 * Setter
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return Yaf_Config_Abstract
		 * @link https://php.net/manual/en/yaf-config-abstract.set.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function set(): \Yaf_Config_Abstract;

		/**
		 * Return config as a PHP array
		 * <p>Returns a PHP array from the Yaf_Config_Ini</p>
		 * @return array
		 * @link https://php.net/manual/en/yaf-config-ini.toarray.php
		 * @since Yaf >=1.0.0
		 */
		public function toArray(): array {}

		/**
		 * The valid purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-ini.valid.php
		 * @since Yaf >=1.0.0
		 */
		public function valid(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-config-simple.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Config_Simple extends \Yaf_Config_Abstract implements \Iterator, \ArrayAccess, \Countable {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-config-simple.php#yaf-config-simple.props.readonly
		 */
		protected $_readonly;

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param array $configs
		 * @param bool $readonly
		 * @return self
		 * @link https://php.net/manual/en/yaf-config-simple.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(array $configs, bool $readonly = false) {}

		/**
		 * The __get purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.get.php
		 * @since Yaf >=1.0.0
		 */
		public function __get(string $name = NULL): void {}

		/**
		 * The __isset purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.isset.php
		 * @since Yaf >=1.0.0
		 */
		public function __isset(string $name): void {}

		/**
		 * The __set purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param string $value
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.set.php
		 * @since Yaf >=1.0.0
		 */
		public function __set(string $name, string $value): void {}

		/**
		 * The count purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.count.php
		 * @since Yaf >=1.0.0
		 */
		public function count(): void {}

		/**
		 * The current purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.current.php
		 * @since Yaf >=1.0.0
		 */
		public function current(): void {}

		/**
		 * Getter
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param mixed $value
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-config-abstract.get.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function get(string $name, mixed $value): mixed;

		/**
		 * The key purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.key.php
		 * @since Yaf >=1.0.0
		 */
		public function key(): void {}

		/**
		 * The next purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.next.php
		 * @since Yaf >=1.0.0
		 */
		public function next(): void {}

		/**
		 * The offsetExists purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.offsetexists.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetExists(string $name): void {}

		/**
		 * The offsetGet purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.offsetget.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetGet(string $name): void {}

		/**
		 * The offsetSet purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param string $value
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.offsetset.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetSet(string $name, string $value): void {}

		/**
		 * The offsetUnset purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.offsetunset.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetUnset(string $name): void {}

		/**
		 * The readonly purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.readonly.php
		 * @since Yaf >=1.0.0
		 */
		public function readonly(): void {}

		/**
		 * The rewind purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.rewind.php
		 * @since Yaf >=1.0.0
		 */
		public function rewind(): void {}

		/**
		 * Setter
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return Yaf_Config_Abstract
		 * @link https://php.net/manual/en/yaf-config-abstract.set.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function set(): \Yaf_Config_Abstract;

		/**
		 * Returns a PHP array
		 * <p>Returns a PHP array from the Yaf_Config_Simple</p>
		 * @return array
		 * @link https://php.net/manual/en/yaf-config-simple.toarray.php
		 * @since Yaf >=1.0.0
		 */
		public function toArray(): array {}

		/**
		 * The valid purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-config-simple.valid.php
		 * @since Yaf >=1.0.0
		 */
		public function valid(): void {}
	}

	/**
	 * <p><b>Yaf_Controller_Abstract</b> is the heart of Yaf's system. MVC stands for Model-View-Controller and is a design pattern targeted at separating application logic from display logic.</p>
	 * <p>Every custom controller shall inherit <b>Yaf_Controller_Abstract</b>.</p>
	 * <p>You will find that you can not define __construct function for your custom controller, thus, <b>Yaf_Controller_Abstract</b> provides a magic method: <code>Yaf_Controller_Abstract::init()</code>.</p>
	 * <p>If you have defined a init() method in your custom controller, it will be called as long as the controller was instantiated.</p>
	 * <p>Action may have arguments, when a request coming, if there are the same name variable in the request parameters(see <code>Yaf_Request_Abstract::getParam()</code>) after routed, Yaf will pass them to the action method (see <code>Yaf_Action_Abstract::execute()</code>).</p>
	 * <p><b>Note</b>:</p>
	 * <p>These arguments are directly fetched without filtering, it should be carefully processed before use them.</p>
	 * @link https://php.net/manual/en/class.yaf-controller-abstract.php
	 * @since Yaf >=1.0.0
	 */
	abstract class Yaf_Controller_Abstract {

		/**
		 * @var mixed <p>You can also define a action method in a separate PHP script by using this property and Yaf_Action_Abstract.</p> <p><b>Example #1 define action in a separate file</b></p>  <code> &lt;&#63;php<br>class&nbsp;IndexController&nbsp;extends&nbsp;Yaf_Controller_Abstract&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;$actions&nbsp;=&nbsp;array(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&#42;&#42;&nbsp;now&nbsp;dummyAction&nbsp;is&nbsp;defined&nbsp;in&nbsp;a&nbsp;separate&nbsp;file&nbsp;&#42;/<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"dummy"&nbsp;=&gt;&nbsp;"actions/Dummy_action.php",<br>&nbsp;&nbsp;&nbsp;&nbsp;);<br><br>&nbsp;&nbsp;&nbsp;&nbsp;/&#42;&nbsp;action&nbsp;method&nbsp;may&nbsp;have&nbsp;arguments&nbsp;&#42;/<br>&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;indexAction($name,&nbsp;$id)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&#42;&nbsp;$name&nbsp;and&nbsp;$id&nbsp;are&nbsp;unsafe&nbsp;raw&nbsp;data&nbsp;&#42;/<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert($name&nbsp;==&nbsp;$this-&gt;getRequest()-&gt;getParam("name"));<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert($id&nbsp;&nbsp;&nbsp;==&nbsp;$this-&gt;_request-&gt;getParam("id"));<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}<br>&#63;&gt;  </code>    <p><b>Example #2 Dummy_action.php</b></p>  <code> &lt;&#63;php<br>class&nbsp;DummyAction&nbsp;extends&nbsp;Yaf_Action_Abstract&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;/&#42;&nbsp;a&nbsp;action&nbsp;class&nbsp;shall&nbsp;define&nbsp;this&nbsp;method&nbsp;&nbsp;as&nbsp;the&nbsp;entry&nbsp;point&nbsp;&#42;/<br>&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;execute()&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}<br>&#63;&gt;  </code>
		 * @link https://php.net/manual/en/class.yaf-controller-abstract.php#yaf-controller-abstract.props.actions
		 */
		public $actions;

		/**
		 * @var mixed <p>module name</p>
		 * @link https://php.net/manual/en/class.yaf-controller-abstract.php#yaf-controller-abstract.props.module
		 */
		protected $_module;

		/**
		 * @var mixed <p>controller name</p>
		 * @link https://php.net/manual/en/class.yaf-controller-abstract.php#yaf-controller-abstract.props.name
		 */
		protected $_name;

		/**
		 * @var mixed <p>current request object</p>
		 * @link https://php.net/manual/en/class.yaf-controller-abstract.php#yaf-controller-abstract.props.request
		 */
		protected $_request;

		/**
		 * @var mixed <p>current response object</p>
		 * @link https://php.net/manual/en/class.yaf-controller-abstract.php#yaf-controller-abstract.props.response
		 */
		protected $_response;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-controller-abstract.php#yaf-controller-abstract.props.invoke-args
		 */
		protected $_invoke_args;

		/**
		 * @var mixed <p>view engine object</p>
		 * @link https://php.net/manual/en/class.yaf-controller-abstract.php#yaf-controller-abstract.props.view
		 */
		protected $_view;

		/**
		 * Yaf_Controller_Abstract constructor
		 * <p><b>Yaf_Controller_Abstract::__construct()</b> is final, which means it can not be overridden. You may want to see <code>Yaf_Controller_Abstract::init()</code> instead.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-controller-abstract.construct.php
		 * @since Yaf >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * The display purpose
		 * @param string $tpl
		 * @param array $parameters
		 * @return bool
		 * @link https://php.net/manual/en/yaf-controller-abstract.display.php
		 * @since Yaf >=1.0.0
		 */
		protected function display(string $tpl, array $parameters = NULL): bool {}

		/**
		 * Foward to another action
		 * <p>forward current execution process to other action.</p><p><b>Note</b>:</p><p>this method doesn't switch to the destination action immediately, it will take place after current flow finish.</p>
		 * @param string $action <p>destination action name</p>
		 * @param array $paramters <p>calling arguments</p>
		 * @return void <p>return FALSE on failure</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.forward.php
		 * @since Yaf >=1.0.0
		 */
		public function forward(string $action, array $paramters = NULL): void {}

		/**
		 * The getInvokeArg purpose
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.getinvokearg.php
		 * @since Yaf >=1.0.0
		 */
		public function getInvokeArg(string $name): void {}

		/**
		 * The getInvokeArgs purpose
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.getinvokeargs.php
		 * @since Yaf >=1.0.0
		 */
		public function getInvokeArgs(): void {}

		/**
		 * Get module name
		 * <p>get the controller's module name</p>
		 * @return string
		 * @link https://php.net/manual/en/yaf-controller-abstract.getmodulename.php
		 * @since Yaf >=1.0.0
		 */
		public function getModuleName(): string {}

		/**
		 * Get self name
		 * <p>get the controller's name</p>
		 * @return string <p><code>string</code>, controller name</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.getname.php
		 * @since Yaf >=3.2.0
		 */
		public function getName(): string {}

		/**
		 * Retrieve current request object
		 * <p>retrieve current request object</p>
		 * @return Yaf_Request_Abstract <p>Yaf_Request_Abstract instance</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.getrequest.php
		 * @since Yaf >=1.0.0
		 */
		public function getRequest(): \Yaf_Request_Abstract {}

		/**
		 * Retrieve current response object
		 * <p>retrieve current response object</p>
		 * @return Yaf_Response_Abstract <p>Yaf_Response_Abstract instance</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.getresponse.php
		 * @since Yaf >=1.0.0
		 */
		public function getResponse(): \Yaf_Response_Abstract {}

		/**
		 * Retrieve the view engine
		 * <p>retrieve view engine</p>
		 * @return Yaf_View_Interface
		 * @link https://php.net/manual/en/yaf-controller-abstract.getview.php
		 * @since Yaf >=1.0.0
		 */
		public function getView(): \Yaf_View_Interface {}

		/**
		 * The getViewpath purpose
		 * @return string
		 * @link https://php.net/manual/en/yaf-controller-abstract.getviewpath.php
		 * @since Yaf >=1.0.0
		 */
		public function getViewpath(): string {}

		/**
		 * Controller initializer
		 * <p><code>Yaf_Controller_Abstract::__construct()</code> is final, which means users can not override it. but users can define <b>Yaf_Controller_Abstract::init()</b>, which will be called after controller object is instantiated.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.init.php
		 * @since Yaf >=1.0.0
		 */
		public function init(): void {}

		/**
		 * The initView purpose
		 * @param array $options
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.initview.php
		 * @since Yaf >=1.0.0
		 */
		public function initView(array $options = NULL): void {}

		/**
		 * Redirect to a URL
		 * <p>redirect to a URL by sending a 302 header</p>
		 * @param string $url <p>a location URL</p>
		 * @return bool <p>bool</p>
		 * @link https://php.net/manual/en/yaf-controller-abstract.redirect.php
		 * @since Yaf >=1.0.0
		 */
		public function redirect(string $url): bool {}

		/**
		 * Render view template
		 * @param string $tpl
		 * @param array $parameters
		 * @return string
		 * @link https://php.net/manual/en/yaf-controller-abstract.render.php
		 * @since Yaf >=1.0.0
		 */
		protected function render(string $tpl, array $parameters = NULL): string {}

		/**
		 * The setViewpath purpose
		 * @param string $view_directory
		 * @return void
		 * @link https://php.net/manual/en/yaf-controller-abstract.setviewpath.php
		 * @since Yaf >=1.0.0
		 */
		public function setViewpath(string $view_directory): void {}
	}

	/**
	 * <p><b>Yaf_Dispatcher</b> purpose is to initialize the request environment, route the incoming request, and then dispatch any discovered actions; it aggregates any responses and returns them when the process is complete.</p>
	 * <p><b>Yaf_Dispatcher</b> also implements the Singleton pattern, meaning only a single instance of it may be available at any given time. This allows it to also act as a registry on which the other objects in the dispatch process may draw.</p>
	 * @link https://php.net/manual/en/class.yaf-dispatcher.php
	 * @since Yaf >=1.0.0
	 */
	final class Yaf_Dispatcher {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.router
		 */
		protected $_router;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.view
		 */
		protected $_view;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.request
		 */
		protected $_request;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.plugins
		 */
		protected $_plugins;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.instance
		 */
		protected static $_instance;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.auto-render
		 */
		protected $_auto_render;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.return-response
		 */
		protected $_return_response;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.instantly-flush
		 */
		protected $_instantly_flush;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.default-module
		 */
		protected $_default_module;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.default-controller
		 */
		protected $_default_controller;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-dispatcher.php#yaf-dispatcher.props.default-action
		 */
		protected $_default_action;

		/**
		 * Yaf_Dispatcher constructor
		 * @return self
		 * @link https://php.net/manual/en/yaf-dispatcher.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * Switch on/off autorendering
		 * <p>Yaf_Dispatcher will render automatically after dispatches a incoming request, you can prevent the rendering by calling this method with <code>flag</code> <b><code>TRUE</code></b></p><p><b>Note</b>:</p><p>you can simply return <b><code>FALSE</code></b> in a action to prevent the auto-rendering of that action</p>
		 * @param bool $flag <p>bool</p><p><b>Note</b>:</p><p>since 2.2.0, if this parameter is not given, then the current state will be renturned</p>
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.autorender.php
		 * @since Yaf >=1.0.0
		 */
		public function autoRender(bool $flag = NULL): \Yaf_Dispatcher {}

		/**
		 * Switch on/off exception catching
		 * <p>While the application.dispatcher.throwException is On(you can also calling to <b>Yaf_Dispatcher::throwException(TRUE)()</b> to enable it), Yaf will throw Exception whe error occurrs instead of trigger error.</p><p>then if you enable <b>Yaf_Dispatcher::catchException()</b>(also can enabled by set application.dispatcher.catchException), all uncaught Exceptions will be caught by ErrorController::error if you have defined one.</p>
		 * @param bool $flag <p>bool</p>
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.catchexception.php
		 * @since Yaf >=1.0.0
		 */
		public function catchException(bool $flag = NULL): \Yaf_Dispatcher {}

		/**
		 * Disable view rendering
		 * <p>disable view engine, used in some app that user will output by theirself</p><p><b>Note</b>:</p><p>you can simply return <b><code>FALSE</code></b> in a action to prevent the auto-rendering of that action</p>
		 * @return bool
		 * @link https://php.net/manual/en/yaf-dispatcher.disableview.php
		 * @since Yaf >=1.0.0
		 */
		public function disableView(): bool {}

		/**
		 * Dispatch a request
		 * <p>This method does the heavy work of the Yaf_Dispatcher. It take a request object.</p><p>The dispatch process has three distinct events:</p>
		 * @param \Yaf_Request_Abstract $request
		 * @return Yaf_Response_Abstract
		 * @link https://php.net/manual/en/yaf-dispatcher.dispatch.php
		 * @since Yaf >=1.0.0
		 */
		public function dispatch(\Yaf_Request_Abstract $request): \Yaf_Response_Abstract {}

		/**
		 * Enable view rendering
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.enableview.php
		 * @since Yaf >=1.0.0
		 */
		public function enableView(): \Yaf_Dispatcher {}

		/**
		 * Switch on/off the instant flushing
		 * @param bool $flag <p>bool</p><p><b>Note</b>:</p><p>since 2.2.0, if this parameter is not given, then the current state will be renturned</p>
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.flushinstantly.php
		 * @since Yaf >=1.0.0
		 */
		public function flushInstantly(bool $flag = NULL): \Yaf_Dispatcher {}

		/**
		 * Retrive the application
		 * <p>Retrive the Yaf_Application instance. same as <code>Yaf_Application::app()</code>.</p>
		 * @return Yaf_Application
		 * @link https://php.net/manual/en/yaf-dispatcher.getapplication.php
		 * @since Yaf >=1.0.0
		 */
		public function getApplication(): \Yaf_Application {}

		/**
		 * Retrive the default action name
		 * <p>get the default action name</p>
		 * @return string <p><code>string</code>, default action name, default is "index"</p>
		 * @link https://php.net/manual/en/yaf-dispatcher.getdefaultaction.php
		 * @since Yaf >=3.2.0
		 */
		public function getDefaultAction(): string {}

		/**
		 * Retrive the default controller name
		 * <p>get the default controller name</p>
		 * @return string <p><code>string</code>, default controller name, default is "Index"</p>
		 * @link https://php.net/manual/en/yaf-dispatcher.getdefaultcontroller.php
		 * @since Yaf >=3.2.0
		 */
		public function getDefaultController(): string {}

		/**
		 * Retrive the default module name
		 * <p>get the default module name</p>
		 * @return string <p><code>string</code>, module name, default is "Index"</p>
		 * @link https://php.net/manual/en/yaf-dispatcher.getdefaultmodule.php
		 * @since Yaf >=3.2.0
		 */
		public function getDefaultModule(): string {}

		/**
		 * Retrive the dispatcher instance
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.getinstance.php
		 * @since Yaf >=1.0.0
		 */
		public static function getInstance(): \Yaf_Dispatcher {}

		/**
		 * Retrive the request instance
		 * @return Yaf_Request_Abstract
		 * @link https://php.net/manual/en/yaf-dispatcher.getrequest.php
		 * @since Yaf >=1.0.0
		 */
		public function getRequest(): \Yaf_Request_Abstract {}

		/**
		 * Retrive router instance
		 * @return Yaf_Router
		 * @link https://php.net/manual/en/yaf-dispatcher.getrouter.php
		 * @since Yaf >=1.0.0
		 */
		public function getRouter(): \Yaf_Router {}

		/**
		 * Initialize view and return it
		 * @param string $templates_dir
		 * @param array $options
		 * @return Yaf_View_Interface
		 * @link https://php.net/manual/en/yaf-dispatcher.initview.php
		 * @since Yaf >=1.0.0
		 */
		public function initView(string $templates_dir, array $options = NULL): \Yaf_View_Interface {}

		/**
		 * Register a plugin
		 * <p>Register a plugin(see Yaf_Plugin_Abstract). Generally, we register plugins in Bootstrap(see Yaf_Bootstrap_Abstract).</p>
		 * @param \Yaf_Plugin_Abstract $plugin
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.registerplugin.php
		 * @since Yaf >=1.0.0
		 */
		public function registerPlugin(\Yaf_Plugin_Abstract $plugin): \Yaf_Dispatcher {}

		/**
		 * The returnResponse purpose
		 * @param bool $flag
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.returnresponse.php
		 * @since Yaf >=1.0.0
		 */
		public function returnResponse(bool $flag): \Yaf_Dispatcher {}

		/**
		 * Change default action name
		 * @param string $action
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.setdefaultaction.php
		 * @since Yaf >=1.0.0
		 */
		public function setDefaultAction(string $action): \Yaf_Dispatcher {}

		/**
		 * Change default controller name
		 * @param string $controller
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.setdefaultcontroller.php
		 * @since Yaf >=1.0.0
		 */
		public function setDefaultController(string $controller): \Yaf_Dispatcher {}

		/**
		 * Change default module name
		 * @param string $module
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.setdefaultmodule.php
		 * @since Yaf >=1.0.0
		 */
		public function setDefaultModule(string $module): \Yaf_Dispatcher {}

		/**
		 * Set error handler
		 * <p>Set error handler for Yaf. when application.dispatcher.throwException is off, Yaf will trigger catchable error while unexpected errors occrred.</p><p>Thus, this error handler will be called while the error raise.</p>
		 * @param \call $callback <p>A callable callback</p>
		 * @param int $error_types
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.seterrorhandler.php
		 * @since Yaf >=1.0.0
		 */
		public function setErrorHandler(\call $callback, int $error_types): \Yaf_Dispatcher {}

		/**
		 * The setRequest purpose
		 * @param \Yaf_Request_Abstract $request
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.setrequest.php
		 * @since Yaf >=1.0.0
		 */
		public function setRequest(\Yaf_Request_Abstract $request): \Yaf_Dispatcher {}

		/**
		 * Set a custom view engine
		 * <p>This method proviods a solution for that if you want use a custom view engine instead of Yaf_View_Simple</p>
		 * @param \Yaf_View_Interface $view <p>A Yaf_View_Interface instance</p>
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.setview.php
		 * @since Yaf >=1.0.0
		 */
		public function setView(\Yaf_View_Interface $view): \Yaf_Dispatcher {}

		/**
		 * Switch on/off exception throwing
		 * <p>Siwtch on/off exception throwing while unexpected error occurring. When this is on, Yaf will throwing exceptions instead of triggering catchable errors.</p><p>You can also use  application.dispatcher.throwException to achieve the same purpose.</p>
		 * @param bool $flag <p>bool</p>
		 * @return Yaf_Dispatcher
		 * @link https://php.net/manual/en/yaf-dispatcher.throwexception.php
		 * @since Yaf >=1.0.0
		 */
		public function throwException(bool $flag = NULL): \Yaf_Dispatcher {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception extends \Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): mixed {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception-dispatchfailed.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception_DispatchFailed extends \Yaf_Exception {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception-loadfailed.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception_LoadFailed extends \Yaf_Exception {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception-loadfailed-action.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception_LoadFailed_Action extends \Yaf_Exception_LoadFailed {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception-loadfailed-controller.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception_LoadFailed_Controller extends \Yaf_Exception_LoadFailed {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception-loadfailed-module.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception_LoadFailed_Module extends \Yaf_Exception_LoadFailed {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception-loadfailed-view.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception_LoadFailed_View extends \Yaf_Exception_LoadFailed {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception-routerfailed.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception_RouterFailed extends \Yaf_Exception {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception-startuperror.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception_StartupError extends \Yaf_Exception {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-exception-typeerror.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Exception_TypeError extends \Yaf_Exception {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-exception.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The getPrevious purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-exception.getprevious.php
		 * @since Yaf >=1.0.0
		 */
		public function getPrevious(): void {}
	}

	/**
	 * <p><b>Yaf_Loader</b> introduces a comprehensive autoloading solution for Yaf.</p>
	 * <p>The first time an instance of Yaf_Application is retrieved, <b>Yaf_Loader</b> will instance a singleton, and registers itself with spl_autoload. You retrieve an instance using the <code>Yaf_Loader::getInstance()</code></p>
	 * <p><b>Yaf_Loader</b> attempt to load a class only one shot, if failed, depend on yaf.use_spl_auload, if this config is On <code>Yaf_Loader::autoload()</code> will return <b><code>FALSE</code></b>, thus give the chance to other autoload function. if it is Off (by default), <code>Yaf_Loader::autoload()</code> will return <b><code>TRUE</code></b>, and more important is that a very useful warning will be triggered (very useful to find out why a class could not be loaded).</p>
	 * <p><b>Note</b>:</p>
	 * <p>Please keep yaf.use_spl_autoload Off unless there is some library have their own autoload mechanism and impossible to rewrite it.</p>
	 * <p>By default, <b>Yaf_Loader</b> assume all library (class defined script) store in the global library directory, which is defined in the php.ini(yaf.library).</p>
	 * <p>If you want <b>Yaf_Loader</b> search some classes(libraries) in the local class directory(which is defined in application.ini, and by default, it is application.directory . "/library"), you should register the class prefix using the <code>Yaf_Loader::registerLocalNameSpace()</code></p>
	 * <p>Let's see some examples(assuming APPLICATION_PATH is application.directory):</p>
	 * <p><b>Example #1 Config example</b></p>
	 * <p><b>Example #2 Register localnamespace</b></p>
	 * <p><b>Example #3 Load class example</b></p>
	 * <p><b>Example #4 Load namespace class example</b></p>
	 * <p>You may noticed that all the folder with the first letter capitalized, you can make them lowercase by set yaf.lowcase_path = On in php.ini</p>
	 * <p><b>Yaf_Loader</b> is also designed to load the MVC classes, and the rule is:</p>
	 * <p><b>Example #5 MVC class loading example</b></p>
	 * <p><b>Example #6 MVC class distinctions</b></p>
	 * <p><b>Example #7 MVC loading example</b></p>
	 * <p><b>Note</b>:</p>
	 * <p>As of 2.1.18, Yaf supports Controllers autoloading for user script side, (which means the autoloading triggered by user php script, eg: access a controller static property in Bootstrap or Plugins), but autoloader only try to locate controller class script under the default module folder, which is "APPLICATION_PATH/controllers/".</p>
	 * @link https://php.net/manual/en/class.yaf-loader.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Loader {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-loader.php#yaf-loader.props.local-ns
		 */
		protected $_local_ns;

		/**
		 * @var mixed <p>By default, this value is application.directory . "/library", you can change this either in the application.ini(application.library) or call to <code>Yaf_Loader::setLibraryPath()</code></p>
		 * @link https://php.net/manual/en/class.yaf-loader.php#yaf-loader.props.library
		 */
		protected $_library;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-loader.php#yaf-loader.props.global-library
		 */
		protected $_global_library;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-loader.php#yaf-loader.props.instance
		 */
		static $_instance;

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-loader.construct.php
		 * @since Yaf >=1.0.0
		 */
		private function __construct() {}

		/**
		 * The autoload purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-loader.autoload.php
		 * @since Yaf >=1.0.0
		 */
		public function autoload(): void {}

		/**
		 * The clearLocalNamespace purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-loader.clearlocalnamespace.php
		 * @since Yaf >=1.0.0
		 */
		public function clearLocalNamespace(): void {}

		/**
		 * The getInstance purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-loader.getinstance.php
		 * @since Yaf >=1.0.0
		 */
		public static function getInstance(): void {}

		/**
		 * Get the library path
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $is_global
		 * @return Yaf_Loader
		 * @link https://php.net/manual/en/yaf-loader.getlibrarypath.php
		 * @since Yaf >=2.1.4
		 */
		public function getLibraryPath(bool $is_global = FALSE): \Yaf_Loader {}

		/**
		 * Retrive all register namespaces info
		 * <p>get registered namespaces info</p>
		 * @return array <p><code>array</code></p>
		 * @link https://php.net/manual/en/yaf-loader.getnamespaces.php
		 * @since Yaf >=1.0.0
		 */
		public function getLocalNamespace(): array {}

		/**
		 * Retieve path of a registered namespace
		 * <p>retrieve path of a registered namespace</p>
		 * @param string $namespaces
		 * @return string <p><code>string</code> path, if the namespace is not registered, then <b><code>NULL</code></b> default library will be returned</p>
		 * @link https://php.net/manual/en/yaf-loader.getnamespacepath.php
		 * @since Yaf >=3.2.0
		 */
		public function getNamespacePath(string $namespaces): string {}

		/**
		 * The import purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-loader.import.php
		 * @since Yaf >=1.0.0
		 */
		public static function import(): void {}

		/**
		 * The isLocalName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-loader.islocalname.php
		 * @since Yaf >=1.0.0
		 */
		public function isLocalName(): void {}

		/**
		 * Register local class prefix
		 * <p>Register local class prefix name, Yaf_Loader search classes in two library directories, the one is configured via application.library.directory(in application.ini) which is called local libraray directory; the other is configured via yaf.library (in php.ini) which is callled global library directory, since it can be shared by many applications in the same server.</p><p>When an autloading is trigger, Yaf_Loader will determine which library directory should be searched in by exame the prefix name of the missed classname. If the prefix name is registered as a localnamespack then look for it in local library directory, otherwise look for it in global library directory.</p><p><b>Note</b>:</p><p>If yaf.library is not configured, then the global library directory is assumed to be the local library directory. in that case, all autoloading will look for local library directory. But if you want your Yaf application be strong, then always register your own classes as local classes.</p>
		 * @param mixed $prefix <p>a string or a array of class name prefix. all class prefix with these prefix will be loaded in local library path.</p>
		 * @return void <p>bool</p>
		 * @link https://php.net/manual/en/yaf-loader.registerlocalnamespace.php
		 * @since Yaf >=1.0.0
		 */
		public function registerLocalNamespace(mixed $prefix): void {}

		/**
		 * Register namespace with searching path
		 * <p>Register a namespace with searching path, Yaf_Loader searchs classes under this namespace in path, the one is also could be configureded via  application.library.directory.namespace(in application.ini);</p><p></p><p><b>Note</b>:</p><p>Yaf still think underline as folder separator.</p>
		 * @param string|array $namespaces
		 * @param string $path <p>a string of path, it it better to use abosolute path here for performance</p>
		 * @return bool <p>bool</p>
		 * @link https://php.net/manual/en/yaf-loader.registernamespace.php
		 * @since Yaf >=3.2.0
		 */
		public function registerNamespace(string|array $namespaces, string $path = NULL): bool {}

		/**
		 * Change the library path
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $directory
		 * @param bool $is_global
		 * @return Yaf_Loader
		 * @link https://php.net/manual/en/yaf-loader.setlibrarypath.php
		 * @since Yaf >=2.1.4
		 */
		public function setLibraryPath(string $directory, bool $is_global = FALSE): \Yaf_Loader {}
	}

	/**
	 * <p>Plugins allow for easy extensibility and customization of the framework.</p>
	 * <p>Plugins are classes. The actual class definition will vary based on the component -- you may need to implement this interface, but the fact remains that the plugin is itself a class.</p>
	 * <p>A plugin could be loaded into Yaf by using <code>Yaf_Dispatcher::registerPlugin()</code>, after registering, All the methods which the plugin implemented according to this interface, will be called at the proper time.</p>
	 * @link https://php.net/manual/en/class.yaf-plugin-abstract.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Plugin_Abstract {

		/**
		 * The dispatchLoopShutdown purpose
		 * <p>This is the latest hook in Yaf plugin hook system, if a custom plugin implement this method, then it will be called after the dispatch loop finished.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @param \Yaf_Response_Abstract $response
		 * @return void
		 * @link https://php.net/manual/en/yaf-plugin-abstract.dispatchloopshutdown.php
		 * @since Yaf >=1.0.0
		 */
		public function dispatchLoopShutdown(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

		/**
		 * Hook before dispatch loop
		 * @param \Yaf_Request_Abstract $request
		 * @param \Yaf_Response_Abstract $response
		 * @return void
		 * @link https://php.net/manual/en/yaf-plugin-abstract.dispatchloopstartup.php
		 * @since Yaf >=1.0.0
		 */
		public function dispatchLoopStartup(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

		/**
		 * The postDispatch purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @param \Yaf_Response_Abstract $response
		 * @return void
		 * @link https://php.net/manual/en/yaf-plugin-abstract.postdispatch.php
		 * @since Yaf >=1.0.0
		 */
		public function postDispatch(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

		/**
		 * The preDispatch purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @param \Yaf_Response_Abstract $response
		 * @return void
		 * @link https://php.net/manual/en/yaf-plugin-abstract.predispatch.php
		 * @since Yaf >=1.0.0
		 */
		public function preDispatch(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

		/**
		 * The preResponse purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @param \Yaf_Response_Abstract $response
		 * @return void
		 * @link https://php.net/manual/en/yaf-plugin-abstract.preresponse.php
		 * @since Yaf >=1.0.0
		 */
		public function preResponse(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

		/**
		 * The routerShutdown purpose
		 * <p>This hook will be trigged after the route process finished, this hook is usually used for login check.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @param \Yaf_Response_Abstract $response
		 * @return void
		 * @link https://php.net/manual/en/yaf-plugin-abstract.routershutdown.php
		 * @since Yaf >=1.0.0
		 */
		public function routerShutdown(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

		/**
		 * RouterStartup hook
		 * <p>This is the earliest hook in Yaf plugin hook system, if a custom plugin implement this method, then it will be called before routing a request.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @param \Yaf_Response_Abstract $response
		 * @return void
		 * @link https://php.net/manual/en/yaf-plugin-abstract.routerstartup.php
		 * @since Yaf >=1.0.0
		 */
		public function routerStartup(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}
	}

	/**
	 * <p>All methods of <b>Yaf_Registry</b> declared as static, making it unversally accessible. This provides the ability to get or set any custom data from anyway in your code as necessary.</p>
	 * @link https://php.net/manual/en/class.yaf-registry.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Registry {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-registry.php#yaf-registry.props.instance
		 */
		static $_instance;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-registry.php#yaf-registry.props.entries
		 */
		protected $_entries;

		/**
		 * Yaf_Registry implements singleton
		 * @return self
		 * @link https://php.net/manual/en/yaf-registry.construct.php
		 * @since Yaf >=1.0.0
		 */
		private function __construct() {}

		/**
		 * Remove an item from registry
		 * <p>Remove an item from registry</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-registry.del.php
		 * @since Yaf >=1.0.0
		 */
		public static function del(string $name): void {}

		/**
		 * Retrieve an item from registry
		 * <p>Retrieve an item from registry</p>
		 * @param string $name
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-registry.get.php
		 * @since Yaf >=1.0.0
		 */
		public static function get(string $name): mixed {}

		/**
		 * Check whether an item exists
		 * <p>Check whether an item exists</p>
		 * @param string $name
		 * @return bool
		 * @link https://php.net/manual/en/yaf-registry.has.php
		 * @since Yaf >=1.0.0
		 */
		public static function has(string $name): bool {}

		/**
		 * Add an item into registry
		 * <p>Add an item into registry</p>
		 * @param string $name
		 * @param string $value
		 * @return bool
		 * @link https://php.net/manual/en/yaf-registry.set.php
		 * @since Yaf >=1.0.0
		 */
		public static function set(string $name, string $value): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-request-abstract.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Request_Abstract {

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php
		 */
		const SCHEME_HTTP = 'http';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php
		 */
		const SCHEME_HTTPS = 'https';

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.module
		 */
		public $module;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.controller
		 */
		public $controller;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.action
		 */
		public $action;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.method
		 */
		public $method;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.params
		 */
		protected $params;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.language
		 */
		protected $language;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.exception
		 */
		protected $_exception;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.base-uri
		 */
		protected $_base_uri;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.uri
		 */
		protected $uri;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.dispatched
		 */
		protected $dispatched;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-request-abstract.php#yaf-request-abstract.props.routed
		 */
		protected $routed;

		/**
		 * Remove all params
		 * <p>Remove all params set by router, or <code>Yaf_Request_Abstract::setParam()</code></p>
		 * @return bool <p><code>bool</code></p>
		 * @link https://php.net/manual/en/yaf-request-abstract.clearparams.php
		 * @since No version information available, might only be in Git
		 */
		public function clearParams(): bool {}

		/**
		 * The getActionName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getactionname.php
		 * @since Yaf >=1.0.0
		 */
		public function getActionName(): void {}

		/**
		 * The getBaseUri purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getbaseuri.php
		 * @since Yaf >=1.0.0
		 */
		public function getBaseUri(): void {}

		/**
		 * The getControllerName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getcontrollername.php
		 * @since Yaf >=1.0.0
		 */
		public function getControllerName(): void {}

		/**
		 * Retrieve ENV varialbe
		 * <p>Retrieve ENV variable</p>
		 * @param string $name <p>the variable name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the varialbe can not be found</p>
		 * @return void <p>Returns string</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.getenv.php
		 * @since Yaf >=1.0.0
		 */
		public function getEnv(string $name, string $default = NULL): void {}

		/**
		 * The getException purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getexception.php
		 * @since Yaf >=1.0.0
		 */
		public function getException(): void {}

		/**
		 * Retrieve client's prefered language
		 * @return void <p>Returns a string</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.getlanguage.php
		 * @since Yaf >=1.0.0
		 */
		public function getLanguage(): void {}

		/**
		 * Retrieve the request method
		 * @return string <p>Return a string, like "POST", "GET" etc.</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.getmethod.php
		 * @since Yaf >=1.0.0
		 */
		public function getMethod(): string {}

		/**
		 * The getModuleName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getmodulename.php
		 * @since Yaf >=1.0.0
		 */
		public function getModuleName(): void {}

		/**
		 * Retrieve calling parameter
		 * @param string $name
		 * @param string $default
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-request-abstract.getparam.php
		 * @since Yaf >=1.0.0
		 */
		public function getParam(string $name, string $default = NULL): mixed {}

		/**
		 * Retrieve all calling parameters
		 * @return array
		 * @link https://php.net/manual/en/yaf-request-abstract.getparams.php
		 * @since Yaf >=1.0.0
		 */
		public function getParams(): array {}

		/**
		 * The getRequestUri purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getrequesturi.php
		 * @since Yaf >=1.0.0
		 */
		public function getRequestUri(): void {}

		/**
		 * Retrieve SERVER variable
		 * <p>Retrieve SERVER variable</p>
		 * @param string $name <p>the variable name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the variable can not be found</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getserver.php
		 * @since Yaf >=1.0.0
		 */
		public function getServer(string $name, string $default = NULL): void {}

		/**
		 * Determine if request is CLI request
		 * @return bool <p>bolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.iscli.php
		 * @since Yaf >=1.0.0
		 */
		public function isCli(): bool {}

		/**
		 * Determin if the request is dispatched
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isdispatched.php
		 * @since Yaf >=1.0.0
		 */
		public function isDispatched(): bool {}

		/**
		 * Determine if request is GET request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isget.php
		 * @since Yaf >=1.0.0
		 */
		public function isGet(): bool {}

		/**
		 * Determine if request is HEAD request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.ishead.php
		 * @since Yaf >=1.0.0
		 */
		public function isHead(): bool {}

		/**
		 * Determine if request is OPTIONS request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isoptions.php
		 * @since Yaf >=1.0.0
		 */
		public function isOptions(): bool {}

		/**
		 * Determine if request is POST request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.ispost.php
		 * @since Yaf >=1.0.0
		 */
		public function isPost(): bool {}

		/**
		 * Determine if request is PUT request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isput.php
		 * @since Yaf >=1.0.0
		 */
		public function isPut(): bool {}

		/**
		 * Determin if request has been routed
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isrouted.php
		 * @since Yaf >=1.0.0
		 */
		public function isRouted(): bool {}

		/**
		 * Determine if request is AJAX request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isxmlhttprequest.php
		 * @since Yaf >=1.0.0
		 */
		public function isXmlHttpRequest(): bool {}

		/**
		 * Set action name
		 * <p>set action name to request, this is usually used by custom router to set route result controller name.</p>
		 * @param string $action <p><code>string</code>, action name, it should in lower case style, like "index" or "foo_bar"</p>
		 * @param bool $format_name <p>this is introduced in Yaf 3.2.0, by default Yaf will format the name into lower case style, if this is set to <b><code>FALSE</code></b> , Yaf will set the original name to request.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setactionname.php
		 * @since Yaf >=1.0.0
		 */
		public function setActionName(string $action, bool $format_name = true): void {}

		/**
		 * Set base URI
		 * <p>Set base URI, base URI is used when doing routing, in routing phase request URI is used to route a request, while base URI is used to skip the leadding part(base URI) of request URI. That is, if comes a request with request URI a/b/c, then if you set base URI to "a/b", only "/c" will be used in routing phase.</p><p><b>Note</b>:</p><p>generally, you don't need to set this, Yaf will determine it automatically.</p>
		 * @param string $uir <p>base URI</p>
		 * @return bool <p>bool</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.setbaseuri.php
		 * @since Yaf >=1.0.0
		 */
		public function setBaseUri(string $uir): bool {}

		/**
		 * Set controller name
		 * <p>set controller name to request, this is usually used by custom router to set route result controller name.</p>
		 * @param string $controller <p><code>string</code>, controller name, this should be in camel style, like "Index" or "Foo_Bar"</p>
		 * @param bool $format_name <p>this is introduced in Yaf 3.2.0, by default Yaf will format the name into camel mode, if this is set to <b><code>FALSE</code></b> , Yaf will set the original name to request.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setcontrollername.php
		 * @since Yaf >=1.0.0
		 */
		public function setControllerName(string $controller, bool $format_name = true): void {}

		/**
		 * The setDispatched purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setdispatched.php
		 * @since Yaf >=1.0.0
		 */
		public function setDispatched(): void {}

		/**
		 * Set module name
		 * <p>set module name to request, this is usually used by custom router to set route result module name.</p>
		 * @param string $module <p><code>string</code> module name, it should be in camel style, like "Index" or "Foo_Bar"</p>
		 * @param bool $format_name <p>this is introduced in Yaf 3.2.0, by default Yaf will format the name into camel mode, if this is set to <b><code>FALSE</code></b> , Yaf will set the original name to request.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setmodulename.php
		 * @since Yaf >=1.0.0
		 */
		public function setModuleName(string $module, bool $format_name = true): void {}

		/**
		 * Set a calling parameter to a request
		 * <p>Set a parameter to request, which can be retrieved by <code>Yaf_Request_Abstract::getParam()</code></p>
		 * @param string $name
		 * @param string $value
		 * @return bool
		 * @link https://php.net/manual/en/yaf-request-abstract.setparam.php
		 * @since Yaf >=1.0.0
		 */
		public function setParam(string $name, string $value = NULL): bool {}

		/**
		 * The setRequestUri purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $uir
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setrequesturi.php
		 * @since Yaf >=2.1.0
		 */
		public function setRequestUri(string $uir): void {}

		/**
		 * The setRouted purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $flag
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setrouted.php
		 * @since Yaf >=1.0.0
		 */
		public function setRouted(string $flag = NULL): void {}
	}

	/**
	 * <p>Any request from client is initialized as a <b>Yaf_Request_Http</b>. you can get the request information like, uri query and post parameters via methods of this class.</p>
	 * <p><b>Note</b>:</p>
	 * <p>For security, $_GET/$_POST are readonly in Yaf, which means if you set a value to these global variables, you can not get it from <code>Yaf_Request_Http::getQuery()</code> or <code>Yaf_Request_Http::getPost()</code>.</p>
	 * <p>But there do is some usage need such feature, like unit testing. thus Yaf can be built with --enable-yaf-debug, which will allow Yaf read the value user set via script.</p>
	 * <p>in such case, Yaf will throw a E_STRICT warning to remind you about that: Strict Standards: you are running yaf in debug mode</p>
	 * @link https://php.net/manual/en/class.yaf-request-http.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Request_Http extends \Yaf_Request_Abstract {

		/**
		 * Constructor of Yaf_Request_Http
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $request_uri
		 * @param string $base_uri
		 * @return self
		 * @link https://php.net/manual/en/yaf-request-http.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(string $request_uri = NULL, string $base_uri = NULL) {}

		/**
		 * Remove all params
		 * <p>Remove all params set by router, or <code>Yaf_Request_Abstract::setParam()</code></p>
		 * @return bool <p><code>bool</code></p>
		 * @link https://php.net/manual/en/yaf-request-abstract.clearparams.php
		 * @since No version information available, might only be in Git
		 */
		public function clearParams(): bool {}

		/**
		 * Retrieve variable from client
		 * <p>Retrieve variable from client, this method will search the <code>name</code> in request pramas, if the name is not found, then will search in POST, GET, Cookie, Server</p>
		 * @param string $name <p>the variable name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the varialbe can not be found</p>
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-request-http.get.php
		 * @since Yaf >=1.0.0
		 */
		public function get(string $name, string $default = NULL): mixed {}

		/**
		 * The getActionName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getactionname.php
		 * @since Yaf >=1.0.0
		 */
		public function getActionName(): void {}

		/**
		 * The getBaseUri purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getbaseuri.php
		 * @since Yaf >=1.0.0
		 */
		public function getBaseUri(): void {}

		/**
		 * The getControllerName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getcontrollername.php
		 * @since Yaf >=1.0.0
		 */
		public function getControllerName(): void {}

		/**
		 * Retrieve Cookie variable
		 * <p>Retrieve Cookie variable</p>
		 * @param string $name <p>the cookie name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the cookie can not be found</p>
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-request-http.getcookie.php
		 * @since Yaf >=1.0.0
		 */
		public function getCookie(string $name, string $default = NULL): mixed {}

		/**
		 * Retrieve ENV varialbe
		 * <p>Retrieve ENV variable</p>
		 * @param string $name <p>the variable name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the varialbe can not be found</p>
		 * @return void <p>Returns string</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.getenv.php
		 * @since Yaf >=1.0.0
		 */
		public function getEnv(string $name, string $default = NULL): void {}

		/**
		 * The getException purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getexception.php
		 * @since Yaf >=1.0.0
		 */
		public function getException(): void {}

		/**
		 * The getFiles purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-http.getfiles.php
		 * @since Yaf >=1.0.0
		 */
		public function getFiles(): void {}

		/**
		 * Retrieve client's prefered language
		 * @return void <p>Returns a string</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.getlanguage.php
		 * @since Yaf >=1.0.0
		 */
		public function getLanguage(): void {}

		/**
		 * Retrieve the request method
		 * @return string <p>Return a string, like "POST", "GET" etc.</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.getmethod.php
		 * @since Yaf >=1.0.0
		 */
		public function getMethod(): string {}

		/**
		 * The getModuleName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getmodulename.php
		 * @since Yaf >=1.0.0
		 */
		public function getModuleName(): void {}

		/**
		 * Retrieve calling parameter
		 * @param string $name
		 * @param string $default
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-request-abstract.getparam.php
		 * @since Yaf >=1.0.0
		 */
		public function getParam(string $name, string $default = NULL): mixed {}

		/**
		 * Retrieve all calling parameters
		 * @return array
		 * @link https://php.net/manual/en/yaf-request-abstract.getparams.php
		 * @since Yaf >=1.0.0
		 */
		public function getParams(): array {}

		/**
		 * Retrieve POST variable
		 * <p>Retrieve POST variable</p>
		 * @param string $name <p>the variable name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the varialbe can not be found</p>
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-request-http.getpost.php
		 * @since Yaf >=1.0.0
		 */
		public function getPost(string $name, string $default = NULL): mixed {}

		/**
		 * Fetch a query parameter
		 * <p>Retrieve GET variable</p>
		 * @param string $name <p>the variable name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the variable can not be found</p>
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-request-http.getquery.php
		 * @since Yaf >=1.0.0
		 */
		public function getQuery(string $name, string $default = NULL): mixed {}

		/**
		 * Retrieve Raw request body
		 * <p>Retrieve Raw request body</p>
		 * @return mixed <p>Return string on success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/yaf-request-http.getraw.php
		 * @since Yaf >=3.0.7
		 */
		public function getRaw(): mixed {}

		/**
		 * The getRequest purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-http.getrequest.php
		 * @since Yaf >=1.0.0
		 */
		public function getRequest(): void {}

		/**
		 * The getRequestUri purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getrequesturi.php
		 * @since Yaf >=1.0.0
		 */
		public function getRequestUri(): void {}

		/**
		 * Retrieve SERVER variable
		 * <p>Retrieve SERVER variable</p>
		 * @param string $name <p>the variable name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the variable can not be found</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getserver.php
		 * @since Yaf >=1.0.0
		 */
		public function getServer(string $name, string $default = NULL): void {}

		/**
		 * Determine if request is CLI request
		 * @return bool <p>bolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.iscli.php
		 * @since Yaf >=1.0.0
		 */
		public function isCli(): bool {}

		/**
		 * Determin if the request is dispatched
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isdispatched.php
		 * @since Yaf >=1.0.0
		 */
		public function isDispatched(): bool {}

		/**
		 * Determine if request is GET request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isget.php
		 * @since Yaf >=1.0.0
		 */
		public function isGet(): bool {}

		/**
		 * Determine if request is HEAD request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.ishead.php
		 * @since Yaf >=1.0.0
		 */
		public function isHead(): bool {}

		/**
		 * Determine if request is OPTIONS request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isoptions.php
		 * @since Yaf >=1.0.0
		 */
		public function isOptions(): bool {}

		/**
		 * Determine if request is POST request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.ispost.php
		 * @since Yaf >=1.0.0
		 */
		public function isPost(): bool {}

		/**
		 * Determine if request is PUT request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isput.php
		 * @since Yaf >=1.0.0
		 */
		public function isPut(): bool {}

		/**
		 * Determin if request has been routed
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isrouted.php
		 * @since Yaf >=1.0.0
		 */
		public function isRouted(): bool {}

		/**
		 * Determin if request is Ajax Request
		 * <p>Check the request whether it is a Ajax Request.</p><p><b>Note</b>:</p><p>This method depends on the request header: HTTP_X_REQUESTED_WITH, some Javascript library doesn't set this header while doing Ajax request</p>
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-http.isxmlhttprequest.php
		 * @since Yaf >=1.0.0
		 */
		public function isXmlHttpRequest(): bool {}

		/**
		 * Set action name
		 * <p>set action name to request, this is usually used by custom router to set route result controller name.</p>
		 * @param string $action <p><code>string</code>, action name, it should in lower case style, like "index" or "foo_bar"</p>
		 * @param bool $format_name <p>this is introduced in Yaf 3.2.0, by default Yaf will format the name into lower case style, if this is set to <b><code>FALSE</code></b> , Yaf will set the original name to request.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setactionname.php
		 * @since Yaf >=1.0.0
		 */
		public function setActionName(string $action, bool $format_name = true): void {}

		/**
		 * Set base URI
		 * <p>Set base URI, base URI is used when doing routing, in routing phase request URI is used to route a request, while base URI is used to skip the leadding part(base URI) of request URI. That is, if comes a request with request URI a/b/c, then if you set base URI to "a/b", only "/c" will be used in routing phase.</p><p><b>Note</b>:</p><p>generally, you don't need to set this, Yaf will determine it automatically.</p>
		 * @param string $uir <p>base URI</p>
		 * @return bool <p>bool</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.setbaseuri.php
		 * @since Yaf >=1.0.0
		 */
		public function setBaseUri(string $uir): bool {}

		/**
		 * Set controller name
		 * <p>set controller name to request, this is usually used by custom router to set route result controller name.</p>
		 * @param string $controller <p><code>string</code>, controller name, this should be in camel style, like "Index" or "Foo_Bar"</p>
		 * @param bool $format_name <p>this is introduced in Yaf 3.2.0, by default Yaf will format the name into camel mode, if this is set to <b><code>FALSE</code></b> , Yaf will set the original name to request.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setcontrollername.php
		 * @since Yaf >=1.0.0
		 */
		public function setControllerName(string $controller, bool $format_name = true): void {}

		/**
		 * The setDispatched purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setdispatched.php
		 * @since Yaf >=1.0.0
		 */
		public function setDispatched(): void {}

		/**
		 * Set module name
		 * <p>set module name to request, this is usually used by custom router to set route result module name.</p>
		 * @param string $module <p><code>string</code> module name, it should be in camel style, like "Index" or "Foo_Bar"</p>
		 * @param bool $format_name <p>this is introduced in Yaf 3.2.0, by default Yaf will format the name into camel mode, if this is set to <b><code>FALSE</code></b> , Yaf will set the original name to request.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setmodulename.php
		 * @since Yaf >=1.0.0
		 */
		public function setModuleName(string $module, bool $format_name = true): void {}

		/**
		 * Set a calling parameter to a request
		 * <p>Set a parameter to request, which can be retrieved by <code>Yaf_Request_Abstract::getParam()</code></p>
		 * @param string $name
		 * @param string $value
		 * @return bool
		 * @link https://php.net/manual/en/yaf-request-abstract.setparam.php
		 * @since Yaf >=1.0.0
		 */
		public function setParam(string $name, string $value = NULL): bool {}

		/**
		 * The setRequestUri purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $uir
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setrequesturi.php
		 * @since Yaf >=2.1.0
		 */
		public function setRequestUri(string $uir): void {}

		/**
		 * The setRouted purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $flag
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setrouted.php
		 * @since Yaf >=1.0.0
		 */
		public function setRouted(string $flag = NULL): void {}
	}

	/**
	 * <p><b>Yaf_Request_Simple</b> is particularlly used for test puporse. ie. simulate some espacial request under CLI mode.</p>
	 * @link https://php.net/manual/en/class.yaf-request-simple.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Request_Simple extends \Yaf_Request_Abstract {

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.yaf-request-simple.php
		 */
		const SCHEME_HTTP = 'http';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.yaf-request-simple.php
		 */
		const SCHEME_HTTPS = 'https';

		/**
		 * Constructor of Yaf_Request_Simple
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $method
		 * @param string $module
		 * @param string $controller
		 * @param string $action
		 * @param array $params
		 * @return self
		 * @link https://php.net/manual/en/yaf-request-simple.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(string $method = NULL, string $module = NULL, string $controller = NULL, string $action = NULL, array $params = NULL) {}

		/**
		 * Remove all params
		 * <p>Remove all params set by router, or <code>Yaf_Request_Abstract::setParam()</code></p>
		 * @return bool <p><code>bool</code></p>
		 * @link https://php.net/manual/en/yaf-request-abstract.clearparams.php
		 * @since No version information available, might only be in Git
		 */
		public function clearParams(): bool {}

		/**
		 * The get purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-simple.get.php
		 * @since Yaf >=1.0.0
		 */
		public function get(): void {}

		/**
		 * The getActionName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getactionname.php
		 * @since Yaf >=1.0.0
		 */
		public function getActionName(): void {}

		/**
		 * The getBaseUri purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getbaseuri.php
		 * @since Yaf >=1.0.0
		 */
		public function getBaseUri(): void {}

		/**
		 * The getControllerName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getcontrollername.php
		 * @since Yaf >=1.0.0
		 */
		public function getControllerName(): void {}

		/**
		 * The getCookie purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-simple.getcookie.php
		 * @since Yaf >=1.0.0
		 */
		public function getCookie(): void {}

		/**
		 * Retrieve ENV varialbe
		 * <p>Retrieve ENV variable</p>
		 * @param string $name <p>the variable name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the varialbe can not be found</p>
		 * @return void <p>Returns string</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.getenv.php
		 * @since Yaf >=1.0.0
		 */
		public function getEnv(string $name, string $default = NULL): void {}

		/**
		 * The getException purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getexception.php
		 * @since Yaf >=1.0.0
		 */
		public function getException(): void {}

		/**
		 * The getFiles purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-simple.getfiles.php
		 * @since Yaf >=1.0.0
		 */
		public function getFiles(): void {}

		/**
		 * Retrieve client's prefered language
		 * @return void <p>Returns a string</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.getlanguage.php
		 * @since Yaf >=1.0.0
		 */
		public function getLanguage(): void {}

		/**
		 * Retrieve the request method
		 * @return string <p>Return a string, like "POST", "GET" etc.</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.getmethod.php
		 * @since Yaf >=1.0.0
		 */
		public function getMethod(): string {}

		/**
		 * The getModuleName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getmodulename.php
		 * @since Yaf >=1.0.0
		 */
		public function getModuleName(): void {}

		/**
		 * Retrieve calling parameter
		 * @param string $name
		 * @param string $default
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-request-abstract.getparam.php
		 * @since Yaf >=1.0.0
		 */
		public function getParam(string $name, string $default = NULL): mixed {}

		/**
		 * Retrieve all calling parameters
		 * @return array
		 * @link https://php.net/manual/en/yaf-request-abstract.getparams.php
		 * @since Yaf >=1.0.0
		 */
		public function getParams(): array {}

		/**
		 * The getPost purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-simple.getpost.php
		 * @since Yaf >=1.0.0
		 */
		public function getPost(): void {}

		/**
		 * The getQuery purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-simple.getquery.php
		 * @since Yaf >=1.0.0
		 */
		public function getQuery(): void {}

		/**
		 * The getRequest purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-simple.getrequest.php
		 * @since Yaf >=1.0.0
		 */
		public function getRequest(): void {}

		/**
		 * The getRequestUri purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getrequesturi.php
		 * @since Yaf >=1.0.0
		 */
		public function getRequestUri(): void {}

		/**
		 * Retrieve SERVER variable
		 * <p>Retrieve SERVER variable</p>
		 * @param string $name <p>the variable name</p>
		 * @param string $default <p>if this parameter is provide, this will be returned if the variable can not be found</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.getserver.php
		 * @since Yaf >=1.0.0
		 */
		public function getServer(string $name, string $default = NULL): void {}

		/**
		 * Determine if request is CLI request
		 * @return bool <p>bolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.iscli.php
		 * @since Yaf >=1.0.0
		 */
		public function isCli(): bool {}

		/**
		 * Determin if the request is dispatched
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isdispatched.php
		 * @since Yaf >=1.0.0
		 */
		public function isDispatched(): bool {}

		/**
		 * Determine if request is GET request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isget.php
		 * @since Yaf >=1.0.0
		 */
		public function isGet(): bool {}

		/**
		 * Determine if request is HEAD request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.ishead.php
		 * @since Yaf >=1.0.0
		 */
		public function isHead(): bool {}

		/**
		 * Determine if request is OPTIONS request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isoptions.php
		 * @since Yaf >=1.0.0
		 */
		public function isOptions(): bool {}

		/**
		 * Determine if request is POST request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.ispost.php
		 * @since Yaf >=1.0.0
		 */
		public function isPost(): bool {}

		/**
		 * Determine if request is PUT request
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isput.php
		 * @since Yaf >=1.0.0
		 */
		public function isPut(): bool {}

		/**
		 * Determin if request has been routed
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.isrouted.php
		 * @since Yaf >=1.0.0
		 */
		public function isRouted(): bool {}

		/**
		 * Determin if request is AJAX request
		 * @return void <p>Always returns false for Yaf_Request_Simple</p>
		 * @link https://php.net/manual/en/yaf-request-simple.isxmlhttprequest.php
		 * @since Yaf >=1.0.0
		 */
		public function isXmlHttpRequest(): void {}

		/**
		 * Set action name
		 * <p>set action name to request, this is usually used by custom router to set route result controller name.</p>
		 * @param string $action <p><code>string</code>, action name, it should in lower case style, like "index" or "foo_bar"</p>
		 * @param bool $format_name <p>this is introduced in Yaf 3.2.0, by default Yaf will format the name into lower case style, if this is set to <b><code>FALSE</code></b> , Yaf will set the original name to request.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setactionname.php
		 * @since Yaf >=1.0.0
		 */
		public function setActionName(string $action, bool $format_name = true): void {}

		/**
		 * Set base URI
		 * <p>Set base URI, base URI is used when doing routing, in routing phase request URI is used to route a request, while base URI is used to skip the leadding part(base URI) of request URI. That is, if comes a request with request URI a/b/c, then if you set base URI to "a/b", only "/c" will be used in routing phase.</p><p><b>Note</b>:</p><p>generally, you don't need to set this, Yaf will determine it automatically.</p>
		 * @param string $uir <p>base URI</p>
		 * @return bool <p>bool</p>
		 * @link https://php.net/manual/en/yaf-request-abstract.setbaseuri.php
		 * @since Yaf >=1.0.0
		 */
		public function setBaseUri(string $uir): bool {}

		/**
		 * Set controller name
		 * <p>set controller name to request, this is usually used by custom router to set route result controller name.</p>
		 * @param string $controller <p><code>string</code>, controller name, this should be in camel style, like "Index" or "Foo_Bar"</p>
		 * @param bool $format_name <p>this is introduced in Yaf 3.2.0, by default Yaf will format the name into camel mode, if this is set to <b><code>FALSE</code></b> , Yaf will set the original name to request.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setcontrollername.php
		 * @since Yaf >=1.0.0
		 */
		public function setControllerName(string $controller, bool $format_name = true): void {}

		/**
		 * The setDispatched purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setdispatched.php
		 * @since Yaf >=1.0.0
		 */
		public function setDispatched(): void {}

		/**
		 * Set module name
		 * <p>set module name to request, this is usually used by custom router to set route result module name.</p>
		 * @param string $module <p><code>string</code> module name, it should be in camel style, like "Index" or "Foo_Bar"</p>
		 * @param bool $format_name <p>this is introduced in Yaf 3.2.0, by default Yaf will format the name into camel mode, if this is set to <b><code>FALSE</code></b> , Yaf will set the original name to request.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setmodulename.php
		 * @since Yaf >=1.0.0
		 */
		public function setModuleName(string $module, bool $format_name = true): void {}

		/**
		 * Set a calling parameter to a request
		 * <p>Set a parameter to request, which can be retrieved by <code>Yaf_Request_Abstract::getParam()</code></p>
		 * @param string $name
		 * @param string $value
		 * @return bool
		 * @link https://php.net/manual/en/yaf-request-abstract.setparam.php
		 * @since Yaf >=1.0.0
		 */
		public function setParam(string $name, string $value = NULL): bool {}

		/**
		 * The setRequestUri purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $uir
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setrequesturi.php
		 * @since Yaf >=2.1.0
		 */
		public function setRequestUri(string $uir): void {}

		/**
		 * The setRouted purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $flag
		 * @return void
		 * @link https://php.net/manual/en/yaf-request-abstract.setrouted.php
		 * @since Yaf >=1.0.0
		 */
		public function setRouted(string $flag = NULL): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-response-abstract.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Response_Abstract {

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.yaf-response-abstract.php
		 */
		const DEFAULT_BODY = "content";

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-response-abstract.php#yaf-response-abstract.props.header
		 */
		protected $_header;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-response-abstract.php#yaf-response-abstract.props.body
		 */
		protected $_body;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-response-abstract.php#yaf-response-abstract.props.sendheader
		 */
		protected $_sendheader;

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-response-abstract.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * The __destruct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-response-abstract.destruct.php
		 * @since Yaf >=1.0.0
		 */
		public function __destruct() {}

		/**
		 * Retrieve all bodys as string
		 * @return string
		 * @link https://php.net/manual/en/yaf-response-abstract.tostring.php
		 * @since Yaf >=1.0.0
		 */
		private function __toString(): string {}

		/**
		 * Append to response body
		 * <p>Append a content to a exists content block</p>
		 * @param string $content
		 * @param string $key <p>the content key, you can set a content with a key, if you don't specific, then Yaf_Response_Abstract::DEFAULT_BODY will be used</p><p><b>Note</b>:</p><p>this parameter is introduced as of 2.2.0</p>
		 * @return bool <p>bool</p>
		 * @link https://php.net/manual/en/yaf-response-abstract.appendbody.php
		 * @since Yaf >=1.0.0
		 */
		public function appendBody(string $content, string $key = NULL): bool {}

		/**
		 * Discard all exists response body
		 * <p>Clear existsed content</p>
		 * @param string $key <p>the content key, if you don't specific, then all contents will be cleared.</p><p><b>Note</b>:</p><p>this parameter is introduced as of 2.2.0</p>
		 * @return bool
		 * @link https://php.net/manual/en/yaf-response-abstract.clearbody.php
		 * @since Yaf >=1.0.0
		 */
		public function clearBody(string $key = NULL): bool {}

		/**
		 * Discard all set headers
		 * @return void
		 * @link https://php.net/manual/en/yaf-response-abstract.clearheaders.php
		 * @since Yaf >=1.0.0
		 */
		public function clearHeaders(): void {}

		/**
		 * Retrieve a exists content
		 * <p>Retrieve a exists content</p>
		 * @param string $key <p>the content key, if you don't specific, then Yaf_Response_Abstract::DEFAULT_BODY will be used. if you pass in a <b><code>NULL</code></b>, then all contents will be returned as a array</p><p><b>Note</b>:</p><p>this parameter is introduced as of 2.2.0</p>
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-response-abstract.getbody.php
		 * @since Yaf >=1.0.0
		 */
		public function getBody(string $key = NULL): mixed {}

		/**
		 * The getHeader purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-response-abstract.getheader.php
		 * @since Yaf >=1.0.0
		 */
		public function getHeader(): void {}

		/**
		 * The prependBody purpose
		 * <p>prepend a content to a exists content block</p>
		 * @param string $content
		 * @param string $key <p>the content key, you can set a content with a key, if you don't specific, then Yaf_Response_Abstract::DEFAULT_BODY will be used</p><p><b>Note</b>:</p><p>this parameter is introduced as of 2.2.0</p>
		 * @return bool <p>bool</p>
		 * @link https://php.net/manual/en/yaf-response-abstract.prependbody.php
		 * @since Yaf >=1.0.0
		 */
		public function prependBody(string $content, string $key = NULL): bool {}

		/**
		 * Send response
		 * <p>send response</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-response-abstract.response.php
		 * @since Yaf >=1.0.0
		 */
		public function response(): void {}

		/**
		 * The setAllHeaders purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-response-abstract.setallheaders.php
		 * @since Yaf >=1.0.0
		 */
		protected function setAllHeaders(): void {}

		/**
		 * Set content to response
		 * <p>Set content to response</p>
		 * @param string $content
		 * @param string $key <p>the content key, you can set a content with a key, if you don't specific, then Yaf_Response_Abstract::DEFAULT_BODY will be used</p><p><b>Note</b>:</p><p>this parameter is introduced as of 2.2.0</p>
		 * @return bool
		 * @link https://php.net/manual/en/yaf-response-abstract.setbody.php
		 * @since Yaf >=1.0.0
		 */
		public function setBody(string $content, string $key = NULL): bool {}

		/**
		 * Set reponse header
		 * <p>Used to send a HTTP header</p>
		 * @param string $name
		 * @param string $value
		 * @param bool $replace
		 * @return bool
		 * @link https://php.net/manual/en/yaf-response-abstract.setheader.php
		 * @since Yaf >=1.0.0
		 */
		public function setHeader(string $name, string $value, bool $replace = NULL): bool {}

		/**
		 * The setRedirect purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-response-abstract.setredirect.php
		 * @since Yaf >=1.0.0
		 */
		public function setRedirect(): void {}
	}

	/**
	 * <p><b>Yaf_Route_Interface</b> used for developer defined their custom route.</p>
	 * @link https://php.net/manual/en/class.yaf-route-interface.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Route_Interface {

		/**
		 * Assemble a request
		 * <p>this method returns a url according to the argument info, and append query strings to the url according to the argument query.</p><p>a route should implement this method according to its own route rules, and do a reverse progress.</p>
		 * @param array $info
		 * @param array $query
		 * @return string
		 * @link https://php.net/manual/en/yaf-route-interface.assemble.php
		 * @since Yaf >=2.3.0
		 */
		abstract public function assemble(array $info, array $query = NULL): string;

		/**
		 * Route a request
		 * <p><b>Yaf_Route_Interface::route()</b> is the only method that a custom route should implement.</p><p><b>Note</b>:</p><p>since of 2.3.0, there is another method should also be implemented, see <code>Yaf_Route_Interface::assemble()</code>.</p><p>if this method return <b><code>TRUE</code></b>, then the route process will be end. otherwise, Yaf_Router will call next route in the route stack to route request.</p><p>This method would set the route result to the parameter request, by calling <code>Yaf_Request_Abstract::setControllerName()</code>, <code>Yaf_Request_Abstract::setActionName()</code> and <code>Yaf_Request_Abstract::setModuleName()</code>.</p><p>This method should also call <code>Yaf_Request_Abstract::setRouted()</code> to make the request routed at last.</p>
		 * @param \Yaf_Request_Abstract $request <p>A Yaf_Request_Abstract instance.</p>
		 * @return bool
		 * @link https://php.net/manual/en/yaf-route-interface.route.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function route(\Yaf_Request_Abstract $request): bool;
	}

	/**
	 * <p><b>Yaf_Route_Map</b> is a built-in route, it simply convert a URI endpoint (that part of the URI which comes after the base URI: see <code>Yaf_Request_Abstract::setBaseUri()</code>) to a controller name or action name(depends on the parameter passed to <code>Yaf_Route_Map::__construct()</code>) in following rule: A =&gt; controller A. A/B/C =&gt; controller A_B_C. A/B/C/D/E =&gt; controller A_B_C_D_E.</p>
	 * <p>If the second parameter of <code>Yaf_Route_Map::__construct()</code> is specified, then only the part before delimiter of URI will used to routing, the part after it is used to routing request parameters (see the example section of <code>Yaf_Route_Map::__construct()</code>).</p>
	 * @link https://php.net/manual/en/class.yaf-route-map.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Route_Map implements \Yaf_Route_Interface {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-map.php#yaf-route-map.props.ctl-router
		 */
		protected $_ctl_router;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-map.php#yaf-route-map.props.delimiter
		 */
		protected $_delimiter;

		/**
		 * The __construct purpose
		 * @param string $controller_prefer <p>Whether the result should considering as controller or action</p>
		 * @param string $delimiter
		 * @return self
		 * @link https://php.net/manual/en/yaf-route-map.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(string $controller_prefer = 'FALSE', string $delimiter = "") {}

		/**
		 * Assemble a url
		 * <p>Assemble a url.</p>
		 * @param array $info
		 * @param array $query
		 * @return string
		 * @link https://php.net/manual/en/yaf-route-map.assemble.php
		 * @since Yaf >=2.3.0
		 */
		public function assemble(array $info, array $query = NULL): string {}

		/**
		 * The route purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @return bool
		 * @link https://php.net/manual/en/yaf-route-map.route.php
		 * @since Yaf >=1.0.0
		 */
		public function route(\Yaf_Request_Abstract $request): bool {}
	}

	/**
	 * <p><b>Yaf_Route_Regex</b> is the most flexible route among the Yaf built-in routes.</p>
	 * @link https://php.net/manual/en/class.yaf-route-regex.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Route_Regex extends \Yaf_Route_Interface implements \Yaf_Route_Interface {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-regex.php#yaf-route-regex.props.route
		 */
		protected $_route;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-regex.php#yaf-route-regex.props.default
		 */
		protected $_default;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-regex.php#yaf-route-regex.props.maps
		 */
		protected $_maps;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-regex.php#yaf-route-regex.props.verify
		 */
		protected $_verify;

		/**
		 * Yaf_Route_Regex constructor
		 * @param string $match <p>A complete Regex pattern, will be used to match a request uri, if doesn't matched, Yaf_Route_Regex will return <b><code>FALSE</code></b>.</p>
		 * @param array $route <p>When the match pattern matches the request uri, Yaf_Route_Regex will use this to decide which m/c/a to routed.</p> <p>either of m/c/a in this array is optianl, if you don't assgian a specific value, it will be routed to default.</p>
		 * @param array $map <p>A array to assign name to the captrues in the match result.</p>
		 * @param array $verify
		 * @param string $reverse <p>a string, used to assemble url, see <code>Yaf_Route_Regex::assemble()</code>.</p><p><b>Note</b>:</p><p>this parameter is introduced in 2.3.0</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-route-regex.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(string $match, array $route, array $map = NULL, array $verify = NULL, string $reverse = NULL) {}

		/**
		 * Assemble a url
		 * <p>Assemble a url.</p>
		 * @param array $info
		 * @param array $query
		 * @return string
		 * @link https://php.net/manual/en/yaf-route-regex.assemble.php
		 * @since Yaf >=2.3.0
		 */
		public function assemble(array $info, array $query = NULL): string {}

		/**
		 * The route purpose
		 * <p>Route a incoming request.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @return bool <p>If the pattern given by the first parameter of <b>Yaf_Route_Regex::_construct()</b> matche the request uri, return <b><code>TRUE</code></b>, otherwise return <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/en/yaf-route-regex.route.php
		 * @since Yaf >=1.0.0
		 */
		public function route(\Yaf_Request_Abstract $request): bool {}
	}

	/**
	 * <p>For usage, please see the example section of <code>Yaf_Route_Rewrite::__construct()</code></p>
	 * @link https://php.net/manual/en/class.yaf-route-rewrite.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Route_Rewrite extends \Yaf_Route_Interface implements \Yaf_Route_Interface {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-rewrite.php#yaf-route-rewrite.props.route
		 */
		protected $_route;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-rewrite.php#yaf-route-rewrite.props.default
		 */
		protected $_default;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-rewrite.php#yaf-route-rewrite.props.verify
		 */
		protected $_verify;

		/**
		 * Yaf_Route_Rewrite constructor
		 * @param string $match <p>A pattern, will be used to match a request uri, if it doesn't match, Yaf_Route_Rewrite will return <b><code>FALSE</code></b>.</p> <p>You can use :name style to name segments matched, and use &#42; to match the rest of the URL segments.</p>
		 * @param array $route <p>When the match pattern matches the request uri, Yaf_Route_Rewrite will use this to decide which module/controller/action is the destination.</p> <p>Either of module/controller/action in this array is optional, if you don't assign a specific value, it will be routed to default.</p>
		 * @param array $verify
		 * @return self
		 * @link https://php.net/manual/en/yaf-route-rewrite.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(string $match, array $route, array $verify = NULL) {}

		/**
		 * Assemble a url
		 * <p>Assemble a url.</p>
		 * @param array $info
		 * @param array $query
		 * @return string
		 * @link https://php.net/manual/en/yaf-route-rewrite.assemble.php
		 * @since Yaf >=2.3.0
		 */
		public function assemble(array $info, array $query = NULL): string {}

		/**
		 * The route purpose
		 * @param \Yaf_Request_Abstract $request
		 * @return bool
		 * @link https://php.net/manual/en/yaf-route-rewrite.route.php
		 * @since Yaf >=1.0.0
		 */
		public function route(\Yaf_Request_Abstract $request): bool {}
	}

	/**
	 * <p><b>Yaf_Route_Simple</b> will match the query string, and find the route info.</p>
	 * <p>all you need to do is tell <b>Yaf_Route_Simple</b> what key in the $_GET is module, what key is controller, and what key is action.</p>
	 * <p><code>Yaf_Route_Simple::route()</code> will always return <b><code>TRUE</code></b>, so it is important put <b>Yaf_Route_Simple</b> in the front of the Route stack, otherwise all the other routes will not be called.</p>
	 * @link https://php.net/manual/en/class.yaf-route-simple.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Route_Simple implements \Yaf_Route_Interface {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-simple.php#yaf-route-simple.props.controller
		 */
		protected $controller;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-simple.php#yaf-route-simple.props.module
		 */
		protected $module;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-simple.php#yaf-route-simple.props.action
		 */
		protected $action;

		/**
		 * Yaf_Route_Simple constructor
		 * <p>Yaf_Route_Simple will get route info from query string. and the parameters of this constructor will used as keys while searching for the route info in $_GET.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $module_name <p>The key name of the module info.</p>
		 * @param string $controller_name <p>the key name of the controller info.</p>
		 * @param string $action_name <p>the key name of the action info.</p>
		 * @return self <p>Always return <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/en/yaf-route-simple.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(string $module_name, string $controller_name, string $action_name) {}

		/**
		 * Assemble a url
		 * <p>Assemble a url.</p>
		 * @param array $info
		 * @param array $query
		 * @return string
		 * @link https://php.net/manual/en/yaf-route-simple.assemble.php
		 * @since Yaf >=2.3.0
		 */
		public function assemble(array $info, array $query = NULL): string {}

		/**
		 * Route a request
		 * <p>see <code>Yaf_Route_Simple::__construct()</code></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @return bool <p>always be <b><code>TRUE</code></b></p>
		 * @link https://php.net/manual/en/yaf-route-simple.route.php
		 * @since Yaf >=1.0.0
		 */
		public function route(\Yaf_Request_Abstract $request): bool {}
	}

	/**
	 * <p>Defaultly, Yaf_Router only have a <b>Yaf_Route_Static</b> as its default route.</p>
	 * <p>And <b>Yaf_Route_Static</b> is designed to handle the 80% requirement.</p>
	 * <p>please &#42;NOTE&#42; that it is unnecessary to instance a <b>Yaf_Route_Static</b>, also unecesary to add it into Yaf_Router's routes stack, since there is always be one in Yaf_Router's routes stack, and always be called at the last time.</p>
	 * @link https://php.net/manual/en/class.yaf-route-static.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Route_Static implements \Yaf_Router {

		/**
		 * Assemble a url
		 * <p>Assemble a url.</p>
		 * @param array $info
		 * @param array $query
		 * @return string
		 * @link https://php.net/manual/en/yaf-route-static.assemble.php
		 * @since Yaf >=2.3.0
		 */
		public function assemble(array $info, array $query = NULL): string {}

		/**
		 * The match purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $uri
		 * @return void
		 * @link https://php.net/manual/en/yaf-route-static.match.php
		 * @since Yaf >=1.0.0
		 */
		public function match(string $uri): void {}

		/**
		 * Route a request
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @return bool <p>always be <b><code>TRUE</code></b></p>
		 * @link https://php.net/manual/en/yaf-route-static.route.php
		 * @since Yaf >=1.0.0
		 */
		public function route(\Yaf_Request_Abstract $request): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-route-supervar.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Route_Supervar implements \Yaf_Route_Interface {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-route-supervar.php#yaf-route-supervar.props.var-name
		 */
		protected $_var_name;

		/**
		 * The __construct purpose
		 * <p>Yaf_Route_Supervar is similar with Yaf_Route_Static, the difference is Yaf_Route_Supervar will look for path info in query string, and the parameter supervar_name is the key.</p>
		 * @param string $supervar_name <p>The name of key.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-route-supervar.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct(string $supervar_name) {}

		/**
		 * Assemble a url
		 * <p>Assemble a url.</p>
		 * @param array $info
		 * @param array $query
		 * @return string
		 * @link https://php.net/manual/en/yaf-route-supervar.assemble.php
		 * @since Yaf >=2.3.0
		 */
		public function assemble(array $info, array $query = NULL): string {}

		/**
		 * The route purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @return bool <p>If there is a key(which was defined in <code>Yaf_Route_Supervar::__construct()</code>) in $_GET, return <b><code>TRUE</code></b>. otherwise return <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/en/yaf-route-supervar.route.php
		 * @since Yaf >=1.0.0
		 */
		public function route(\Yaf_Request_Abstract $request): bool {}
	}

	/**
	 * <p><b>Yaf_Router</b> is the standard framework router. Routing is the process of taking a URI endpoint (that part of the URI which comes after the base URI: see <code>Yaf_Request_Abstract::setBaseUri()</code>) and decomposing it into parameters to determine which module, controller, and action of that controller should receive the request. This values of the module, controller, action and other parameters are packaged into a Yaf_Request_Abstract object which is then processed by Yaf_Dispatcher. Routing occurs only once: when the request is initially received and before the first controller is dispatched. <b>Yaf_Router</b> is designed to allow for mod_rewrite-like functionality using pure PHP structures. It is very loosely based on Ruby on Rails routing and does not require any prior knowledge of webserver URL rewriting. It is designed to work with a single Apache mod_rewrite rule (one of):</p>
	 * <p><b>Example #1 Rewrite rule for Apache</b></p>
	 * <p><b>Example #2 Rewrite rule for Apache</b></p>
	 * <p><b>Example #3 Rewrite rule for Lighttpd</b></p>
	 * <p><b>Example #4 Rewrite rule for Nginx</b></p>
	 * @link https://php.net/manual/en/class.yaf-router.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Router {

		/**
		 * @var mixed <p>registered routes stack</p>
		 * @link https://php.net/manual/en/class.yaf-router.php#yaf-router.props.routes
		 */
		protected $_routes;

		/**
		 * @var mixed <p>after routing phase, this indicated the name of which route is used to route current request. you can get this name by <code>Yaf_Router::getCurrentRoute()</code>.</p>
		 * @link https://php.net/manual/en/class.yaf-router.php#yaf-router.props.current
		 */
		protected $_current;

		/**
		 * Yaf_Router constructor
		 * @return self
		 * @link https://php.net/manual/en/yaf-router.construct.php
		 * @since Yaf >=1.0.0
		 */
		public function __construct() {}

		/**
		 * Add config-defined routes into Router
		 * <p>Add routes defined by configs into Yaf_Router's route stack</p>
		 * @param \Yaf_Config_Abstract $config
		 * @return bool <p>An Yaf_Config_Abstract instance, which should contains one or more valid route configs</p>
		 * @link https://php.net/manual/en/yaf-router.addconfig.php
		 * @since Yaf >=1.0.0
		 */
		public function addConfig(\Yaf_Config_Abstract $config): bool {}

		/**
		 * Add new Route into Router
		 * <p>defaultly, Yaf_Router using a Yaf_Route_Static as its defualt route. you can add new routes into router's route stack by calling this method.</p><p>the newer route will be called before the older(route stack), and if the newer router return <b><code>TRUE</code></b>, the router process will be end. otherwise, the older one will be called.</p>
		 * @param string $name
		 * @param \Yaf_Route_Abstract $route
		 * @return bool
		 * @link https://php.net/manual/en/yaf-router.addroute.php
		 * @since Yaf >=1.0.0
		 */
		public function addRoute(string $name, \Yaf_Route_Abstract $route): bool {}

		/**
		 * Get the effective route name
		 * <p>Get the name of the route which is effective in the route process.</p><p><b>Note</b>:</p><p>You should call this method after the route process finished, since before that, this method will always return <b><code>NULL</code></b>.</p>
		 * @return string <p>String, the name of the effective route.</p>
		 * @link https://php.net/manual/en/yaf-router.getcurrentroute.php
		 * @since Yaf >=1.0.0
		 */
		public function getCurrentRoute(): string {}

		/**
		 * Retrieve a route by name
		 * <p>Retrieve a route by name, see also <code>Yaf_Router::getCurrentRoute()</code></p>
		 * @param string $name
		 * @return Yaf_Route_Interface
		 * @link https://php.net/manual/en/yaf-router.getroute.php
		 * @since Yaf >=1.0.0
		 */
		public function getRoute(string $name): \Yaf_Route_Interface {}

		/**
		 * Retrieve registered routes
		 * <p>Retrieve registered routes</p>
		 * @return mixed
		 * @link https://php.net/manual/en/yaf-router.getroutes.php
		 * @since Yaf >=1.0.0
		 */
		public function getRoutes(): mixed {}

		/**
		 * The route purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Yaf_Request_Abstract $request
		 * @return bool
		 * @link https://php.net/manual/en/yaf-router.route.php
		 * @since Yaf >=1.0.0
		 */
		public function route(\Yaf_Request_Abstract $request): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.yaf-session.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_Session implements \Iterator, \ArrayAccess, \Countable {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-session.php#yaf-session.props.instance
		 */
		protected static $_instance;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-session.php#yaf-session.props.session
		 */
		protected $_session;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-session.php#yaf-session.props.started
		 */
		protected $_started;

		/**
		 * Constructor of Yaf_Session
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/yaf-session.construct.php
		 * @since Yaf >=1.0.0
		 */
		private function __construct() {}

		/**
		 * The __get purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.get.php
		 * @since Yaf >=1.0.0
		 */
		public function __get(string $name): void {}

		/**
		 * The __isset purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.isset.php
		 * @since Yaf >=1.0.0
		 */
		public function __isset(string $name): void {}

		/**
		 * The __set purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param string $value
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.set.php
		 * @since Yaf >=1.0.0
		 */
		public function __set(string $name, string $value): void {}

		/**
		 * The __unset purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.unset.php
		 * @since Yaf >=1.0.0
		 */
		public function __unset(string $name): void {}

		/**
		 * The count purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.count.php
		 * @since Yaf >=1.0.0
		 */
		public function count(): void {}

		/**
		 * The current purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.current.php
		 * @since Yaf >=1.0.0
		 */
		public function current(): void {}

		/**
		 * The del purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.del.php
		 * @since Yaf >=1.0.0
		 */
		public function del(string $name): void {}

		/**
		 * The getInstance purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.getinstance.php
		 * @since Yaf >=1.0.0
		 */
		public static function getInstance(): void {}

		/**
		 * The has purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.has.php
		 * @since Yaf >=1.0.0
		 */
		public function has(string $name): void {}

		/**
		 * The key purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.key.php
		 * @since Yaf >=1.0.0
		 */
		public function key(): void {}

		/**
		 * The next purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.next.php
		 * @since Yaf >=1.0.0
		 */
		public function next(): void {}

		/**
		 * The offsetExists purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.offsetexists.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetExists(string $name): void {}

		/**
		 * The offsetGet purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.offsetget.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetGet(string $name): void {}

		/**
		 * The offsetSet purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param string $value
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.offsetset.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetSet(string $name, string $value): void {}

		/**
		 * The offsetUnset purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.offsetunset.php
		 * @since Yaf >=1.0.0
		 */
		public function offsetUnset(string $name): void {}

		/**
		 * The rewind purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.rewind.php
		 * @since Yaf >=1.0.0
		 */
		public function rewind(): void {}

		/**
		 * The start purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.start.php
		 * @since Yaf >=1.0.0
		 */
		public function start(): void {}

		/**
		 * The valid purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-session.valid.php
		 * @since Yaf >=1.0.0
		 */
		public function valid(): void {}
	}

	/**
	 * <p>Yaf provides a ability for developers to use custom view engine instead of built-in engine which is Yaf_View_Simple. There is a example to explain how to do this, please see <code>Yaf_Dispatcher::setView()</code>.</p>
	 * @link https://php.net/manual/en/class.yaf-view-interface.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_View_Interface {

		/**
		 * Assign value to View engine
		 * <p>Assigan values to View engine, then the value can access directly by name in template.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param string $value
		 * @return bool
		 * @link https://php.net/manual/en/yaf-view-interface.assign.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function assign(string $name, string $value = NULL): bool;

		/**
		 * Render and output a template
		 * <p>Render a template and output the result immediatly.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $tpl
		 * @param array $tpl_vars
		 * @return bool
		 * @link https://php.net/manual/en/yaf-view-interface.display.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function display(string $tpl, array $tpl_vars = NULL): bool;

		/**
		 * The getScriptPath purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-view-interface.getscriptpath.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function getScriptPath(): void;

		/**
		 * Render a template
		 * <p>Render a template and return the result.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $tpl
		 * @param array $tpl_vars
		 * @return string
		 * @link https://php.net/manual/en/yaf-view-interface.render.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function render(string $tpl, array $tpl_vars = NULL): string;

		/**
		 * The setScriptPath purpose
		 * <p>Set the templates base directory, this is usually called by Yaf_Dispatcher</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $template_dir <p>A absolute path to the template directory, by default, Yaf_Dispatcher use application.directory . "/views" as this paramter.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-view-interface.setscriptpath.php
		 * @since Yaf >=1.0.0
		 */
		abstract public function setScriptPath(string $template_dir): void;
	}

	/**
	 * <p><b>Yaf_View_Simple</b> is the built-in template engine in Yaf, it is a simple but fast template engine, and only support PHP script template.</p>
	 * @link https://php.net/manual/en/class.yaf-view-simple.php
	 * @since Yaf >=1.0.0
	 */
	class Yaf_View_Simple implements \Yaf_View_Interface {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-view-simple.php#yaf-view-simple.props.tpl-vars
		 */
		protected $_tpl_vars;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yaf-view-simple.php#yaf-view-simple.props.tpl-dir
		 */
		protected $_tpl_dir;

		/**
		 * Constructor of Yaf_View_Simple
		 * @param string $template_dir <p>The base directory of the templates, by default, it is APPLICATOIN . "/views" for Yaf.</p>
		 * @param array $options <p></p><pre>Options for the engine, as of Yaf 2.1.13, you can use short tag "&lt;&#63;=$var&#63;&gt;" in your template(regardless of "short_open_tag"), so comes a option named "short_tag", you can switch this off to prevent use short_tag in template.</pre>
		 * @return self
		 * @link https://php.net/manual/en/yaf-view-simple.construct.php
		 * @since Yaf >=1.0.0
		 */
		final public function __construct(string $template_dir, array $options = NULL) {}

		/**
		 * Retrieve assigned variable
		 * <p>Retrieve assigned varaiable</p><p><b>Note</b>:</p><p>parameter can be empty since 2.1.11</p>
		 * @param string $name <p>the assigned variable name</p> <p>if this is empty, all assigned variables will be returned</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-view-simple.get.php
		 * @since Yaf >=1.0.0
		 */
		public function __get(string $name = NULL): void {}

		/**
		 * The __isset purpose
		 * @param string $name
		 * @return void
		 * @link https://php.net/manual/en/yaf-view-simple.isset.php
		 * @since Yaf >=1.0.0
		 */
		public function __isset(string $name): void {}

		/**
		 * Set value to engine
		 * <p>This is a alternative and easier way to <code>Yaf_View_Simple::assign()</code>.</p>
		 * @param string $name <p>A string value name.</p>
		 * @param mixed $value <p>Mixed value.</p>
		 * @return void
		 * @link https://php.net/manual/en/yaf-view-simple.set.php
		 * @since Yaf >=1.0.0
		 */
		public function __set(string $name, mixed $value): void {}

		/**
		 * Assign values
		 * <p>assign variable to view engine</p>
		 * @param string $name <p>A string or an array.</p> <p>if is string, then the next argument $value is required.</p>
		 * @param mixed $value <p>mixed value</p>
		 * @return bool
		 * @link https://php.net/manual/en/yaf-view-simple.assign.php
		 * @since Yaf >=1.0.0
		 */
		public function assign(string $name, mixed $value = NULL): bool {}

		/**
		 * The assignRef purpose
		 * <p>unlike <code>Yaf_View_Simple::assign()</code>, this method assign a ref value to engine.</p>
		 * @param string $name <p>A string name which will be used to access the value in the tempalte.</p>
		 * @param mixed $value <p>mixed value</p>
		 * @return bool
		 * @link https://php.net/manual/en/yaf-view-simple.assignref.php
		 * @since Yaf >=1.0.0
		 */
		public function assignRef(string $name, mixed &$value): bool {}

		/**
		 * Clear Assigned values
		 * <p>clear assigned variable</p>
		 * @param string $name <p>assigned variable name</p> <p>if empty, will clear all assigned variables</p>
		 * @return bool
		 * @link https://php.net/manual/en/yaf-view-simple.clear.php
		 * @since Yaf >=2.2.0
		 */
		public function clear(string $name = NULL): bool {}

		/**
		 * Render and display
		 * <p>Render a template and display the result instantly.</p>
		 * @param string $tpl
		 * @param array $tpl_vars
		 * @return bool
		 * @link https://php.net/manual/en/yaf-view-simple.display.php
		 * @since Yaf >=1.0.0
		 */
		public function display(string $tpl, array $tpl_vars = NULL): bool {}

		/**
		 * Render template
		 * <p>Render a string tempalte and return the result.</p>
		 * @param string $tpl_content <p>string template</p>
		 * @param array $tpl_vars
		 * @return string
		 * @link https://php.net/manual/en/yaf-view-simple.eval.php
		 * @since Yaf >=2.2.0
		 */
		public function eval(string $tpl_content, array $tpl_vars = NULL): string {}

		/**
		 * Get templates directory
		 * @return string
		 * @link https://php.net/manual/en/yaf-view-simple.getscriptpath.php
		 * @since Yaf >=1.0.0
		 */
		public function getScriptPath(): string {}

		/**
		 * Render template
		 * <p>Render a template and return the result.</p>
		 * @param string $tpl
		 * @param array $tpl_vars
		 * @return string
		 * @link https://php.net/manual/en/yaf-view-simple.render.php
		 * @since Yaf >=1.0.0
		 */
		public function render(string $tpl, array $tpl_vars = NULL): string {}

		/**
		 * Set tempaltes directory
		 * @param string $template_dir
		 * @return bool
		 * @link https://php.net/manual/en/yaf-view-simple.setscriptpath.php
		 * @since Yaf >=1.0.0
		 */
		public function setScriptPath(string $template_dir): bool {}
	}

	define('YAF_ENVIRON', null);

	define('YAF_ERR_AUTOLOAD_FAILED', null);

	define('YAF_ERR_CALL_FAILED', null);

	define('YAF_ERR_DISPATCH_FAILED', null);

	define('YAF_ERR_NOTFOUND_ACTION', null);

	define('YAF_ERR_NOTFOUND_CONTROLLER', null);

	define('YAF_ERR_NOTFOUND_MODULE', null);

	define('YAF_ERR_NOTFOUND_VIEW', null);

	define('YAF_ERR_ROUTE_FAILED', null);

	define('YAF_ERR_STARTUP_FAILED', null);

	define('YAF_ERR_TYPE_ERROR', null);

	define('YAF_VERSION', null);

}
