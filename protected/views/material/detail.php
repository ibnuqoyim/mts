        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> Detail Material <?php echo $model->nama?></a>
                    </div>
                    <div class="col-lg-5 right alamat">
                        <?php
                            if(Yii::app()->user->kodeAsrama != NULL){
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.' '.Yii::app()->user->asrama.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php
                            }  else {
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
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
                <td  >Kode Material</td>
                <td  ><?php echo $model->kode ?></td>
              </tr>
               <tr>
                <td  >Nama Material</td>
                <td  ><?php echo $model->nama ?></td>
              </tr>
              
              <?php if($model->status > 3){ ?>
              <tr>
                <td  >Pemenang</td>
               <td  > <?php echo $model->usera->nama ?></td>
              </tr>
              <tr>
                <td rowspan="4" >Dokumen Engineering</td>
                <td  >Dokumen MTO : <a href="/mts/dokumen/dokeng/MTO-<?php echo $model->dokenga->file_mto ?>"><?php echo $model->dokenga->file_mto ?></a></td>
              </tr>
              <tr>
                <td  >Dokumen Drawing : <a href="/mts/dokumen/dokeng/DWG-<?php echo $model->dokenga->file_dwg ?>"><?php echo $model->dokenga->file_dwg ?></a></td>
              </tr>
               <tr>
                <td  >Dokumen Spesifikasi : <a href="/mts/dokumen/dokeng/SPEC-<?php echo $model->dokenga->file_spec ?>"><?php echo $model->dokenga->file_spec ?></a></td>
              </tr>
               <tr>
                <td  >Datasheet : <a href="/mts/dokumen/dokeng/DS-<?php echo $model->dokenga->file_datasheet ?>"><?php echo $model->dokenga->file_datasheet ?></a></td>
              </tr>
              <?php if(count($respon) != 0){ 
                foreach ($respon as $res) { ?>
                  <tr>
                <td rowspan="2" >Respon Klien</td>
                 <td > Respon : <?php echo $res->isi ?> </td>
              </tr>
               <tr>
                
                 <td > File : <a href="/dokumen/responclient/terima-<?php echo $res->file_respon ?>"><?php echo $res->file_respon ?></a> </td>
              </tr>
               <?php } } ?>
              <?php } else{ ?> 

              <tr>
                <td  colspan="2" style="text-align: center;"><i>Nothing data to show!!!</i></td>
                
              </tr>
              <?php } ?>
               <?php if($model->status > 4){?>

               <tr>
                <td  >Dokumen Permintaan</td>
                <td  >  <a href="/dokumen/permintaan/<?php echo $model->tender->file ?>"><?php echo $model->tender->file ?></a> </td>
              </tr>
              <?php } if($model->status > 5) {?>
               <tr>
                <td  rowspan="<?php echo $s=(count($penawaran)*5)+1?>">Dokumen Penawaran</td>
                <td  >  </a></td>
              </tr>


              <?php foreach ($penawaran as $tender) { ?>
                <tr>
                <td  >Vendor : <?php echo $tender->usera->nama?></td>
              </tr>
              <tr>
                <td  >Dokumen Administrasi : <a href="/dokumen/penawaran/ADM-<?php echo $tender->file_administrasi?>"> <?php echo $tender->file_administrasi?>  </a></td>
                </tr>
              <tr>
                <td  >Dokumen Teknis : <a href="/dokumen/penawaran/TEKNIS-<?php echo $tender->file_teknis?>"> <?php echo $tender->file_teknis?>  </a></td>
                </tr>
              <tr>
                <td  >Review Enigneering : <?php echo $tender->review_engineering?>  <a href="/dokumen/penawaran/RE-<?php echo $tender->file_review_eng?>">  </a></td>
                </tr>
              <tr>
                <td  >Status : <?php echo ($tender->id_user == $model->pemenang ? "Pemenang" : "Kalah" ) ?></td>
              </tr>
             <?php } ?>
             <?php } if($model->status > 6){?>

               <tr>
                <td  >Dokumen Kontrak</td>
                <td  >  <a href="/dokumen/kontrak/<?php echo $model->kontrak->file_kontrak ?>"><?php echo $model->kontrak->file_kontrak ?></a></td>
              </tr>
                <?php } if($model->status > 8 ) {?>              
               <tr>
                <td rowspan="2" >Kick of Meeting</td>
                <td  >Tanggal : <?php echo $model->kom->tanggal ?></td>
              </tr>
               <tr>
                
                <td  >Tempat : <?php echo $model->kom->tempat ?></td>
              </tr>
              <?php } if($model->status > 9 ) {?>
               <tr>
                <td  >Production and Inspection Plan</td>
                <td  ><a href="/dokumen/pni/<?php echo $model->pni->file ?>"><?php echo $model->pni->file ?></td>
                </tr>
                <?php } if($model->status > 11 ) {?>
                <tr>
                <td  >Hasil Inspeksi QC</td>
                <td  ><a href="/dokumen/pni/hasil<?php echo $model->pni->file_hasil_inspeksi ?>"><?php echo $model->pni->file_hasil_inspeksi ?></td>
              </tr>

               <tr>
                <td  >Berita Acara Repair Punch List</td>
                <td  ><?php echo ($model->pni->file_repair == null ? "Tidak ada" : '<a href="/dokumen/pni/'.$model->pni->file_repair.'">'.$model->pni->file) ?></td>
              </tr>
              <?php } if($model->status > 12 ) {?>
                
               <tr>
                <td  rowspan="2" >Pengiriman</td>
                <td  >Tujuan : <?php echo $model->pengiriman->tujuan ?></td>
              </tr>
              <tr>
                
                <td  >PIC : <?php echo $model->pengiriman->pic ?></td>
              </tr>
              <?php } if($model->status > 13 ) {?>
               <tr>
                 <td  rowspan="2" >Warehouse</td>
                <td  >Hasil Inspeksi : <?php echo $model->wh->hasil_inspeksi ?></td>
              </tr>
              <tr>
                
                <td  >File : <a href="/dokumen/pni/hasil<?php echo $model->pni->file_hasil_inspeksi ?>"><?php echo $model->wh->file_hasil_inspeksi ?></td>
              </tr>
              <?php } if($model->status > 15 ) {?>

               <tr>
                <td  >Stok</td>
                <td  ><?php echo $model->stok ?></td>
              </tr>
              <?php } ?>
            </table> 
            </div>
        </section>