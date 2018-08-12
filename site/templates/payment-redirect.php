<?php snippet('generals/header') ?>



<section class="form__wrapper grid__wrapper grid--span-8 grid--start-3" style="padding-top: 100px">
  Payment Redirect
  <?
  $item_name = $_POST['item_name'];
  $item_number = $_POST['item_number'];
  $payment_status = $_POST['payment_status'];
  $payment_amount = $_POST['mc_gross'];
  $payment_currency = $_POST['mc_currency'];
  $txn_id = $_POST['txn_id'];
  $receiver_email = $_POST['receiver_email'];
  $payer_email = $_POST['payer_email'];
  var_dump($payer_email;);
?>
</section>

<?php snippet('generals/footer') ?>