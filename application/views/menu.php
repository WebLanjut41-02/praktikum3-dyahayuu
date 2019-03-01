<h3>SILAHKAN PILIH MENU</h3>
<?php foreach ( $makan as $a) { ?>
      <h4><?php echo $a->nama_menu; ?>        
        </h4>Price: <?php echo $a->harga; ?><br><br>
        Kategori: <?php echo $a->kategori ; ?>
        <?php if ($a->stok > 0){ ?>
           <p>Stok : <font color="green">Tersedia</font></p> 
           <input type="number" name="quantity" id="<?php echo $a->id_menu;?>" value="1">
        </div>
           <button class="btn  btn-warning form-control ">Pesan</button>
        <?php }else{ ?>
           <p>Stok : <font color="red">Habis</font></p> 
           <button class="btn btn-warning btn-disabled form-control " disabled>Pesan</button>
        <?php } ?>       
       </div>
     </div>
   </div>
<?php } ?>


<?php foreach ( $minum as $a) { ?>
      <h4><?php echo $a->nama_menu; ?>        
        </h4>Price: <?php echo $a->harga; ?><br><br>
        Kategori: <?php echo $a->kategori ; ?>
        <?php if ($a->stok > 0){ ?>
           <p>Stok : <font color="green">Tersedia</font></p> 
           <input type="number" name="quantity" id="<?php echo $a->id_menu;?>" value="1">
        </div>
           <button class="btn  btn-warning form-control ">Pesan</button>
        <?php }else{ ?>
           <p>Stok : <font color="red">Habis</font></p> 
           <button class="btn btn-warning btn-disabled form-control " disabled>Pesan</button>
        <?php } ?>       
       </div>
     </div>
   </div>
<?php } ?>

<?php foreach ( $snack as $a) { ?>
      <h4><?php echo $a->nama_menu; ?>        
        </h4>Price: <?php echo $a->harga; ?><br><br>
        Kategori: <?php echo $a->kategori ; ?>
        <?php if ($a->stok > 0){ ?>
           <p>Stok : <font color="green">Tersedia</font></p> 
           <input type="number" name="quantity" id="<?php echo $a->id_menu;?>" value="1">
        </div>
           <button class="btn  btn-warning form-control ">Pesan</button>
        <?php }else{ ?>
           <p>Stok : <font color="red">Habis</font></p> 
           <button class="btn btn-warning btn-disabled form-control " disabled>Pesan</button>
        <?php } ?>       
       </div>
     </div>
   </div>
<?php } ?>

