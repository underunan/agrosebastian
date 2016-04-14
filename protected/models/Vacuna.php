<?php

/**
 * This is the model class for table "Vacuna".
 *
 * The followings are the available columns in table 'Vacuna':
 * @property integer $idvacuna
 * @property integer $idganado
 * @property string $fecha_vacuna
 * @property string $observacion
 * @property string $nombre_vacuna
 *
 * The followings are the available model relations:
 * @property Ganado $idganado0
 */
class Vacuna extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Vacuna';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idganado, fecha_vacuna', 'required'),
			array('idganado', 'numerical', 'integerOnly'=>true),
			array('nombre_vacuna', 'length', 'max'=>100),
			array('observacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idvacuna, idganado, fecha_vacuna, observacion, nombre_vacuna', 'safe', 'on'=>'search'),
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
			'idganado0' => array(self::BELONGS_TO, 'Ganado', 'idganado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idvacuna' => 'Idvacuna',
			'idganado' => 'Idganado',
			'fecha_vacuna' => 'Fecha Vacuna',
			'observacion' => 'Observacion',
			'nombre_vacuna' => 'Nombre Vacuna',
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

		$criteria->compare('idvacuna',$this->idvacuna);
		$criteria->compare('idganado',$this->idganado);
		$criteria->compare('fecha_vacuna',$this->fecha_vacuna,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('nombre_vacuna',$this->nombre_vacuna,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vacuna the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
