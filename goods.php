<?php include("css.php"); ?>
<div class="col-12 col-lg-4 mb-2">
            <a href=<?php $id=$id+1; echo "single.php?Id=".$id; ?>  class="text-dark">
                <div class="card-body">
                  <div class="row no-gutters text-lg-center">
                    <img src=<?php echo $URL ?> class="img-fluid mb-3 text-center align-center" style="height:16rem; width:14rem;">
                    </div>
                    <div class="col-8 col-lg-12">
                      <h5 class="card-title mb-1"><?php echo $Name ?></h5>
                      <p class="card-text mb-2">info</p>
                      <span class="badge badge-primary ">price</span>
                      <span class="badge badge-dark ">cname</span>
                    </div>
                  </div>
                  </div>
