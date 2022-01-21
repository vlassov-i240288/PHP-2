<?php

	include_once 'SQL.php';

	class Basket extends SQL {

		public $order_id, $product_id, $user_id, $count, $status;

		public function getBasket($user_id) {

			return parent::Select('basket', 'user_id', $user_id, true);
		}

		public function addProduct($product_id, $user_id, $count) {

			$object = [
				'product_id' => $product_id,
				'user_id' => $user_id,
				'count' => strip_tags($count)
			];
			
			parent::Insert('basket', $object);
			return 'Товар успешно добавлен в корзину!';
		}
	}
?>