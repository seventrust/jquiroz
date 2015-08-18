<?php

/**
 * This is the model class for table "permiso".
 *
 * The followings are the available columns in table 'permiso':
 * @property string $CodPermiso
 * @property string $Descripcion
 * @property string $UrlInicio
 * @property string $UrlImagen
 * @property string $Categoria
 */
class Permiso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'permiso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CodPermiso, Descripcion, UrlInicio, UrlImagen, Categoria', 'required'),
			array('CodPermiso, Categoria', 'length', 'max'=>10),
			array('Descripcion, UrlInicio, UrlImagen', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CodPermiso, Descripcion, UrlInicio, UrlImagen, Categoria', 'safe', 'on'=>'search'),
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
			'CodPermiso' => 'Cod Permiso',
			'Descripcion' => 'Descripcion',
			'UrlInicio' => 'Url Inicio',
			'UrlImagen' => 'Url Imagen',
			'Categoria' => 'Categoria',
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

		$criteria->compare('CodPermiso',$this->CodPermiso,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('UrlInicio',$this->UrlInicio,true);
		$criteria->compare('UrlImagen',$this->UrlImagen,true);
		$criteria->compare('Categoria',$this->Categoria,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Permiso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
