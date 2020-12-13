if ($('#test-form')) {
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
					title: 'Cảm Ơn Quý Khách Đã Đăng Kí Dịch Vụ Viettel,Nhân Viên Viettel Sẽ Sớm Liên Hệ Quý Khách',
					showConfirmButton: false,
					timer: 3000
				})
			});

			resquest.fail(function (){
				console.log('Loi');
			});
		});
}


$('.change-color').click(function(){
	var content = $(this).html();
	var result =  $(this).text().trim();
	var phoneNumber = result.slice(0,12);
	
	Swal.mixin({
		input: 'text',
		confirmButtonText: 'Xác Nhận &rarr;',
		showCancelButton: true,
		progressSteps: ['1', '2', '3'],
		width: '50rem',
		padding: "3rem"

	}).queue([
	{
		title: `Số điện thoại bạn muốn mua là ${phoneNumber}`,
		inputValue: phoneNumber,
	},
	{
		title: 'Địa Chỉ',
		text: `Nhập địa chỉ của bạn`,
		inputValidator: (value) => {
			if (!value) {
				return 'Bạn Vui Lòng Nhập Địa Chỉ'
			}
		}
	},
	{
		input: "number",
		title: 'Số Điện Thoại',
		text: `Nhập SĐT của bạn(Nếu bạn không có sim,có thể bỏ qua)`,
		inputPlaceholder: "Không Có Sim"
		
	}
	]).then((result) => {
		if (result.value) {
			const answers = JSON.stringify(result.value);

			Swal.fire({
				position: 'center',
				icon: 'success',
				title: 'Cảm Ơn Qúy Khách Đã Đặt Sim.Nhân Viên Viettel Sẽ Sớm Liên Hệ Qúy Khách',
				showConfirmButton: false,
				timer: 3000
			})
		}
	})
});