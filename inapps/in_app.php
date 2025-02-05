<?php
header("Content-Type: application/json; encoding=utf-8");

$secret_key = 'Dk712vEZ8N0GNyXIvz7M'; // Защищенный ключ приложения

$input = $_POST;

// Проверка подписи
$sig = $input['sig'];
unset($input['sig']);
ksort($input);
$str = '';
foreach ($input as $k => $v) {
  $str .= $k.'='.$v;
}

if ($sig != md5($str.$secret_key)) {
  $response['error'] = array(
    'error_code' => 10,
    'error_msg' => 'Несовпадение вычисленной и переданной подписи запроса.',
    'critical' => true
  );
} else {
      // Подпись правильная
      switch ($input['notification_type']) {
        case 'get_item':
          // Получение информации о товаре
          $item = $input['item']; // наименование товара
          if ($item == 'gold_1_dollar') {
            $response['response'] = array(
              'item_id' => 100,
              'title' => '500 золотых монет',
              'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_a.png',
              'price' => 3
            );
          } elseif ($item == 'gold_3_dollars') {
            $response['response'] = array(
                'item_id' => 101,
                'title' => '1650 золотых монет',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_b.png',
                'price' => 9
            );
          } elseif ($item == 'gold_5_dollars') {
            $response['response'] = array(
                'item_id' => 102,
                'title' => '3000 золотых монет',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_c.png',
                'price' => 15
            );
          } elseif ($item == 'gold_10_dollars') {
            $response['response'] = array(
                'item_id' => 103,
                'title' => '6500 золотых монет',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_d.png',
                'price' => 30
            );
          } elseif ($item == 'gold_40_dollars') {
            $response['response'] = array(
                'item_id' => 104,
                'title' => '30000 золотых монет',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_e.png',
                'price' => 120
            );
          } elseif ($item == 'disable_ads') {
            $response['response'] = array(
                'item_id' => 110,
                'title' => 'Отключить рекламу',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/logo.png',
                'price' => 5
            );
          } elseif ($item == 'starter_bundle') {
            $response['response'] = array(
                'item_id' => 111,
                'title' => 'Набор новичка',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/bonus_pack.png',
                'price' => 2
            );
          } elseif ($item == 'energy_boost') {
            $response['response'] = array(
                'item_id' => 112,
                'title' => 'Бустер ходов',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/energy.png',
                'price' => 3
            );
          } elseif ($item == 'bonus_chest') {
            $response['response'] = array(
                'item_id' => 113,
                'title' => 'Сундук с бонусами',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/bonus_pack.png',
                'price' => 20
            );
          } elseif ($item == 'daily_coins') {
            $response['response'] = array(
                'item_id' => 114,
                'title' => 'Мешочек золота',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_b.png',
                'price' => 6
            );
          } elseif ($item == 'explosive_sale') {
            $response['response'] = array(
                'item_id' => 115,
                'title' => 'Взрывное предложение',
                'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/logo.png',
                'price' => 6
            );
          } else {
            $response['error'] = array(
              'error_code' => 20,
              'error_msg' => 'Товара не существует.',
              'critical' => true
            );
          }
          break;
        case 'get_item_test':
          // Получение информации о товаре в тестовом режиме
          // Получение информации о товаре
            $item = $input['item']; // наименование товара
            if ($item == 'gold_1_dollar') {
                $response['response'] = array(
                  'item_id' => 100,
                  'title' => '500 золотых монет',
                  'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_a.png',
                  'price' => 3
                );
              } elseif ($item == 'gold_3_dollars') {
                $response['response'] = array(
                    'item_id' => 101,
                    'title' => '1650 золотых монет',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_b.png',
                    'price' => 9
                );
              } elseif ($item == 'gold_5_dollars') {
                $response['response'] = array(
                    'item_id' => 102,
                    'title' => '3000 золотых монет',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_c.png',
                    'price' => 15
                );
              } elseif ($item == 'gold_10_dollars') {
                $response['response'] = array(
                    'item_id' => 103,
                    'title' => '6500 золотых монет',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_d.png',
                    'price' => 30
                );
              } elseif ($item == 'gold_40_dollars') {
                $response['response'] = array(
                    'item_id' => 104,
                    'title' => '30000 золотых монет',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_e.png',
                    'price' => 120
                );
              } elseif ($item == 'disable_ads') {
                $response['response'] = array(
                    'item_id' => 110,
                    'title' => 'Отключить рекламу',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/logo.png',
                    'price' => 5
                );
              } elseif ($item == 'starter_bundle') {
                $response['response'] = array(
                    'item_id' => 111,
                    'title' => 'Набор новичка',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/bonus_pack.png',
                    'price' => 2
                );
              } elseif ($item == 'energy_boost') {
                $response['response'] = array(
                    'item_id' => 112,
                    'title' => 'Бустер ходов',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/energy.png',
                    'price' => 3
                );
              } elseif ($item == 'bonus_chest') {
                $response['response'] = array(
                    'item_id' => 113,
                    'title' => 'Сундук с бонусами',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/bonus_pack.png',
                    'price' => 20
                );
              } elseif ($item == 'daily_coins') {
                $response['response'] = array(
                    'item_id' => 114,
                    'title' => 'Мешочек золота',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/gold_b.png',
                    'price' => 6
                );
              } elseif ($item == 'explosive_sale') {
                $response['response'] = array(
                    'item_id' => 115,
                    'title' => 'Взрывное предложение',
                    'photo_url' => 'https://animan2010.github.io/castle_html5_vk/inapps/logo.png',
                    'price' => 6
                );
              } else {
                $response['error'] = array(
                  'error_code' => 20,
                  'error_msg' => 'Товара не существует.',
                  'critical' => true
                );
              }
          break;

        case 'order_status_change':
          // Изменение статуса заказа
          if ($input['status'] == 'chargeable') {
            $order_id = intval($input['order_id']);

            // Код проверки товара, включая его стоимость
            $app_order_id = 1; // Получающийся у вас идентификатор заказа.

            $response['response'] = array(
                  'order_id' => $order_id,
                  'app_order_id' => $app_order_id,
                );
              } else {
                $response['error'] = array(
                  'error_code' => 100,
                  'error_msg' => 'Передано непонятно что вместо chargeable.',
                  'critical' => true
                );
              }
          break;

        case 'order_status_change_test':
          // Изменение статуса заказа в тестовом режиме
          if ($input['status'] == 'chargeable') {
            $order_id = intval($input['order_id']);

            $app_order_id = 1; // Тут фактического заказа может не быть - тестовый режим.

            $response['response'] = array(
                  'order_id' => $order_id,
                  'app_order_id' => $app_order_id,
                );
              } else {
                $response['error'] = array(
                  'error_code' => 100,
                  'error_msg' => 'Передано непонятно что вместо chargeable.',
                  'critical' => true
                );
              }
          break;
      }
}

echo json_encode($response);
?>