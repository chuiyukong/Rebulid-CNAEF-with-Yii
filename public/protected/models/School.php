<?php
class School extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{school}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, location_province, location_city, type, student_count, teacher_count, grade_count, class_count, description, photo, has_library, has_computer, has_internet, is_supported, need_volunteer, need_other, attention, traffic, offer_support, bring_supplies, headmaster_name, headmaster_telephone, school_address, school_postcode', 'required'),
			array('type, primary_school_type, student_count, teacher_count, grade_count, class_count, has_library, has_computer, has_internet, is_supported, need_volunteer, need_volunteer_count, need_other, custom, created_at', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('location_province, location_city, headmaster_name, headmaster_telephone', 'length', 'max'=>20),
			array('photo, public_name, school_address', 'length', 'max'=>100),
			array('volunteer_work, need_other_content, attention, traffic, offer_support, bring_supplies', 'length', 'max'=>1000),
			array('school_postcode', 'length', 'max'=>10),
			//array('photo', 'file', 'types'=>'jpg, gif, png', 'maxSize'=>'2000000', 'tooLarge'=>'图片不要超过2M', 'safe' => false),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, location_province, location_city, type, primary_school_type, student_count, teacher_count, grade_count, class_count, description, has_library, has_computer, has_internet, is_supported, public_name, project, need_volunteer, need_volunteer_count, volunteer_work, need_other, need_other_content, custom, attention, traffic, offer_support, bring_supplies, headmaster_name, headmaster_telephone, school_address, school_postcode, created_at', 'safe', 'on'=>'search'),
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
			'name' => '学校名称',
			'location_province' => '所在省份',
			'location_city' => '所在城市',
			'type' => '学校类型',
			'primary_school_type' => '小学类型',
			'student_count' => '学生人数',
			'teacher_count' => '教师人数',
			'grade_count' => '年级数量',
			'class_count' => '班级数量',
			'description' => '学校简介',
			'photo' => '学校照片',
			'has_library' => '是否有图书室',
			'has_computer' => '是否有电脑',
			'has_internet' => '是否能上网',
			'is_supported' => '是否有公益团队支持',
			'public_name' => '公益团队名称',
			'project' => '已开展项目',
			'need_volunteer' => '是否需要支教老师',
			'need_volunteer_count' => '需要支教老师人数',
			'volunteer_work' => '支教老师工作范围',
			'need_other' => '是否需要其他支持',
			'need_other_content' => '请列举学校的需求',
			'custom' => '是否有民俗习惯',
			'attention' => '注意事项',
			'traffic' => '交通指南',
			'offer_support' => '学校可提供哪些支持',
			'bring_supplies' => '志愿者需要带的物资明细',
			'headmaster_name' => '校长姓名',
			'headmaster_telephone' => '联系电话',
			'school_address' => '学校地址',
			'school_postcode' => '学校邮编',
			'created_at' => '申请时间',
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
		$criteria->compare('location_province',$this->location_province,true);
		$criteria->compare('location_city',$this->location_city,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('primary_school_type',$this->primary_school_type);
		$criteria->compare('student_count',$this->student_count);
		$criteria->compare('teacher_count',$this->teacher_count);
		$criteria->compare('grade_count',$this->grade_count);
		$criteria->compare('class_count',$this->class_count);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('has_library',$this->has_library);
		$criteria->compare('has_computer',$this->has_computer);
		$criteria->compare('has_internet',$this->has_internet);
		$criteria->compare('is_supported',$this->is_supported);
		$criteria->compare('public_name',$this->public_name,true);
		$criteria->compare('project',$this->project,true);
		$criteria->compare('need_volunteer',$this->need_volunteer);
		$criteria->compare('need_volunteer_count',$this->need_volunteer_count);
		$criteria->compare('volunteer_work',$this->volunteer_work,true);
		$criteria->compare('need_other',$this->need_other);
		$criteria->compare('need_other_content',$this->need_other_content,true);
		$criteria->compare('custom',$this->custom);
		$criteria->compare('attention',$this->attention,true);
		$criteria->compare('traffic',$this->traffic,true);
		$criteria->compare('offer_support',$this->offer_support,true);
		$criteria->compare('bring_supplies',$this->bring_supplies,true);
		$criteria->compare('headmaster_name',$this->headmaster_name,true);
		$criteria->compare('headmaster_telephone',$this->headmaster_telephone,true);
		$criteria->compare('school_address',$this->school_address,true);
		$criteria->compare('school_postcode',$this->school_postcode,true);
		$criteria->compare('created_at',$this->created_at);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
						'sort'=>array(
                'defaultOrder'=>'id DESC',
            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return School the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getLocation() {
		return $this->location_province . ' ' . $this->location_city;
	}

	public function getType() {
		switch ($this->type) {
			case 1:
				return '幼儿园';
			case 2:
				return '小学';
			case 3:
				return '初中';
			case 4:
				return '民工子弟学校';
			case 5:
				return '孤儿院';
			case 6:
				return '特殊教育中心';
			default:
				return ' - ';
		}
	}

	public function getPrimarySchoolType() {
		switch ($this->type) {
			case 1:
				return '村小／教学点';
			case 2:
				return '完小';
			case 3:
				return '中心校';
			default:
				return ' - ';
		}
	}

	public function getProject() {
		$arr = json_decode($this->project);
		$str = '';
		if (is_array($arr)) {
			if (in_array(1, $arr))
				$str .= '支教 ';
			if (in_array(2, $arr))
				$str .= '助学 ';
			if (in_array(3, $arr))
				$str .= '捐物 ';
			if (in_array(4, $arr))
				$str .= '支农 ';
			if (in_array(5, $arr))
				$str .= '支医 ';
			if (in_array(6, $arr))
				$str .= '扶贫 ';
			if (in_array(7, $arr))
				$str .= '环保 ';
		}

		return $str;
	}

	public function beforeSave() {
		if (parent::beforeSave()) {
			if ($this->isNewRecord) {
				$this->created_at = time();
			}
			return true;
		}else{
			return false;
		};
	}
}
