<?php

/**
 * This is the model class for table "hasilinspeksiWH".
 *
 * The followings are the available columns in table 'hasilinspeksiWH':
 * @property integer $id
 * @property integer $id_material
 * @property string $file
 * @property string $desk
 * @property string $tgl_create
 */
class HasilinspeksiWH extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hasilinspeksiwh';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_material, file_hasil_inspeksi, hasil_inspeksi, tgl_create', 'required'),
			array('id_material', 'numerical', 'integerOnly'=>true),
			array('file_hasil_inspeksi, lokasi', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_material, file_hasil_inspeksi, hasil_inspeksi, tgl_create', 'safe', 'on'=>'search'),
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
			'materiala' => array(self::BELONGS_TO, 'Material', 'id_material'),
			'pica' => array(self::BELONGS_TO, 'User', 'pic'),
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
			'tgl_create' => 'Tgl Create',
			'lokasi' => 'Lokasi Penyimpanan',
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
		$criteria->compare('tgl_create',$this->tgl_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HasilinspeksiWH the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
