<?php
session_start();
$MERCHANT_KEY = "lSL8H3BP";
$SALT = "DSVyxgd76x";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = $PAYU_BASE_URL . '/_payment';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$posted['key']="lSL8H3BP";
$posted['amount']="500";
$posted['productinfo']="Movie";
$posted['firstname']=$_SESSION['useremail'];
$posted['email']=$_SESSION['useremail'];
$posted['phone']="9876543210";
$posted['sur1']="http://localhost/payment/success.php";
$posted['fur1']="http://localhost/payment/failure.php";
$posted['service_provider']="payu_paisa";

$formError = 0;


  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$posted['txnid']=$txnid;
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

  
 
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  
?>
<html>
  <head>
  <script>
  
  
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
	
	
  </script>
  </head>
  <body onload="submitPayuForm()">
		<h3>Processing...</h3>
    <br/>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
        </tr>
        <tr>
          <td></td>
          <td><input type="hidden" name="amount" value="<?php echo $posted['amount']; ?>" /></td>
          <td></td>
          <td><input type="hidden" name="firstname" id="firstname" value="<?php echo $posted['firstname']; ?>" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="hidden" name="email" id="email" value="<?php echo $posted['email']; ?>" /></td>
          <td></td>
          <td><input type="hidden" name="phone" value="<?php echo $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="3"><textarea style="display:none;" name="productinfo"><?php echo $posted['productinfo']; ?></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="3"><input type="hidden" name="surl" value="<?php echo $posted['sur1']; ?>" size="64" /></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="3"><input type="hidden" name="furl" value="<?php echo $posted['fur1']; ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

        
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </body>
</html>
