<?php

namespace common\models;



use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use inlislite\gii\behaviors\TerminalBehavior;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

use \common\models\base\Memberguesses as BaseMemberguesses;



/**
 * This is the model class for table "memberguesses".
 */
class Memberguesses extends BaseMemberguesses
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nama'], 'required', 'message' => Yii::t('app','Silahkan mengisi nama anda')],
            [['Status_id', 'MasaBerlaku_id', 'Profesi_id', 'PendidikanTerakhir_id', 'JenisKelamin_id', 'CreateBy', 'UpdateBy', 'LOCATIONLOANS_ID', 'Location_Id', 'TujuanKunjungan_Id'], 'integer'],
            [['CreateDate', 'UpdateDate'], 'safe'],
            [['NoAnggota', 'NoPengunjung'], 'string', 'max' => 50],
            [['Nama', 'CreateTerminal', 'UpdateTerminal'], 'string', 'max' => 100],
            [['Alamat', 'Deskripsi', 'Information'], 'string', 'max' => 255],
            [['TujuanKunjungan_Id'], 'exist', 'skipOnError' => true, 'targetClass' => TujuanKunjungan::class, 'targetAttribute' => ['TujuanKunjungan_Id' => 'ID']],
            [['CreateBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['CreateBy' => 'ID']],
            [['JenisKelamin_id'], 'exist', 'skipOnError' => true, 'targetClass' => JenisKelamin::class, 'targetAttribute' => ['JenisKelamin_id' => 'ID']],
            [['Location_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Locations::class, 'targetAttribute' => ['Location_Id' => 'ID']],
            [['MasaBerlaku_id'], 'exist', 'skipOnError' => true, 'targetClass' => MasaBerlakuAnggota::class, 'targetAttribute' => ['MasaBerlaku_id' => 'id']],
            [['Profesi_id'], 'exist', 'skipOnError' => true, 'targetClass' => MasterPekerjaan::class, 'targetAttribute' => ['Profesi_id' => 'id']],
            [['PendidikanTerakhir_id'], 'exist', 'skipOnError' => true, 'targetClass' => MasterPendidikan::class, 'targetAttribute' => ['PendidikanTerakhir_id' => 'id']],
            [['Status_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusAnggota::class, 'targetAttribute' => ['Status_id' => 'id']],
            [['UpdateBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['UpdateBy' => 'ID']]
        ];
    }

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getMemberinfo()
	{
		return $this->hasOne(\common\models\Members::class, ['MemberNo' => 'NoAnggota']);
	}



	public function search($params)
    {
        $query = Memberguesses::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

      if (!($this->load($params))) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'CreateBy' => $this->CreateBy,
            'CreateDate' => $this->CreateDate,
            'UpdateBy' => $this->UpdateBy,
            'UpdateDate' => $this->UpdateDate,
        ]);

        $query->andFilterWhere(['like', 'ID', $this->ID])
            ->andFilterWhere(['like', 'NoAnggota', $this->NoAnggota]);

        return $dataProvider;
    }

	
    /**
     * @inheritdoc
     * @return type array
     */ 
    public function behaviors()
    {

	if(Yii::$app->user->identity)
	{
 		return [
			\common\widgets\nhkey\ActiveRecordHistoryBehavior::class,
		    [
		        'class' => TimestampBehavior::class,
		        'createdAtAttribute' => 'CreateDate',
		        'updatedAtAttribute' => 'UpdateDate',
		        'value' => new \yii\db\Expression('NOW()'),
		    ],
		    [
		        'class' => BlameableBehavior::class,
		        'createdByAttribute' => 'CreateBy',
		        'updatedByAttribute' => 'UpdateBy',
		    ],
		    [
		        'class' => TerminalBehavior::class,
		        'createdTerminalAttribute' => 'CreateTerminal',
		        'updatedTerminalAttribute' => 'UpdateTerminal',
		        'value' => \Yii::$app->request->userIP,
		    ],
		];
	}
	else
	{
 		return [
			// \common\widgets\nhkey\ActiveRecordHistoryBehavior::className(),
		    [
		        'class' => TimestampBehavior::class,
		        'createdAtAttribute' => 'CreateDate',
		        'updatedAtAttribute' => 'UpdateDate',
		        'value' => new \yii\db\Expression('NOW()'),
		    ],
		    [
		        'class' => BlameableBehavior::class,
		        'createdByAttribute' => 'CreateBy',
		        'updatedByAttribute' => 'UpdateBy',
		    ],
		    [
		        'class' => TerminalBehavior::class,
		        'createdTerminalAttribute' => 'CreateTerminal',
		        'updatedTerminalAttribute' => 'UpdateTerminal',
		        'value' => \Yii::$app->request->userIP,
		    ],
		];
	}
		
	
	
       
    }
	



}
