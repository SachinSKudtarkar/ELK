<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_employee_detail".
 *
 * @property string $id
 * @property string $emp_id
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $state_id
 * @property string $zip
 * @property string $phone
 * @property string $mobile
 * @property string $modified_date
 * @property string $profile_image
 * @property string $company_name
 * @property string $rjil_ext
 * @property string $building_name
 * @property string $floor
 * @property string $work_location
 * @property string $facebook_link
 * @property string $linkedin_link
 * @property string $twitter_link
 * @property integer $sol_par_id
 * @property integer $atp1a_sol_par_map_id
 * @property integer $inst_sol_par_map_id
 */
class EmployeeDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_employee_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'emp_id', 'company_name', 'rjil_ext', 'building_name', 'floor', 'work_location', 'facebook_link', 'linkedin_link', 'twitter_link', 'sol_par_id', 'atp1a_sol_par_map_id', 'inst_sol_par_map_id'], 'required'],
            [['id', 'emp_id', 'state_id', 'sol_par_id', 'atp1a_sol_par_map_id', 'inst_sol_par_map_id'], 'integer'],
            [['modified_date'], 'safe'],
            [['address_1', 'address_2'], 'string', 'max' => 150],
            [['city'], 'string', 'max' => 50],
            [['zip', 'mobile'], 'string', 'max' => 12],
            [['phone'], 'string', 'max' => 20],
            [['profile_image'], 'string', 'max' => 100],
            [['company_name', 'rjil_ext', 'building_name', 'floor', 'work_location', 'facebook_link', 'linkedin_link', 'twitter_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_id' => 'Emp ID',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'city' => 'City',
            'state_id' => 'State ID',
            'zip' => 'Zip',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'modified_date' => 'Modified Date',
            'profile_image' => 'Profile Image',
            'company_name' => 'Company Name',
            'rjil_ext' => 'Rjil Ext',
            'building_name' => 'Building Name',
            'floor' => 'Floor',
            'work_location' => 'Work Location',
            'facebook_link' => 'Facebook Link',
            'linkedin_link' => 'Linkedin Link',
            'twitter_link' => 'Twitter Link',
            'sol_par_id' => 'Sol Par ID',
            'atp1a_sol_par_map_id' => 'Atp1a Sol Par Map ID',
            'inst_sol_par_map_id' => 'Inst Sol Par Map ID',
        ];
    }
}
