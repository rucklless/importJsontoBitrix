<?
use Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Application;

Class crtech_vue extends CModule
{
	function __construct(){
		$arModuleVersion = array();
		include_once (__DIR__.'/version.php');
		$this->MODULE_ID = "crtech.vue";
		$this->MODULE_VERSION = $arModuleVersion['VERSION'];
		$this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
		$this->MODULE_NAME = Loc::getMessage('CRTECH_VUE_MODULE_NAME');
		$this->MODULE_DESCRIPTION = Loc::getMessage('CRTECH_VUE_PARTNER_DESCRIPTION');
		$this->MODULE_CSS;
		$this->PARTNER_NAME = Loc::getMessage('CRTECH_VUE_PARTNER_NAME');
		$this->PARTNER_URI = Loc::getMessage('CRTECH_VUE_PARTNER_URI');
	}

	function GetPath(){
		return $_SERVER["DOCUMENT_ROOT"]."/local/modules/".$this->MODULE_ID;
	}
	function InstallDB()
	{

	}

	function UnInstallDB()
	{

	}
	/*
	function offers()
	{

		$arModuleVersion = array();
		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
		{
			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		}

		$this->MODULE_NAME = $this->MODULE_ID." – модуль с компонентом";
		$this->MODULE_DESCRIPTION = "После установки вы сможете пользоваться компонентом ".$this->MODULE_ID;
	}

	function InstallFiles()
	{
		//CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/local/modules/offers/install/components",
			//$_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
		return true;
	}

	function UnInstallFiles()
	{
		//DeleteDirFilesEx("/local/components/dv");
		return true;
	}
*/
	function DoInstall()
	{

		global $DOCUMENT_ROOT, $APPLICATION;
		//$this->InstallFiles();
		RegisterModule($this->MODULE_ID);
		$APPLICATION->IncludeAdminFile("Установка модуля ".$this->MODULE_ID, $this->GetPath()."/install/step.php");
	}

	function DoUninstall()
	{
		global $DOCUMENT_ROOT, $APPLICATION;

		$context = Application::getInstance()->getContext();
		$request = $context->getRequest();
		if($request['step']<2){
			$APPLICATION->IncludeAdminFile(Loc::getMessage('CRTECH_OFFERS_UNINSTALL_TITLE'), $this->GetPath().'/install/unstep1.php');
		}elseif ($request['step'] == 2){
			//$this->UnInstallFiles();


			UnRegisterModule($this->MODULE_ID);
			$APPLICATION->IncludeAdminFile("Деинсталляция ".$this->MODULE_ID, $this->GetPath()."/install/unstep2.php");
		}




	}
}
?>