
/*$('#deleteCategoryForm').on('submit', function(event) {
	event.preventDefault();
	var data = $(this).serialize();
	var url = $(this).attr('action');
	var method = $(this).attr('method');
	let responseMsg = document.getElementById('responseMsg2');

	$.ajax({
	  url: url,
	  method: method,
	  data: data,
	  success: function(response) {
		var id = $('#id').val();
		$('#id option[value="' + id + '"]').remove();
		responseMsg.innerHTML = "Категорія була успішна видалена";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';

		setTimeout(function() {
		  $('#responseMsg2').html('');
		  location.reload();
		}, 2000);
	  },
	  error: function(xhr, status, error) {
		alert(xhr.responseText);
	  }
	});
});*/


	$('#updateCategoryForm').on('submit', function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');
		var method = $(this).attr('method');
		let responseMsg = document.getElementById('responseMsg2');
		$.ajax({
		  url: url,
		  method: method,
		  data: data,
		  success: function(response) {
			var category_id = $('#category_id').val();
			$('#category_id option[value="' + category_id + '"]').remove();
			
			responseMsg.innerHTML = "Категорія була успішна оновлена";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';
	
			setTimeout(function() {
				responseMsg.innerHTML = '';
			  location.reload();
			}, 2000);
		  },
		  error: function(xhr, status, error) {
			responseMsg.innerHTML = xhr.responseText;
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#960909';
		  }
		});

		
		
	});
	$('#insertCategoryForm').on('submit', function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');
		var method = $(this).attr('method');
		let responseMsg = document.getElementById('responseMsg3');

		$.ajax({
		  url: url,
		  method: method,
		  data: data,
		  success: function(response) {
			
			responseMsg.innerHTML = "Категорія була успішно створена";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';
	
			setTimeout(function() {
				responseMsg.innerHTML = '';
			  location.reload();
			}, 2000);
		  },error: function(xhr, status, error) {
			responseMsg.innerHTML = xhr.responseText;
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#960909';
		  }
		});
		
	});


		/*$('#addProductForm').on('submit',function(event) {
		  // Отменяем стандартное поведение отправки формы
		  event.preventDefault();
		  
		  // Отправляем данные формы на сервер
		  $.ajax({
			type: 'POST',
			url: 'back/addProdAdmin.php',
			data: $(this).serialize(),
			success: function(response) {
			  // Выводим сообщение об успешном добавлении товара
			  $('#responseMsg1').text(response);
			  
			  // Ждем 2 секунды и обновляем страницу
			  setTimeout(function() {
				location.reload();
			  }, 2000);
			},
			error: function() {
			  // Выводим сообщение об ошибке
			  $('#responseMsg1').text('Error adding product');
			}
		  });
		});*/
	  
	/*$('#addProductForm').submit(function(event) {
		event.preventDefault(); // предотвращаем отправку формы по умолчанию
		var formData = $(this).serialize(); // получаем данные формы
		$.ajax({
			type: 'POST',
			url: 'back/addProdAdmin.php',
			data: formData,
			success: function() {
				$('#responseMsg1').html('Product added successfully.'); // показываем сообщение об успешном добавлении товара
				setTimeout(function() {
					$('#responseMsg1').empty(); // удаляем сообщение через 2 секунды
				}, 2000);
				$('#addProductForm')[0].reset(); // очищаем форму
			},
			error: function() {
				$('#responseMsg1').html('Error adding product.'); // показываем сообщение об ошибке
			}
		});
	});*/

	$('#deleteProductForm').on('submit', function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');
		var method = $(this).attr('method');
		let responseMsg = document.getElementById('responseMsg2');

		$.ajax({
		  url: url,
		  method: method,
		  data: data,
		  success: function(response) {
			var product_id = $('#id').val();
			$('#id option[value="' + product_id + '"]').remove();

			responseMsg.innerHTML = "Продукт був успішно видалений	";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';

			setTimeout(function() {
			  $('#responseMsg2').html('');
			  location.reload();
			}, 2000);
		  },
		  error: function(xhr, status, error) {
			responseMsg.innerHTML = xhr.responseText;
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#960909';
		  }
		});
	});



		$('#updateProductForm').on('submit', function(event) {
			event.preventDefault();
			var data = $(this).serialize();
			var url = $(this).attr('action');
			var method = $(this).attr('method');
			let responseMsg = document.getElementById('responseMsg3');

			$.ajax({
			  url: url,
			  method: method,
			  data: data,
			  success: function(response) {
				var product_id = $('#id').val();
				$('#id option[value="' + product_id + '"]').remove();
				
				responseMsg.innerHTML = "Продукт був успішно оновлений";
				responseMsg.style.fontSize = '20px';
				responseMsg.style.color = '#09965b';
		
				setTimeout(function() {
				  $('#responseMsg3').html('');
				  location.reload();
				}, 2000);
			  },
			  error: function(xhr, status, error) {
				alert(xhr.responseText);
			  }
			});
	});


	/*$('#addCharForm').on('submit', function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');
		var method = $(this).attr('method');
		let responseMsg = document.getElementById('responseMsg1');

		$.ajax({
		  url: url,
		  method: method,
		  data: data,
		  success: function(response) {
			
			responseMsg.innerHTML = "Характеристика була успішно створена";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';
	
			setTimeout(function() {
				responseMsg.innerHTML = '';
			  location.reload();
			}, 2000);
		  },error: function(xhr, status, error) {
			alert(xhr.responseText);
		  }
		});
		
	});
*/
	$('#updateCharForm').on('submit', function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');
		var method = $(this).attr('method');
		let responseMsg = document.getElementById('responseMsg2');
		$.ajax({
		  url: url,
		  method: method,
		  data: data,
		  success: function(response) {
			// Update the select element with the remaining categories
			var characteristic_id = $('#characteristic_id').val();
			$('#characteristic_id option[value="' + characteristic_id + '"]').remove();
			
			// Reload the page to update the form with the remaining categories
			responseMsg.innerHTML = "Характеристика була успішно оновлена";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';
	
			// Hide success message after 1 second
			setTimeout(function() {
				responseMsg.innerHTML = '';
			  location.reload();
			}, 2000);
		  },
		  error: function(xhr, status, error) {
			alert(xhr.responseText);
		  }
		});
});


	$('#deleteCharForm').on('submit', function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');
		var method = $(this).attr('method');
		let responseMsg = document.getElementById('responseMsg3');
		$.ajax({
		  url: url,
		  method: method,
		  data: data,
		  success: function(response) {
			// Update the select element with the remaining categories
			var product_id = $('#id').val();
			$('#id option[value="' + product_id + '"]').remove();
			
			responseMsg.innerHTML = "Характеристика була успішно видалена";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';
	
			// Hide success message after 1 second
			setTimeout(function() {
				responseMsg.innerHTML = '';
			  //location.reload();
			}, 2000);
		  },
		  error: function(xhr, status, error) {
			alert(xhr.responseText);
		  }
		});
	});


	/*$('#updateValueForm').on('submit', function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');
		var method = $(this).attr('method');
		let responseMsg = document.getElementById('responseMsg2');
		$.ajax({
		  url: url,
		  method: method,
		  data: data,
		  success: function(response) {
			// Update the select element with the remaining categories
			
			// Reload the page to update the form with the remaining categories
			responseMsg.innerHTML = "Значення характеристики було успішно оновлене";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';
	
			// Hide success message after 1 second
			setTimeout(function() {
				responseMsg.innerHTML = '';
			  location.reload();
			}, 2000);
		  },
		  error: function(xhr, status, error) {
			alert(xhr.responseText);
		  }
		});
});*/




	$('#deleteValueForm').on('submit', function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');
		var method = $(this).attr('method');
		let responseMsg = document.getElementById('responseMsg3');
		$.ajax({
		  url: url,
		  method: method,
		  data: data,
		  success: function(response) {
			// Update the select element with the remaining categories
			var product_id = $('#id').val();
			$('#id option[value="' + product_id + '"]').remove();
			
			responseMsg.innerHTML = "Значення характеристики було успішно видалене";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';
	
			// Hide success message after 1 second
			setTimeout(function() {
				responseMsg.innerHTML = '';
			  //location.reload();
			}, 2000);
		  },
		  error: function(xhr, status, error) {
			alert(xhr.responseText);
		  }
		});
	});




	/*$('#addValueForm').on('submit', function(event) {
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');
		var method = $(this).attr('method');
		let responseMsg = document.getElementById('responseMsg1');

		$.ajax({
		  url: url,
		  method: method,
		  data: data,
		  success: function(response) {
			
			responseMsg.innerHTML = "Значення характеристики було успішно створене";
			responseMsg.style.fontSize = '20px';
			responseMsg.style.color = '#09965b';
	
			setTimeout(function() {
				responseMsg.innerHTML = '';
			  location.reload();
			}, 2000);
		  },error: function(xhr, status, error) {
			alert(xhr.responseText);
		  }
		});
		
	});

*/







