<?php
namespace Crtech\Offers\Internal;
use Bitrix\Main;

class TestTable extends Main\Entity\DataManager
{

	/**
	 * @param $id
	 * @return Main\Entity\DeleteResult
	 * @throws Main\ArgumentException
	 */

	public static function test(){
		echo "OK";
	}

	public static function deleteBundle($id)
	{
		$id = intval($id);
		if ($id <= 0)
			throw new Main\ArgumentNullException("id");

		$itemsFromDbList = TestTable::getList(
			array(
				"filter" => array(
					'SET_PARENT_ID' => $id,
				),
				"select" => array("ID")
			)
		);
		while ($itemsFromDbItem = $itemsFromDbList->fetch())
			TestTable::deleteWithItems($itemsFromDbItem['ID']);

		return TestTable::deleteWithItems($id);
	}

	/**
	 * @param $id
	 * @return Main\Entity\DeleteResult
	 * @throws Main\ArgumentException
	 * @throws Main\ArgumentNullException
	 */
	public static function deleteWithItems($id)
	{
		$id = intval($id);
		if ($id <= 0)
			throw new Main\ArgumentNullException("id");

		$itemsList = BasketPropertyTable::getList(
			array(
				"select" => array("ID"),
				"filter" => array("BASKET_ID" => $id),
			)
		);
		while ($item = $itemsList->fetch())
			BasketPropertyTable::delete($item["ID"]);

		return TestTable::delete($id);
	}

	/**
	 * @return string
	 */
	public static function getTableName()
	{
		return 'crtech_test';
	}

	/**
	 * @return array
	 */
	public static function getMap()
	{
		global $DB;

		$connection = Main\Application::getConnection();
		$helper = $connection->getSqlHelper();

		return array(
			'ID' => array(
				'data_type' => 'integer',
				'primary' => true,
				'autocomplete' => true,
			),
			'TEST' => array(
				'data_type' => 'string'
			)
		);
	}

	/**
	 * Returns validators for CURRENCY field.
	 *
	 * @return array
	 */
	public static function validateCurrency()
	{
		return array(
			new Main\Entity\Validator\Length(null, 3),
		);
	}

	/**
	 * Returns validators for LID field.
	 *
	 * @return array
	 */
	public static function validateLid()
	{
		return array(
			new Main\Entity\Validator\Length(null, 2),
		);
	}

	/**
	 * Returns validators for DISCOUNT_NAME field.
	 *
	 * @return array
	 */
	public static function validateDiscountName()
	{
		return array(
			new Main\Entity\Validator\Length(null, 255),
		);
	}

	/**
	 * Returns validators for DISCOUNT_VALUE field.
	 *
	 * @return array
	 */
	public static function validateDiscountValue()
	{
		return array(
			new Main\Entity\Validator\Length(null, 32),
		);
	}

	/**
	 * Returns validators for DISCOUNT_COUPON field.
	 *
	 * @return array
	 */
	public static function validateDiscountCoupon()
	{
		return array(
			new Main\Entity\Validator\Length(null, 32),
		);
	}
}
