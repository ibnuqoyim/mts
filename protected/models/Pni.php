<?php

/**
 * This is the model class for table "pni".
 *
 * The followings are the available columns in table 'pni':
 * @property integer $id
 * @property integer $id_material
 * @property string $file
 * @property string $desk
 * @property string $deadline_produksi
 * @property string $actual_produksi
 * @property string $tgl_create
 */
class Pni extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_material, file, desk, tgl_create', 'required'),
			array('id_material', 'numerical', 'integerOnly'=>true),
			array('file, desk', 'length', 'max'=>110),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_material, file, desk, deadline_produksi, actual_produksi, tgl_create', 'safe', 'on'=>'search'),
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
			'id_material' => 'Id Material',
			'file' => 'File',
			'desk' => 'Desk',
			'deadline_produksi' => 'Deadline Produksi',
			'actual_produksi' => 'Actual Produksi',
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
		$criteria->compare('id_material',$this->id_material);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('desk',$this->desk,true);
		$criteria->compare('deadline_produksi',$this->deadline_produksi,true);
		$criteria->compare('actual_produksi',$this->actual_produksi,true);
		$criteria->compare('tgl_create',$this->tgl_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