/*
	$(function() {
		$.get("back/categories.php", {}, showCategories);
	
		function showCategories(data) {
			let category_data = JSON.parse(data);
			let catagory_tableHTML = '';

	        catagory_tableHTML = `<tr>
									<th>id</th>
									<th>name</th>
									<th>image_link</th>
								</tr>`;

			for (const key in category_data) {
				catagory_tableHTML += `
					<tr>
						<td>${category_data[key].id}</td>
						<td>${category_data[key].name}</td>
						<td>${category_data[key].image}</td>
					</tr>
				`;
			}
	
			document.getElementById('table-category').innerHTML = catagory_tableHTML;
		}
	});

	$(function() {
		$.post("back/products.php", {}, showProd);
	
		function showProd(data) {
			let prod_data = JSON.parse(data);
			let prod_tableHTML = '';

	        prod_tableHTML = `<tr>
									<th>id</th>
									<th>name</th>
									<th>price</th>
									<th>image_link</th>
								</tr>`;

			for (const key in prod_data) {
				prod_tableHTML += `
				<tr>
					<td>${prod_data[key].id}</td>
					<td>${prod_data[key].name}</td>
					<td>${prod_data[key].price}</td>
					<td>${prod_data[key].image}</td>
				</tr>
			`;
			}
	
			document.getElementById('table-prod').innerHTML = prod_tableHTML;
		}
	});
*/

/*$('#addCharForm').on('submit', function(event) {
	event.preventDefault();
	var data = $(this).serialize();
	var url = $(this).attr('action');
	var method = $(this).attr('method');
	
	$.ajax({
	  url: url,
	  method: method,
	  data: data,
	  success: function(response) {
		// Update the select element with the remaining categories
		
		// Reload the page to update the form with the remaining categories
		$('#responseMsg1').html('Category added successfully!');

		// Hide success message after 1 second
		setTimeout(function() {
		  $('#responseMsg1').html('');
		  location.reload();
		}, 1000);
	  },
      error: function(jqXHR, textStatus, errorThrown){
          console.log("Error: " + errorThrown);
          $('#responseMsg1').html('Error: ' + errorThrown);
      }
	});
	
});*/