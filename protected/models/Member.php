<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property integer $member_id
 * @property string $member_user
 * @property string $member_pass
 * @property string $member_nama
 * @property string $member_alamat
 * @property string $member_ttl
 * @property string $member_email
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	//process data aafter validation
    protected function afterValidate() {
        parent::afterValidate();
         
        //encrypt password
        $this->member_pass = $this->encrypt($this->member_pass);
    }
     
    //encryption function
    public function encrypt($value){
        return md5($value);
    }
 
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_user, member_pass, member_nama, member_alamat, member_ttl, member_email', 'required'),
			array('member_user', 'length', 'max'=>30),
			array('member_pass, member_nama, member_email', 'length', 'max'=>255),
			//array('member_ttl', 'date'),
			array('member_ttl', 'type', 'type' => 'date', 'message' => '{attribute} format: yyyy-mm-dd', 'dateFormat' => 'yyyy-mm-dd'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('member_id, member_user, member_pass, member_nama, member_alamat, member_ttl, member_email', 'safe', 'on'=>'search'),
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
			'member_id' 	=> 'Member',
			'member_user'	=> 'Username',
			'member_pass' 	=> 'Password',
			'member_nama'	=> 'Nama Member',
			'member_alamat' => 'Alamat',
			'member_ttl'	=> 'Tanggal Lahir (yyyy-mm-dd)',
			'member_email' 	=> 'Email',
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

		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('member_user',$this->member_user,true);
		$criteria->compare('member_pass',$this->member_pass,true);
		$criteria->compare('member_nama',$this->member_nama,true);
		$criteria->compare('member_alamat',$this->member_alamat,true);
		$criteria->compare('member_ttl',$this->member_ttl,true);
		$criteria->compare('member_email',$this->member_email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
