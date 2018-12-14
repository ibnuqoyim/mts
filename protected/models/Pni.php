<?php

/**
 * This is the model class for table "pni".
 *
 * The followings are the available columns in table 'pni':
 * @property integer $id_material
 * @property string $desk
 * @property integer $pic
 * @property string $file
 * @property integer $pic_qc
 * @property string $plan_produksi
 * @property string $actual_produksi
 * @property string $progres
 * @property string $plan_inspeksi
 * @property string $actual_inspeksi
 * @property string $hasil_inspeksi
 * @property string $status_inspeksi
 * @property string $file_hasil_inspeksi
 * @property string $plan_repair
 * @property string $actual_repair
 * @property string $file_repair
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
			array('id_material, desk, plan_produksi', 'required'),
			array('id_material, pic, pic_qc', 'numerical', 'integerOnly'=>true),
			array('file, hasil_inspeksi, status_inspeksi, file_hasil_inspeksi', 'length', 'max'=>100),
			array('progres', 'length', 'max'=>110),
			array('actual_inspeksi, plan_repair, actual_repair, file_repair', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_material, desk, pic, file, pic_qc, plan_produksi, actual_produksi, progres, plan_inspeksi, actual_inspeksi, hasil_inspeksi, status_inspeksi, file_hasil_inspeksi, plan_repair, actual_repair, file_repair, tgl_create', 'safe', 'on'=>'search'),
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
			'material'=>array(self::HAS_ONE, 'Material', 'id'),
			'pica' => array(self::BELONGS_TO, 'User', 'pic'),
			'picq' => array(self::BELONGS_TO, 'User', 'pic_qc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_material' => 'Id Material',
			'desk' => 'Desk',
			'pic' => 'Pic',
			'file' => 'File',
			'pic_qc' => 'Pic Qc',
			'plan_produksi' => 'Plan Produksi',
			'actual_produksi' => 'Actual Produksi',
			'progres' => 'Progres',
			'plan_inspeksi' => 'Plan Inspeksi',
			'actual_inspeksi' => 'Actual Inspeksi',
			'hasil_inspeksi' => 'Hasil Inspeksi',
			'status_inspeksi' => 'Status Inspeksi',
			'file_hasil_inspeksi' => 'File Hasil Inspeksi',
			'plan_repair' => 'Plan Repair',
			'actual_repair' => 'Actual Repair',
			'file_repair' => 'File Repair',
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

		$criteria->compare('id_material',$this->id_material);
		$criteria->compare('desk',$this->desk,true);
		$criteria->compare('pic',$this->pic);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('pic_qc',$this->pic_qc);
		$criteria->compare('plan_produksi',$this->plan_produksi,true);
		$criteria->compare('actual_produksi',$this->actual_produksi,true);
		$criteria->compare('progres',$this->progres,true);
		$criteria->compare('plan_inspeksi',$this->plan_inspeksi,true);
		$criteria->compare('actual_inspeksi',$this->actual_inspeksi,true);
		$criteria->compare('hasil_inspeksi',$this->hasil_inspeksi,true);
		$criteria->compare('status_inspeksi',$this->status_inspeksi,true);
		$criteria->compare('file_hasil_inspeksi',$this->file_hasil_inspeksi,true);
		$criteria->compare('plan_repair',$this->plan_repair,true);
		$criteria->compare('actual_repair',$this->actual_repair,true);
		$criteria->compare('file_repair',$this->file_repair,true);
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
