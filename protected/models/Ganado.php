<?php

/**
 * This is the model class for table "Ganado".
 *
 * The followings are the available columns in table 'Ganado':
 * @property integer $idganado
 * @property integer $codigo
 * @property string $nombre
 * @property string $fecha_nacimiento
 * @property string $imagen
 * @property string $raza
 *
 * The followings are the available model relations:
 * @property Parto[] $partos
 * @property Cubiertas[] $cubiertases
 */
class Ganado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Ganado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('imagen', 'file','types'=>'jpg, gif, png'),
			array('codigo, nombre, origen, fecha_nacimiento, raza', 'required'),
			array('codigo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			array('raza', 'length', 'max'=>20),
			array('imagen', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('idganado, codigo, nombre, fecha_nacimiento, imagen, raza', 'safe', 'on'=>'search'),
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
			'partos' => array(self::HAS_MANY, 'Parto', 'idganado'),
			'cubiertases' => array(self::HAS_MANY, 'Cubiertas', 'idganado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idganado' => 'ID',
			'codigo' => 'Codigo o chapeta',
			'nombre' => 'Nombre del animal',
			'origen' => 'Origen',
			'fecha_nacimiento' => 'Fecha nacimiento o de llegada',
			'imagen' => 'Imagen',
			'raza' => 'Raza',
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

		$criteria->compare('idganado',$this->idganado);
		$criteria->compare('codigo',$this->codigo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('origen',$this->origen,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('raza',$this->raza,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ganado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
