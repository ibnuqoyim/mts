<?php

/**
 * This is the model class for table "material".
 *
 * The followings are the available columns in table 'material':
 * @property integer $id
 * @property integer $client
 * @property string $nama
 * @property integer $status
 * @property string $pemenang
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
			array(' nama, create_date, last_update', 'required'),
			array('client, stok, kategori, progres', 'numerical', 'integerOnly'=>true),
			array('nama, proyek, kode', 'length', 'max'=>100),
			array('pemenang, plan_penerimaan, plan_finish, actual_finish', 'length', 'max'=>110),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, client, nama, deadline_responclient, deadline_produksi, actual_responclient, status, pemenang, stok, create_date, last_update', 'safe', 'on'=>'search'),
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
			'clienta' => array(self::BELONGS_TO, 'Client', 'client'),
			'usera' => array(self::BELONGS_TO, 'User', 'pemenang'),
			'pica' => array(self::BELONGS_TO, 'User', 'pic'),
			'kategoria' => array(self::BELONGS_TO, 'Kategori', 'kategori'),
			'dokenga'=>array(self::HAS_ONE, 'DokEng', 'id_material'),
			'tender'=>array(self::HAS_ONE, 'Permintaan', 'id_material'),
			'kontrak'=>array(self::HAS_ONE, 'Kontrak', 'id_material'),
			'kom'=>array(self::HAS_ONE, 'Kom', 'id_material'),
			'pni'=>array(self::HAS_ONE, 'Pni', 'id_material'),
			'irn'=>array(self::HAS_ONE, 'Irn', 'id_material'),
			'pengiriman'=>array(self::HAS_ONE, 'Pengiriman', 'id_material'),
			'wh'=>array(self::HAS_ONE, 'HasilInspeksiWH', 'id_material'),
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
			'nama' => 'Nama',
			'status' => 'Status',
			'pemenang' => 'Pemenang',
			'stok' => 'Stok',
			'create_date' => 'Create Date',
			'last_update' => 'Last Update',
			'deadline_produksi' => 'Test',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
	
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('last_update',$this->last_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function engineering()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client',$this->client);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->addCondition(' status < 3 || status = 5' );
		$criteria->addCondition('proyek!=1 ' );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function client()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client',$this->client);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->addCondition('status<3' );
		$criteria->addCondition('proyek!=1 ' );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function pengadaan()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client',$this->client);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->addCondition('status=2 || status=5 || status=6' );
		$criteria->addCondition('proyek!=1 ' );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function vendor($idv)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client',$this->client);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->addCondition('status = 5 || status = 6 || (pemenang = '.$idv.' && status<15)' );
		$criteria->addCondition('proyek!=1 ' );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));

		

	}

	public function expedeting()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client',$this->client);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->addCondition('status>=6 && status<=8.5' );
		$criteria->addCondition('proyek!=1 ' );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function qc()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client',$this->client);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->addCondition('status>=9 && status<=12' );
		$criteria->addCondition('proyek!=1 ' );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function traffic()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client',$this->client);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->addCondition('status>=12 && status<14' );
		$criteria->addCondition('proyek!=1 ' );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function warehouse()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client',$this->client);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->addCondition('status>=12 && status<=15' );
		$criteria->addCondition('proyek!=1 ' );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function proyek()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client',$this->client);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pemenang',$this->pemenang,true);
		$criteria->compare('stok',$this->stok);
		$criteria->addCondition('status=15' );
		$criteria->addCondition('proyek!=1 ' );

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
