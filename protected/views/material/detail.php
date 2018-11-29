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
            <div class="col-lg-8">
                <table class="table table-hover table-dark" style="width:100% border-top: 1px solid #2e2bb1">
              <tr>
                <td  >Nama Material</td>
                <td  ><?php echo $model->nama ?></td>
              </tr>
              <tr>
                <td  >Klien</td>
                 <td  ><?php echo $model->clienta->nama ?></td>
              </tr>
              <tr>
                <td  >Pemenang</td>
               <td  ><?php if($model->pemenang == null){echo "Belum ada pemenang";} else {echo $model->usera->nama;} ?></td>
              </tr>
              <tr>
                <td  >Dokumen Engineering</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $model->dokeng ?>"><?php echo $model->dokeng ?></a></td>
              </tr>
              <?php foreach($respon as $res) { ?>
              <tr>
                <td  >Respon Klien</td>
                 <td  ><?php echo $res->isi; ?></td>
              </tr>
              <?php } ?>
                <?php foreach($hasilPni as $res) { ?>
               <tr>
                <td  >Dokumen Permintaan</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $res->file ?>"><?php echo $res->file ?></a></td>
              </tr>
              <?php } ?>
                <?php foreach($hasilPni as $res) { ?>
               <tr>
                <td  >Dokumen Penawaran</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $res->file ?>"><?php echo $res->file ?></a></td>
              </tr>
              <?php } ?>
                <?php foreach($hasilPni as $res) { ?>
               <tr>
                <td  >Dokumen Kontrak</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $res->file ?>"><?php echo $res->file ?></a></td>
              </tr>
              <?php } ?>
                <?php foreach($hasilPni as $res) { ?>
               <tr>
                <td  >Jadwal Kick of Meeting</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $model->dokeng ?>"><?php echo $model->dokeng ?></a></td>
              </tr>
              <?php foreach($hasilPni as $res) { ?>
               <tr>
                <td  >Production and Inspection Plan</td>
                <td  ><a href="/mts/dokumen/pni/<?php echo $res->file ?>"><?php echo $res->file ?></a></td>
                </tr>
                <?php } ?>
                <?php foreach($hasilPni as $res) { ?>
                <tr>
                <td  >Hasil Inspeksi QC</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $res->file ?>"><?php echo $res->file ?></a></td>
              </tr>
               <?php } ?>
                <?php foreach($hasilPni as $res) { ?>
               <tr>
                <td  >Berita Acara Repair Punch List</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $res->file ?>"><?php echo $res->fileg ?></a></td>
              </tr>
              <?php } ?>
                <?php foreach($hasilPni as $res) { ?>
               <tr>
                <td  >Jadwal Pengiriman</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $model->dokeng ?>"><?php echo $model->dokeng ?></a></td>
              </tr>
              <?php } ?>
                <?php foreach($hasilPni as $res) { ?>
               <tr>
                <td  >Hasil Inspeksi WareHouse</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $res->file ?>"><?php echo $res->file ?></a></td>
              </tr>
              <?php } ?>

               <tr>
                <td  >Stok</td>
                <td  ><a href="/mts/dokumen/dokeng/<?php echo $model->dokeng ?>"><?php echo $model->dokeng ?></a></td>
              </tr>
              </tr>
            </table> 
            </div>
        </section>