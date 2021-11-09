<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use inlislite\gii\behaviors\TerminalBehavior;

/**
 * This is the base-model class for table "users".
 *
 * @property integer $ID
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $status
 * @property string $Fullname
 * @property string $EmailAddress
 * @property boolean $IsActive
 * @property string $SesID
 * @property string $MaxDateSesID
 * @property string $ActivationCode
 * @property integer $LoginAttemp
 * @property string $LastSubmtLogin
 * @property string $LastSuccess
 * @property integer $Department_id
 * @property integer $Branch_id
 * @property integer $Role_id
 * @property boolean $IsCanResetUserPassword
 * @property boolean $IsCanResetMemberPassword
 * @property boolean $IsAdvanceEntryCatalog
 * @property boolean $IsAdvanceEntryCollection
 * @property integer $CreateBy
 * @property string $CreateDate
 * @property string $CreateTerminal
 * @property integer $UpdateBy
 * @property string $UpdateDate
 * @property string $UpdateTerminal
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $KIILastUploadDate
 *
 * @property \common\models\Agama[] $agamas
 * @property \common\models\Agama[] $agamas0
 * @property \common\models\Applications[] $applications
 * @property \common\models\Applications[] $applications0
 * @property \common\models\AuthAssignment[] $authAssignments
 * @property \common\models\AuthAssignment[] $authAssignments0
 * @property \common\models\AuthData[] $authDatas
 * @property \common\models\AuthData[] $authDatas0
 * @property \common\models\AuthHeader[] $authHeaders
 * @property \common\models\AuthHeader[] $authHeaders0
 * @property \common\models\AuthItem[] $authItems
 * @property \common\models\AuthItem[] $authItems0
 * @property \common\models\AuthItemChild[] $authItemChildren
 * @property \common\models\AuthItemChild[] $authItemChildren0
 * @property \common\models\AuthRule[] $authRules
 * @property \common\models\AuthRule[] $authRules0
 * @property \common\models\Bacaditempat[] $bacaditempats
 * @property \common\models\Bibidavailable[] $bibidavailables
 * @property \common\models\Bibidavailable[] $bibidavailables0
 * @property \common\models\Bookmark[] $bookmarks
 * @property \common\models\Bookmark[] $bookmarks0
 * @property \common\models\Branchs[] $branchs
 * @property \common\models\Branchs[] $branchs0
 * @property \common\models\Cardformats[] $cardformats
 * @property \common\models\Cardformats[] $cardformats0
 * @property \common\models\CatalogRuas[] $catalogRuas
 * @property \common\models\CatalogRuas[] $catalogRuas0
 * @property \common\models\CatalogSubruas[] $catalogSubruas
 * @property \common\models\CatalogSubruas[] $catalogSubruas0
 * @property \common\models\Catalogfiles[] $catalogfiles
 * @property \common\models\Catalogfiles[] $catalogfiles0
 * @property \common\models\Catalogs[] $catalogs
 * @property \common\models\Catalogs[] $catalogs0
 * @property \common\models\Catalogs[] $catalogs1
 * @property \common\models\Catalogstaging[] $catalogstagings
 * @property \common\models\Catalogstaging[] $catalogstagings0
 * @property \common\models\CheckpointLocations[] $checkpointLocations
 * @property \common\models\CheckpointLocations[] $checkpointLocations0
 * @property \common\models\Collectioncategorys[] $collectioncategorys
 * @property \common\models\Collectioncategorys[] $collectioncategorys0
 * @property \common\models\Collectioncategorysdefault[] $collectioncategorysdefaults
 * @property \common\models\Collectioncategorysdefault[] $collectioncategorysdefaults0
 * @property \common\models\Collectionloanitems[] $collectionloanitems
 * @property \common\models\Collectionloanitems[] $collectionloanitems0
 * @property \common\models\Collectionloans[] $collectionloans
 * @property \common\models\Collectionloans[] $collectionloans0
 * @property \common\models\Collectionlocations[] $collectionlocations
 * @property \common\models\Collectionlocations[] $collectionlocations0
 * @property \common\models\Collectionmedias[] $collectionmedias
 * @property \common\models\Collectionmedias[] $collectionmedias0
 * @property \common\models\Collectionrules[] $collectionrules
 * @property \common\models\Collectionrules[] $collectionrules0
 * @property \common\models\Collectionrulesitems[] $collectionrulesitems
 * @property \common\models\Collectionrulesitems[] $collectionrulesitems0
 * @property \common\models\Collections[] $collections
 * @property \common\models\Collections[] $collections0
 * @property \common\models\Collections[] $collections1
 * @property \common\models\Collections[] $collections2
 * @property \common\models\Collectionsources[] $collectionsources
 * @property \common\models\Collectionsources[] $collectionsources0
 * @property \common\models\Collectionstatus[] $collectionstatuses
 * @property \common\models\Collectionstatus[] $collectionstatuses0
 * @property \common\models\Colloclib[] $colloclibs
 * @property \common\models\Colloclib[] $colloclibs0
 * @property \common\models\Currency[] $currencies
 * @property \common\models\Currency[] $currencies0
 * @property \common\models\Departments[] $departments
 * @property \common\models\Departments[] $departments0
 * @property \common\models\Fielddatas[] $fielddatas
 * @property \common\models\Fielddatas[] $fielddatas0
 * @property \common\models\Fieldgroups[] $fieldgroups
 * @property \common\models\Fieldgroups[] $fieldgroups0
 * @property \common\models\Fieldindicator1s[] $fieldindicator1s
 * @property \common\models\Fieldindicator1s[] $fieldindicator1s0
 * @property \common\models\Fieldindicator2s[] $fieldindicator2s
 * @property \common\models\Fieldindicator2s[] $fieldindicator2s0
 * @property \common\models\Fields[] $fields
 * @property \common\models\Fields[] $fields0
 * @property \common\models\Formats[] $formats
 * @property \common\models\Formats[] $formats0
 * @property \common\models\Groupguesses[] $groupguesses
 * @property \common\models\Groupguesses[] $groupguesses0
 * @property \common\models\Historydata[] $historydatas
 * @property \common\models\Historydata[] $historydatas0
 * @property \common\models\Holidays[] $holidays
 * @property \common\models\Holidays[] $holidays0
 * @property \common\models\JenisAnggota[] $jenisAnggotas
 * @property \common\models\JenisAnggota[] $jenisAnggotas0
 * @property \common\models\JenisDenda[] $jenisDendas
 * @property \common\models\JenisDenda[] $jenisDendas0
 * @property \common\models\JenisKelamin[] $jenisKelamins
 * @property \common\models\JenisKelamin[] $jenisKelamins0
 * @property \common\models\JenisPelanggaran[] $jenisPelanggarans
 * @property \common\models\JenisPelanggaran[] $jenisPelanggarans0
 * @property \common\models\JenisPermohonan[] $jenisPermohonans
 * @property \common\models\JenisPermohonan[] $jenisPermohonans0
 * @property \common\models\JenisPerpustakaan[] $jenisPerpustakaans
 * @property \common\models\JenisPerpustakaan[] $jenisPerpustakaans0
 * @property \common\models\JudulKoleksi[] $judulKoleksis
 * @property \common\models\JudulKoleksi[] $judulKoleksis0
 * @property \common\models\Kabupaten[] $kabupatens
 * @property \common\models\Kabupaten[] $kabupatens0
 * @property \common\models\KataSandang[] $kataSandangs
 * @property \common\models\KataSandang[] $kataSandangs0
 * @property \common\models\KelasSiswa[] $kelasSiswas
 * @property \common\models\KelasSiswa[] $kelasSiswas0
 * @property \common\models\KelompokPelanggaran[] $kelompokPelanggarans
 * @property \common\models\KelompokPelanggaran[] $kelompokPelanggarans0
 * @property \common\models\KriteriaKoleksi[] $kriteriaKoleksis
 * @property \common\models\KriteriaKoleksi[] $kriteriaKoleksis0
 * @property \common\models\Library[] $libraries
 * @property \common\models\Library[] $libraries0
 * @property \common\models\Librarysearchcriteria[] $librarysearchcriterias
 * @property \common\models\Librarysearchcriteria[] $librarysearchcriterias0
 * @property \common\models\LocationLibrary[] $locationLibraries
 * @property \common\models\LocationLibrary[] $locationLibraries0
 * @property \common\models\LocationLibraryDefault[] $locationLibraryDefaults
 * @property \common\models\LocationLibraryDefault[] $locationLibraryDefaults0
 * @property \common\models\Locations[] $locations
 * @property \common\models\Locations[] $locations0
 * @property \common\models\Mailserver[] $mailservers
 * @property \common\models\Mailserver[] $mailservers0
 * @property \common\models\MasaBerlakuAnggota[] $masaBerlakuAnggotas
 * @property \common\models\MasaBerlakuAnggota[] $masaBerlakuAnggotas0
 * @property \common\models\MasterFakultas[] $masterFakultas
 * @property \common\models\MasterFakultas[] $masterFakultas0
 * @property \common\models\MasterJenisIdentitas[] $masterJenisIdentitas
 * @property \common\models\MasterJenisIdentitas[] $masterJenisIdentitas0
 * @property \common\models\MasterJurusan[] $masterJurusans
 * @property \common\models\MasterJurusan[] $masterJurusans0
 * @property \common\models\MasterKelasBesar[] $masterKelasBesars
 * @property \common\models\MasterKelasBesar[] $masterKelasBesars0
 * @property \common\models\MasterKependudukan[] $masterKependudukans
 * @property \common\models\MasterKependudukan[] $masterKependudukans0
 * @property \common\models\MasterPekerjaan[] $masterPekerjaans
 * @property \common\models\MasterPekerjaan[] $masterPekerjaans0
 * @property \common\models\MasterPendidikan[] $masterPendidikans
 * @property \common\models\MasterPendidikan[] $masterPendidikans0
 * @property \common\models\MasterRangeUmur[] $masterRangeUmurs
 * @property \common\models\MasterRangeUmur[] $masterRangeUmurs0
 * @property \common\models\MasterStatusPerkawinan[] $masterStatusPerkawinans
 * @property \common\models\MasterStatusPerkawinan[] $masterStatusPerkawinans0
 * @property \common\models\MemberFields[] $memberFields
 * @property \common\models\MemberFields[] $memberFields0
 * @property \common\models\MemberPerpanjangan[] $memberPerpanjangans
 * @property \common\models\MemberPerpanjangan[] $memberPerpanjangans0
 * @property \common\models\Memberguesses[] $memberguesses
 * @property \common\models\Memberguesses[] $memberguesses0
 * @property \common\models\Memberloanauthorizecategory[] $memberloanauthorizecategories
 * @property \common\models\Memberloanauthorizecategory[] $memberloanauthorizecategories0
 * @property \common\models\Memberloanauthorizelocation[] $memberloanauthorizelocations
 * @property \common\models\Memberloanauthorizelocation[] $memberloanauthorizelocations0
 * @property \common\models\Memberrules[] $memberrules
 * @property \common\models\Memberrules[] $memberrules0
 * @property \common\models\Members[] $members
 * @property \common\models\Members[] $members0
 * @property \common\models\MembersForm[] $membersForms
 * @property \common\models\MembersForm[] $membersForms0
 * @property \common\models\MembersFormList[] $membersFormLists
 * @property \common\models\MembersFormList[] $membersFormLists0
 * @property \common\models\MembersInfoForm[] $membersInfoForms
 * @property \common\models\MembersInfoForm[] $membersInfoForms0
 * @property \common\models\MembersLoanForm[] $membersLoanForms
 * @property \common\models\MembersLoanForm[] $membersLoanForms0
 * @property \common\models\MembersLoanreturnForm[] $membersLoanreturnForms
 * @property \common\models\MembersLoanreturnForm[] $membersLoanreturnForms0
 * @property \common\models\MembersOnlineForm[] $membersOnlineForms
 * @property \common\models\MembersOnlineForm[] $membersOnlineForms0
 * @property \common\models\MembersOnlineFormEdit[] $membersOnlineFormEdits
 * @property \common\models\MembersOnlineFormEdit[] $membersOnlineFormEdits0
 * @property \common\models\Membersonline[] $membersonlines
 * @property \common\models\Membersonline[] $membersonlines0
 * @property \common\models\Menu[] $menus
 * @property \common\models\Menu[] $menus0
 * @property \common\models\Migration[] $migrations
 * @property \common\models\Migration[] $migrations0
 * @property \common\models\Modules[] $modules
 * @property \common\models\Modules[] $modules0
 * @property \common\models\Opacfields[] $opacfields
 * @property \common\models\Opacfields[] $opacfields0
 * @property \common\models\Partners[] $partners
 * @property \common\models\Partners[] $partners0
 * @property \common\models\Pelanggaran[] $pelanggarans
 * @property \common\models\Pelanggaran[] $pelanggarans0
 * @property \common\models\Pengiriman[] $pengirimen
 * @property \common\models\Pengiriman[] $pengirimen0
 * @property \common\models\Propinsi[] $propinsis
 * @property \common\models\Propinsi[] $propinsis0
 * @property \common\models\Publishers[] $publishers
 * @property \common\models\Publishers[] $publishers0
 * @property \common\models\QuarantinedAuthData[] $quarantinedAuthDatas
 * @property \common\models\QuarantinedAuthData[] $quarantinedAuthDatas0
 * @property \common\models\QuarantinedAuthHeader[] $quarantinedAuthHeaders
 * @property \common\models\QuarantinedAuthHeader[] $quarantinedAuthHeaders0
 * @property \common\models\QuarantinedCatalogRuas[] $quarantinedCatalogRuas
 * @property \common\models\QuarantinedCatalogRuas[] $quarantinedCatalogRuas0
 * @property \common\models\QuarantinedCatalogSubruas[] $quarantinedCatalogSubruas
 * @property \common\models\QuarantinedCatalogSubruas[] $quarantinedCatalogSubruas0
 * @property \common\models\QuarantinedCatalogs[] $quarantinedCatalogs
 * @property \common\models\QuarantinedCatalogs[] $quarantinedCatalogs0
 * @property \common\models\QuarantinedCollections[] $quarantinedCollections
 * @property \common\models\QuarantinedCollections[] $quarantinedCollections0
 * @property \common\models\QuarantinedPengiriman[] $quarantinedPengirimen
 * @property \common\models\QuarantinedPengiriman[] $quarantinedPengirimen0
 * @property \common\models\Readinlocation[] $readinlocations
 * @property \common\models\Readinlocation[] $readinlocations0
 * @property \common\models\Refferenceitems[] $refferenceitems
 * @property \common\models\Refferenceitems[] $refferenceitems0
 * @property \common\models\Refferences[] $refferences
 * @property \common\models\Refferences[] $refferences0
 * @property \common\models\Requestcatalog[] $requestcatalogs
 * @property \common\models\Requestcatalog[] $requestcatalogs0
 * @property \common\models\RfidTemp[] $rfidTemps
 * @property \common\models\RfidTemp[] $rfidTemps0
 * @property \common\models\Rolemodule[] $rolemodules
 * @property \common\models\Rolemodule[] $rolemodules0
 * @property \common\models\Roles[] $roles
 * @property \common\models\Roles[] $roles0
 * @property \common\models\Settingcatalogdetail[] $settingcatalogdetails
 * @property \common\models\Settingcatalogdetail[] $settingcatalogdetails0
 * @property \common\models\Settingparameters[] $settingparameters
 * @property \common\models\Settingparameters[] $settingparameters0
 * @property \common\models\StatusAnggota[] $statusAnggotas
 * @property \common\models\StatusAnggota[] $statusAnggotas0
 * @property \common\models\Stockopname[] $stockopnames
 * @property \common\models\Stockopname[] $stockopnames0
 * @property \common\models\Stockopnamedetail[] $stockopnamedetails
 * @property \common\models\Stockopnamedetail[] $stockopnamedetails0
 * @property \common\models\Sumbangan[] $sumbangans
 * @property \common\models\Sumbangan[] $sumbangans0
 * @property \common\models\SumbanganKoleksi[] $sumbanganKoleksis
 * @property \common\models\SumbanganKoleksi[] $sumbanganKoleksis0
 * @property \common\models\Survey[] $surveys
 * @property \common\models\Survey[] $surveys0
 * @property \common\models\SurveyPertanyaan[] $surveyPertanyaans
 * @property \common\models\SurveyPertanyaan[] $surveyPertanyaans0
 * @property \common\models\SurveyPilihan[] $surveyPilihans
 * @property \common\models\SurveyPilihan[] $surveyPilihans0
 * @property \common\models\Tempnoinduk[] $tempnoinduks
 * @property \common\models\Tempnoinduk[] $tempnoinduks0
 * @property \common\models\TujuanKunjungan[] $tujuanKunjungans
 * @property \common\models\TujuanKunjungan[] $tujuanKunjungans0
 * @property \common\models\User[] $users
 * @property \common\models\User[] $users0
 * @property \common\models\Userloclibforcol[] $userloclibforcols
 * @property \common\models\Userloclibforcol[] $userloclibforcols0
 * @property \common\models\Userloclibforcol[] $userloclibforcols1
 * @property \common\models\Userloclibforloan[] $userloclibforloans
 * @property \common\models\Userloclibforloan[] $userloclibforloans0
 * @property \common\models\Userloclibforloan[] $userloclibforloans1
 * @property \common\models\Userlogs[] $userlogs
 * @property \common\models\Userlogs[] $userlogs0
 * @property \common\models\Userlogs[] $userlogs1
 * @property \common\models\Branchs $branch
 * @property \common\models\Departments $department
 * @property \common\models\Roles $role
 * @property \common\models\Users $updateBy
 * @property \common\models\Users[] $users1
 * @property \common\models\Users $createBy
 * @property \common\models\Users[] $users2
 * @property \common\models\Warnaddc[] $warnaddcs
 * @property \common\models\Warnaddc[] $warnaddcs0
 * @property \common\models\Worksheetfielditems[] $worksheetfielditems
 * @property \common\models\Worksheetfielditems[] $worksheetfielditems0
 * @property \common\models\Worksheetfields[] $worksheetfields
 * @property \common\models\Worksheetfields[] $worksheetfields0
 * @property \common\models\Worksheets[] $worksheets
 * @property \common\models\Worksheets[] $worksheets0
 */
