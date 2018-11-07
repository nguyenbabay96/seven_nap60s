<?php
namespace App\Helpers;
use Illuminate\Http\Request;

class Common
{
    public function __construct()
    {}

    public function getIdBySlug($slug, $slash = '-'){
        return substr($slug,strrpos($slug, $slash) + 1);
    }

    public function getSlugBySlug($slug, $slash = '-'){
        $tmp = '-' . substr($slug,strrpos($slug, $slash) + 1);
        $slug = str_replace($tmp, '', $slug);
        return $slug;
    }

    public function recursive(array $elements, $parentId = 0, $level = 0) {
        $branch = array();
        $level=$level+1;
        foreach ($elements as $key => $element) {
            $element = (array) $element;
            $element['level'] = $level;
            if ($element['parent_id'] == $parentId) {
                $children = $this->recursive($elements, $element['id'], $level);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }
        return $branch;
    }

    public static function builderQuery($path, $array){
        $url = url('/') . '/' . $path;
        unset($array['page']);
        ksort($array);
        $link = $url . "?" . http_build_query($array);
        return $link;
    }

    public static function processCart(){
        $cart = session('cart');
        $cart_store = [];
        if(!empty($cart)){
            if(!empty($cart->items)){
                foreach ($cart->items as $key => $ci) {
                    $cart_store['items'][$ci['item']->store->id]['item'][] = $ci;
                    $cart_store['items'][$ci['item']->store->id]['store'] = $ci['item']->store;
                }
                $cart_store['totalItem'] = $cart->totalItem;
                $cart_store['totalPrice'] = $cart->totalPrice;
                $cart_store['totalQuantity'] = $cart->totalQuantity;
            }           
        }
        return $cart_store;
    }
}