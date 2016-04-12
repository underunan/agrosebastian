<?php

/**
 * This is the model class for table "Parto".
 *
 * The followings are the available columns in table 'Parto':
 * @property integer $idparto
 * @property integer $idganado
 * @property string $fecha_parto
 * @property string $sexo
 *
 * The followings are the available model relations:
 * @property Ganado $idganado0
 */
class Parto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Parto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idganado, fecha_parto', 'required'),
			array('idganado', 'numerical', 'integerOnly'=>true),
			array('sexo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idparto, idganado, fecha_parto, sexo', 'safe', 'on'=>'search'),
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
			'idparto' => 'Idparto',
			'idganado' => 'Idganado',
			'fecha_parto' => 'Fecha Parto',
			'sexo' => 'Sexo',
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

		$criteria->compare('idparto',$this->idparto);
		$criteria->compare('idganado',$this->idganado);
		$criteria->compare('fecha_parto',$this->fecha_parto,true);
		$criteria->compare('sexo',$this->sexo,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Parto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