class Users extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'Fullname', 'Role_id'], 'required'],
            [['status', 'LoginAttemp', 'Department_id', 'Branch_id', 'Role_id', 'CreateBy', 'UpdateBy', 'created_at', 'updated_at'], 'integer'],
            [['IsActive', 'IsCanResetUserPassword', 'IsCanResetMemberPassword', 'IsAdvanceEntryCatalog', 'IsAdvanceEntryCollection'], 'boolean'],
            [['MaxDateSesID', 'LastSubmtLogin', 'LastSuccess', 'CreateDate', 'UpdateDate', 'KIILastUploadDate'], 'safe'],
            [['username'], 'string', 'max' => 50],
            [['password', 'password_hash', 'password_reset_token', 'Fullname', 'EmailAddress', 'SesID', 'ActivationCode'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['CreateTerminal', 'UpdateTerminal'], 'string', 'max' => 100],
            [['Branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branchs::class, 'targetAttribute' => ['Branch_id' => 'ID']],
            [['Department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::class, 'targetAttribute' => ['Department_id' => 'ID']],
            [['Role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::class, 'targetAttribute' => ['Role_id' => 'ID']],
            [['UpdateBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['UpdateBy' => 'ID']],
            [['CreateBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['CreateBy' => 'ID']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'status' => Yii::t('app', 'Status'),
            'Fullname' => Yii::t('app', 'Fullname'),
            'EmailAddress' => Yii::t('app', 'Email Address'),
            'IsActive' => Yii::t('app', 'Is Active'),
            'SesID' => Yii::t('app', 'Ses ID'),
            'MaxDateSesID' => Yii::t('app', 'Max Date Ses ID'),
            'ActivationCode' => Yii::t('app', 'Activation Code'),
            'LoginAttemp' => Yii::t('app', 'Login Attemp'),
            'LastSubmtLogin' => Yii::t('app', 'Last Submt Login'),
            'LastSuccess' => Yii::t('app', 'Last Success'),
            'Department_id' => Yii::t('app', 'Department ID'),
            'Branch_id' => Yii::t('app', 'Branch ID'),
            'Role_id' => Yii::t('app', 'Role ID'),
            'IsCanResetUserPassword' => Yii::t('app', 'Is Can Reset User Password'),
            'IsCanResetMemberPassword' => Yii::t('app', 'Is Can Reset Member Password'),
            'IsAdvanceEntryCatalog' => Yii::t('app', 'Is Advance Entry Catalog'),
            'IsAdvanceEntryCollection' => Yii::t('app', 'Is Advance Entry Collection'),
            'CreateBy' => Yii::t('app', 'Create By'),
            'CreateDate' => Yii::t('app', 'Create Date'),
            'CreateTerminal' => Yii::t('app', 'Create Terminal'),
            'UpdateBy' => Yii::t('app', 'Update By'),
            'UpdateDate' => Yii::t('app', 'Update Date'),
            'UpdateTerminal' => Yii::t('app', 'Update Terminal'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'KIILastUploadDate' => Yii::t('app', 'Kiilast Upload Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgamas()
    {
        return $this->hasMany(\common\models\Agama::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgamas0()
    {
        return $this->hasMany(\common\models\Agama::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplications()
    {
        return $this->hasMany(\common\models\Applications::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplications0()
    {
        return $this->hasMany(\common\models\Applications::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthAssignments()
    {
        return $this->hasMany(\common\models\AuthAssignment::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthAssignments0()
    {
        return $this->hasMany(\common\models\AuthAssignment::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthDatas()
    {
        return $this->hasMany(\common\models\AuthData::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthDatas0()
    {
        return $this->hasMany(\common\models\AuthData::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthHeaders()
    {
        return $this->hasMany(\common\models\AuthHeader::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthHeaders0()
    {
        return $this->hasMany(\common\models\AuthHeader::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthItems()
    {
        return $this->hasMany(\common\models\AuthItem::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthItems0()
    {
        return $this->hasMany(\common\models\AuthItem::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthItemChildren()
    {
        return $this->hasMany(\common\models\AuthItemChild::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthItemChildren0()
    {
        return $this->hasMany(\common\models\AuthItemChild::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthRules()
    {
        return $this->hasMany(\common\models\AuthRule::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthRules0()
    {
        return $this->hasMany(\common\models\AuthRule::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBacaditempats()
    {
        return $this->hasMany(\common\models\Bacaditempat::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBibidavailables()
    {
        return $this->hasMany(\common\models\Bibidavailable::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBibidavailables0()
    {
        return $this->hasMany(\common\models\Bibidavailable::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookmarks()
    {
        return $this->hasMany(\common\models\Bookmark::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookmarks0()
    {
        return $this->hasMany(\common\models\Bookmark::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranchs()
    {
        return $this->hasMany(\common\models\Branchs::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranchs0()
    {
        return $this->hasMany(\common\models\Branchs::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCardformats()
    {
        return $this->hasMany(\common\models\Cardformats::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCardformats0()
    {
        return $this->hasMany(\common\models\Cardformats::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogRuas()
    {
        return $this->hasMany(\common\models\CatalogRuas::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogRuas0()
    {
        return $this->hasMany(\common\models\CatalogRuas::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogSubruas()
    {
        return $this->hasMany(\common\models\CatalogSubruas::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogSubruas0()
    {
        return $this->hasMany(\common\models\CatalogSubruas::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogfiles()
    {
        return $this->hasMany(\common\models\Catalogfiles::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogfiles0()
    {
        return $this->hasMany(\common\models\Catalogfiles::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogs()
    {
        return $this->hasMany(\common\models\Catalogs::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogs0()
    {
        return $this->hasMany(\common\models\Catalogs::class, ['QUARANTINEDBY' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogs1()
    {
        return $this->hasMany(\common\models\Catalogs::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogstagings()
    {
        return $this->hasMany(\common\models\Catalogstaging::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogstagings0()
    {
        return $this->hasMany(\common\models\Catalogstaging::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheckpointLocations()
    {
        return $this->hasMany(\common\models\CheckpointLocations::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheckpointLocations0()
    {
        return $this->hasMany(\common\models\CheckpointLocations::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectioncategorys()
    {
        return $this->hasMany(\common\models\Collectioncategorys::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectioncategorys0()
    {
        return $this->hasMany(\common\models\Collectioncategorys::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectioncategorysdefaults()
    {
        return $this->hasMany(\common\models\Collectioncategorysdefault::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectioncategorysdefaults0()
    {
        return $this->hasMany(\common\models\Collectioncategorysdefault::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionloanitems()
    {
        return $this->hasMany(\common\models\Collectionloanitems::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionloanitems0()
    {
        return $this->hasMany(\common\models\Collectionloanitems::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionloans()
    {
        return $this->hasMany(\common\models\Collectionloans::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionloans0()
    {
        return $this->hasMany(\common\models\Collectionloans::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionlocations()
    {
        return $this->hasMany(\common\models\Collectionlocations::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionlocations0()
    {
        return $this->hasMany(\common\models\Collectionlocations::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionmedias()
    {
        return $this->hasMany(\common\models\Collectionmedias::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionmedias0()
    {
        return $this->hasMany(\common\models\Collectionmedias::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionrules()
    {
        return $this->hasMany(\common\models\Collectionrules::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionrules0()
    {
        return $this->hasMany(\common\models\Collectionrules::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionrulesitems()
    {
        return $this->hasMany(\common\models\Collectionrulesitems::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionrulesitems0()
    {
        return $this->hasMany(\common\models\Collectionrulesitems::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollections()
    {
        return $this->hasMany(\common\models\Collections::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollections0()
    {
        return $this->hasMany(\common\models\Collections::class, ['JILIDCREATEBY' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollections1()
    {
        return $this->hasMany(\common\models\Collections::class, ['QUARANTINEDBY' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollections2()
    {
        return $this->hasMany(\common\models\Collections::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionsources()
    {
        return $this->hasMany(\common\models\Collectionsources::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionsources0()
    {
        return $this->hasMany(\common\models\Collectionsources::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionstatuses()
    {
        return $this->hasMany(\common\models\Collectionstatus::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionstatuses0()
    {
        return $this->hasMany(\common\models\Collectionstatus::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColloclibs()
    {
        return $this->hasMany(\common\models\Colloclib::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColloclibs0()
    {
        return $this->hasMany(\common\models\Colloclib::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies()
    {
        return $this->hasMany(\common\models\Currency::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies0()
    {
        return $this->hasMany(\common\models\Currency::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(\common\models\Departments::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments0()
    {
        return $this->hasMany(\common\models\Departments::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFielddatas()
    {
        return $this->hasMany(\common\models\Fielddatas::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFielddatas0()
    {
        return $this->hasMany(\common\models\Fielddatas::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFieldgroups()
    {
        return $this->hasMany(\common\models\Fieldgroups::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFieldgroups0()
    {
        return $this->hasMany(\common\models\Fieldgroups::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFieldindicator1s()
    {
        return $this->hasMany(\common\models\Fieldindicator1s::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFieldindicator1s0()
    {
        return $this->hasMany(\common\models\Fieldindicator1s::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFieldindicator2s()
    {
        return $this->hasMany(\common\models\Fieldindicator2s::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFieldindicator2s0()
    {
        return $this->hasMany(\common\models\Fieldindicator2s::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFields()
    {
        return $this->hasMany(\common\models\Fields::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFields0()
    {
        return $this->hasMany(\common\models\Fields::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormats()
    {
        return $this->hasMany(\common\models\Formats::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormats0()
    {
        return $this->hasMany(\common\models\Formats::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupguesses()
    {
        return $this->hasMany(\common\models\Groupguesses::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupguesses0()
    {
        return $this->hasMany(\common\models\Groupguesses::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorydatas()
    {
        return $this->hasMany(\common\models\Historydata::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorydatas0()
    {
        return $this->hasMany(\common\models\Historydata::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHolidays()
    {
        return $this->hasMany(\common\models\Holidays::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHolidays0()
    {
        return $this->hasMany(\common\models\Holidays::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisAnggotas()
    {
        return $this->hasMany(\common\models\JenisAnggota::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisAnggotas0()
    {
        return $this->hasMany(\common\models\JenisAnggota::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisDendas()
    {
        return $this->hasMany(\common\models\JenisDenda::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisDendas0()
    {
        return $this->hasMany(\common\models\JenisDenda::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisKelamins()
    {
        return $this->hasMany(\common\models\JenisKelamin::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisKelamins0()
    {
        return $this->hasMany(\common\models\JenisKelamin::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPelanggarans()
    {
        return $this->hasMany(\common\models\JenisPelanggaran::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPelanggarans0()
    {
        return $this->hasMany(\common\models\JenisPelanggaran::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPermohonans()
    {
        return $this->hasMany(\common\models\JenisPermohonan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPermohonans0()
    {
        return $this->hasMany(\common\models\JenisPermohonan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPerpustakaans()
    {
        return $this->hasMany(\common\models\JenisPerpustakaan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPerpustakaans0()
    {
        return $this->hasMany(\common\models\JenisPerpustakaan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJudulKoleksis()
    {
        return $this->hasMany(\common\models\JudulKoleksi::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJudulKoleksis0()
    {
        return $this->hasMany(\common\models\JudulKoleksi::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKabupatens()
    {
        return $this->hasMany(\common\models\Kabupaten::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKabupatens0()
    {
        return $this->hasMany(\common\models\Kabupaten::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKataSandangs()
    {
        return $this->hasMany(\common\models\KataSandang::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKataSandangs0()
    {
        return $this->hasMany(\common\models\KataSandang::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelasSiswas()
    {
        return $this->hasMany(\common\models\KelasSiswa::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelasSiswas0()
    {
        return $this->hasMany(\common\models\KelasSiswa::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelompokPelanggarans()
    {
        return $this->hasMany(\common\models\KelompokPelanggaran::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelompokPelanggarans0()
    {
        return $this->hasMany(\common\models\KelompokPelanggaran::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKriteriaKoleksis()
    {
        return $this->hasMany(\common\models\KriteriaKoleksi::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKriteriaKoleksis0()
    {
        return $this->hasMany(\common\models\KriteriaKoleksi::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLibraries()
    {
        return $this->hasMany(\common\models\Library::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLibraries0()
    {
        return $this->hasMany(\common\models\Library::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLibrarysearchcriterias()
    {
        return $this->hasMany(\common\models\Librarysearchcriteria::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLibrarysearchcriterias0()
    {
        return $this->hasMany(\common\models\Librarysearchcriteria::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocationLibraries()
    {
        return $this->hasMany(\common\models\LocationLibrary::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocationLibraries0()
    {
        return $this->hasMany(\common\models\LocationLibrary::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocationLibraryDefaults()
    {
        return $this->hasMany(\common\models\LocationLibraryDefault::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocationLibraryDefaults0()
    {
        return $this->hasMany(\common\models\LocationLibraryDefault::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(\common\models\Locations::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocations0()
    {
        return $this->hasMany(\common\models\Locations::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMailservers()
    {
        return $this->hasMany(\common\models\Mailserver::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMailservers0()
    {
        return $this->hasMany(\common\models\Mailserver::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasaBerlakuAnggotas()
    {
        return $this->hasMany(\common\models\MasaBerlakuAnggota::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasaBerlakuAnggotas0()
    {
        return $this->hasMany(\common\models\MasaBerlakuAnggota::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterFakultas()
    {
        return $this->hasMany(\common\models\MasterFakultas::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterFakultas0()
    {
        return $this->hasMany(\common\models\MasterFakultas::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterJenisIdentitas()
    {
        return $this->hasMany(\common\models\MasterJenisIdentitas::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterJenisIdentitas0()
    {
        return $this->hasMany(\common\models\MasterJenisIdentitas::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterJurusans()
    {
        return $this->hasMany(\common\models\MasterJurusan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterJurusans0()
    {
        return $this->hasMany(\common\models\MasterJurusan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterKelasBesars()
    {
        return $this->hasMany(\common\models\MasterKelasBesar::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterKelasBesars0()
    {
        return $this->hasMany(\common\models\MasterKelasBesar::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterKependudukans()
    {
        return $this->hasMany(\common\models\MasterKependudukan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterKependudukans0()
    {
        return $this->hasMany(\common\models\MasterKependudukan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPekerjaans()
    {
        return $this->hasMany(\common\models\MasterPekerjaan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPekerjaans0()
    {
        return $this->hasMany(\common\models\MasterPekerjaan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPendidikans()
    {
        return $this->hasMany(\common\models\MasterPendidikan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPendidikans0()
    {
        return $this->hasMany(\common\models\MasterPendidikan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRangeUmurs()
    {
        return $this->hasMany(\common\models\MasterRangeUmur::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRangeUmurs0()
    {
        return $this->hasMany(\common\models\MasterRangeUmur::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterStatusPerkawinans()
    {
        return $this->hasMany(\common\models\MasterStatusPerkawinan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterStatusPerkawinans0()
    {
        return $this->hasMany(\common\models\MasterStatusPerkawinan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberFields()
    {
        return $this->hasMany(\common\models\MemberFields::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberFields0()
    {
        return $this->hasMany(\common\models\MemberFields::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberPerpanjangans()
    {
        return $this->hasMany(\common\models\MemberPerpanjangan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberPerpanjangans0()
    {
        return $this->hasMany(\common\models\MemberPerpanjangan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberguesses()
    {
        return $this->hasMany(\common\models\Memberguesses::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberguesses0()
    {
        return $this->hasMany(\common\models\Memberguesses::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberloanauthorizecategories()
    {
        return $this->hasMany(\common\models\Memberloanauthorizecategory::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberloanauthorizecategories0()
    {
        return $this->hasMany(\common\models\Memberloanauthorizecategory::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberloanauthorizelocations()
    {
        return $this->hasMany(\common\models\Memberloanauthorizelocation::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberloanauthorizelocations0()
    {
        return $this->hasMany(\common\models\Memberloanauthorizelocation::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberrules()
    {
        return $this->hasMany(\common\models\Memberrules::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberrules0()
    {
        return $this->hasMany(\common\models\Memberrules::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembers()
    {
        return $this->hasMany(\common\models\Members::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembers0()
    {
        return $this->hasMany(\common\models\Members::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersForms()
    {
        return $this->hasMany(\common\models\MembersForm::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersForms0()
    {
        return $this->hasMany(\common\models\MembersForm::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersFormLists()
    {
        return $this->hasMany(\common\models\MembersFormList::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersFormLists0()
    {
        return $this->hasMany(\common\models\MembersFormList::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersInfoForms()
    {
        return $this->hasMany(\common\models\MembersInfoForm::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersInfoForms0()
    {
        return $this->hasMany(\common\models\MembersInfoForm::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersLoanForms()
    {
        return $this->hasMany(\common\models\MembersLoanForm::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersLoanForms0()
    {
        return $this->hasMany(\common\models\MembersLoanForm::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersLoanreturnForms()
    {
        return $this->hasMany(\common\models\MembersLoanreturnForm::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersLoanreturnForms0()
    {
        return $this->hasMany(\common\models\MembersLoanreturnForm::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersOnlineForms()
    {
        return $this->hasMany(\common\models\MembersOnlineForm::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersOnlineForms0()
    {
        return $this->hasMany(\common\models\MembersOnlineForm::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersOnlineFormEdits()
    {
        return $this->hasMany(\common\models\MembersOnlineFormEdit::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersOnlineFormEdits0()
    {
        return $this->hasMany(\common\models\MembersOnlineFormEdit::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersonlines()
    {
        return $this->hasMany(\common\models\Membersonline::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembersonlines0()
    {
        return $this->hasMany(\common\models\Membersonline::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(\common\models\Menu::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus0()
    {
        return $this->hasMany(\common\models\Menu::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMigrations()
    {
        return $this->hasMany(\common\models\Migration::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMigrations0()
    {
        return $this->hasMany(\common\models\Migration::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModules()
    {
        return $this->hasMany(\common\models\Modules::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModules0()
    {
        return $this->hasMany(\common\models\Modules::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOpacfields()
    {
        return $this->hasMany(\common\models\Opacfields::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOpacfields0()
    {
        return $this->hasMany(\common\models\Opacfields::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartners()
    {
        return $this->hasMany(\common\models\Partners::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartners0()
    {
        return $this->hasMany(\common\models\Partners::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggarans()
    {
        return $this->hasMany(\common\models\Pelanggaran::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggarans0()
    {
        return $this->hasMany(\common\models\Pelanggaran::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengirimen()
    {
        return $this->hasMany(\common\models\Pengiriman::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengirimen0()
    {
        return $this->hasMany(\common\models\Pengiriman::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropinsis()
    {
        return $this->hasMany(\common\models\Propinsi::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropinsis0()
    {
        return $this->hasMany(\common\models\Propinsi::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublishers()
    {
        return $this->hasMany(\common\models\Publishers::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublishers0()
    {
        return $this->hasMany(\common\models\Publishers::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedAuthDatas()
    {
        return $this->hasMany(\common\models\QuarantinedAuthData::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedAuthDatas0()
    {
        return $this->hasMany(\common\models\QuarantinedAuthData::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedAuthHeaders()
    {
        return $this->hasMany(\common\models\QuarantinedAuthHeader::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedAuthHeaders0()
    {
        return $this->hasMany(\common\models\QuarantinedAuthHeader::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedCatalogRuas()
    {
        return $this->hasMany(\common\models\QuarantinedCatalogRuas::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedCatalogRuas0()
    {
        return $this->hasMany(\common\models\QuarantinedCatalogRuas::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedCatalogSubruas()
    {
        return $this->hasMany(\common\models\QuarantinedCatalogSubruas::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedCatalogSubruas0()
    {
        return $this->hasMany(\common\models\QuarantinedCatalogSubruas::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedCatalogs()
    {
        return $this->hasMany(\common\models\QuarantinedCatalogs::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedCatalogs0()
    {
        return $this->hasMany(\common\models\QuarantinedCatalogs::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedCollections()
    {
        return $this->hasMany(\common\models\QuarantinedCollections::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedCollections0()
    {
        return $this->hasMany(\common\models\QuarantinedCollections::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedPengirimen()
    {
        return $this->hasMany(\common\models\QuarantinedPengiriman::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuarantinedPengirimen0()
    {
        return $this->hasMany(\common\models\QuarantinedPengiriman::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReadinlocations()
    {
        return $this->hasMany(\common\models\Readinlocation::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReadinlocations0()
    {
        return $this->hasMany(\common\models\Readinlocation::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefferenceitems()
    {
        return $this->hasMany(\common\models\Refferenceitems::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefferenceitems0()
    {
        return $this->hasMany(\common\models\Refferenceitems::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefferences()
    {
        return $this->hasMany(\common\models\Refferences::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefferences0()
    {
        return $this->hasMany(\common\models\Refferences::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestcatalogs()
    {
        return $this->hasMany(\common\models\Requestcatalog::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestcatalogs0()
    {
        return $this->hasMany(\common\models\Requestcatalog::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRfidTemps()
    {
        return $this->hasMany(\common\models\RfidTemp::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRfidTemps0()
    {
        return $this->hasMany(\common\models\RfidTemp::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolemodules()
    {
        return $this->hasMany(\common\models\Rolemodule::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolemodules0()
    {
        return $this->hasMany(\common\models\Rolemodule::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoles()
    {
        return $this->hasMany(\common\models\Roles::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoles0()
    {
        return $this->hasMany(\common\models\Roles::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSettingcatalogdetails()
    {
        return $this->hasMany(\common\models\Settingcatalogdetail::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSettingcatalogdetails0()
    {
        return $this->hasMany(\common\models\Settingcatalogdetail::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSettingparameters()
    {
        return $this->hasMany(\common\models\Settingparameters::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSettingparameters0()
    {
        return $this->hasMany(\common\models\Settingparameters::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusAnggotas()
    {
        return $this->hasMany(\common\models\StatusAnggota::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusAnggotas0()
    {
        return $this->hasMany(\common\models\StatusAnggota::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockopnames()
    {
        return $this->hasMany(\common\models\Stockopname::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockopnames0()
    {
        return $this->hasMany(\common\models\Stockopname::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockopnamedetails()
    {
        return $this->hasMany(\common\models\Stockopnamedetail::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockopnamedetails0()
    {
        return $this->hasMany(\common\models\Stockopnamedetail::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSumbangans()
    {
        return $this->hasMany(\common\models\Sumbangan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSumbangans0()
    {
        return $this->hasMany(\common\models\Sumbangan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSumbanganKoleksis()
    {
        return $this->hasMany(\common\models\SumbanganKoleksi::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSumbanganKoleksis0()
    {
        return $this->hasMany(\common\models\SumbanganKoleksi::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurveys()
    {
        return $this->hasMany(\common\models\Survey::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurveys0()
    {
        return $this->hasMany(\common\models\Survey::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurveyPertanyaans()
    {
        return $this->hasMany(\common\models\SurveyPertanyaan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurveyPertanyaans0()
    {
        return $this->hasMany(\common\models\SurveyPertanyaan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurveyPilihans()
    {
        return $this->hasMany(\common\models\SurveyPilihan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurveyPilihans0()
    {
        return $this->hasMany(\common\models\SurveyPilihan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTempnoinduks()
    {
        return $this->hasMany(\common\models\Tempnoinduk::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTempnoinduks0()
    {
        return $this->hasMany(\common\models\Tempnoinduk::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTujuanKunjungans()
    {
        return $this->hasMany(\common\models\TujuanKunjungan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTujuanKunjungans0()
    {
        return $this->hasMany(\common\models\TujuanKunjungan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(\common\models\User::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers0()
    {
        return $this->hasMany(\common\models\User::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserloclibforcols()
    {
        return $this->hasMany(\common\models\Userloclibforcol::class, ['User_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserloclibforcols0()
    {
        return $this->hasMany(\common\models\Userloclibforcol::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserloclibforcols1()
    {
        return $this->hasMany(\common\models\Userloclibforcol::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserloclibforloans()
    {
        return $this->hasMany(\common\models\Userloclibforloan::class, ['User_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserloclibforloans0()
    {
        return $this->hasMany(\common\models\Userloclibforloan::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserloclibforloans1()
    {
        return $this->hasMany(\common\models\Userloclibforloan::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserlogs()
    {
        return $this->hasMany(\common\models\Userlogs::class, ['User_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserlogs0()
    {
        return $this->hasMany(\common\models\Userlogs::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserlogs1()
    {
        return $this->hasMany(\common\models\Userlogs::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(\common\models\Branchs::class, ['ID' => 'Branch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(\common\models\Departments::class, ['ID' => 'Department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(\common\models\Roles::class, ['ID' => 'Role_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdateBy()
    {
        return $this->hasOne(\common\models\Users::class, ['ID' => 'UpdateBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers1()
    {
        return $this->hasMany(\common\models\Users::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreateBy()
    {
        return $this->hasOne(\common\models\Users::class, ['ID' => 'CreateBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers2()
    {
        return $this->hasMany(\common\models\Users::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarnaddcs()
    {
        return $this->hasMany(\common\models\Warnaddc::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarnaddcs0()
    {
        return $this->hasMany(\common\models\Warnaddc::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorksheetfielditems()
    {
        return $this->hasMany(\common\models\Worksheetfielditems::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorksheetfielditems0()
    {
        return $this->hasMany(\common\models\Worksheetfielditems::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorksheetfields()
    {
        return $this->hasMany(\common\models\Worksheetfields::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorksheetfields0()
    {
        return $this->hasMany(\common\models\Worksheetfields::class, ['UpdateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorksheets()
    {
        return $this->hasMany(\common\models\Worksheets::class, ['CreateBy' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorksheets0()
    {
        return $this->hasMany(\common\models\Worksheets::class, ['UpdateBy' => 'ID']);
    }


/**
     * @inheritdoc
     * @return type array
     */ 
    public function behaviors()
    {
        return [
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
