<?php
class Cart{
    public $cart=[];

    public function __construct(){
        $this->cart=isset($_SESSION['cart']) ? $_SESSION['cart'] : NULL;
    }

    public function addProduct($product){
        $flag=true;
        if($this->cart!==NULL){
             foreach($this->cart as &$cartItem)
                if($cartItem['id']==$product['id']){
                    $flag=false;
                    $cartItem['quantity']+=$product['quantity'];
                }
        }       
        if($flag){
              $this->cart[]=$product;
        }
        $_SESSION['cart']=$this->cart;
        return TRUE;
    }
    /*public function addProduct($product){
        $this->cart[]=$product;
        $_SESSION['cart']=$this->cart;
        return TRUE;
    }*/

    public function getQuantity(){
        $totQty=0;
        foreach($this->cart as $item)
            $totQty+=$item['quantity'];
        return $totQty;
    }

    public function getTotalPrice(){
        $tot=0;
        foreach($this->cart as $item)
            $tot += $item['price'] * $item['quantity'];
        return $tot;
    }

    public function remove($id){
        foreach($this->cart as $key => $arr)
            if(intval($arr['id'])==intval($id))
                unset($this->cart[$key]);
        $_SESSION['cart']=$this->cart;
        return TRUE;
    }
    public function updateQuantity($id, $qty){
        foreach($this->cart as $key => &$arr){
              if(intval($arr['id'])==intval($id))
                    if($qty<=0)
                        unset($this->cart[$key]);
                    else
                        $arr['quantity']=intval($qty);
        }

        $_SESSION['cart']=$this->cart;
        return TRUE; 
    }
}

?>