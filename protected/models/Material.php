<?php

/**
 * This is the model class for table "material".
 *
 * The followings are the available columns in table 'material':
 * @property integer $id
 * @property integer $client
 * @property string $client_respon
 * @property string $nama
 * @property string $dok_eng
 * @property integer $status
 * @property string $permintaan_penawaran
 * @property string $pemenang
 * @property string $kontrak
 * @property string $jadwal_kom
 * @property string $jadwal_pi
 * @property string $ba_inspection
 * @property integer $irn
 * @property string $jadwal_pengambillan
 * @property string $status_pengambilan
 * @property string $hasil_inspeksi_barang
 * @property integer $stok
 * @property string $create_date
 * @property string $last_update
 */
class Material extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'material';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client, nama, create_date, last_update', 'required'),
			array('client, istatus, irn, stok', 'numerical', 'integerOnly'=>true),
			array('client_respon', 'length', 'max'=>200),
			array('nama', 'length', 'max'=>100),
			array('dok_eng, pemenang, kontrak, ba_inspection', 'length', 'max'=>110),
			array('permintaan_penawaran', 'length', 'max'=>250),
			array('status_pengambilan', 'length', 'max'=>50),
			array('hasil_inspeksi_barang', 'length', 'max'=>500),
			array('jadwal_kom, jadwal_pi, jadwal_pengambillan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, client, client_respon, nama, dok_eng, status, permintaan_penawaran, pemenang, kontrak, jadwal_kom, jadwal_pi, ba_inspection, irn, jadwal_pengambillan, status_pengambilan, hasil_inspeksi_barang, stok, create_date, last_update', 'safe', 'on'=>'search'),
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
			'statusa' => array(self::BELONGS_TO, 'Status', 'status'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'client' => 'Client',
			'client_respon' => 'Client Respon',
			'nama' => 'Nama',
			'dok_eng' => 'Dok Eng',
			'status' => 'Status',
			'permintaan_penawaran' => 'Permintaan Penawaran',
			'pemenang' => 'Pemenang',
			'kontrak' => 'Kontrak',
			'jadwal_kom' => 'Jadwal Kom',
			'jadwal_pi' => 'Jadwal Pi',
			'ba_inspection' => 'Ba Inspection',
			'irn' => 'Irn',
			'jadwal_pengambillan' => 'Jadwal Pengambillan',
			'status_pengambilan' => 'Status Pengambilan',
			'hasil_inspeksi_barang' => 'Hasil Inspeksi Barang',
			'stok' => 'Stok',
			'create_date' => 'Create Date',
			'last_update' => 'Last Update',
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
		$criteria->compare('client',$this->client);
		$criteria->compare('client_respon',$this->client_respon,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('dok_eng',$this->dok_eng,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('permintaan_penawaran',$this->permintaan_penawaran,true);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('kontrak',$this->kontrak,true);
		$criteria->compare('jadwal_kom',$this->jadwal_kom,true);
		$criteria->compare('jadwal_pi',$this->jadwal_pi,true);
		$criteria->compare('ba_inspection',$this->ba_inspection,true);
		$criteria->compare('irn',$this->irn);
		$criteria->compare('jadwal_pengambillan',$this->jadwal_pengambillan,true);
		$criteria->compare('status_pengambilan',$this->status_pengambilan,true);
		$criteria->compare('hasil_inspeksi_barang',$this->hasil_inspeksi_barang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('last_update',$this->last_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Material the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
