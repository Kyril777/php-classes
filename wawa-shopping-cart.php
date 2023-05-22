<?php
/* A Wawa shopping cart that lists products and quantity. Calculates price.  */
/* Code obtained from https://www.php.net/manual/en/functions.anonymous.php */
class Cart
{
    const PRICE_HOAGIE  = 9.00;
    const PRICE_CHIPS    = 3.00;
    const PRICE_SODA    = 2.50;

    protected $products = array();
    
    public function add($product, $quantity)
    {
        $this->products[$product] = $quantity;
    }
    
    public function getQuantity($product)
    {
        return isset($this->products[$product]) ? $this->products[$product] :
               FALSE;
    }
    
    public function getTotal($tax)
    {
        $total = 0.00;
        
        $callback = function ($quantity, $product) use ($tax, &$total)
            {
                $pricePerItem = constant(__CLASS__ . "::PRICE_" .
                    strtoupper($product));
                $total += ($pricePerItem * $quantity) * ($tax + 1.0);
            };
        
        array_walk($this->products, $callback);
        return round($total, 2);
    }
}

$new_cart = new Cart;

// Include items in cart.
$new_cart->add('hoagie', 1);
$new_cart->add('chips', 2);
$new_cart->add('soda', 1);

// Include NJ tax of 6.625% sales tax.
print "Total is " . $new_cart->getTotal(0.06625) . "\n"; // Total is 18.66
