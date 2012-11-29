<?php

include_once("Product.php");

class Cart
{
    private $_cartItems;

    public function addProduct(Product $product)
    {
        $this->_cartItems[$product->getName()] = $product;
    }

    public function removeProduct($name)
    {
        unset($this->_cartItems[$name]);
    }

    public function setProductQuantity($name, $quantity)
    {
        $this->_cartItems[$name]->setQuantity($quantity);
    }

    public function printCartSummary()
    {
        echo '<table class="table table-striped"><tr><th>Name</th><th>Manufacturer</th><th>Price</th><th>Vat</th><th>Quantity</th><th>Total brutto price</th></tr>';
        foreach ($this->_cartItems As $name => $product) {
            echo "<tr>
                <td>" . $name . "</td>
                <td>" . $product->getManufacturer() . "</td>
                <td>" . $product->getPrice() . "</td>
                <td>" . $product->getVat() . "</td>
                <td>" . $product->getQuantity() . "</td>
                <td>" . $product->getTotalBruttoPrice() . "</td>  
                </tr>";
        }
        echo "<tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th>" . $this->getTotalBruttoPrice() . "</th>  
                </tr></table>";
    }

    public function getTotalBruttoPrice()
    {
        $totalPrice = 0;
        foreach ($this->_cartItems As $product)
            $totalPrice += $product->getTotalBruttoPrice();

        return $totalPrice;
    }
} 

?>