<?php

class ShoppingCart
{
    private $_cartID;
    private $_cartItems;

    public function addProduct(Product $product)
    {
        $this->_cartItems[$product->getId()] = $product;
    }

    public function deleteProduct($productID)
    {
        unset($this->_cartItems[$productID]);
    }

    public function updateProductQuantity($productID, $productQuantity)
    {
        if ($productQuantity <= 0) {
            unset($this->_cartItems[$productID]);
        } else {
            $this->_cartItems[$productID]->setQuantity($productQuantity);
        }
    }

    public function showShoppingCart()
    {
        echo "List of products:<br>";
        echo "<table border='1'>
        <tr>
            <th>Product name</th>
            <th>Quantity</th>
            <th>Net price</th>
            <th>Gross price</th>
            <th>Total net price</th>
            <th>Total gross price</th>
        </tr>";


        foreach ($this->_cartItems As $key => $product) {
            echo "<tr >
                <td >" . $product->getProductName() . "</td >
                <td >" . $product->getQuantity() . "</td >
                <td >" . $product->getNetPrice() . "</td >
                <td >" . $product->getVatRate() . "</td >
                <td >" . $product->getGrossPrice() . "</td >
                <td >" . $product->getTotalGrossPrice() . "</td >
            </tr >";
        }

        echo "<tr><td>Total price:</td><td>" . $this->getTotalCartPrice() . " PLN</td></tr>
        </table > ";
    }

    public function getTotalCartPrice()
    {
        $totalCartPrice = 0;

        foreach ($this->_cartItems As $product) {
            $totalCartPrice += $product->getTotalGrossPrice();
        }
        return $totalCartPrice;
    }
}
