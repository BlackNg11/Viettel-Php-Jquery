$('#test-form').submit(function(e) {
			// Prevent default posting of form - put here to work in case of errors
			e.preventDefault();

			//data
			var postData = $(this).serializeArray();
			var formURL = $(this).attr("action");
			$("form").trigger("reset");
			// console.log(postData);
			// console.log(formURL);


			/* start ajax submission process */
			var resquest = $.ajax({
				url: formURL,
				method: "post",
				data: postData
			});

			resquest.done(function(msg) {

				Swal.fire({
					position: 'center',
					icon: 'success',
					title: 'Đăng Kí Thành Công,Viettel sớm sẽ liên hệ với khách hàng',
					showConfirmButton: false,
					timer: 3000
				})
			});

			resquest.fail(function (){
				console.log('Loi');
			});
});

