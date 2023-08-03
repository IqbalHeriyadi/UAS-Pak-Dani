
    <footer class="page-footer">
      <div class="page-footer__bottom">
        <div class="uk-container"><span>© 2023 KLM Pet Shop - Buy Pet Product. All rights reserved.</span></div>
      </div>
    </footer>
  </div>
  <script src="<?= BASEURL; ?>/frontend/assets/js/jquery.min.js"></script>
  <script src="<?= BASEURL; ?>/frontend/assets/js/uikit.min.js"></script>
  <script src="<?= BASEURL; ?>/frontend/assets/js/uikit-icons.min.js"></script>
  <script src="<?= BASEURL; ?>/frontend/assets/js/main.js"></script>

  <script>
    // Function to update sub total and total order using AJAX
		function updateTotal() {
			const productPrice = parseFloat(document.getElementById('productPrice').value);
			const quantity = parseInt(document.getElementById('quantityInput').value);
			const shippingCost = 0; // Set your shipping cost here

			// Make an AJAX request to the PHP script to calculate the total
			const xhr = new XMLHttpRequest();
			xhr.open('POST', '<?= BASEURL; ?>/calculate_total.php', true);
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onreadystatechange = function () {
				if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
					const response = JSON.parse(xhr.responseText);
					document.getElementById('subtotalValue').innerText = '$' + response.subTotal.toFixed(2);
					document.getElementById('totalOrderValue').innerText = '$' + response.totalOrder.toFixed(2);
				}
			};
			xhr.send(`price=${productPrice}&quantity=${quantity}&shipping_cost=${shippingCost}`);
		}

		// Event listeners for quantity input
		document.getElementById('quantityInput').addEventListener('change', updateTotal);
		document.getElementById('quantityInput').addEventListener('input', updateTotal);

		// Event listener for "+" and "-" buttons
		document.querySelectorAll('.qtyminus, .qtyplus').forEach(button => {
			button.addEventListener('click', () => {
				const quantityInput = document.getElementById('quantityInput');
				let currentValue = parseInt(quantityInput.value);
				if (button.classList.contains('qtyminus')) {
					quantityInput.value = currentValue > 0 ? currentValue - 1 : 0;
				} else if (button.classList.contains('qtyplus')) {
					quantityInput.value = currentValue + 1;
				}
				updateTotal();
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Get the "Total Order" cell element
			var totalOrderCell = document.getElementById("totalOrderValue");

			// Get the total_price value from the cell (remove the "$" and convert to a number)
			var total_price = parseFloat(totalOrderCell.textContent.replace("$", ""));

			// Update the hidden input field
			document.getElementById("totalPriceInput").value = total_price.toFixed(2); // Convert to 2 decimal places
		});
	</script>
	<!-- Add this script inside the <head> or at the end of the <body> tag -->
	<script>
		function showPreviewImage(event) {
			var output = document.getElementById('previewImage');
			output.src = URL.createObjectURL(event.target.files[0]);
		}

		// Attach the event listener to the file input element
		var fileInput = document.getElementById('images');
		fileInput.addEventListener('change', showPreviewImage);
	</script>
	<script>
        // Function to display the SweetAlert based on the flash message
        function showFlashMessage(messageData) {
            if (messageData) {
                Swal.fire({
                    title: "Congrats!",
                    text: messageData.pesan + ' ' + messageData.aksi,
                    icon: messageData.tipe,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "OK",
                });
            }
        }

        // Get the flash message data from PHP
        var flashData = <?php echo Flasher::flash(); ?>;

        // Show the SweetAlert based on the flash message data
        showFlashMessage(flashData);
    </script>
	<!-- ... Your previous HTML code ... -->

	<script>
		const quantityInput = document.getElementById('quantity');
		const qtyMinusButton = document.querySelector('.qtyminus');
		const qtyPlusButton = document.querySelector('.qtyplus');

		// Function to increase quantity
		function increaseQuantity() {
			let currentQty = parseInt(quantityInput.value);
			if (!isNaN(currentQty)) {
				quantityInput.value = currentQty ++;
			}
		}

		// Function to decrease quantity
		function decreaseQuantity() {
			let currentQty = parseInt(quantityInput.value);
			if (!isNaN(currentQty) && currentQty > 1) {
				quantityInput.value = currentQty --;
			}
		}

		// Event listeners for the buttons
		qtyMinusButton.addEventListener('click', decreaseQuantity);
		qtyPlusButton.addEventListener('click', increaseQuantity);
	</script>
	<!-- Place this script after the HTML form -->
	<script>
		const quantityInput = document.getElementById('quantityInput'); // Correct the ID to match the input field
		const totalPriceInput = document.getElementById('totalPriceInput');
		const productPrice = parseFloat(document.getElementById('productPrice').value);

		function updateTotalPrice() {
			let quantity = parseInt(quantityInput.value);
			if (!isNaN(quantity)) {
				let totalPrice = productPrice * quantity;
				totalPriceInput.value = totalPrice.toFixed(2); // Format the total price to 2 decimal places
				document.getElementById('subtotalValue').textContent = '$' + totalPrice.toFixed(2);
				document.getElementById('totalOrderValue').textContent = '$' + totalPrice.toFixed(2);
			}
		}

		// Call the updateTotalPrice function when the quantity changes
		quantityInput.addEventListener('change', updateTotalPrice);

		// Initial calculation when the page loads
		updateTotalPrice();
	</script>

    <script>
        const ratingInputs = document.querySelectorAll('.rating-inputs input[type="radio"]');
        const ratingNum = document.querySelector('.block-rating__numb');

        ratingInputs.forEach(input => {
            input.addEventListener('change', () => {
                let totalRating = 0;
                let numChecked = 0;

                ratingInputs.forEach(input => {
                    if (input.checked) {
                        totalRating += parseInt(input.value); // Konversi ke tipe data angka (integer)
                        numChecked++;
                    }
                });

                const averageRating = totalRating / numChecked;
                ratingNum.textContent = averageRating.toFixed(1); // Display the average rating with one decimal place
            });
        });
    </script>


</body>

</html>