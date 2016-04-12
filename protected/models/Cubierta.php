<?php

/**
 * This is the model class for table "Cubierta".
 *
 * The followings are the available columns in table 'Cubierta':
 * @property integer $idcubiertas
 * @property integer $idganado
 * @property string $fecha_cubierta
 * @property string $observacion
 *
 * The followings are the available model relations:
 * @property Ganado $idganado0
 */
class Cubierta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Cubierta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idganado, fecha_cubierta', 'required'),
			array('idganado', 'numerical', 'integerOnly'=>true),
			array('observacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcubiertas, idganado, fecha_cubierta, observacion', 'safe', 'on'=>'search'),
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
			'idcubiertas' => 'ID',
			'idganado' => 'ID ganado',
			'fecha_cubierta' => 'Fecha cubierta',
			'observacion' => 'Observación',
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

		$criteria->compare('idcubiertas',$this->idcubiertas);
		$criteria->compare('idganado',$this->idganado);
		$criteria->compare('fecha_cubierta',$this->fecha_cubierta,true);
		$criteria->compare('observacion',$this->observacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cubierta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
