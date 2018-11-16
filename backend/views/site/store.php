<?php 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Store';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">
    	<a class="btn btn-info pull-right" href="<?= Url::to(['/products/create'])?>">Add New Product</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                  <th>Categroy</th>
                  <th>Product Name</th>
                  <th>Featured Image</th>
                  <th>Description</th>
                  <th>Onload Date</th>
                  <th>Offload Date</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Categroy</th>
                  <th>Product Name</th>
                  <th>Featured Image</th>
                  <th>Description</th>
                  <th>Onload Date</th>
                  <th>Offload Date</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th class="text-right">Actions</th>
                </tr>
              </tfoot>
              <tbody>
              <?php foreach($products as $product) { ?>
                <tr>
                  <td><?= $product['category'] ?></td>
                  <td><?= $product['product_name'] ?></td>
                  <td><?= $product['featured_image'] ?></td>
                  <td><?= $product['description'] ?></td>
                  <td><?= $product['onload_date'] ?></td>
                  <td><?= $product['offload_date'] ?></td>
                  <td><?= $product['quantity'] ?></td>
                  <td><?= $product['status'] ?></td>
                  <td class="text-right">
                    <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                    <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                    <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
  </div>