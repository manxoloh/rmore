<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\models\Categories;

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
                  <th>S/N</th>
                  <th>Categroy</th>
                  <th>Product Name</th>
                  <th>Featured Image</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Onload Date</th>
                  <th>Offload Date</th>
                  <th>Status</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Categroy</th>
                  <th>Product Name</th>
                  <th>Featured Image</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Onload Date</th>
                  <th>Offload Date</th>
                  <th>Status</th>
                  <th class="text-right">Actions</th>
                </tr>
              </tfoot>
              <tbody>
              <?php $id = 1; foreach($products as $product) { ?>
                <tr>
                  <td><?= $id++ ?>.</td>
                  <td><?= Categories::findOne($product['category'])->name ?></td>
                  <td><?= $product['product_name'] ?></td>
                  <td><?= $product['featured_image'] ?></td>
                  <td><?= $product['description'] ?></td>
                  <td><?= $product['price'] ?></td>
                  <td><?= $product['quantity'] ?></td>
                  <td><?= $product['onload_date'] ?></td>
                  <td><?= $product['offload_date'] ?></td>
                  <td><?= $product['status'] ?></td>
                  <td class="text-right">
                    <a href="<?= Url::to(['/products/view', 'id'=>$product['id']]) ?>" class="btn btn-link btn-info"><i class="material-icons">View</i></a>
                    <a href="<?= Url::to(['/products/update', 'id'=>$product['id']]) ?>" class="btn btn-link btn-warning"><i class="material-icons">Update</i></a>
                    <a href="<?= Url::to(['/products/delete', 'id'=>$product['id']]) ?>" class="btn btn-link btn-danger" data-method="post"><i class="material-icons">Delete</i></a>
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