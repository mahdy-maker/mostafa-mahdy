<?php

namespace app\Database\models;

use app\Database\model\product as ModelProduct;
use app\Database\models\model;
use app\Database\models\contract\crud;

class Product extends Model implements crud
{
    private $id, $name_en, $name_ar, $status, $details_en, $details_ar,
        $price, $quantity, $image, $brand_id, $subcategories_id,
        $created_at, $updated_at;
    const table = 'product';

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->id;
    }

    public function getName_en()
    {
        return $this->name_en;
    }
    public function setName_en($name_en)
    {
        return $this->name_en;
    }

    public function getName_ar()
    {
        return $this->name_en;
    }
    public function setName_ar($name_ar)
    {
        return $this->name_ar;
    }

    public function getDetails_en()
    {
        return $this->last_name;
    }
    public function setDetails_en($details_en)
    {
        return $this->details_en;
    }

    public function getDetails_ar()
    {
        return $this->details_ar;
    }
    public function setDetails_ar($details_ar)
    {
        return $this->details_ar;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        return $this->quantity;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        return $this->image;
    }

    public function getBrand_id()
    {
        return $this->brand_id;
    }
    public function setBrand_id($brand_id)
    {
        return $this->brand_id;
    }

    public function getSubcategories_id()
    {
        return $this->subcategories_id;
    }
    public function setSubcategories_id($subcategories_id)
    {
        return $this->subcategories_id;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        return $this->status;
    }
    public function getCreated_at()
    {
        return $this->created_at;
    }
    public function setCreated_at($created_at)
    {
        return $this->created_at;
    }

    public function getUpdated_at()
    {
        return $this->updated_at;
    }
    public function setUpdated_At($updated_at)
    {
        return $this->updated_at;
    }


    public function create()
    {
    }
    public function update()
    {
    }
    public function read()
    {
    }
    public function delete()
    {
    }
}
