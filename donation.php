<?php 
	require_once "dbh-inc.php";
	require_once "header.php";
?>

	<div class="page-heading">
		<h2>Donate!</h2>
	</div>

	<div class="donation-content-container">
		<div class="donation-text-content">
			<p class="donate-paragraph">Thank you so much!</p>
			<p class="donate-paragraph">This donation of &dollar;1.00 USD is going to ensure that I can keep making free web applications for students throughout the world.</p>
			<p class="donate-paragraph">Please consider donating one dollar for every new month that you are still using the application. I will be able to build some amazing things in the near future with those funds.</p>
			<p class="donate-paragraph">I truly appreciate your help.</p>
		</div>
	    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>


	    <!-- Set up a container element for the button -->

	    <div class="paypal">
		    <div id="paypal-button-container"></div>


		    <script>

		      paypal.Buttons({


		        // Sets up the transaction when a payment button is clicked

		        createOrder: function(data, actions) {

		          return actions.order.create({

		            purchase_units: [{

		              amount: {

		                value: '1.00' // Can reference variables or functions. Example: `value: document.getElementById('...').value`

		              }

		            }]

		          });

		        },


		        // Finalize the transaction after payer approval

		        onApprove: function(data, actions) {

		          return actions.order.capture().then(function(orderData) {

		            // Successful capture! For dev/demo purposes:

		                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

		                var transaction = orderData.purchase_units[0].payments.captures[0];

		                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');


		            // When ready to go live, remove the alert and show a success message within this page. For example:

		            // var element = document.getElementById('paypal-button-container');

		            // element.innerHTML = '';

		            // element.innerHTML = '<h3>Thank you for your payment!</h3>';

		            // Or go to another URL:  actions.redirect('thank_you.html');

		          });

		        }

		      }).render('#paypal-button-container');


		    </script>
		</div>
	</div>

	</body>
</html>