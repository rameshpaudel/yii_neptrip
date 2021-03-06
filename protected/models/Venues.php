<?php

/**
 * This is the model class for table "tbl_venues".
 *
 * The followings are the available columns in table 'tbl_venues':
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property integer $booking_price
 * @property string $image
 * @property string $description
 * @property string $venue_type
 * @property integer $zone
 * @property integer $district
 * @property string $city_village
 * @property string $things_todo
 * @property string $addressonmap
 * @property string $latitude
 * @property string $longitude
 * @property string $terms_condition
 * @property string $phone1
 * @property string $phone2
 * @property string $fax
 * @property string $email
 * @property string $fb_link
 * @property string $weblink
 * @property string $contact_person
 * @property string $role
 * @property string $mobile_number
 */
class Venues extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_venues';
	}


	public function behaviors(){
	  return array(
	    'sluggable' => array(
	      'class'=>'ext.behaviors.SluggableBehavior',
	      'columns' => array('name'),
	      'unique' => true,
	      'update' => true,
	    ),
	  );
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name,booking_price, description, venue_type, zone, district, city_village, things_todo, addressonmap, latitude, longitude, terms_condition, phone1, email, fb_link, weblink, contact_person, role, mobile_number,status', 'required'),
			array('booking_price', 'numerical', 'integerOnly'=>true),
			array('email','email'),
			array('fb_link, weblink','url'),
			array('name, slug, image, venue_type, city_village, addressonmap, latitude, longitude, phone1, phone2, fax, email, fb_link, weblink, contact_person, role, mobile_number', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, business_user_id, name, slug, booking_price, image, description, venue_type, zone, district, city_village, things_todo, addressonmap, latitude, longitude, terms_condition, phone1, phone2, fax, email, fb_link, weblink, contact_person, role, mobile_number,status,suspend', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'slug' => 'Slug',
			'booking_price' => 'Booking Price',
			'image' => 'Image',
			'description' => 'Description',
			'venue_type' => 'Venue Type',
			'zone' => 'Zone',
			'district' => 'District',
			'city_village' => 'City Village',
			'things_todo' => 'Things To do',
			'addressonmap' => 'Address on map',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'terms_condition' => 'Terms & Condition',
			'phone1' => 'Phone1',
			'phone2' => 'Phone2',
			'fax' => 'Fax',
			'email' => 'Email',
			'fb_link' => 'Facebook Link',
			'weblink' => 'Website link',
			'contact_person' => 'Contact Person',
			'role' => 'Role',
			'mobile_number' => 'Mobile Number',
			'business_user_id' => 'Business user id'
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('booking_price',$this->booking_price);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('venue_type',$this->venue_type,true);
		$criteria->compare('zone',$this->zone);
		$criteria->compare('district',$this->district);
		$criteria->compare('city_village',$this->city_village,true);
		$criteria->compare('things_todo',$this->things_todo,true);
		$criteria->compare('addressonmap',$this->addressonmap,true);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('terms_condition',$this->terms_condition,true);
		$criteria->compare('phone1',$this->phone1,true);
		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fb_link',$this->fb_link,true);
		$criteria->compare('weblink',$this->weblink,true);
		$criteria->compare('contact_person',$this->contact_person,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('mobile_number',$this->mobile_number,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Venues the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
