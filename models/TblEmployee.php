<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_employee".
 *
 * @property string $emp_id
 * @property string $email
 * @property string $password
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property integer $access_type
 * @property string $access_rights
 * @property string $created_date
 * @property string $modified_date
 * @property integer $is_active
 * @property integer $is_deleted
 * @property string $user_type
 * @property string $is_auto_int
 * @property integer $is_duo_added
 * @property integer $created_by
 * @property integer $modified_by
 * @property string $activity_time
 * @property integer $login_status
 * @property integer $change_password
 * @property integer $field_engg_added_by
 * @property integer $portal_survey
 */
class TblEmployee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_id', 'email', 'password', 'first_name', 'access_type', 'created_date', 'login_status', 'field_engg_added_by'], 'required'],
            [['emp_id', 'access_type', 'is_active', 'is_deleted', 'is_duo_added', 'created_by', 'modified_by', 'login_status', 'change_password', 'field_engg_added_by', 'portal_survey'], 'integer'],
            [['access_rights', 'user_type', 'is_auto_int'], 'string'],
            [['created_date', 'modified_date', 'activity_time'], 'safe'],
            [['email'], 'string', 'max' => 150],
            [['password'], 'string', 'max' => 50],
            [['first_name', 'middle_name', 'last_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp_id' => 'Emp ID',
            'email' => 'Email',
            'password' => 'Password',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'access_type' => 'Access Type',
            'access_rights' => 'Access Rights',
            'created_date' => 'Created Date',
            'modified_date' => 'Modified Date',
            'is_active' => 'Is Active',
            'is_deleted' => 'Is Deleted',
            'user_type' => 'User Type',
            'is_auto_int' => 'Is Auto Int',
            'is_duo_added' => 'Is Duo Added',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'activity_time' => 'Activity Time',
            'login_status' => 'Login Status',
            'change_password' => 'Change Password',
            'field_engg_added_by' => 'Field Engg Added By',
            'portal_survey' => 'Portal Survey',
        ];
    }
}
