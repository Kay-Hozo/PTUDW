
 function tang(id) {
	let soluong = document.querySelector('#qty');
	soluonghientai = soluong.val();
	console.log('soluonghientai: ', soluonghientai);
	soluonghientai += 1;
	
	
}
tang(4);
	function giam(id) {
			txtSL = $("tr#" + [id] + " .txtSL");
			txtDG = $("tr#" + [id] + " .txtDG")
			txtTong = $("tr#" + [id] + " .txtTong")
	
			soLuongHienTai = parseInt(txtSL.val());
			dongia = parseFloat(txtDG.html());
			tong = parseFloat(txtTong.html());
	
			if (soLuongHienTai > 1) {
				txtSL.val(soLuongHienTai - 1);
				txtTong.html((tong - dongia) + ".000");
			} else {
				$("#confirmModal").modal();
				$('#delete').click(function() {
					xoaSP(id)
					$("#confirmModal").modal('hide');
				})
				$('#unDelete').click(function() {
					$("#confirmModal").modal('hide');
				})
			}
	
			updateTongTien()
		}