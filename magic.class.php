<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
require_once ('data.magic.php');
CModule::IncludeModule("iblock");
CModule::IncludeModule("highloadblock");
/*
 * Класс для миграций
 * **/
class magic
{
	const arrIbId = array(
		'brands' => 2
	);
	/*
	 * Функция создания элементa инфоблока
	 * @$arIbId - id инфоблока
	 * @$name - имя элемента
	 * **/
	private static function createElems($arIbId, $name)
	{
		$el = new CIBlockElement;
		$arLoadProductArray = Array(
			"IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
			"IBLOCK_ID"      => $arIbId,
			"NAME"           => $name,
			"ACTIVE"         => "Y",            // активен
		);
		if($PRODUCT_ID = $el->Add($arLoadProductArray))
			echo "New ID: ".$PRODUCT_ID;
		else
			echo "Error: ".$el->LAST_ERROR;
	}
	/*
	 * Создание брендов
	 * @$arIbId - id инфоблока
	 * @$listName - массив имен
	 * **/
	public static function createBrands(){
		foreach (Data::brandList as $name){
			self::createElems(self::arrIbId['brands'], $name);
		}
	}
	public static function hello(){
		echo 'Hello!';
	}

	/*
	 * Собираем из строки с общими изображениями много строк с отдельными изображениями
	 * **/
	private function parseStringCSV($data){
		$num = count($data);
		$str = '';
		for ($c = 0; $c < $num; $c++){
			if($c == 10){
				$str .= 'URL_FOR_REPLACE';
			}else{
				$str .= $data[$c];
			}
			$str .= ';';
		}
		$explode = explode(' ', $data[10]);
		if(is_array($explode) && count($explode)>0){
			foreach($explode as $url){
				if(!empty($url))
					$res = str_replace('URL_FOR_REPLACE', $url, $str);
				else
					continue;
				yield $res;
			}
		}else{
			$res =  str_replace('URL_FOR_REPLACE', '', $str);
			yield $res;
		}
	}

	/*
	 * Собрать массив в строку csv
	 * **/
	private function parseStringCSVTwo($data){
		$num = count($data);
		$str = '';
		for ($c = 0; $c < $num; $c++){
				$str .= preg_replace('/ {2,}/', ' ', $data[$c]).';';
		}
		return $str;
	}
	/*
	 * Копируем csv файл и множим строки на кол-во изображений
	 * **/
	public static function parseCSV($path = '/upload/offers.csv'){
		$timestamp = time();
		$pathFrom = $_SERVER['DOCUMENT_ROOT'].'/upload/offers.csv';
		$pathTo = $_SERVER['DOCUMENT_ROOT'].'/upload/full-offers.csv';
		$f = fopen($pathFrom, 'rt') or die('Ошибка!');
		$t = fopen($pathTo, 'rt') or die('Ошибка!');

		for ($i = 0; $data = fgetcsv($f, 0, ";"); $i++) {
			if ($i ==0 ) continue;

			echo "<h3>Строка номер $i (полей: $num):</h3>";

			foreach (self::parseStringCSV($data) as $s){
				file_put_contents($pathTo, $s .PHP_EOL, FILE_APPEND);
			}
			if(time() - $timestamp > 20){
				break;
			}
		}
		echo $i;
		fclose($f);
	}

