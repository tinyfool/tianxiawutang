<?php

/**
 * This is the model class for table "tbl_notifyme".
 *
 * The followings are the available columns in table 'tbl_notifyme':
 * @property string $id
 * @property string $email
 * @property integer $status
 * @property string $featurerequired
 * @property integer $age
 */
class Notifyme extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_notifyme';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(
				'status, featurerequired, age, email', 
				'required',
				'message'=>'{attribute}必须填写'),
			array(
				'age', 
				'numerical', 
				'integerOnly'=>true,
				'message' => '{attribute}必须为数字'),
			array(
				'email', 
				'length', 
				'max'=>255),
			array(
				'email',
				'email',
				'message' => '{attribute}必须为正确的电子邮箱格式'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, status, featurerequired, age', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'email' => '邮箱',
			'status' => '与糖尿病',
			'featurerequired' => '功能需求',
			'age' => '年龄',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('featurerequired',$this->featurerequired,true);
		$criteria->compare('age',$this->age);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Notifyme the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
