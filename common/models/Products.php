<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $category
 * @property string $product_name
 * @property string $featured_image
 * @property string $description
 * @property string $onload_date
 * @property string $offload_date
 * @property int $quantity
 * @property string $status
 * @property int $price
 * @property string $created_at
 *
 * @property Categories $category0
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'product_name', 'featured_image', 'description', 'onload_date', 'offload_date', 'quantity', 'price'], 'required'],
            [['category', 'quantity', 'price'], 'integer'],
            [['description'], 'string'],
            [['onload_date', 'offload_date', 'created_at'], 'safe'],
            [['product_name', 'featured_image', 'status'], 'string', 'max' => 255],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category' => 'id']],
            [['image'], 'file', 'skipOnEmpty' => true],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'product_name' => 'Product Name',
            'featured_image' => 'Featured Image',
            'description' => 'Description',
            'onload_date' => 'Onload Date',
            'offload_date' => 'Offload Date',
            'quantity' => 'Quantity',
            'status' => 'Status',
            'price' => 'Price',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category']);
    }
}
