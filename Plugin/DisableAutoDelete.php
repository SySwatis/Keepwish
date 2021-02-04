<?php
    namespace Syswatis\Keepwish\Plugin;
    
    class DisableAutoDelete
    {
        public function beforeAddToCart(\Magento\Wishlist\Model\Item $subject, \Magento\Checkout\Model\Cart $cart, $delete) {
            return [$cart, false];
        }
    }
?>
