<?php

/**
 * This is the model class for table "catalog_eav_attribute".
 *
 * The followings are the available columns in table 'catalog_eav_attribute':
 * @property integer $attribute_id
 * @property string $frontend_input_renderer
 * @property integer $is_global
 * @property integer $is_visible
 * @property integer $is_searchable
 * @property integer $is_filterable
 * @property integer $is_comparable
 * @property integer $is_visible_on_front
 * @property integer $is_html_allowed_on_front
 * @property integer $is_used_for_price_rules
 * @property integer $is_filterable_in_search
 * @property integer $used_in_product_listing
 * @property integer $used_for_sort_by
 * @property string $apply_to
 * @property integer $is_visible_in_advanced_search
 * @property integer $position
 * @property integer $is_wysiwyg_enabled
 * @property integer $is_used_for_promo_rules
 * @property integer $is_required_in_admin_store
 *
 * The followings are the available model relations:
 * @property EavAttribute $attribute
 */
class Mage2CatalogEavAttributePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_eav_attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attribute_id', 'required'),
			array('attribute_id, is_global, is_visible, is_searchable, is_filterable, is_comparable, is_visible_on_front, is_html_allowed_on_front, is_used_for_price_rules, is_filterable_in_search, used_in_product_listing, used_for_sort_by, is_visible_in_advanced_search, position, is_wysiwyg_enabled, is_used_for_promo_rules, is_required_in_admin_store', 'numerical', 'integerOnly'=>true),
			array('frontend_input_renderer, apply_to', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('attribute_id, frontend_input_renderer, is_global, is_visible, is_searchable, is_filterable, is_comparable, is_visible_on_front, is_html_allowed_on_front, is_used_for_price_rules, is_filterable_in_search, used_in_product_listing, used_for_sort_by, apply_to, is_visible_in_advanced_search, position, is_wysiwyg_enabled, is_used_for_promo_rules, is_required_in_admin_store', 'safe', 'on'=>'search'),
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
			'attribute' => array(self::BELONGS_TO, 'EavAttribute', 'attribute_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'attribute_id' => 'Attribute',
			'frontend_input_renderer' => 'Frontend Input Renderer',
			'is_global' => 'Is Global',
			'is_visible' => 'Is Visible',
			'is_searchable' => 'Is Searchable',
			'is_filterable' => 'Is Filterable',
			'is_comparable' => 'Is Comparable',
			'is_visible_on_front' => 'Is Visible On Front',
			'is_html_allowed_on_front' => 'Is Html Allowed On Front',
			'is_used_for_price_rules' => 'Is Used For Price Rules',
			'is_filterable_in_search' => 'Is Filterable In Search',
			'used_in_product_listing' => 'Used In Product Listing',
			'used_for_sort_by' => 'Used For Sort By',
			'apply_to' => 'Apply To',
			'is_visible_in_advanced_search' => 'Is Visible In Advanced Search',
			'position' => 'Position',
			'is_wysiwyg_enabled' => 'Is Wysiwyg Enabled',
			'is_used_for_promo_rules' => 'Is Used For Promo Rules',
			'is_required_in_admin_store' => 'Is Required In Admin Store',
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

		$criteria->compare('attribute_id',$this->attribute_id);
		$criteria->compare('frontend_input_renderer',$this->frontend_input_renderer,true);
		$criteria->compare('is_global',$this->is_global);
		$criteria->compare('is_visible',$this->is_visible);
		$criteria->compare('is_searchable',$this->is_searchable);
		$criteria->compare('is_filterable',$this->is_filterable);
		$criteria->compare('is_comparable',$this->is_comparable);
		$criteria->compare('is_visible_on_front',$this->is_visible_on_front);
		$criteria->compare('is_html_allowed_on_front',$this->is_html_allowed_on_front);
		$criteria->compare('is_used_for_price_rules',$this->is_used_for_price_rules);
		$criteria->compare('is_filterable_in_search',$this->is_filterable_in_search);
		$criteria->compare('used_in_product_listing',$this->used_in_product_listing);
		$criteria->compare('used_for_sort_by',$this->used_for_sort_by);
		$criteria->compare('apply_to',$this->apply_to,true);
		$criteria->compare('is_visible_in_advanced_search',$this->is_visible_in_advanced_search);
		$criteria->compare('position',$this->position);
		$criteria->compare('is_wysiwyg_enabled',$this->is_wysiwyg_enabled);
		$criteria->compare('is_used_for_promo_rules',$this->is_used_for_promo_rules);
		$criteria->compare('is_required_in_admin_store',$this->is_required_in_admin_store);

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
	 * @return Mage2CatalogEavAttributePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
