<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="lc" value="DE">
  <input type="hidden" name="business" value="chemische.hintergruende@ok.de">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="<?= $product->title() ?>">
  <input type="hidden" name="amount" value="<?= $product->price() ?>">
  <input type="hidden" name="currency_code" value="EUR">

  <input type="hidden" name="shipping" value="4.00">

  <!-- Display the payment button. -->
  <input type="submit" name="submit" value="Add to Cart" alt="Add to Cart">
  
</form>