<?php

/**
 * This is the model class for table "Client_respon".
 *
 * The followings are the available columns in table 'Client_respon':
 * @property integer $id
 * @property integer $client_id
 * @property integer $material_id
 * @property string $isi
 * @property string $file_respon
 */
class ClientRespon extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Client_respon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_id, material_id, isi', 'required'),
			array('client_id, material_id', 'numerical', 'integerOnly'=>true),
			array('isi', 'length', 'max'=>250),
			array('file_respon', 'length', 'max'=>110),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, client_id, material_id, isi, file_respon', 'safe', 'on'=>'search'),
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
			'client_id' => 'Client',
			'material_id' => 'Material',
			'isi' => 'Isi',
			'file_respon' => 'File Respon',
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
		$criteria->compare('client_id',$this->client_id);
		$criteria->compare('material_id',$this->material_id);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('file_respon',$this->file_respon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClientRespon the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
