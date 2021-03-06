<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MaklumatKakitangan */

$this->title = 'Payroll - Maklumat Kakitangan';
$this->params['breadcrumbs'][] = ['label' => 'Pengurusan Gaji Kakitangan', 'url' => ['pengurusan_gaji']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title">Maklumat Terperinci </h3>
<!-- END PAGE TITLE-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-briefcase font-green-haze"></i>
                    <span class="caption-subject bold uppercase">Maklumat Kakitangan </span>
                </div>
                <div class="actions">
                    <?= Html::a('<i class="fa fa-pencil"></i>', ['payroll_update', 'id' => $model->id_staf], ['class' => 'btn btn-circle btn-icon-only blue','title'=>'Kemaskini Kakitangan']) ?>
                    <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $model->id_staf], [
                        'class' => 'btn btn-circle btn-icon-only btn-danger',
                        'title'=>'Hapus',
                        'data' => [
                            'confirm' => 'Adakah anda pasti untuk hapuskan maklumat ini ?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="maklumat-kakitangan-view">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [

                    'statuskerja.status_pekerjaan',
                    'tarikh_resign',
                    [
                        'attribute'=>'Foto',
                        'value'=> Yii::$app->request->BaseUrl.'/uploads/'.$model->foto,
                        'format' => ['image'],
                    ],
                    //'foto',
                    'nama',
                    'no_kp',
                    'tarikh_mula_kerja',
                    'jawatan_sekarang',
                    'no_pekerja',
                    'nama_tahfiz.pusat_pengajian',
                    'alamat_tempat_kerja:ntext',
                    'warganegara',
                    'tarikh_lahir',
                    'tempat_lahir:ntext',
                    [
                        'label' => 'Alamat Surat Menyurat',
                       // 'format' => ['raw'],
                        'value' => strip_tags($model->alamat_surat_menyurat),
                    ],
                    
                    'gaji_asas',
                    'elaun_asas',
                    'elaun_rumah',
                    'tabung_gaji',
                    'tabung_guru',
                    'sewa_rumah',
                    'kksk',
                    'loan',
                    'gaji_tahan',
                    'acc_tabung_haji',
                    'no_kwsp',
                    'acc_bimb',
                    
                    'peratus_kwsp',
                ],
            ]) ?>

        </div>
        </div>
    </div>
</div>

