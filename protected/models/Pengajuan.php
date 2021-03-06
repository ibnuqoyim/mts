<?php

/**
 * This is the model class for table "pengajuan".
 *
 * The followings are the available columns in table 'pengajuan':
 * @property integer $id
 * @property integer $id_material
 * @property integer $id_pengaju
 * @property integer $jumlah
 * @property integer $disetujui
 * @property integer $pic_wh
 * @property string $tgl_setujui
 * @property integer $diterima
 * @property integer $id_penerima
 * @property string $tgl_diterima
 * @property string $tgl_create
 */
class Pengajuan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pengajuan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_material, id_pengaju, jumlah, tgl_create', 'required'),
			array('id_material, id_pengaju, jumlah, disetujui, pic_wh, diterima, id_penerima', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_material, id_pengaju, jumlah, disetujui, pic_wh, tgl_setujui, diterima, id_penerima, tgl_diterima, tgl_create', 'safe', 'on'=>'search'),
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
			'pengaju' => array(self::BELONGS_TO, 'User', 'id_pengaju'),
			'penerima' => array(self::BELONGS_TO, 'User', 'id_penerima'),
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
			'id_pengaju' => 'Id Pengaju',
			'jumlah' => 'Jumlah',
			'disetujui' => 'Disetujui',
			'pic_wh' => 'Pic Wh',
			'tgl_setujui' => 'Tgl Setujui',
			'diterima' => 'Diterima',
			'id_penerima' => 'Id Penerima',
			'tgl_diterima' => 'Tgl Diterima',
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
		$criteria->compare('id_pengaju',$this->id_pengaju);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('disetujui',$this->disetujui);
		$criteria->compare('pic_wh',$this->pic_wh);
		$criteria->compare('tgl_setujui',$this->tgl_setujui,true);
		$criteria->compare('diterima',$this->diterima);
		$criteria->compare('id_penerima',$this->id_penerima);
		$criteria->compare('tgl_diterima',$this->tgl_diterima,true);
		$criteria->compare('tgl_create',$this->tgl_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pengajuan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
