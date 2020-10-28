
$(document).ready(function(){
	
	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();
		$.ajax({
			type:'get',
			url:'/admin/check-pwd',
			data:{current_pwd:current_pwd},
			success:function(resp){
				//alert(resp);
				if(resp=="false"){
					$("#chkPwd").html("<font color='red'>Password lama salah</font>");
				}else if(resp=="true"){
					$("#chkPwd").html("<font color='green'>Password lama benar</font>");
				}
			},error:function(){
				alert("Error");
			}
		});
	});

	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	// kas masuk start
	$("#addKasMasuk").validate({
		rules:{
			keterangan:{
				required:true
			},
			tanggal_masuk:{
				required:true,
			},
			jumlah:{
				required:true,
			}
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#editKasMasuk").validate({
		rules:{
			keterangan:{
				required:true
			},
			tanggal_masuk:{
				required:true,
			},
			jumlah:{
				required:true,
			}
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#delKas").click(function(){
		
		if(confirm('Apakah anda ingin menghapus data ini?')){
			return true;
		}
		return false;
	});

	// kas masuk ends

	// kas Keluar start
	$("#addKasKeluar").validate({
		rules:{
			keterangan:{
				required:true
			},
			tanggal_masuk:{
				required:true,
			},
			jumlah:{
				required:true,
			}
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#editKasKeluar").validate({
		rules:{
			keterangan:{
				required:true
			},
			tanggal_masuk:{
				required:true,
			},
			jumlah:{
				required:true,
			}
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#delKasKeluar").click(function(){
		
		if(confirm('Apakah anda ingin menghapus data ini?')){
			return true;
		}
		return false;
	});

	// kas Keluar ends

	// Users start
	$("#addUser").validate({
		rules:{
			nik:{
				required:true,
			},
			name:{
				required:true,
			},
			alamat:{
				required:true,
			},
			email:{
				required:true,
			},
			password:{
				required:true,
			},
			ttl:{
				required:true,
			},
			status_perkawinan:{
				required:true
			},
			tlp:{
				required:true,
			},
			pekerjaan:{
				required:true,
			},
			status:{
				required:true,
			},
			role:{
				required:true,
			}
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#editUser").validate({
		rules:{
			nik:{
				required:true,
			},
			name:{
				required:true,
			},
			alamat:{
				required:true,
			},
			email:{
				required:true,
			},
			password:{
				required:true,
			},
			ttl:{
				required:true,
			},
			status_perkawinan:{
				required:true,
			},
			tlp:{
				required:true,
			},
			pekerjaan:{
				required:true,
			},
			status:{
				required:true,
			},
			role:{
				required:true,
			}
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#delUser").click(function(){
		
		if(confirm('Apakah anda ingin menghapus data ini?')){
			return true;
		}
		return false;
	});

	// users ends

	// Absensi start
	$("#addAbsensi").validate({
		rules:{
			tgl_rapat:{
				required:true,
			},
			user_id:{
				required:true,
			},
			status:{
				required:true,
			},
			keterangan:{
				required:true,
			},
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#editAbsensi").validate({
		rules:{
			
			user_id:{
				required:true,
			},
			status:{
				required:true,
			},
			keterangan:{
				required:true,
			},
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#delAbsensi").click(function(){
		
		if(confirm('Apakah anda ingin menghapus data ini?')){
			return true;
		}
		return false;
	});

	// Absensi ends

	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
			current_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	
});
