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
               <td  ></td>
              </tr>
              <tr>
                <td  >Dokumen Engineering</td>
                <td  ></a></td>
              </tr>

              <tr>
                <td  >Respon Klien</td>
                 <td  ></td>
              </tr>

               <tr>
                <td  >Dokumen Permintaan</td>
                <td  >  </a></td>
              </tr>

               <tr>
                <td  >Dokumen Penawaran</td>
                <td  >  </a></td>
              </tr>

               <tr>
                <td  >Dokumen Kontrak</td>
                <td  >  </a></td>
              </tr>

               <tr>
                <td  >Jadwal Kick of Meeting</td>
                <td  ></a></td>
              </tr>
 
               <tr>
                <td  >Production and Inspection Plan</td>
                <td  ></a></td>
                </tr>

                <tr>
                <td  >Hasil Inspeksi QC</td>
                <td  ></a></td>
              </tr>

               <tr>
                <td  >Berita Acara Repair Punch List</td>
                <td  ></a></td>
              </tr>

               <tr>
                <td  >Jadwal Pengiriman</td>
                <td  ></a></td>
              </tr>

               <tr>
                <td  >Hasil Inspeksi WareHouse</td>
                <td  ></a></td>
              </tr>

               <tr>
                <td  >Stok</td>
                <td  ></td>
              </tr>
              
            </table> 
            </div>
        </section>