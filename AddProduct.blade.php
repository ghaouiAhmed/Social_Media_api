@extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
						</div>
					</div>
					  
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
				<!-- row -->
				<div class="row">
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Form Input &amp; Textarea
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<form action="{{route('addProducts')}}" method="post">
									@csrf
									<div class="modal-body">
										<div class="row row-sm">
											<div class="col-lg">
												<label class="form-label">Product Name: <span class="tx-danger">*</span></label> 
												<input class="form-control" placeholder="Product Name " type="text" name="productName">
												@error('productName')
												<p style="color: red;font-weight:100"> {{$message}} </p>
												@enderror
											</div>
											<!-- col-4 -->
											<div class="col-lg">
												<label class="form-label">categorie: <span class="tx-danger">*</span></label>
												<select class="form-control select2" name="categorie">
													<option label="Choose one">
													</option>
													
													@foreach ($categories as $categorie)
													<option value="{{$categorie->id}}">
														{{$categorie->name}}
													</option>
													@endforeach
												</select>
												@error('categorie')
												<p style="color: red;font-weight:100"> {{$message}} </p>
												@enderror
											</div><!-- col-4 -->
											<div class="col-lg"> 
												<label class="form-label">categorie size<span class="tx-danger">*</span></label>
												<select class="form-control select2" multiple="multiple" name="categorieType[]">
													@error('categorieType[]')
													<p style="color: red;font-weight:100"> {{$message}} </p>
													@enderror
												</select>
											</div>
											
										</div>
									</div>
									<div class="modal-body">
										<div  class="row row-sm" >	
											<div class="col-lg">
												<label class="form-label">Mark <span class="tx-danger">*</span></label>
												<input class="form-control" placeholder="Input box" type="text" name="mark">
												@error('mark')
												<p style="color: red;font-weight:100"> {{$message}} </p>
												@enderror
											</div>
											<div class="col-lg">
												<label class="form-label"  >Price <span class="tx-danger">*</span></label>
												<input class="form-control" id='price' type="number" placeholder="Input box" type="text" name="price">
												@error('price')
												<p style="color: red;font-weight:100"> {{$message}} </p>
												@enderror
											</div>
											<div class="col-lg">
												<label class="form-label">Quantity<span class="tx-danger">*</span></label>
												<input class="form-control" placeholder="Price" type="number" name="quantity">
												@error('quantity')
												<p style="color: red;font-weight:100"> {{$message}} </p>
												@enderror
											</div>

											
										</div>
									</div>
									<div class="col-lg">
										<label class="form-label">Description<span class="tx-danger">*</span></label> 
										<textarea class="form-control" placeholder="Description " rows="3" name="discription"></textarea>	
										@error('discription')
										<p style="color: red;font-weight:100"> {{$message}} </p>
										@enderror
									</div> 
									<div class="card-body">
										<div class="custom-file">
									    	<input type="file" class="custom-file-input" id="customFile" name="images[]"   multiple >
									    	<label class="custom-file-label" for="customFile"   >Choose file</label>
											@error('images')
												<p style="color: red;font-weight:100"> {{$message}} </p>
											@enderror
									    </div> 
									</div>
									<!--fileImage---->
											<div class="card-body">
												<div>
													<a aria-controls="collapseExample" aria-expanded="false"   data-toggle="collapse" href="#collapseExample" role="button"> : Have  discounte  </a>
													<div class="collapse" id="collapseExample">
														
														<div class="mt-4">
															<div class="row row-sm">
																
																<!-- col-4 -->
															    <div class="col-lg-4">
																	<label class="form-label">Disconte: <span class="tx-danger">*</span></label>
																	<select class="form-control select1-no-search" id="disconte" onchange="myFunction()">
																		@for ($i = 0; $i <= 100; $i++)
																		<option value="{{$i}}">
																			{{$i}}
																		</option>
																		@endfor
																	</select>
																	
																</div>
														    	<div class="col-lg">
																	<label class="form-label">Price without discount: <span class="tx-danger">*</span></label>
																	<input class="form-control" id='withOut' placeholder="" disabled type="number" name="aa">
																</div>
																<div class="col-lg">
																	<label class="form-label" >Price with discounte: <span class="tx-danger">*</span></label>
																	<input class="form-control" id='withDiscounte' placeholder="" disabled type="text" name="Iit">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div> 
							 
							 
                                    
									<!--fileImage---->

                                    
									<!--fileImage---->
									  <button type="submit" class="btn btn-primary-gradient btn-block">Primary</button>
									  
								</form>
 
					<!--fileImage---->
					
				</div>
				<!-- row closed -->
 
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!--Internal Fancy uploader js-->
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<!--Internal  Form-elements js-->
<script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!--Internal Sumoselect js-->
<script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<!-- Internal TelephoneInput js-->
<script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
<script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>

<script>
	$(document).ready(function() {
		$('select[name="categorie"]').on('change', function() {
			var SectionId = $(this).val();
			if (SectionId) {
				$.ajax({
					url: "{{ URL::to('addProduct') }}/" + SectionId,
					type: "GET",
					dataType: "json",
					success: function(data) {
						$('select[name="categorieType[]"]').empty();
						$.each(data, function(key,value) { 
						  var item = value.split("//"); 
      					  for(var i = 0; i < item.length; i++){ 
							$('select[name="categorieType[]"]').append(
							 	'<option value="' + item[i] + '">' + item[i] + '</option>');
      					  }
						});
						
					},
				});
			} else {
				console.log('AJAX load did not work');
			}
		});
	});
</script>

  <script>
	function myFunction() { 
		var Discount = parseFloat(document.getElementById("disconte").value);
		var Rate_VAT = parseFloat(document.getElementById("price").value); 
		if ( typeof Rate_VAT === 'undefined' || !Rate_VAT ) {
			alert('يرجي ادخال مبلغ العمولة '); 
			document.getElementById("disconte").value = 0;
		}else if(Discount!== 0){
            var intResults = Discount * Rate_VAT / 100; 
			sumq = parseFloat(intResults).toFixed(2); 
			document.getElementById("withOut").value = Rate_VAT;
			document.getElementById("withDiscounte").value = sumq;
		}else{
			document.getElementById("withOut").value = '';
			document.getElementById("withDiscounte").value = '';
		}
	}
</script>
@endsection