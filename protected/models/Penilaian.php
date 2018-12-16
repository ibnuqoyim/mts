<?php

/**
 * This is the model class for table "penilaian".
 *
 * The followings are the available columns in table 'penilaian':
 * @property integer $id
 * @property string $aspek_penilaian
 * @property integer $hari
 * @property string $tgl_create
 */
class Penilaian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'penilaian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, aspek_penilaian, hari, tgl_create', 'required'),
			array('id, hari', 'numerical', 'integerOnly'=>true),
			array('aspek_penilaian', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, aspek_penilaian, hari, tgl_create', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'aspek_penilaian' => 'Aspek Penilaian',
			'hari' => 'Hari',
			'tgl_create' => 'Tgl Create',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('aspek_penilaian',$this->aspek_penilaian,true);
		$criteria->compare('hari',$this->hari);
		$criteria->compare('tgl_create',$this->tgl_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Penilaian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
