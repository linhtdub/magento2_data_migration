<?php

/**
 * This is the model class for table "catalog_product_option_type_price".
 *
 * The followings are the available columns in table 'catalog_product_option_type_price':
 * @property string $option_type_price_id
 * @property string $option_type_id
 * @property integer $store_id
 * @property string $price
 * @property string $price_type
 *
 * The followings are the available model relations:
 * @property CatalogProductOptionTypeValue $optionType
 * @property Store $store
 */
class Mage2CatalogProductOptionTypePricePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_option_type_price}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('option_type_id', 'length', 'max'=>10),
			array('price', 'length', 'max'=>12),
			array('price_type', 'length', 'max'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('option_type_price_id, option_type_id, store_id, price, price_type', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'optionType' => array(self::BELONGS_TO, 'CatalogProductOptionTypeValue', 'option_type_id'),
			'store' => array(self::BELONGS_TO, 'Store', 'store_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'option_type_price_id' => 'Option Type Price',
			'option_type_id' => 'Option Type',
			'store_id' => 'Store',
			'price' => 'Price',
			'price_type' => 'Price Type',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('option_type_price_id',$this->option_type_price_id,true);
		$criteria->compare('option_type_id',$this->option_type_id,true);
		$criteria->compare('store_id',$this->store_id);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('price_type',$this->price_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->mage2;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductOptionTypePricePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