	public static function getOffers(){
		$arSelect = array("ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_MORE_PHOTO");
		$arFilter = array("IBLOCK_ID" => IntVal(4), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
		$res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
		$i = 0;
		while ($ob = $res->GetNextElement()) {
			$arFields = $ob->GetFields();
			echo ++$i.'<br>';
			echo '\''.$arFields['NAME'].'\',<br>';
		}
	}

	public static function readCSV(){
		$pathFrom = $_SERVER['DOCUMENT_ROOT'].'/upload/full-offers-success-utf-8-2.csv';
		$f = fopen($pathFrom, 'rt') or die('Ошибка!');
		for ($i = 0; $data = fgetcsv($f, 0, ";"); $i++) {
			?><pre><?print_r($data)?></pre><?php
		}
	}

	/*
	 * Сверяем записи из csv с массивом элементов $data, и если элемент отсутствует записываем в файл compare.csv
	 **/
	public static function compareCSV($d){
		$pathFrom = $_SERVER['DOCUMENT_ROOT'].'/upload/full-offers-success-utf-8-2.csv';
		$pathTo = $_SERVER['DOCUMENT_ROOT'].'/upload/compare.csv';
		$f = fopen($pathFrom, 'rt') or die('Ошибка!');

		for ($i = 0; $data = fgetcsv($f, 0, ";"); $i++) {
			if ($i ==0 ) continue;
			$n = preg_replace('/ {2,}/',' ', $data[2]);
			$n = trim($n);
			$key = array_search($n, $d);
			if($key !== false){

			}else{
				file_put_contents($pathTo, self::parseStringCSVTwo($data) .PHP_EOL, FILE_APPEND);
			}
		}
		echo $i;
		fclose($f);
	}
	/*
	 * Получаем массив всех значений для свойства торговых предложений
	 * */
	public static function getArrValueProps($prop = ''){
		$arSelect = array("ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_".$prop);
		$arFilter = array("IBLOCK_ID" => IntVal(4), "!PROPERTY_".$prop => false);
		$res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
		$arr = array();
		while ($ob = $res->GetNextElement()) {
			$arFields = $ob->GetFields();
			$arr[$arFields['PROPERTY_COLOR_VALUE']] = $arFields['PROPERTY_COLOR_VALUE'];
		}
		return $arr;
	}
	/*
	 * Получаем список элементов с заполненным $key1 и незаполненным $key2
	 * */
	public static function getArrElemByProp($key1 = '', $key2 = ''){
		$arSelect = array("ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_".$key1,"PROPERTY_".$key2);
		$arFilter = array("IBLOCK_ID" => IntVal(4), "!PROPERTY_".$key1 => false, "PROPERTY_".$key2 => false);
		$res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
		$arr = array();
		while ($ob = $res->GetNextElement()) {
			$arFields = $ob->GetFields();
			yield $arFields;
		}
	}
	/*
	 * Получаем все элементы hl
	 * */
	public static function getAllElemHl($name = 'Colors'){
		$tableName = $name;
		$arr = array();
		$hlblock = \Bitrix\Highloadblock\HighloadBlockTable::getList(
			array("filter" => array(
				'TABLE_NAME' => $tableName
			))
		)->fetch();
		if (isset($hlblock['ID']))
		{
			$entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
			$entity_data_class = $entity->getDataClass();
			$res = $entity_data_class::getList( array('filter'=>array()) );
			while ($item = $res->fetch())
			{
				$arr[mb_strtolower($item['UF_NAME'])] = $item['UF_XML_ID'];
			}
    	}
		return $arr;
	}
	/*
	 * Добавление цветов HL из массива
	 * */
	public static function addColorHL($arr){
		$hlblock_id = 4; // указываете ид вашего Highload-блока
		$hlblock   = Bitrix\Highloadblock\HighloadBlockTable::getById( $hlblock_id )->fetch();
		$entity   = Bitrix\Highloadblock\HighloadBlockTable::compileEntity( $hlblock );
		$entity_data_class = $entity->getDataClass();

		$arMass = Array(
			'UF_COLOR_NAME' => $arr[2],
			'UF_COLOR_HEX' => $arr[1]
		);
		$otvet = $entity_data_class::add($arMass);
		if ($otvet->isSuccess()) {
			echo 'успешно добавлен';
		} else {
			echo 'Ошибка: ' . implode(', ', $otvet->getErrors()) . "
		";
				}
	}
	/*
	 * Добавление размеров HL из массива
	 * */
	public static function addSizeHL($name){
		$hlblock_id = 3; // указываете ид вашего Highload-блока
		$hlblock   = Bitrix\Highloadblock\HighloadBlockTable::getById( $hlblock_id )->fetch();
		$entity   = Bitrix\Highloadblock\HighloadBlockTable::compileEntity( $hlblock );
		$entity_data_class = $entity->getDataClass();

		$arMass = Array(
			'UF_XML_ID' => $name
		);
		$otvet = $entity_data_class::add($arMass);
		if ($otvet->isSuccess()) {
			echo 'успешно добавлен';
		} else {
			echo 'Ошибка: ' . implode(', ', $otvet->getErrors()) . "
		";
		}
	}

	/*
	 * Обновить свойство элемента
	 * */
	public static function updatePropElem($id, $prop, $valProp){
		CIBlockElement::SetPropertyValuesEx($id, false, array($prop => $valProp));
	}

	public static function getList(){
		$arSelect = array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PICTURE");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
		$arFilter = array("IBLOCK_ID" => IntVal(3), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "DETAIL_PICTURE" => false);
		$res = CIBlockElement::GetList(array(), $arFilter, false, array(/*"nPageSize" => 50*/), $arSelect);
		while ($ob = $res->GetNextElement()) {
			$arFields = $ob->GetFields();
			yield $arFields;
		}
	}
}