        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> Log Material <?php echo $model->nama?></a>
                    </div>
                    <div class="col-lg-5 right alamat">
                        <?php
                            if(Yii::app()->user->kodeAsrama != NULL){
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.' '.Yii::app()->user->asrama.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php
                            }  else {
                        ?>
                                <?php $pengguna = User::Model()->findByPk(Yii::app()->user->id); ?>
                         <p class="head"><?php echo CHtml::link(Yii::app()->user->nama.'-'.$pengguna->alamat .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php        
                            }
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div> 
        </header>



        <section class="container">
            <div class="col-lg-12">
                <table class="table table-hover table-dark" style="width:100% border-top: 1px solid #2e2bb1">
              <tr>
                <td  >Tahap</td>
                <td  >PIC</td>
                <td  >Plan Finish</td>
                <td  >Actual Finish</td>
                <td colspan="2">Status</td>
              </tr>
             <?php if($model->status > 3){ ?>
              <tr>
                <td  >Penyusunan Dokumen Engineering</td>
                <td  ><?php echo $model->pica->nama ?></td>
                <td  ><?php echo $a=$model->dokenga->plan_approve ?></td>
                <td  ><?php echo $b=$model->dokenga->actual_approve ?></td>
                <td> <?php $s = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } else{ ?> 

              <tr>
                <td  colspan="5" style="text-align: center;"><i>Nothing data to show!!!</i></td>
                
              </tr>
              <?php } ?>
               <?php if($model->status > 4){?>
              <tr>
                <td  >Penyusunan Dokumen Permintaan Penawaran</td>
                <td  ><?php echo $model->tender->pica->nama ?></td>
                <td  ><?php echo $a=$model->plan_tender ?></td>
                <td  ><?php echo $b=$model->tender->tgl_create ?></td>
                <td> <?php $s = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } if($model->status > 5) {?>
              <tr>
                <td  >Pelaksanaan Tender</td>
                <td  ><?php echo $model->tender->pica->nama ?></td>
                <td  ><?php echo $a=$model->tender->plan_pemenang ?></td>
                <td  ><?php echo $b=$model->tender->actual_pemenang ?></td>
                <td> <?php $s = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } if($model->status > 6){?>
              <tr>
                <td  >Penyusunan Dokumen Kontrak</td>
                 <td  ><?php echo $model->kontrak->pica->nama ?></td>
                <td  ><?php echo $a=$model->plan_kontrak ?></td>
                <td  ><?php echo $b=$model->kontrak->tgl_submit ?></td>
                <td> <?php $s = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } if($model->status > 8 ) {?>
             <tr>
                <td  >Pelaksanaan Kick of Meeting</td>
                <td  ><?php echo $model->kom->pica->nama ?></td>
                <td  ><?php echo $a=$model->kom->tanggal ?></td>
                <td  ><?php echo $b=$model->kom->actual_kom ?></td>
                <td> <?php $s = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } if($model->status > 9 ) {?>
              <tr>
                <td  >Tahap Produksi</td>
                <td  ><?php echo $model->pni->pica->nama ?></td>
                <td  ><?php echo $a=$model->pni->plan_produksi ?></td>
                <td  ><?php echo $b=$model->pni->actual_produksi ?></td>
                <td> <?php $s = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } if($model->status > 11 ) {?>
              <tr>
                <td  >Inspeksi oleh QC</td>
                <td  ><?php echo $model->pni->picq->nama ?></td>
                <td  ><?php echo $a=$model->pni->plan_inspeksi ?></td>
                <td  ><?php echo $b=$model->pni->actual_inspeksi ?></td>
                <td> <?php $s = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } if($model->status > 12 ) {?>
              <tr>
                <td  >Pengiriman</td>
                <td  ><?php echo $model->pengiriman->pica->nama ?></td>
                <td  ><?php echo $a=$model->plan_pengiriman ?></td>
                <td  ><?php echo $b=$model->pengiriman->tgl_create ?></td>
                <td> <?php $s = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } if($model->status > 13 ) {?>
              <tr>
                <td  >Diterima Warehouse Tujuan</td>
                <td  ><?php echo $model->wh->pica->nama ?></td>
                <td  ><?php echo $a=$model->plan_penerimaan ?></td>
                <td  ><?php echo $b=$model->pengiriman->actual_penerimaan ?></td>
                <td> <?php $s1 = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } if($model->status > 15 ) {?>
              <tr>
                <td  >Update Stok</td>
                <td  ><?php echo $model->wh->pica->nama ?></td>
                <td  ><?php echo $a=$model->plan_finish ?></td>
                <td  ><?php echo $b=$model->actual_finish ?></td>
                <td> <?php $s = selisih($a,$b)?></td>
                <td> <?php emoji($a,$b)?></td>
              </tr>
              <?php } ?>
            </table> 
            </div>

           
            <div id="Kategori"> </div>
        </section>

        <?php 
         function selisih($a,$b){
          $ad = new Datetime($a);
          $bd = new Datetime($b);

          $interval = $bd->diff($ad);
          $x = $interval->format('%R%a');
          $x = intval($x);

          if($x == 0){
            echo 'Tepat Waktu'  ;
          }elseif ($x < 0) {
            echo 'Telat';
          }elseif ($x > 0) {
            echo 'Cepat';
          }else{
            echo "Data tidak lengkap";
          }
        }

        function emoji($a, $b){
          $ad = new Datetime($a);
          $bd = new Datetime($b);

          $interval = $bd->diff($ad);
          $x = $interval->format('%R%a');
          $x = intval($x);
          if($x == 0){
            echo '<img class="logo" align="center" src="'.Yii::app()->theme->baseUrl.'/assets/img/slightly-smiling-face_1f642.png" width="30%" alt="Logo">';
          }elseif($x < 0){
            echo '<img class="logo" align="center" src="'.Yii::app()->theme->baseUrl.'/assets/img/pouting-face_1f621.png" width="30%" alt="Logo">';
          }elseif($x > 0){
            echo '<img class="logo" align="center" src="'.Yii::app()->theme->baseUrl.'/assets/img/grinning-face_1f600.png" width="30%" alt="Logo">';
          }
        }
        ?>