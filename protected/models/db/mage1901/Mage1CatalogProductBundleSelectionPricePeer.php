<?php

/**
 * This is the model class for table "catalog_product_bundle_selection_price".
 *
 * The followings are the available columns in table 'catalog_product_bundle_selection_price':
 * @property string $selection_id
 * @property integer $website_id
 * @property integer $selection_price_type
 * @property string $selection_price_value
 */
class Mage1CatalogProductBundleSelectionPricePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_bundle_selection_price}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('selection_id, website_id', 'required'),
			array('website_id, selection_price_type', 'numerical', 'integerOnly'=>true),
			array('selection_id', 'length', 'max'=>10),
			array('selection_price_value', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('selection_id, website_id, selection_price_type, selection_price_value', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'selection_id' => 'Selection',
			'website_id' => 'Website',
			'selection_price_type' => 'Selection Price Type',
			'selection_price_value' => 'Selection Price Value',
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

		$criteria->compare('selection_id',$this->selection_id,true);
		$criteria->compare('website_id',$this->website_id);
		$criteria->compare('selection_price_type',$this->selection_price_type);
		$criteria->compare('selection_price_value',$this->selection_price_value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->mage1;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductBundleSelectionPricePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
